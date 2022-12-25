<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Exceptions\Exception;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'script' => 'components.script.blog'
        ];
        return view('admin.page.blog', $data);
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'unique:blogs',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $json = [
                'msg'       => 'Nama title sudah digunakan!',
                'status'    => false
            ];
            return Response::json($json);
        } elseif ($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon isikan title',
                'status'    => false
            ];
        } elseif ($request->body == NULL) {
            $json = [
                'msg'       => 'Mohon isikan description',
                'status'    => false
            ];
        } elseif ($request->image == NULL) {
            $json = [
                'msg'       => 'Mohon isikan gambar',
                'status'    => false
            ];
        } else {
            try {
                DB::transaction(function () use ($request) {
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $image = strtotime(date('Y-m-d H:i:s')) . '.' . $extension;
                    $destination = base_path('public/images/blog/');
                    $slug = Str::slug($request->title);
                    Blog::create([
                        'title' => $request->title,
                        'slug' => $slug,
                        'body' => $request->body,
                        'image' => $image,
                    ]);
                    $request->file('image')->move($destination, $image);
                });

                $json = [
                    'msg' => 'Blog berhasil dibuat',
                    'status' => true
                ];
            } catch (Exception $e) {
                $json = [
                    'msg'       => 'Error',
                    'status'    => false,
                    'e'         => $e
                ];
            }
        }
        return Response::json($json);
    }

    public function show($id)
    {
        if (is_numeric($id)) {
            $data = Blog::where('id', $id)
                ->first();
            return Response::json($data);
        }
        $data = Blog::orderBy('id', 'desc')->get();
        return datatables()
            ->of($data)
            ->addIndexColumn()
            ->addColumn('image', function ($row) {
                return '<image class="img-thumbnail" src="' . asset('images/blog/' . $row->image) . '">';
            })
            ->addColumn('action', function ($row) {
                $data = [
                    'id' => $row->id
                ];

                return view('components.buttons.blog', $data);
            })
            ->rawColumns(['action', 'image'])
            ->make(true);

    }

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => [Rule::unique('blogs', 'title')->ignore($id)],
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $json = [
                'msg'       => 'Nama title sudah digunakan!',
                'status'    => false
            ];
            return Response::json($json);
        } else {
            try {
                DB::transaction(function () use ($request, $id) {
                    $slug = Str::slug($request->title);
                    DB::table('blogs')->where('id', $id)->update([
                        'title' => $request->title,
                        'slug' => $slug,
                        'body' => $request->body,
                    ]);
                    if ($request->has('image')) {
                        $coffee = Blog::find($id);
                        $oldImage = $coffee->image;

                        if ($oldImage) {
                            $pleaseRemove = base_path('public/images/blog/') . $oldImage;

                            if (file_exists($pleaseRemove)) {
                                unlink($pleaseRemove);
                            }
                        }

                        $extension = $request->file('image')->getClientOriginalExtension();
                        $image = strtotime(date('Y-m-d H:i:s')) . '.' . $extension;
                        $destination = base_path('public/images/blog/');

                        Blog::where('id', $id)->update([
                            'image' => $image,
                        ]);
                        $request->file('image')->move($destination, $image);
                    }
                });

                $json = [
                    'msg' => 'Blog berhasil disunting',
                    'status' => true
                ];
            } catch (Exception $e) {
                $json = [
                    'msg'       => 'Error',
                    'status'    => false,
                    'e'         => $e
                ];
            }
        }
        return Response::json($json);
    }

    public function destroy($id)
    {

        try {
            $data = Blog::find($id);
            if (!$data) {
                $json = [
                    'msg' => 'Data Tidak Ditemukan',
                    'status' => false,
                ];
            }
            $oldImage = $data->image;
            if ($oldImage) {
                $pleaseRemove = base_path('public/images/blog/') . $oldImage;

                if (file_exists($pleaseRemove)) {
                    unlink($pleaseRemove);
                }
            }

            DB::transaction(function () use ($id) {
                DB::table('blogs')->where('id', $id)->delete();
            });

            $json = [
                'msg' => 'Product berhasil dihapus',
                'status' => true
            ];
        } catch (Exception $e) {
            $json = [
                'msg' => 'error',
                'status' => false,
                'e' => $e,
            ];
        }

        return Response::json($json);
    }
}

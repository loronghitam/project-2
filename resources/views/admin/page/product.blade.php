@extends('admin.layout.app')

@section('title')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
{{--    @php @endphp--}}
    <div class="container-fluid">
        <!-- Main row -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-outline-primary block" onclick="create()">
                        Create Product
                    </button>
                </div>
                <div class="card-body">
                    <!-- table head dark -->
                    <div class="table-responsive">
                        <table class="table mb-0" id="table">
                            <thead class="thead-dark">
                            <tr>
                                <th width="5%">No</th>
                                <th>Title</th>
                                <th>Cateogry</th>
                                <th width="20%">Image</th>
                                <th width="20%">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- /.container-fluid -->
@include('components.modal.product.create')
@include('components.modal.product.edit')

@endsection

@push('script')
    @include($script)
    @include('components.script.dropify')
@endpush

@extends('admin.layout.app')

@section('title')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    {{--    @php @endphp--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="{{asset('asset/admin/dist/img/user4-128x128.jpg')}}"
                                 alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>


                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NIM</b> <a class="float-right">{{auth()->user()->nim}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Fakultas</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Jurusan</b> <a class="float-right">543</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                                <form class="form-horizontal" action="{{route('edit')}}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputNim" class="col-sm-2 col-form-label">NIM</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputNim" placeholder="NIM" name="nim">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password" name="confirmpassword">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputPasswordNow" class="col-sm-10 col-form-label">Type your password now to confirm change</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPasswordNow" placeholder="Type your password to change" name="passwordnow">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->

@endsection

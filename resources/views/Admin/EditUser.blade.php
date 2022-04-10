<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>AdminLTE 3 | Starter</title>
    @include('Template.head')

</head>
<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.left-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit User Manajemen</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Manajemen</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

            </div>

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                    <form action="{{ route('updateuser', $user->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Full name" autofocus required value="{{ $user->name }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select" aria-label="Default select example" name="level">
                                <option >Pilih Role</option>
                                <option <?= ($user->level == 'admin') ? 'selected' : ''; ?> value="admin">Admin</option>
                                <option <?= ($user->level == 'user') ? 'selected' : ''; ?> value="user">User</option>
                              </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Edit User</button>
                        </div>
                        <div class="input-group mb-3">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('resetpassword', $user->id) }}" method="POST">
                             @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-danger">Reset Password</button>
                            </form>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('Template.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.script')
</body>
</html>
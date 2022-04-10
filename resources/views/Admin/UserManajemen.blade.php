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

        
                    <div class="content-wrapper">

                    <section class="content-header">
                        <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                        <h1>User Manajemen</h1>
                        </div>
                        <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Manajemen</li>
                        </ol>
                        </div>
                        </div>
                        </div>
                        </section>
                        
                        <section class="content">
                        <div class="container-fluid">
                        <div class="row">
                        <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Data Manajemen User</h3>
                        </div>
                        
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <a href="user/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah User</a>
                            </div>
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->level }}</td>
                                <td>{{ $item->email}}</td>   
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('deleteuser', $item->id) }}" method="POST">
                                        <a href="{{ route('edituser', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                        <th>Nama</th>
                        <th>Role</th>
                            <th>Email</th>
                        <th>Aksi</th>
                        </tr>
                        </tfoot>
                        </table>
                        </div>
                        {{ $user->links() }}
                        </div>
                        
                        </div>
                        
                        </div>
                        
                        </div>
                        

                            </div>  
                        </div><!-- /.container-fluid -->

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
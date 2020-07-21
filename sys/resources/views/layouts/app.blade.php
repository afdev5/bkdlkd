<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Beban Kerja dan Kinerja Dosen</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="shortcut icon" href="{{ asset('assets/dist/img/logounima.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/dist/img/logounima.png') }}" type="image/x-icon">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.min.css') }}">
    <!-- Datatable -->
    <link href="{{ asset('assets/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>SIBKLKD UNIMA</b></span>
                <!-- <img src="{{ asset('assets/dist/img/logo.png') }}" alt="Logo Image" width="50" height="50" class="logo-lg mt-2"> -->
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>


                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('assets/dist/img/logounima.png') }}" class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs">{{ Auth::user()->nama }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('assets/dist/img/logounima.png') }}" class="img-circle"
                                        alt="User Image">

                                    <p>
                                        {{ Auth::user()->nama }}
                                        <!-- <small>Member since Nov. 2012</small> -->
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat" data-toggle="modal"
                                            data-target="#myModal">Ubah Password</a>
                                    </div>
                                    <div class="pull-right">
                                        @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @else

                                <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                    onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">Sign out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                @endguest
                </div>
                </li>
                </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
                </li>
                </ul>
    </div>
    </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('assets/dist/img/logounima.png') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Administrator</p>
                    <!--<p>{{ Auth::user()->nama }}</p>-->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{ route('fakultas.index') }}"><i class="fa fa-file"></i> Fakultas</a></li>
                <li><a href="{{ route('jurusan.index') }}"><i class="fa fa-file"></i> Jurusan/Program Studi</a></li>
                <li><a href="{{ route('dosen.index') }}"><i class="fa fa-user"></i> Dosen</a></li>
                <li><a href="{{ route('asesor.index') }}"><i class="fa fa-user"></i> Asesor</a></li>
            </ul>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2020 <a href="#">Teknik Informatika</a>.</strong> All rights
        reserved.
    </footer>

    </div>
    <!-- ./wrapper -->
    {{-- Modal --}}
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ route('password.gantis') }}">
                        @csrf
                        <div class="form-group">
                            <label for="password">Password Lama</label>
                            <input type="password"
                                class="form-control{{ $errors->has('password_lama') ? ' is-invalid' : '' }}"
                                id="password" name="password_lama">
                            @if ($errors->has('password_lama'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password_lama') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input type="password"
                                class="form-control{{ $errors->has('password_baru') ? ' is-invalid' : '' }}"
                                id="password" name="password_baru">
                            @if ($errors->has('password_baru'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password_baru') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Konfirmasi Passsword Baru</label>
                            <input type="password"
                                class="form-control{{ $errors->has('konfirmasi') ? ' is-invalid' : '' }}" id="password"
                                name="konfirmasi">
                            @if ($errors->has('konfirmasi'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('konfirmasi') }}</strong>
                            </span>
                            @endif
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="{{ asset('assets/DataTables-1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);

    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    @yield('js')

    <script src="{{ asset('assets/package/dist/sweetalert2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/package/dist/sweetalert2.min.css') }}">

    @include('sweetalert::alert')
</body>

</html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Luis Moya</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/half-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/helper.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        h1{
            font-weight: 700;
            text-transform: uppercase;
            color: #343a40;
        }
    </style>
    @yield('css')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <img alt="..." src="{{ asset('img/principal/logo.png') }}" width="6%" height="6%" class="media-object">
        &nbsp;&nbsp;
        <a class="navbar-brand" href="{{ asset('/') }}">
            Luis Gilberto Moya Romero
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hv">Hoja de Vida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cundinamarca">Cundinamarca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#logros">Logros</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Municipios<span class="caret"></span></button>
                        <ul class="dropdown-menu text-dark">
                            <li><a href="{{ asset('/municipio') }}">Agua de Dios</a></li>
                            <li><a href="{{ asset('/municipio') }}">Nilo</a></li>
                        </ul>
                    </div>
                </li>
                &nbsp;
                <li class="nav-item">
                    <button class="btn btn-info" data-toggle="modal" data-target="#modal-login">&nbsp;<i class="fa fa-sign-in"></i>&nbsp;</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img alt="..." src="{{ asset('img/principal/1.jpg') }}" width="100%" height="100%" class="media-object">
                <div class="carousel-caption d-none d-md-block text-left">
                    <img alt="..." src="{{ asset('img/principal/logo.png') }}" width="15%" height="15%" class="media-object">
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." src="{{ asset('img/principal/2.jpg') }}" width="100%" height="100%" class="media-object">
                <div class="carousel-caption d-none d-md-block text-left">
                    <img alt="..." src="{{ asset('img/principal/logo.png') }}" width="15%" height="15%" class="media-object">
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." src="{{ asset('img/principal/3.jpg') }}" width="100%" height="100%" class="media-object">
                
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<div class="modal fade" id="modal-login" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal-contraseña" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <form class="form-horizontal form-label-left" method="POST">
                    <h4 class="text-center text-white">Iniciar Sesión</h4>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <center><h2>Usuario:</h2></center>
                        <input id="user" class="form-control col-md-12 col-xs-12" required type="text" name="user"/>
                        <center><h2>Contraseña:</h2></center>
                        <input id="pass" class="form-control col-md-12 col-xs-12" required type="password" name="pass"/>
                    </div>
                    <div class="form-group">
                        <center>
                            <input type="submit" class="btn btn-info" name="login" id="login" value="Aceptar">
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@yield('contenido')
<footer class="py-4 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; SIEX 2018</p>
    </div>
</footer>
</body>
@yield('footer')
<script language="JavaScript ">
    $(document).ready(function() {
        $('.sel2').select2();
    });
</script>
<script src="{{ asset('js/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/lib/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/sidebarmenu.js') }}"></script>
<script src="{{ asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/lib/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
<script src="{{ asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/lib/datatables/datatables-init.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@yield('js')
</body>
</html>

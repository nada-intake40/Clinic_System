<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Nada">
        <meta name="keyword" content="Clinics System">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <title>Clinics System</title>
        <!-- Icons -->
        <link href="{{ asset('/admin/css/font-awesome.min.css')}}" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>

<body class="bg-gradient-warning">
    <header class="navbar navbar-expand-md bg-dark text-white">
            <div class="container-fluid">
                <a class="navbar-brand mx-5 text-white text-left">Clinics System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarToggle">
            <ul class="navbar-nav mr-auto">
                       <li class="nav-item"><a class="nav-link text-white mx-3" href="{{route('clinics.index')}}">Clinics</a></li>
                       <li class="nav-item"><a class=" nav-link text-white mx-3" href="{{route('branches.index')}}">Branches</a></li>
            </ul>
        </div>
        <!-- </nav> -->
    </header>

    <!-- ####################################################################################### -->

    <div class="container-fluid">
             @yield('content')
    </div> 

    <!-- ######################################################################################## -->
    <footer class="footer bg-info py-2 " style="position: fixed; bottom: 0%; width: 100%; ">
        <div class="container ">
            <div class="copyright text-center my-auto ">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>

    @yield('script')
</body>

</html>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>

<body>




    <nav class="snavbar navbar-expand-lg navbar-light bg-light p-2">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="navbarText">

            <ul class="navbar-nav ml-auto mr-auto ">


                @if(isset(Auth::user()->id))
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                <li class="nav-item active">
                        <a class="nav-link" href="/perfil">Perfil <span class="sr-only">(current)</span></a>
                    </li>
                @if(Auth::user()->role_id == 1)
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin">Administrador <span class="sr-only">(current)</span></a>
                    </li>
                    @endif

                    <li class="nav-item active"><a class="nav-link" href="/logout">

                            {{ __('Logout') }}
                        </a></li>




                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endif

            </ul>




        </div>

        </nav>


<div id="app">
@yield('content')
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->

<script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/script3.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                dateFormat: 'dd-M-yy',
                firstDay: 1
            });
        } );
    </script>



</body>
</html>
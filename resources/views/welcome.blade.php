<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="cssFiles/homepageStyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <title>Home page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Admin Panel</a>
                    @else
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ route('login') }}">Login</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif

            <div class="container">    
            <div class="row">
            <div class="col-sm-4">
              <div class="panel panel-danger">
                <div class="panel-heading"><b>Basmati rice with good quality.</b></div>
                <div class="panel-body"><img src="img/images.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">This is newly produced basmati rice.It is very high quality rice.</div>
              </div>
            </div>
            <div class="col-sm-4"> 
              <div class="panel panel-danger">
                <div class="panel-heading"><b>White,_Brown,_Red_&_Wild_rice</b></div>
                <div class="panel-body"><img src="img/2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">This is newly produced basmati rice.It is very high quality rice.</div>
              </div>
            </div>
            <div class="col-sm-4"> 
              <div class="panel panel-danger">
                <div class="panel-heading"><b>Minikate good quality rice.</b></div>
                <div class="panel-body"><img src="img/3.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">This is newly produced basmati rice.It is very high quality rice.</div>
              </div>
            </div>
            </div>
            </div><br>


            </div>


    </body>
</html>

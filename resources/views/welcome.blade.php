<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Preparatoria 13</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }

            .full-height {
                height: 100%;
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
                right: 500px;
                top: 18px;
            }

            .content {
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

            img {
                width: 100%; 
                heigth: auto;               
            }

        </style>
    </head>
    <header>
            {{-- <nav class="navbar navbar-inverse navbar-static-top ">
                
                            <button class="navbar-toggle" data-toggle="collpase" data-target=".navHeaderCollapse" aria-controls="navbarTogglerDemo01" aria-expanded="false" 
                            aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse navHeaderCollapse">
                                <ul class="nav navbar-nav navbar-rigth">
                                    <li>
                                          <a href="{{url('/encuesta')}}">Encuesta</a>
                                    </li>
                                    @if (Route::has('login'))
                                    <li>
                                        @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    </li>
                                        @else
                                    <li>
                                        <a href="{{ route('login') }}">Login</a> 
                                        @endauth
                                    </li>
                                    @endif
                                </ul>
                            </div>
                      </nav> --}}
                <style>
                      body {
                        margin: 0;
                        font-family: Arial, Helvetica, sans-serif;
                      }
                      
                      .topnav {
                        overflow: hidden;
                        background-color: #4F4F4F;
                        opacity: 0.9;
                      }

                      .topnav img {
                        padding: 1px 1px;
                        margin-left: 10px;
                        margin-top: 10px;
                        margin-bottom: 10px;
                        margin-left: 10px;
                      }
                      
                      .topnav a {
                        float: right;
                        display: block;
                        color: #f2f2f2;
                        text-align: center;
                        padding: 45px 16px;
                        text-decoration: none;
                        font-size: 17px;
                        
                      }
                      
                      .topnav a:hover {
                        background-color: #ddd;
                        color: black;
                      }
                      
                      .topnav a.active {
                        background-color: #4CAF50;
                        color: white;
                      }
                      
                      .topnav .icon {
                        display: none;
                      }
                      
                      @media screen and (max-width: 600px) {
                        .topnav a:not(:first-child) {display: none;}
                        .topnav a.icon {
                          float: right;
                          display: block;
                        }
                      }
                      
                      @media screen and (max-width: 600px) {
                        .topnav.responsive {position: relative;}
                        .topnav.responsive .icon {
                          position: absolute;
                          right: 0;
                          top: 0;
                        }
                        .topnav.responsive a {
                          float: none;
                          display: block;
                          text-align: left;
                        }
                      }
                      </style>
                      </head>
                      <body>
                      
                      <div class="topnav" id="myTopnav">
                        <img src="{{ Storage::url("../storage/logoudg.png") }}" style="width:65px;" alt="">
                        <a href="{{url('/encuesta')}}">Encuesta</a>
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                        @else
                        <a href="{{ route('login') }}">Ingresar</a>
                        @endauth
                        @endif
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                          <i class="fa fa-bars"></i>
                        </a>
                      </div>
                      
                      <script>
                      function myFunction() {
                        var x = document.getElementById("myTopnav");
                        if (x.className === "topnav") {
                          x.className += " responsive";
                        } else {
                          x.className = "topnav";
                        }
                      }
                      </script>
                      
                      </body>
                      </html>               
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <img src="{{ Storage::url("../storage/SE.jpg") }}" >
                </div>
            </div>
    </body> 

    <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/skins/skin-blue.min.css')}}">
    {{-- <script src="{{asset('adminlte/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminlte/js/adminlte.min.js')}}"></script> --}}
    
</html>

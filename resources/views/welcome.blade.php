<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Timothy Emeka Iloba</title>
        
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!--favicon-->
        <link rel="icon" href="{{asset('img/my-logo.jpg')}}">

        <!--icofont-->
        <link rel="stylesheet" href="{{asset('icofont/icofont/icofont.min.css')}}">
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="nav-logo" src="{{asset('img/my-logo.jpg')}}" alt="Emeka Iloba Timothy">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         <!-- Authentication Links -->
                         @guest
                         @if (Route::has('login'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                             </li>
                         @endif
                         
                         @if (Route::has('register'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                             </li>
                         @endif
                     @else
                         <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 {{ Auth::user()->name }}
                             </a>

                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                             </div>
                         </li>
                     @endguest
                       
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="section-one">
           <div class="container">
               <div class="row">
                    <div class="col-md-5">
                        <div class="image-section p-5">
                            <img class="img-fluid" src="{{asset('img/image.png')}}" alt="Emeka Iloba Timothy">
                        </div>
                    </div>
                    <div class="col-md-7 mt-5">
                        <div class="intro-section p-5">
                            <h3 class="mb-2">Hi I'm Timothy, Emeka Iloba</h3>
                            <h2 class="mb-2"> <i class="icofont-rounded-right text-danger"></i>Software Developer</h2>
                            <h2 class="mb-2"> <i class="icofont-rounded-right text-danger"></i>Graphics Designer</h2>
                            <div class="button-section mt-3">
                                <a class="btn btn-danger  btn-lg" href="">See Previous Projects <i class="icofont-rounded-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
               </div>
           </div>
        </div>
    </body>
</html>

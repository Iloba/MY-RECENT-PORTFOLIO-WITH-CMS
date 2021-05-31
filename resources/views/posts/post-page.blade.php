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
        
        <!--link-->
        {{-- <script type="text/javascript" src="{{asset('app.js')}}"></script>
        <script type="text/javascript" src="{{asset('particles.js')}}"></script> --}}

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" >
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
                             {{-- <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                             </li> --}}
                         @endif
                         
                         @if (Route::has('register'))
                             {{-- <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                             </li> --}}
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
                                 <a class="dropdown-item" href="{{ route('home') }}">
                                Dashboard
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
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow p-5">
                        <h3 class="mb-3">{{$post->title}}</h3>
                        <div class="">
                            <img width="540" height="120" class="img-fluid img" src="{{asset('storage/images/'.$post->image)}}" alt="">
                        </div>
                        <div class="pt-4">
                            <p>{{$post->about}}</p>
                        </div>
                        <small><i>you can like post below</i></small> <br>
                        <div class="like-section d-flex m-3 bg-light p-2 shadow">
                            
                           <div class="m-2">
                                <form action="{{route('posts.like', $post->id)}}" method="POST">
                                    @csrf
                                    <button style="border:none; background: rgba(255, 255, 255, 0);" type="submit" class="text-info">Like</button>
                                </form>
                           </div>

                          <div class="m-2">
                            <form action="" method="POST">
                                @csrf
                                <button style="border:none; background: rgba(255, 255, 255, 0);" type="submit" class="text-info">Unlike</button>
                            </form>
                          </div>

                          <div class="m-2">
                                12 Likes
                          </div>
                           
                           
                        </div> <br>
                        <div class="comment-section">
                            <form action="" method="post">
                                <small><i>you can also comment below</i></small>
                                @csrf
                                <input type="text" name="name"  class="form-control" id="" placeholder="Enter Name"> <br>
                                <textarea name="comment" id="" placeholder="Enter Comment" class="form-control" cols="30" rows="5"></textarea> <br>
                                <button class="btn btn-info" type="submit"><i class="icofont-location-arrow text-light"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="p-5 bg-light shadow">
            <div class="container">
                <div class="row">
                   <div class="col-md-12">
                        <div>
                            <p class="text-center text-secondary">&copy; @php
                                echo date('Y');
                            @endphp Emeka Timothy Iloba</p>
                        </div>
                        <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-secondary m-1" href=""><i class="icofont-ui-file"></i></a>
                                <a class="btn btn-outline-secondary m-1" href=""><i class="icofont-facebook"></i></a>
                            <a class="btn btn-outline-secondary m-1" href=""><i class="icofont-instagram"></i></a>
                            <a class="btn btn-outline-secondary m-1" href=""><i class="icofont-twitter"></i></a>
                            <a class="btn btn-outline-secondary m-1" href=""><i class="icofont-linkedin"></i></a>
                        </div>
                        <div>
                            <a class="nav-link text-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </div>
                   </div>
                </div>
            </div>
        </footer>
    </body>
</html>

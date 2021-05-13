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
        <script type="text/javascript" src="{{asset('app.js')}}"></script>
        <script type="text/javascript" src="{{asset('particles.js')}}"></script>

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
        </nav>
        <div id="particles-js">
           <div class="container" >
               <div class="row p-5">
                    <div class="col-md-5">
                        <div class="image-section p-5">
                            <img class="img-fluid" src="{{asset('img/image.png')}}" alt="Emeka Iloba Timothy">
                        </div>
                    </div>
                    <div class="col-md-7 mt-5">
                        <div class="intro-section p-5">
                            <h3 class="mb-2">Hi I'm Timothy, Emeka Iloba</h3>
                            <h2 class="mb-3"> <i class="icofont-rounded-right text-light"></i>Full Stack Developer</h2>
                            <h2 class="mb-4"> <i class="icofont-rounded-right text-light"></i>Graphics Designer</h2>
                            <div class="button-section mt-3">
                                <a class="btn btn-outline-light btn-lg" id="btn-text" href="">See Previous Projects <i class="icofont-rounded-right"></i></a>
                            </div>
                            <div class="d-flex mt-3">
                                <a class="btn btn-outline-light m-1" href=""><i class="icofont-ui-file"></i></a>
                                <a class="btn btn-outline-light m-1" href=""><i class="icofont-facebook"></i></a>
                                <a class="btn btn-outline-light m-1" href=""><i class="icofont-instagram"></i></a>
                                <a class="btn btn-outline-light m-1" href=""><i class="icofont-twitter"></i></a>
                                <a class="btn btn-outline-light m-1" href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                       
                    </div>
               </div>
           </div>
        </div>
        <div id="about" class="section-two p-5">
            <div class="container ">
                <h1 class="text-center mt-2 header">About me</h1>
               <div class="row p-2">
                    <div class="col-md-6">
                        <div class="about-me">
                            <h2 class="mt-4 header">How it all began</h2>
                            <p>I started my Development Journey at 
                                Age 15 After a long Tussle with Passion and my Strong Desire for Software Development.
                            </p>
                            <p>
                                I am a Pasionate Full Stack Developer Who Believes in Self 
                                Improvement and Impact Making. I love New Challenges and Problem Solving.
                            </p>
                            <h2 class="mt-4 header">Top Expertise</h2>
                            <div class="jumbotron shadow-sm">
                                <div class="list d-flex justify-content-center p-2">
                                    <div class="list-one m-3">
                                        <ul>
                                            <li> <i class="icofont-check"></i> HTML/CSS</li>
                                            <li> <i class="icofont-check"></i> Bootstrap</li>
                                            <li> <i class="icofont-check"></i> JavaScript</li>
                                            <li> <i class="icofont-check"></i> Vue</li>
                                            <li> <i class="icofont-check"></i> Wordpress</li>
                                        </ul>
                                    </div>
                                    <div class="list-two m-3">
                                        <ul>
                                            <li> <i class="icofont-check"></i> PHP </li>
                                            <li> <i class="icofont-check"></i> MySQL </li>
                                            <li> <i class="icofont-check"></i> Laravel </li>
                                            <li> <i class="icofont-check"></i> Cloud Computing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tech-image">
                            <img class="img-fluid" src="{{asset('img/tech.jpg')}}" alt="Emeka Timothy Iloba">
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <div id="projects" class="section-three shadow-sm">
          <div class="container">
              <h1 class="text-center header mb-3">Previous Projects</h1>
                <div class="row">
                    <div class="col-md-4">
                          <div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://placeimg.com/1000/480/nature)">
                            <div class="container">
                                <h1 class="display-4">Hello, world!</h1>
                                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                <hr class="my-4">
                                <a class="btn btn-light btn-lg" href="#" role="button">Learn more</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://placeimg.com/1000/480/nature)">
                          <div class="container">
                              <h1 class="display-4">Hello, world!</h1>
                              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                              <hr class="my-4">
                              <a class="btn btn-light btn-lg" href="#" role="button">Learn more</a>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                    <div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://placeimg.com/1000/480/nature)">
                      <div class="container">
                          <h1 class="display-4">Hello, world!</h1>
                          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                          <hr class="my-4">
                          <a class="btn btn-light btn-lg" href="#" role="button">Learn more</a>
                      </div>
                    </div>
              </div>
                </div>
          </div>
        </div>
        <div id="contact" class="section-four p-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="form-container shadow-sm">
                            <h1 class="header mb-4 text-center text-secondary">Feel Free to Contact Me</h1>
                            <form action="" method="POST">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text bg-secondary text-light" id="basic-addon1"><i class="icofont-user"></i></span>
                                    </div>
                                    <input name="fullname" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                  </div>
                                  
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text bg-secondary text-light" id="basic-addon1"><i class="icofont-email"></i></span>
                                    </div>
                                    <input name="email" type="text" class="form-control" placeholder="Email or Phone" aria-label="Username" aria-describedby="basic-addon1" required>
                                  </div>

                                  <textarea name="message" id="" cols="30" class="form-control" rows="10" placeholder="Enter Message" required></textarea> <br>
                                  <button type="submit" class="btn btn-secondary">Send Message</button>
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

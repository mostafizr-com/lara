<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    
            <nav class="navbar has-shadow">
                <div class="container">
                    <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="https://www.ascentregtech.com/assets/logo_header-2abd669cd055c2414eebc94ec4c78cadd9c8bb6b1f7cb27fd0036b22b5d5d84d.png" alt=" width="112" height="28">
                      </a>
                      <div class="navbar-burger burger" data-target="nvte">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                  
                    <div id="nvte" class="navbar-menu">
                      <div class="navbar-start">
                        <a class="navbar-item is-tab" href="#"> Learn</a>
                        <a class="navbar-item is-tab" href="#"> Discuss</a>
                        <a class="navbar-item is-tab" href="#"> Share</a>
                      </div>
                  


                      <div class="navbar-end">
                        
                        @if(!Auth::guest())
                        <div class="navbar-item">
                          <div class="field is-grouped">
                            <p class="control">
                              <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="#" href="#">
                                <span class="icon">
                                  <i class="fab fa-twitter"></i>
                                </span>
                                <span>
                                  Login
                                </span>
                              </a>
                            </p>
                            <p class="control">
                              <a class="button is-primary" href="#">
                                <span class="icon">
                                  <i class="fas fa-download"></i>
                                </span>
                                <span>Signup</span>
                              </a>
                            </p>
                          </div>
                        </div>

                        @else

                        <div class="navbar-item has-dropdown is-hoverable">
                          <a class="navbar-link  is-tab" href="#">
                            mostafizrr2
                          </a>
                          <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item" href="#">Profile</a>
                            <a class="navbar-item" href="#">Notifications</a>
                            <a class="navbar-item" href="#">Settings</a>
                            <a class="navbar-item" href="#">Logout</a>   
                          </div>
                        </div>
                        @endif

                      </div>
                    </div>
                </div>
            </nav>



        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

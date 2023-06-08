<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TESDA RTC-Iligan</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('font-awesome-pro-5/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('font-awesome-pro-5/css/solid.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm" style="background-color:#fcfcfc;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="{{ asset('img/logoheader.png') }}" alt="" style="width:210px;height:30px;">
                </a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                
                <div id="navbarDropdown" type="button" class="mt-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre  >
                    <img src="{{asset('img/grid.png')}}" alt="" class="border navbar-toggler"  style="height:40px;width:40px;padding:7px;margin-left:40px;">
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                    
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

                            <div id="navbarDropdown" type="button" class="border mt-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre  style="border-radius:25px;">
                                <img src="{{asset('img/grid.png')}}" alt=""  style="height:40px;width:40px;background-size: cover;padding:10px;">
                            </div>
                                <!-- <i id="navbarDropdown" type="button" class="fas fa-th fs-4 user-icon mt-2 " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></i> -->
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="width:300px;background:#f8fafc !important;">
                                <b class="fs-5"style="margin-left:13px;">Menu</b>
                                    <div class="card" style="margin-left:13px;margin-right:13px;margin-bottom:13px;">
                                        
                                        <br>
                                        <input type="search" class="form-control mt-1 mb-1" placeholder="Search menu ..." style="width:240px;margin-left:13px;border-radius:40px;background-color:#e3e5e9;">
                                        <hr style="margin-left:10px;margin-right:10px;">
                                        <a class="dropdown-item" href="{{  url('/home') }}">
                                            <i class="fa-solid fa-gauge user-icon-1"></i>&nbsp;&nbsp;Dashboard
                                        </a>
                                        <a class="dropdown-item" href="{{ route('users.index') }}">
                                            <i class="fa-sharp fa-solid fa-user user-icon-1"></i>&nbsp;&nbsp;User
                                        </a>
                                        <a class="dropdown-item" href="{{ route('audits.index') }}">
                                            <i class="fa-solid fa-folder-closed  user-icon-1"></i>&nbsp;&nbsp;Audit
                                        </a>
                                        <a class="dropdown-item" href="{{ route('qualifications.index') }}">
                                            <i class="fa-solid fa-book user-icon-1"></i>&nbsp;&nbsp;Qualification
                                        </a>
                                        <a class="dropdown-item" href="{{ route('centers.index') }}">
                                            <i class="fa-solid fa-door-open user-icon-1"></i>&nbsp;&nbsp;Assessment Center
                                        </a>
                                        <a class="dropdown-item" href="{{ route('requirements.index') }}">
                                            <i class="fa-solid fa-door-open user-icon-1"></i>&nbsp;&nbsp;Requirements
                                        </a>
                                        <br><br>
                                    </div>
                                   
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                    @if(Auth::user()->image == null)
                                    <img src="{{asset('img/images.png')}}" alt="" class="rounded-circle border" style="height:40px;width:40px;">
                                    @else
                                    <img src="{{asset('img/1.jpg')}}" alt="" class="rounded-circle" style="height:40px;width:40px;">
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="width:250px;">
                                    <div class="mt-1" style="margin-left:15px;">
                                        @if(Auth::user()->image == null)
                                        <img src="{{asset('img/images.png')}}" alt="" class="rounded-circle border" style="height:30px;width:30px;">
                                        @else
                                        <img src="{{asset('img/1.jpg')}}" alt="" class="rounded-circle" style="height:30px;width:30px;">
                                        @endif
                                        <b class="">&nbsp;&nbsp;{{ Auth::user()->name }}</b>
                                        <hr style="margin-top:10px;margin-right:10px;">
                                    </div>
                                    <div style="">
                                        <b class="dropdown-item">
                                            <i class="fa-solid fa-user user-icon-1"></i>&nbsp;&nbsp;Profile
                                        </b>
                                        <b class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-right-from-bracket user-icon-1"></i>&nbsp;&nbsp;Logout
                                        </b>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <div class="container-fluid" style="background-color:#ffffff;">
           <h3> BREADCRUMB NI SIYA NA PART CGURO?!</h3>
        </div> -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    
    @yield('script')
    <script type="text/javascript">      
      var success = "{{ Session::get('success') }}";
      if (success) {
          swal ({
              text: success,
              icon: 'success',
              button: 'OK',
          });
      }

      var deleted = "{{ Session::get('deleted') }}";
      if (deleted) {
          swal ({
              text: deleted,
              icon: 'error',
              button: 'OK',
          });
      }

      var error = "{{ Session::get('error') }}";
      if (error) {
          swal ({
              text: error,
              icon: 'error',
              button: 'OK',
          });
      }

      var danger = "{{ Session::get('flash_danger') }}";
      if (danger) {
          swal ({
              text: danger,
              icon: 'error',
              button: 'OK',
          });
      }

      var warning = "{{ Session::get('warning') }}";
      if (warning) {
          swal ({
              text: warning,
              icon: 'info',
              button: 'OK',
          });
      }

      $('.logout-link').on('click', function(e) {
        $(this).closest('form').submit();
      })
    </script>
    
</body>
</html>

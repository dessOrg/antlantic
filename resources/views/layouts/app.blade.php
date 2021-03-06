<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Atlantichomez') }}</title>

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
</head>
<body>
    <div id="app">
      <div class="" style="">
      <div class="row" style="background-color: #000000;">

        <div class="col-md-12">
          <div class="top">
          <div class="top-title"><i class="fa fa-envelope"></i>info@atlantichomez.com</div>
        </div>
        )</div>
      </div>
    </div>

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbarbrand" href="{{ url('/') }}">
                       <img src='/images/logo.png' class="">
                    </a>
                </div>

                <div class="collapse navbar-collapse navemenu" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right"> <!-- Authentication Links -->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    APARTMENTS/HOUSES <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu sub-menu">
                                <li><a href="{{ url('homes/Apartment/'. 'Sale') }}" >HOMES FOR SALE</a></li>
                                <li><a href="{{ url('homes/Apartment/'. 'Rent') }}">HOMES FOR RENT</a></li>
                                @guest
                                @else
                                    @if( Auth::user()->role == "Admin")
                                     <li><a href="{{ route('homes.create') }}">ADD HOME</a></li>
                                     @endif
                                @endguest
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    COTTAGES/HOLIDAY HOMES <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu sub-menu">
                                <li><a href="{{ url('/homes/Cottage/'. 'Sale') }}" >COTTAGES FOR SALE</a></li>
                                <li><a href="{{ url('/homes/Cottage/'. 'Rent') }}">COTTAGES FOR RENT</a></li>
                                </ul>
                            </li>
                        @guest
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Account <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu sub-menu">
                                <li><a href="{{ route('login') }}" >Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </li>
                            @else
                                @if(Auth::user()->role == "Admin")
                            <li><a href="{{ route('mail.index') }}"><i class="fa fa-envelop"></i>Mails</a></li>
                            <li><a href="{{ route('homes.create') }}"><i class="fa fa-plus"></i>PROPERY</a></li>
                            <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> Users </a></li>
                                @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="footer">
          <div class="container">
           <div class="raw">
             <div class="col-md-4 col-xs-12">
               <div class="footer-contacts">
                 <div class="footer-header"><h2>Contact Us</h2></div>
               <p><i class="fa fa-phone"></i> +254792746432</p>
               <p><i class="fa fa-envelope-o success"></i> info@atlantichomez.com</p>
               </div>
              </div>
             <div class="col-md-4 col-xs-12">
               <div class="footer-about">
                 <div class="footer-header"><h2>About Atlantichomez</h2></div>
               <p>Atlantichomez is an all-in-one real estate site that gives you the local scoop about homes for sale, apartments for rent, neighborhood insights, and real estate markets and trends to help you figure out exactly what, where, and when to buy, sell or rent. You can also find a real estate agent, view prices of recently sold homes, and see home values in your community. </p>
               </div>
             </div>
             <div class="col-md-4 col-xs-12">
               <div class="footer-contacts">
                 <div class="footer-header"><h2>Explore Atlantichomez</h2></div>
               <p><i class="fa fa-facebook"></i> Facebook</p>
               <p><i class="fa fa-twitter"></i> Twitter</p>
               <p><i class="fa fa-instagram"></i> Instagram</p>
               </div>
             </div>
           </div>
          </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
         $('#summernote').summernote({
               height: 300,
          });
       });
    </script>
    <!-- Scripts -->


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

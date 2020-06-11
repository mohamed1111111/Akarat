<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{URL::asset('website/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('website/css/flexslider.css')}}" rel="stylesheet" />
<link href="{{URL::asset('website/css/style.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{URL::asset('website/css/font-awesome.min.css')}}">
<script src="{{URL::asset('website/js/jquery.min.js')}}"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='{{URL::asset('http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900')}}' rel='stylesheet' type='text/css'>

    <title>
      {{getSetting()}}
      |
      @yield('title')

     </title>
     @yield('header')

</head>


<body id="app-layout" style="direction:rtl">
  <div class="header">
  <div class="container">
    <div class="menu pull-right"> <a class="toggleMenu" href="#"><img src="{{Request::root()}}/website/images/nav_icon.png" alt="" /> </a>
      <ul class="nav" id="nav">

        @if (Auth::guest())
        <li><a href="{{url('/login')}}">تسجيل الدخول </a></li>
        <li><a href="{{url('/register')}}">عضوية جديدة</a></li>
        @else
        <li class="dropdown">
            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <a class="dropdown-item pull-left" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Log out') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </li>
        @endif

        <div class="clear"></div>
      </ul>
      <li class="current"> <a href="{{url('/home')}}">Home</a></li>
      <li class="current"> <a href="{{url('/showAllBuilding')}}">All Buildings</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="contact.html">Contact Us </a></li>
    </ul>


    </div>
    <a class="navbar-brand pull-left" href="{{url('/')}}"><i class="fa fa-paper-plane pull-left"></i> ONE</a>

  </div>
    <div id="app">

        <main class="py-4">
            @yield('content')

<div class="footer">
  <div class="footer_bottom">
    <div class="follow-us">
      <a class="fa fa-facebook social-icon" href="{{getSetting('Facebook')}}"></a>
      <a class="fa fa-twitter social-icon" href="{{ getSetting('Twitter') }}"></a>
        <a class="fa fa-youtube social-icon" href="{{getSetting('Youtube')}}"></a>
      </div>
    <div class="copy">
      <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
    </div>
  </div>
</div>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.flexslider.js')}}"></script>
</body>

            <script type="website/text/javascript" src="{{URL::asset('website/js/responsive-nav.js')}}"></script>

<script src="{{URL::asset('website/js/bootstrap.min.js')}}"></script>

<script src="{{URL::asset('website/js/jquery.flexslider.js')}}"></script>
            @yield('footer')
        </main>
    </div>
</body>
</html>

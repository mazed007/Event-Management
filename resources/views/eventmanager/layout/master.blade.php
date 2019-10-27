<html>
	<head>
		<title>Tanis Event Management</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>
	<body>
		
		<div class="wrapper">
			<nav class="navbar navbar-expand-lg navbar-light bg-light ">
			<!-- Navbar Start-->
		<div class="container">
 <!--  <a class="navbar-brand" href="#">Navbar</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}">Contact</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/customer/login') }}">Customer</a>
          <a class="dropdown-item" href="{{ url('/centerowner/login') }}">Center Owner</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('/eventmanager/login') }}">Event Manager</a>
        </div>
      </li>
      <li class="nav-item">
       <!-- <a class="nav-link disabled" href="#">Disabled</a>-->
      </li>
    </ul>
       <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method="get">
    
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">Search</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    </form>
	
     @if (Auth::guest())
                            <a href="{{ url('/eventmanager/login') }}">Login</a> &nbsp &nbsp &nbsp &nbsp
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->manager_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/eventmanager/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/eventmanager/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
	
  </div>
  </div>
</nav>
	<!-- Navbar End-->
	
@yield('content')
	
	<footer class="footer-bottom">
		<p class="text-center">&copy; 2019 All rights reserved | Tanis Event Management</p>
    <a href="https://www.facebook.com/">
    <img src ="{{ asset('images/footer/'. 'fb.png')}}" align="right" height="30" width="30"/></a> 
    <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fca%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
    <img src ="{{ asset('images/footer/'. 'gmail.png')}}" align="right" height="30" width="30"/></a>
    <a href="https://twitter.com/hashtag/onlineshopping?f=news&vertical=default&lang=en">
    <img src ="{{ asset('images/footer/'. 'twitter.png')}}" align="right" height="30" width="30"/></a> <br>
	</footer>
	
	</div>
		
		
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
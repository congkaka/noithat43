<header class="main-header">
    <!-- Logo -->
    <a href="{{route('dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>NT</b>43</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Noithat</b>43</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(Auth::user()->avatar)
                <img src="{{asset(Auth::user()->avatar)}}" class="user-image" alt="User Image">
              @else
                <img src="{{asset('images/defaul.jpg')}}" class="user-image" alt="User Image">
                @endif
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('images/defaul.jpg')}}" class="img-circle" alt="User Image">

                <p>
                {{Auth::user()->name}} - @if(Auth::user()->role == 500) {{'Admin'}} @else {{'Menber'}} @endif
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
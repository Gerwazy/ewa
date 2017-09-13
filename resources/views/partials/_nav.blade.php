
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item {{ Request::is('/') ? "active" :""}}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item {{ Request::is('dodaj') ? "active" :""}}">
        <a class="nav-link" href="/dodaj">Dodaj</a>
      </li>
    </ul>

    <ul class="navbar-nav mt-2 mt-lg-0">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/public/auth/signup">Login</a>
          <a class="dropdown-item" href="#">Logout</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
       </li>
     </ul>
  </div>
</nav>
<br>

<!--

<nav class="navbar navbar-default">
          <div class="container-fluid">
           
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Laravel Blog</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
               <li class="{{ Request::is('/') ? "active" :""}}"><a href="/">Home</a></li>
               <li class="{{ Request::is('dodaj') ? "active" :""}}"><a href="/dodaj">Dodaj</a></li>
               <li class="{{ Request::is('about') ? "active" :""}}"><a href="/about">About</a></li>
               <li class="{{ Request::is('contact') ? "active" :""}}"><a href="/contact">Contact</a></li>     
              </ul>
     
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My account <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Posts</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><
          </div>
        </nav>
        -->
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.header')
    </head>
    <body>
        <div class="blog-header">
            <div class="container">

              <h2>Laravel</h2>
            </div>
        </div>


        <div class="blog-masthead">
             <div class="container">
                    <nav class="nav blog-nav">
                    <a class="nav-link ml-auto" href="/teams">Teams</a>
                    <a class="nav-link ml-auto" href="/news">News</a>
    
                        @if (Auth::check())
                        <a class="nav-link ml-auto" href="#">{{ Auth()->user()->name }}</a>
                        <a class="nav-link ml-auto" href="/logout">Logout</a>
                        @endif
                        @if(!Auth::check())
                        <a class="nav-link ml-auto" href="/login">Login</a>
                        <a class="nav-link ml-auto" href="/register">Register</a>
                        @endif
                    </nav>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 blog-main">
                    @yield('content')
                </div>
                <div class="col-sm-3 offset-sm-1 blog-sidebar">
                </div>
            </div>
        </div>
  
    </body>
</html>
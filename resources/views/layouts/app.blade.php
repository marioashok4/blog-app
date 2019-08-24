<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog App</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

{{--
Navbar  --}}

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
             </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
            </li>

            <li class="nav-item">
                    <a class="nav-link" href="{{ route('blogs.index') }}">BLOGS</a>
             </li>

             <li class="nav-item">
                    <a class="nav-link" href="{{ route('blogs.create') }}">CREATE BLOG</a>
             </li>

        </ul>

    </div>
</nav>



<div class="container">
       @if (session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>  {{ session()->get('success') }} </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

        @endif
        @yield('content')

</div>

 <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid ms-5">
    <a class="navbar-brand " href="#" >DashBoard</a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/admin">Home</a>
        </li>
        <li class="nav-item ">        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            @if(LaravelLocalization::getCurrentLocale()=="en")
            <li><a class="dropdown-item" href="{{LaravelLocalization::getLocalizedURL('ar')}}">العربية</a></li>
            @else
            <li><a class="dropdown-item" href="{{LaravelLocalization::getLocalizedURL('en')}}">English</a></li>
            @endif
        </ul>
        </li>

        <a class="nav-link" href="{{route('roles.index')}}">Roles</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
        </li>
        <li class="nav-item me-5">
        <a class="nav-link" href="{{route('users.index')}}">Users</a>
        </li>
    </ul>
    </div>
</div>
</nav>


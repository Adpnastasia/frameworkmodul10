@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-6 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item col-6 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link">Employee List</a></li>
            </ul>

            {{-- <hr class="d-lg-none text-white-50"> --}}
            <div style="margin-left: 600px;" class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i>
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="bi-person-circle me-1"></i>Profile</a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="bi bi-lock-fill"></i>
                                    {{ __('Logout') }}</a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
              </div>
            {{-- <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a> --}}
        </div>
    </div>
</nav>


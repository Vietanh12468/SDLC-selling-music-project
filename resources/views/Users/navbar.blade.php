<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Tune Source</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/explore">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/Search">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if (auth()->check())
                    <li class="nav-item">
                        <span class="nav-link">{{ auth()->user()->name }} - ${{ auth()->user()->money }}</span>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout.Func') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" onclick="handleLoginClick()">Login</a>
                    </li>
                    
                    <script>
                        function handleLoginClick() {
                            // Get the modal background element
                            const modalBackground = document.querySelector(".modal-background");
                            // Toggle the "hidden" class on the modal background
                            modalBackground.classList.toggle("hidden");
                        }
                    </script>
                @endif
            </ul>
        </div>
    </nav>
    
    <div class="modal-background hidden">
        <form action="{{ route('login.Func') }}" id="login" method="POST" enctype="multipart/form-data" class="modal-content">
            <button class="close-button" onclick="handleLoginClick()">X</button>
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-button text-center">
                <button type="submit" class="btn btn-primary mx-3 mx-md-4">Log in</button>
                <a class="btn btn-success mx-3 mx-md-4" href="{{ route('Users.create') }}"> Register</a>
            </div>
        </form>
    </div>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Your playlist
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Recent download
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/purchase">
                                Redeem code
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/purchase">
                                Upgrade VIP
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                About us
                            </a>
                        </li>

                        @if (auth()->check())
                            @if (auth()->user()->type == 'producer')
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="users"></span>
                                        producer
                                    </a>
                                </li>
                            @elseif (auth()->user()->type == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="/UsersManager">
                                        <span data-feather="users"></span>
                                        Accounts Manager
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/SongsManager">
                                        <span data-feather="users"></span>
                                        Songs Manager
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="SongsManager/CategorysManager">
                                        <span data-feather="users"></span>
                                        Categories Manager
                                    </a>
                                </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </nav>
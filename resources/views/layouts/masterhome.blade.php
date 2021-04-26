<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stanford University</title>
    <link rel="stylesheet" href="{{ mix('/css/header.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/homepage.css') }}">
</head>
<body>
            <div class="header_container">
                <div class="nav-bar">
                <img class="logo"src="/images/webpage/logo.png"/>
                    <ul class="nav-items">
                        <li>
                            <a class="nav-items--link" href="#">Home</a>
                        </li>
                        <li>
                            <a class="nav-items--link" href="#">Admission</a>
                        </li>
                        <li>
                            <a class="nav-items--link" href="#">Courses</a>
                        </li>
                        <li>
                            <a class="nav-items--link" href="#">Teachers</a>
                        </li>
                        
                        @if($loggeduser)
                        <li>
                            <a class="nav-button" href="/login">{{$loggeduser->name}}</a>
                        </li>
                        @else
                        <li>
                            <a class="nav-button" href="/login">Login as Student</a>
                        </li>
                        @endif

                        <li>
                            <a class="nav-button" href="/register">Login as teacher</a>
                        </li>
                    </ul>
                </div>
            </div>
@yield('content')
</body>
</html>
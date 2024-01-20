<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/login.css') }}" />
    <title>Register</title>
</head>
<body>

    <div class="NavBar">
        <button onclick="window.location.href='{{ url('/') }}'" class="NavButton">JRamedia</button>
        <button onclick="window.location.href='{{ url('/login') }}'" class="NavButton">Login</button>
        <button onclick="window.location.href='{{ url('/register') }}'" class="NavButton">Register</button>
        <button onclick="window.location.href='{{ url('/AboutUs') }}'" class="NavButton">About Us</button>
    </div>

    <div class="Content">
        <div class="BoxKiri">
            <h1 class="Judul">Register</h1>
            <form method="POST" action="/register">
                @csrf
                <p>Name</p>
                <input type="text" name="name" size="35" required unique/>
                <p>Email</p>
                <input type="email" name="email" size="35" required unique/>
                <p>Password</p>
                <input type="password" name="password" size="35" minlength="8" maxlength="20" required/>
                <br>
                <br>
                <p>Already have an account? <a href="login">Log In Here!</a></p> 
                <br>
                
                <input type="submit" name="submit" class="submit" value="Register"/>
            </form>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        </div>

        <div class="BoxKanan">
            <img src="{{url('/images/login_image.png')}}" alt="Image"/>
        </div>
        
    </div>

    <div class="Footer">
    <p>©  Copyright JRamedia Book Store</p>
    </div>
</body>
</html>
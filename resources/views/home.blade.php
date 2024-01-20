<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
    <title>Home</title>
</head>
<body>
    <div class="NavBar">
        <button onclick="window.location.href='{{ url('/') }}'" class="NavButton">JRamedia</button>
        <button onclick="window.location.href='{{ url('/login') }}'" class="NavButton">Login</button>
        <button onclick="window.location.href='{{ url('/register') }}'" class="NavButton">Register</button>
        <button onclick="window.location.href='{{ url('/AboutUs') }}'" class="NavButton">About Us</button>
    </div>

    <div class="Content">
        <img src="{{url('/images/banner_edit.jpg')}}" alt="Image"/>
    </div>

    <div class="Footer">
    <p>©  Copyright JRamedia Book Store</p>
    </div>
</body>
</html>
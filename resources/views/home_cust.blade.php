<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home_cust.css') }}" />
    <title>Home</title>
</head>
<body>
    <div class="NavBar">
        <div class="kiri">
            <button onclick="window.location.href='{{ url('/') }}'" class="NavButton">JRamedia</button>
        </div>
       <div class="kanan">
            <button onclick="window.location.href='{{ url('/Product') }}'" class="NavButton">View Product</button>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" class="textbox" placeholder="Search Our Producsts Here..." name="search">
                    <button type="submit">Search</button>
                </form>
            </div>
            <button onclick="window.location.href='{{ url('/Home') }}'" class="NavButton">Profile</button>
       </div>
    </div>

    <div class="Content">
        <div class="box1">
            <img src="{{url('/images/laptop_home.png')}}" alt="Image"/>
        </div>

        <div class="box2">
            <h1>Nothing matter except the satisfaction of our customer</h1>
            <p>Providing you with the best stationary you'll ever met</p>
        </div>
    </div>

    <div class="Footer">
    <p>©  Copyright JRamedia Book Store</p>
    </div>
</body>
</html>
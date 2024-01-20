<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/product.css') }}" />
    <title>Product</title>
</head>
<body>
    <div class="NavBar">
        <div class="kiri">
            <button onclick="window.location.href='{{ url('/') }}'" class="NavButton">JRamedia</button>
        </div>
       <div class="kanan">
            <button onclick="window.location.href='{{ url('/Product/Admin') }}'" class="NavButton">View Product</button>
            <button onclick="window.location.href='{{ url('/Transaction') }}'" class="NavButton">View All Transaction</button>
            <button onclick="window.location.href='{{ url('/edit-account') }}'" class="NavButton">View Account</button>
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
    
        <div class="top">
            <h1>Our Products</h1>
            <button onclick="window.location.href='{{ url('/Product/Add') }}'">Add product</button>
        </div>

        <div class="product">
            <div class="box1">
                <img src='{{$pathBaru}}' alt='Gambar gagal di muat' style='width: 150px;'>
                <div class="product-info">
                    <h2>{{$prodname}}</h2>
                    <p style="color:orange">Price: {{$prodprice}}</p>
                    <p>Description: {{$proddesc}}</p>
                </div>
                <button onclick="window.location.href='{{ url('/Product/Update') }}'" class="update">Update</button>
                <button type="submit" class="delete">Delete</button>
            </div>


            <div class="box1">
                <img src="{{url('/images/loveiswar_product.jpg')}}" alt='Gambar gagal di muat' style='width: 150px;'>
                <div class="product-info">
                    <h2>Love is War</h2>
                    <p style="color:orange">Price: Rp 20.0000</p>
                    <p>Description: manga chapter 10</p>
                </div>
                <button type="submit" class="update">Update</button>
                <button type="submit" class="delete">Delete</button>
            </div>

            <div class="box1">
                <img src="{{url('/images/heroesofolympus_aboutus.jpg')}}" alt='Gambar gagal di muat' style='width: 150px;'>
                <div class="product-info">
                    <h2>Heroes of Olympus</h2>
                    <p style="color:orange">Price: Rp 20.0000</p>
                    <p>Description: House of Hades</p>
                </div>
                <button type="submit" class="update">Update</button>
                <button type="submit" class="delete">Delete</button>
            </div>
        </div>
    </div>

    <div class="Footer">
    <p>©  Copyright JRamedia Book Store</p>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/add.css') }}" />
    <title>Product</title>
</head>
<body>
    <div class="NavBar">
        <div class="kiri">
            <button onclick="window.location.href='{{ url('/') }}'" class="NavButton">JRamedia</button>
        </div>
       <div class="kanan">
            <button onclick="window.location.href='{{ url('/Product/Add') }}'" class="NavButton">View Product</button>
            <button onclick="window.location.href='{{ url('/Transaction') }}'" class="NavButton">View All Transaction</button>
            <button onclick="window.location.href='{{ url('/edit-account') }}'" class="NavButton">View Account</button>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" class="textbox" placeholder="Search Our Producsts Here..." name="search">
                    <button type="submit">Search</button>
                </form>
            </div>
            <button onclick="window.location.href='{{ url('/Admin') }}'" class="NavButton">Profile</button>
       </div>
    </div>

    <div class="Content">
    <div class="box">
        <div class="head">
            <h1>Add New Product</h1>
        </div>
        <form action="{{url('/Product/Add')}}" method="POST" enctype="multipart/form-data" class="input">
            @csrf
            <label for="">Product Name</label>
            <input type="text" name="prodname" placeholder="Product Name" required>
            
            <label for="">Product Price</label>
            <input type="number" name="prodprice" placeholder="Product Price" required>
                      
            <label for="">Product Desc</label>
            <input type="text" name="proddesc" placeholder="Product Description" required>
                        
            <select id="" name="prodtype">
                <option value="Book">Book</option>
                <option value="Stationary">Stationary</option>
            </select>
            
            <input type="file" id="prodimg" name="prodimg">
            <button type="add_product">Add Product</button>
            
            <!-- Menampilkan pesan kesalahan jika prodname tidak valid -->
            @error('prodname')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <!-- Menampilkan pesan kesalahan jika prodprice tidak valid -->
            @error('prodprice')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <!-- Menampilkan pesan kesalahan jika proddesc tidak valid -->
            @error('proddesc')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <!-- Menampilkan pesan kesalahan jika prodimg tidak valid -->
            @error('prodimg')
                <div class="error-message">{{ $message }}</div>
            @enderror
            
        </form>
        </div>
    </div>


    <div class="Footer">
    <p>©  Copyright JRamedia Book Store</p>
    </div>
</body>
</html>

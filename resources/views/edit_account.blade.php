<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/edit_account.css') }}" />
    <title>Home</title>
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

    <div class="Contents">
    @foreach($users as $user)
        <div class="boxupdown">
            <div class="boxupdownleft">
                <label for="">{{ $user->name }}</label>
                <label for="">{{ $user->email }}</label>
                <label for="" style="color:orange">{{ $user->email === 'devlin@admin.com' || $user->email === 'dustin@admin.com' ? 'Admin' : 'Customer' }}</label>
            </div>
            <div class="boxupdownright">
                <a href="{{ url('/edit-account/' . $user->id . '/edit') }}" class="updt">Update</a>
                <form action="{{ url('/delete-account/' . $user->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="del">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>

    <div class="Footer">
    <p>©  Copyright JRamedia Book Store</p>
    </div>
</body>
</html>
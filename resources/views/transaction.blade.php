<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/transaction.css') }}" />
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
        <h1>Transaction History</h1>
        <table>
            <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Transaction Date</th>
                <th>Username</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>2023-05-01</td>
                <td>Devlin Widjaja</td>
                <td>Product A</td>
                <td>10.00</td>
                <td>2</td>
                <td>20.00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2023-05-02</td>
                <td>Stefen Dustin</td>
                <td>Product B</td>
                <td>15.00</td>
                <td>1</td>
                <td>15.00</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="Footer">
    <p>©  Copyright JRamedia Book Store</p>
    </div>
</body>
</html>

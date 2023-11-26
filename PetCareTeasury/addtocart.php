<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
session_start();
include 'db_petcare.php';

$id=$_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM userdetails where id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

?> 
</head>
<style>
    
.container {
    max-width: 1000px;
    margin: auto;
    
}

.purchaseList {
    display: grid;
    grid-template-columns: repeat(4, minmax(250px, 1fr));
    gap: 20px;
}

.past-purchase {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
}

.past-purchase:hover {
    transform: scale(1.05);
}

.past-purchase div {
    margin-bottom: 10px;
}

.past-purchase .product {
    font-weight: bold;
    font-size: 18px;
}

.past-purchase .price {
    color: #27ae60;
    font-weight: bold;
}

.past-purchase .quantity {
    color: #3498db;
}

.no-purchases {
    text-align: center;
    color: #777;
    font-style: italic;
}

</style>
<body class="" style="background: #E3EADF;">
    
    <a href="userloginpage.php" style="text-decoration: none; color: #000;">
                <button style="background-color: #f44336; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                    Logout
                </button>
            </a>
    
    <div class="container">
        <header>
           


            <h1 style="font-family: Lucida Handwriting">Pet Care Treasury Catalogue</h1>
            <div class="shopping">
                <img src="shoppingbag.jpg">
                <span class="quantity">0</span>
            </div>
        </header>

        <div class="list">
          
        </div>
        <h2 style="font-family: Lucida Handwriting">Past Purchase List</h2><br>
        <div class="purchaseList">
            
            <?php include 'pastpurchases.php'; ?>
        </div>
    </div>
    
    <div class="card">
        <h1 style="font-family: Lucida Handwriting">Cart</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <button type="button" onclick="window.location.href = 'ordersummary.php';">
            <div class="total"></div>
            </button>
            <div class="closeShopping">Close</div>
        </div>
    </div>
    
    

    <script src="app.js"></script>
</body>
</html>



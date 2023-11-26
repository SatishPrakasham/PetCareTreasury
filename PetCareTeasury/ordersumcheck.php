<?php
session_start();
include 'db_petcare.php';

$id = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM userdetails WHERE id='$id'") or die(mysqli_error());
$row = mysqli_fetch_array($query);

$data = json_decode(file_get_contents('php://input'), true);

// Insert each item from order details into the ordersummary table
foreach ($data as $item) {
    $productname = $item['name'];
    $price = $item['price'];
    $quantity = $item['quantity'];

    $insertQuery = "INSERT INTO ordersummary (id, productname, price, quantity) 
                    VALUES ('$id', '$productname', '$price', '$quantity')";
    mysqli_query($conn, $insertQuery) or die(mysqli_error($conn));
}

// Close the database connection
mysqli_close($conn);

// You can return a response if needed
echo "<script>location.href='cardpayment.php'</script>";
exit();
?>

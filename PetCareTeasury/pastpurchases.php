<?php

include 'db_petcare.php';

$id = $_SESSION['id'];

$query = "SELECT * FROM ordersummary WHERE id = $id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="past-purchase">';
        echo '<div class="product" >' . $row['productname'] . '</div>';
        echo '<div class="price">Price: RM' . $row['price'] . '</div>';
        echo '<div class="quantity">Quantity: ' . $row['quantity'] . '</div>';
        echo '</div>';
    }
    
} else {
    echo '<div class="no-purchases">No past purchases available.</div>';
}

mysqli_close($conn);
?>

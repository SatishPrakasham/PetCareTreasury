<?php

include 'db_petcare.php';

// Your SQL query to fetch order data
$query = "SELECT productname, SUM(quantity) as totalQuantity FROM ordersummary GROUP BY productname";
$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data['productNames'][] = $row['productname'];
    $data['totalQuantities'][] = (int)$row['totalQuantity'];
}

header('Content-Type: application/json');
echo json_encode($data);

mysqli_close($conn);
?>

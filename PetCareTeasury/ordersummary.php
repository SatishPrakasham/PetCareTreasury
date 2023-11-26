<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <style>
        body {
            background: #CFECEC;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        h1 {
            font-family: 'Arial', sans-serif;
            font-size: 2.5em;
            text-shadow: 2px 2px 2px #333;
        }

        #orderDetails {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: box-shadow 0.3s;
        }

        #orderDetails:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .paymentbtn {
            height: 2em;
            padding: 0.2em;
            margin: 3% 0;
            font-size: 1.2em;
            color: #eee;
            background-color: #1B6CBD;
            border: 1px solid #0E3A59;
            border-radius: 0.2em;
            box-shadow: 0 1px 0 #0E3A59, 0 0 2px rgba(#1B6CBD, 0.8);
            text-shadow: 0.05em 0.05em 0 #555;
            transition: background 0.3s, transform 0.3s;
            margin-left: 111px;
        }

        .paymentbtn:hover {
            color: #eee;
            background: #114C8F;
            border-color: #0E3A59;
            transform: scale(1.1);
        }
    </style>
    <?php
    session_start();
    include 'db_petcare.php';

    $id = $_SESSION['id'];
    $query = mysqli_query($conn, "SELECT * FROM userdetails where id='$id'") or die(mysqli_error());
    $row = mysqli_fetch_array($query);
    ?>
</head>

<body>
    <h1>Order Summary</h1><br>

    <div id="orderDetails"></div>

    <button class="paymentbtn" type="submit" onclick="location.href='ordersumcheck.php'">Confirm Payment</button>

    <script>
        document.querySelector('.paymentbtn').addEventListener('click', () => {
            placeOrder();
        });
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js'></script>

    <script>
        const savedItems = JSON.parse(localStorage.getItem('cartItems')) || {};
        const orderDetailsContainer = document.getElementById('orderDetails');
        orderDetailsContainer.innerHTML = "<h2>Selected Items:</h2>";

        Object.entries(savedItems).forEach(([key, item]) => {
            const itemDiv = document.createElement('div');
            itemDiv.innerHTML = `
                <p>Name: ${item.name}</p>
                <p>Price: ${item.price.toLocaleString()}</p>
                <p>Quantity: ${item.quantity}</p>
                <hr>
            `;
            orderDetailsContainer.appendChild(itemDiv);
        });

        const itemWithZeroId = savedItems[0];
        if (!itemWithZeroId) {
            const zeroIdMissingDiv = document.createElement('div');
            zeroIdMissingDiv.innerHTML = `
                <p>No item with id 0 selected</p>
                <hr>
            `;
            orderDetailsContainer.appendChild(zeroIdMissingDiv);
        }
    </script>

    <script src="app.js"></script>
</body>

</html>

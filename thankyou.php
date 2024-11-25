<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Dancing Script', cursive;
            background-image: url('Bcakground Image 6.jpg');
            margin: 0;
            padding: 0;
            color: white;
            background-size: cover;
            font-size: larger;
            font-weight: bold;
        }
        .container {
            max-width: 600px;
            margin: 80px auto;
            padding: 20px;
            background-color: rgba(44, 59, 74, 0.815);
            color: black;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Your Order!</h1>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $address = htmlspecialchars($_POST['address']);
                $product = htmlspecialchars($_POST['product']);
                $price = htmlspecialchars($_POST['price']);
                $quantity = htmlspecialchars($_POST['quantity-hidden']);
                $total = htmlspecialchars($_POST['total']);

                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Address:</strong> $address</p>";
                echo "<p><strong>Product:</strong> $product</p>";
                echo "<p><strong>Price:</strong> P$price</p>";
                echo "<p><strong>Quantity:</strong> $quantity</p>";
                echo "<p><strong>Total:</strong> P$total</p>";
            } else {
                echo "<p>Invalid request. Please submit the form properly.</p>";
            }
        ?>
    </div>
</body>
</html>

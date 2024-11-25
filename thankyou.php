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
            text-align: center;
            padding: 50px;
            background-image: url(Bcakground\ Image\ 6.jpg);
            background-size: cover;
            color: white;
        }
        .thank-you {
            background-color: rgba(44, 59, 74, 0.815);
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        h1 {
            font-size: 2em;
        }
        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="thank-you">
        <h1>Thank You!</h1>
        <p>Dear <?php echo htmlspecialchars($_GET['name'] ?? 'Customer'); ?>,</p>
        <p>Your order has been successfully submitted. We will process your order shortly.</p>
        <p>Have a great day!</p>
    </div>
</body>
</html>

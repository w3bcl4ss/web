<?php
// Database configuration
$host = 'localhost';
$dbname = 'shop';
$username = 'root';
$password = 'root';

// Establish a connection to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve POST data
    $product_name = htmlspecialchars($_POST['product']);
    $product_price = htmlspecialchars($_POST['price']);
    $quantity = htmlspecialchars($_POST['quantity-hidden']);
    $total_price = htmlspecialchars($_POST['total']);
    $customer_name = htmlspecialchars($_POST['name']);
    $customer_email = htmlspecialchars($_POST['email']);
    $delivery_address = htmlspecialchars($_POST['address']);

    try {
        // Prepare an SQL statement
        $sql = "INSERT INTO orders (product_name, product_price, quantity, total_price, customer_name, customer_email, delivery_address)
                VALUES (:product_name, :product_price, :quantity, :total_price, :customer_name, :customer_email, :delivery_address)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':product_price', $product_price);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':total_price', $total_price);
        $stmt->bindParam(':customer_name', $customer_name);
        $stmt->bindParam(':customer_email', $customer_email);
        $stmt->bindParam(':delivery_address', $delivery_address);

        // Execute the statement
        $stmt->execute();

        // Redirect to the thank you page with customer name in the query string
        header("Location: thankyou.php?name=" . urlencode($customer_name));
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    echo "Invalid request method.";
}

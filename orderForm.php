<?php 
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: index.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Management System</title>
</head>
<body>
    <div>
        <h1>Welcome! <?php echo $_SESSION['username'];?></h1>
        <h1>Order Management System</h1>
        <div>
            <h2>Menu</h2>
            <ul>
                <li>Burger - PHP 75</li>
                <li>Fries - PHP 50</li>
                <li>Coke Float - PHP 45</li>
            </ul>
        </div>
        <form method="get" action="receipt.php">
            <label for="item">Select Item:</label>
            <select id="item" name="item">
                <option value="75">Burger - PHP 75</option>
                <option value="50">Fries - PHP 50</option>
                <option value="45">Coke Float - PHP 45</option>
            </select><br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required><br>
            <label for="payment">Payment:</label>
            <input type="number" id="payment" name="payment" min="0" required><br>
            <input type="submit" value="Submit">
        </form>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

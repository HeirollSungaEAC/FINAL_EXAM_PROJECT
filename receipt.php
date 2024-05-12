<!DOCTYPE html>
<html>
<head>
    <title>Receipt - Order Management System</title>
</head>
<body>
    <div>
        <h2>Receipt</h2>
        <?php
            $item = $_GET["item"];
            $quantity = $_GET["quantity"];
            $payment = $_GET["payment"];
            $total = $item * $quantity;
            $change = $payment - $total;

            echo "<div>";
            echo "<p>Item: ";
            if ($item == 75) {
                echo "Burger - PHP 75";
            } elseif ($item == 50) {
                echo "Fries - PHP 50";
            } elseif ($item == 45) {
                echo "Coke Float - PHP 45";
            }
            echo "</p>";
            echo "<p>Quantity: $quantity</p>";
            echo "<p>Total: PHP $total</p>";
            echo "<p>Payment: PHP $payment</p>";
            if ($change >= 0) {
                echo "<p>Change: PHP $change</p>";
            } else {
                echo "<p>Insufficient payment!</p>";
            }
            echo "</div>";
        ?>
        <form method="get" action="orderForm.php">
            <input type="submit" value="Order Again">
        </form>
    </div>
</body>
</html>

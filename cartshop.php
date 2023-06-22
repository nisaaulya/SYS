<?php
session_start();
require_once 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Your Skin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/cartshop.css">

</head>
<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    <img src="images/logo.png" alt="" width="50px" height="50px">
    <a href="#" class="logo">Show Your Skin<span>.</span></a>

    <nav class="navbar">
        <a href="home.html">home</a>
        <a href="about.html">about</a>
        <a href="product.php">products</a>
        <a href="#review">review</a>
        <a href="contact.php">contact</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="cartshop.php" class="fas fa-shopping-cart"></a>
        <a href="login.php" class="fas fa-user"></a>
    </div>

</header>

<body>
    <h2 style="text-align: center">Your shopping cart</h2>
    <div>
        <table border="2">
            <tr>
                <th class="cart" style="background-color: pink;">Product Name</th>
                <th class="cart" style="background-color: pink;">Quantity</th>
                <th class="cart" style="background-color: pink;">Price Details</th>
                <th class="cart" style="background-color: pink;">Order Total</th>
                <th class="cart" style="background-color: pink;">Delete</th>
            </tr>
            <?php
            $total = 0;

            //If have something in the cart. Display it.
            if (!empty($_SESSION["cart"])) {

                foreach ($_SESSION["cart"] as $keys => $values) {
            ?>
                    <tr class="cart">
                        <td style="background-color: #d3dcf2"><?php echo $values["item_name"]; ?></td>
                        <td class="cart"><?php echo $values["item_quantity"] ?></td>
                        <td class="cart">Rp <?php echo $values["product_price"]; ?></td>
                        <td class="cart">Rp <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
                        <td class="cart"><a id="delete" href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span> Delete Product</span></a></td>
                    </tr>
            <?php
                    $total = $total + ($values["item_quantity"] * $values["product_price"]);
                }
            }
            ?>
        </table>
    </div>
    <center>
        <div class="check">
            <p><u>Sub total:</u> Rp <?php echo number_format($total, 2); ?> </p>
            <p><u>Tax:</u> Rp <?php echo number_format($total * 0.1, 2); ?> </p>
            <h3>Total: Rp <?php echo number_format($total * 1.1, 2); ?> </h3>
            <h2><a id="checkout" href="checkout.php"> Click here to check out</a></h2>
        </div>
    </center>
</body>

</html>
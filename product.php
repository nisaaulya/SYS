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

    <link rel="stylesheet" href="css/product.css">

</head>

<body>
    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <img src="images/logo.png" alt="" width="50px" height="50px">
        <a href="#" class="logo">Show Your Skin<span>.</span></a>

        <nav class="navbar">
            <a href="home.html">home</a>
            <a href="about.html">about</a>
            <a href="product.php">products</a>
            <a href="review.html">review</a>
            <a href="contact.php">contact</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="cartshop.php" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fas fa-user"></a>
        </div>

    </header>

    <body>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fas fa-user"></a>
        </div>
        <section class="products" id="products">

            <h1 class="heading"> <span>BRANDS</span> </h1>

            <h1 class="judul"><span>Features Brand</span></h1>

            <div class="box-container">
                <div class="box">


                    <div class="icons">

                    </div>

                    <div class="user">
                        <img src="images/avoskin.jpeg" alt="">
                    </div>
                    <div class="user1">
                        <img src="images/azarine.jpeg" alt="">
                    </div>
                    <div class="user2">
                        <img src="images/skintifc.jpeg" alt="">
                    </div>
                    <div class="user3">
                        <img src="images/something.jpeg" alt="">
                    </div>
                    <div class="user4">
                        <img src="images/safi.jpeg" alt="">
                    </div>
                    <div class="user5">
                        <img src="images/whitelab.jpeg" alt="">
                    </div>
                    <div class="user6">
                        <img src="images/npure.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price"></div>
                        <div>
                            <h1 class="produk"><span>New Product</span></h1>

                        </div>
                        <div class="kotak">
                            <?php
                            //Display all products in Products table.
                            $query = "SELECT * FROM Products ORDER BY ProductID ASC";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_array()) {
                            ?>
                                    <div>
                                        <form method="post" action="shop.php?action=add&id=<?php echo $row["ProductID"]; ?>">
                                            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
                                                <img width="25%" src="<?php echo $row["ProductImage"]; ?>">
                                                <a href="detail_product.html">
                                                    <h5><?php echo $row["ProductName"]; ?></h5>
                                                    <h5>Rp <?php echo $row["ProductPrice"]; ?></h5>
                                                </a>
                                                <input type="number" name="quantity" value="1">
                                                <input type="hidden" name="hidden_name" value="<?php echo $row["ProductName"]; ?>">
                                                <input type="hidden" name="hidden_price" value="<?php echo $row["ProductPrice"]; ?>">
                                                <input type="submit" name="add" value="Add to Cart">
                                            </div>
                                        </form>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
        </section>
    </body>

</html>
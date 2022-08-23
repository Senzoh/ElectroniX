<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo $styles?>>
        <link rel="stylesheet" href="styles/responsive.css">
        <link rel="icon" href="icon_electronix.ico">
        <title><?php echo $title?></title>
    </head>
    
    <body>
        <header>
            <div class="nav">
                <div class="nav-belt">

                    <div class="nav-left">
                        <div class="nav-logo">
                            <a href="index.php"><img src="logo_Electronix.png" alt="ElectroniX logo" height="49px" width="150px"></a>
                        </div>
                    </div>

                    <div class="nav-fill"></div>

                    <div class="nav-right">
                        <div class="nav-tools">
                            <div class="nav-cart">
                                <a href="cart.php">
                                    <img src="images/shopping-cart-white.png" alt="shopping cart">
                                </a>

                                <div class="nav-cart-total">
                                    <span class="nav-cart-count">
                                        <?php if(empty($_SESSION['cart'])){
                                            echo "0";
                                        }else{
                                            echo count($_SESSION['cart']);
                                        }?>
                                    </span>
                                    <span>Cart</span>
                                </div>
                            </div>

                            <div class="nav-account">
                                <span> <?php echo $welcome?> </span>
                                <span> <?php echo $account?> </span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="nav-bar">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php#section1">Products</a></li>
                            <li><a href="wishList.php">Wish List</a></li>
                            <li>
                                <?php
                                if(!(isset($_SESSION['id']))){
                                    echo "<a href='login.php'>Login</a>";
                                }elseif($_SESSION['id'] == 1){
                                    echo "<a href='admin.php'>⭐Admin⭐</a>";
                                }elseif(isset($_SESSION['id'])){
                                    echo "<a href='account.php'>Account</a>";
                                }?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
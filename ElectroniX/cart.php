<?php 
    $title = 'Product';
    $styles = 'styles/styles-product.css';

    session_start();
    include_once "includes/connect.php";

    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $query = "SELECT * FROM tbl_login WHERE id = $id LIMIT 1;";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);

            $welcome = "Welcome, " .$user_data['firstName'];
            $account = "<a href='logout.php'>Logout</a>";
        }
        // echo "-logged in";
    }else{
        // echo "-not set";
        $welcome = "Welcome Guest!";
        $account = "<a href='login.php'>login</a>";
    }

    //CART
    if(!(isset($_SESSION['cart']))){
        $_SESSION['cart'] = array();
    }
    //empties whole cart
    if(isset($_GET['emt-cart'])){
        $_SESSION['cart'] = array();
    }
    //remove one items from cart
    if(isset($_GET['p_id'])){
        $p_id = $_GET['p_id'];
        // echo "count test:".$_SESSION['cart'][$p_id];

        if($_SESSION['cart'][$p_id] <= 1){
            unset($_SESSION['cart'][$p_id]);
        }else{
            if(isset($_SESSION['cart'][$p_id])){
                $_SESSION['cart'][$p_id] -= 1;
            }
        }
    }

    //CHECK OUT
    if(isset($_GET['checkOutValid'])){
        if(isset($_SESSION['id'])){
            if(!(empty($_SESSION['cart']))){
                header("Location: checkOut.php");
            }else{
                echo "<script defer> alert('Your cart is empty')</script>";
            }
        }else{
            echo "<script defer> alert('Please login or register to proceed witht he purchase.')</script>";
        }
    }
 
?>

<?php include 'includes/header.php' ?>

    <main>
        <!-- MAIN content -->
        <div class="cart-container">
            <div class="cart-left">
                    
                <?php 
                    if(!(empty($_SESSION['cart']))){
                        foreach($_SESSION["cart"] as $key => $count){
                            $product_query = "SELECT * FROM tbl_products WHERE product_id = $key LIMIT 1;";
                            $result = mysqli_query($con,$product_query);
                            $product_data = mysqli_fetch_assoc($result);
    
                            $product_name = $product_data['product_name'];
                            $product_category = $product_data['category'];
                            $product_price = $product_data['price'];
                            $product_description = $product_data['description'];
                            $product_img = $product_data['product_img'];
    
                            echo "
                            <div class='cart-item-container'>
                                <div class='cart-item-img'>
                                    <img src='$product_img' alt=''>
                                </div>
            
                                <div class='cart-item-name'>
                                    <p> {$product_name} <br> &nbsp; $product_category</p>
                                </div>
            
                                <div class='cart-item-quantity'>
                                    <p>$count</p>
                                </div>
            
                                <div class='cart-item-price'>
                                    <p>£$product_price </p>
                                </div>
            
                                <div class='cart-item-remove'>
                                    <a href='cart.php?p_id=$key'>remove</a>
                                </div>
        
                            </div>";
                        }
                    }else{
                        echo "<p style='font-size:22px;'>This cart is currently empty<p>";
                    }
                    
                ?>
            </div>

            <div class="cart-right">
                <div class="cart-right-head">
                    <h2>Check out</h2>

                </div>

                <div class="cart-right-fill">
                <?php 
                    $subTotal = 0;
                    foreach($_SESSION["cart"] as $key => $count){
                        $product_query = "SELECT * FROM tbl_products WHERE product_id = $key LIMIT 1;";
                        $result = mysqli_query($con,$product_query);
                        $product_data = mysqli_fetch_assoc($result);

                        $product_name = $product_data['product_name'];
                        $product_price = $product_data['price'];
                        $subTotal += ($count*$product_price);

                        echo "<p><b>$product_name</b> Quantity(<b>$count</b>):
                        <br> <p style='color:green;'> +£".($count*$product_price)."</p></p>";
                    }
                ?>
                    <u>Subtotal: <?php echo "£$subTotal"; ?></u>
                </div>

                <div class="cart-right-container">
                    <form action="" method="GET" class="cart-right-btn">
                        <!-- <input type="hidden" name="emt-cart" id="emt-cart" value="bruh"> -->
                        <input type="submit" name="emt-cart" id="emt-cart" value="empty cart">
                    </form> 

                    <form action="" method="GET" class="cart-right-btn">
                        <input type="hidden" name="checkOutValid" id="checkOutValid" value="1">
                        <input type="submit" id="check-out" value="checkout" href="checkOut.php?">
                    </form>
                </div>

            </div>
        </div>
        
    </main>
</body>
</html>
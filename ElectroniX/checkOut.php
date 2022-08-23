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

    if(isset($_GET['emt-cart'])){
        $_SESSION['cart'] = array();
    }

?>

<?php include 'includes/header.php' ?>

    <main>
        <!-- MAIN content -->
        <div class="check-out-container">
            <p style='color:green;' >Thank you for your purchase</p> <br>
            <p>Your items will be dispatched shortly.</p> <br>

            <?php 
                foreach($_SESSION["cart"] as $key => $count){
                    $product_query = "SELECT * FROM tbl_products WHERE product_id = $key LIMIT 1;";
                    $result = mysqli_query($con,$product_query);
                    $product_data = mysqli_fetch_assoc($result);

                    $product_name = $product_data['product_name'];
                    $product_category = $product_data['category'];
                    $product_price = $product_data['price'];
                    $product_description = $product_data['description'];
                    $product_img = $product_data['product_img'];

                    echo "<p><b>$product_name</b> Quantity(<b>$count</b>)
                    <br></p>";
                    
                    //empties cart
                    $_SESSION['cart'] = array();
                }
            ?>
            <br>
            <a href="index.php">return home</a>
        </div>
    </main>
</body>
</html>
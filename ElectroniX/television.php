<?php 
    $title = 'Televisions';
    $styles = 'styles/styles.css';

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
    include_once "includes/addToCart.php"; 

    //WISH LIST
    include_once "includes/addToWishList.php"; 
?>
<?php include 'includes/header.php' ?>
     
        <main>
            <!-- MAIN content -->
            <div class="local_banner">
                <img src="images/banner/local/television_banner.png" alt="phone">
            </div>

            <!-- -----------------------------ITEM ONE-----------------------------  -->
            <div class="item_section">

                <a class="item_container" onclick='openForm("1")'>
                    <div class="item_title">
                        <h2>SONY BRAVIA KD43X85JU 43" Smart 4K TV </h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/televisions/sony_tv.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ standard delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• Advanced A9 Gen4 AI processor 4K for ultimate picture & sound</li>
                                    <li>• HDR: Dolby Vision IQ / HDR10 / Hybrid Log-Gamma (HLG)</li>
                                    <li>• Smart TV with Google Assistant & Amazon Alexa</li>
                                </ul>
                            </div>

                            <div class="item_stars_container">
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>•</p></div>
                            </div>
                        </div>
        
                        <div class="item_price_wrapper">
                            <div class="item_price">
                                <H1>£599</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="1">
                                <input type="submit" value="add to cart">
                            </form>  
                        </div>
    
                    </div>
                </a>

            </div>

            <!-- -----------------------------ITEM TWO-----------------------------  -->

            <div class="item_section">

                <a class="item_container"  onclick='openForm("2")'>
                    <div class="item_title">
                        <h2>HISENSE 43AE7000FTUK 43" 4K Smart TV </h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/televisions/hisense_tv.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ standard delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• Advanced A9 Gen4 AI processor 4K for ultimate picture & sound</li>
                                    <li>• HDR: Dolby Vision IQ / HDR10 / Hybrid Log-Gamma (HLG)</li>
                                    <li>• Smart TV with Google Assistant & Amazon Alexa</li>
                                </ul>
                            </div>

                            <div class="item_stars_container">
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>•</p></div>
                                <div class="item_star"><p>•</p></div>
                            </div>
                        </div>
        
                        <div class="item_price_wrapper">
                            <div class="item_price">
                                <H1>£499</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="2">
                                <input type="submit" value="add to cart">
                            </form>  
                        </div>
    
                    </div>
                </a>

            </div>

            <!-- -----------------------------ITEM three------------------------------->

            <div class="item_section">

                <a class="item_container" onclick='openForm("3")'>
                    <div class="item_title">
                        <h2>Samsung AU7110 75" Smart 4K TV HDR10+ </h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/televisions/samsung_tv.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• Advanced A9 Gen4 AI processor 4K for ultimate picture & sound</li>
                                    <li>• HDR: Dolby Vision IQ / HDR10 / Hybrid Log-Gamma (HLG)</li>
                                    <li>• Smart TV with Google Assistant & Amazon Alexa</li>
                                </ul>
                            </div>

                            <div class="item_stars_container">
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                            </div>
                        </div>
        
                        <div class="item_price_wrapper">
                            <div class="item_price">
                                <H1>£699</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="3">
                                <input type="submit" value="add to cart">
                            </form>   
                        </div>
    
                    </div>
                </a>

            </div>
           

        </main>

        <?php include 'includes/footer.php' ?>
       
        
    </body>
</html>
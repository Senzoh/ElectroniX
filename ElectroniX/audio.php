<?php 
    $title = 'Audio';
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
?>
<?php include 'includes/header.php' ?>
     
        <main>
            <!-- MAIN content -->
            <div class="local_banner">
                <img src="images/banner/local/audio_banner.png" alt="phone">
            </div>

            <!-- -----------------------------ITEM ONE-----------------------------  -->
            <div class="item_section">

                <a class="item_container" onclick='openForm("10")'>
                    <div class="item_title">
                        <h2>SONY WH-1000XM4 Wireless Headphones</h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/audio/soney_headphones.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• 30 hours battery life (with Noise Cancelling on)</li>
                                    <li>• powered by our HD Noise Cancelling Processor QN1 </li>
                                    <li>• Bluetooth headphones support High-Resolution Audio</li>
                                    <li>• automatically pauses playback when you start a conversation</li>
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
                                <H1>£249</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="10">
                                <input type="submit" value="add to cart">
                            </form>    
                        </div>
    
                    </div>
                </a>

            </div>

            <!-- -----------------------------ITEM TWO-----------------------------  -->

            <div class="item_section">

                <a class="item_container" onclick='openForm("11")'>
                    <div class="item_title">
                        <h2>APPLE AirPods Pro - White</h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/audio/apple_headphones.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• Transparency mode, hear the world around you</li>
                                    <li>• Active Noise Cancellation for immersive sound</li>
                                    <li>• Easy setup for all your Apple devices</li>
                                    <li>• Wireless Charging Case delivers 24 hour battery life</li>
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
                                <H1>£199</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="11">
                                <input type="submit" value="add to cart">
                            </form>  
                        </div>
    
                    </div>
                </a>

            </div>

            <!-- -----------------------------ITEM three------------------------------->

            <div class="item_section">

                <a class="item_container" onclick='openForm("12")'>
                    <div class="item_title">
                        <h2>Beats Solo3 Wireless Headphones - Red</h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/audio/beat_headphone.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• High-performance wireless Bluetooth headphones in red</li>
                                    <li>• With up to 40 hours of battery life</li>
                                    <li>• Adjustable fit with comfort and cushioned</li>
                                    <li>• Compatible with iOS and Android devices</li>
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
                                <H1>£149</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="12">
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
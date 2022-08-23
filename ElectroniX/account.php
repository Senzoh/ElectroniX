<?php 
    $title = 'Account';
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

    //update email
    if(isset($_GET['email'])){
        $email = $_GET['email'];
        $e_id = $user_data['id'];
        $updateQuery = "UPDATE tbl_login SET email = '$email' WHERE id = $e_id;";

        echo $updateQuery; 
        $result_update = mysqli_query($con,$updateQuery);

        if($result_update){
            echo "nice";
        }
    }

    //update password
    if(isset($_GET['old-password'])){
        if($_GET['old-password'] == $user_data['password']){
            if($_GET['new-password'] == $_GET['c-new-password']){
                $e_id = $user_data['id'];
                $newPassword = $_GET['new-password'];

                $updateQuery = "UPDATE tbl_login SET password = '$newPassword' WHERE id = $e_id;";

                echo $updateQuery; 
                $result_update = mysqli_query($con,$updateQuery);
            }else{
                echo "<script defer> alert('New password dosent match')</script>";
            }
        }else{
            echo "<script defer> alert('incorrect password')</script>";
        }
    }
    
?>

<?php include 'includes/header.php' ?>
     
        <main>
            <!-- MAIN content -->
            <h1>Account</h1>

            <div class="account-container">
                <h2>Account details</h2>
                <div class="account-details">
                    <div class="account-details-img">
                        <img height='100px' src="images/user.png" alt="user icon">
                    </div>
                    <div class="account-details-name">
                        <p><?php echo "First Name: ".$user_data['firstName']?></p>
                        <p><?php echo "Last Name: ".$user_data['lastName']?></p>
                        <p><?php echo "Email: ".$user_data['email']?></p>
                        <p><?php echo "Password: *******"?></p>
                    </div>

                </div>

                <h2>update email</h2>
                <form action="" method="GET" class="account-password">
                    <br>
                    <div class="account-password-new">
                        Enter New Email:
                        <br>
                        <input type="text" name="email" id="account-text" pattern="[a-z0-9]+@[a-z0-9]+\.[a-z]{2,}" title="The email address must container an @ and a domain" required>

                        <input type="submit" id="account-btn" value="Update">
                    </div>
                    <br>
                </form>

                <h2>update password</h2>
                <form action="" method="GET" class="account-password">
                    <br>
                    <div class="account-password-old">
                        Enter Old password:
                        <input type="password" name="old-password" id="account-text" class="account-text" required>
                    </div>
                    <br>
                    <div class="account-password-new">
                        Enter New password:
                        <input type="password" name="new-password" id="account-text" required>
                        <br>
                        <br>
                        Re-enter New password:
                        <input type="password" name="c-new-password" id="account-text" required>

                        <input type="submit"  id="account-btn" value="Update">
                    </div>
                </form>


            </div>
        </main>

        
    </body>
</html>
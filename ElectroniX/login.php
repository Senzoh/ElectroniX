<?php 
    $title = 'Login';
    $styles = 'styles/styles-login.css';

    session_start();
    include_once "includes/connect.php";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // echo $email." Password: ". $password ." first name: ".$firstName." last name: ".$lastName;

        try{
            if ($email != "" && $password != ""){
                $query = "SELECT * FROM tbl_login where email = '$email' limit 1;";
                $result = mysqli_query($con,$query);
    
                if($result){
                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);
    
                        if($user_data['password'] === $password){
                            $_SESSION['id'] = $user_data['id'];
                            header("Location: index.php");
                        }else{
                            echo "<script defer> alert('Wrong Password or Email')</script>";
                        }
                    }else{
                        echo "<script defer> alert('Wrong Password or Email')</script>";
                    }
                }
            }else{
                echo "wrong";
            }
        }catch(Exception $ex){
            echo "<script defer> alert('Wrong Password or Email')</script>";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo $styles?>>
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

                </div>

                <div class="nav-bar">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php#section1">Products</a></li>
                            <li><a href="Computing.html">Contact Us</a></li>
                            <li><a href="Phones.html">About</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
     
        <main>
            <!-- MAIN content -->
            <div class="login-container">

                <div class="login-head">
                    <h1>login</h1>
                </div>

                <div class="login-body">
                    <form action="" method="post">

                        <div class="login-email">
                            <input type="text" name="email" id="email" placeholder="Email" title="The email address must container an @ and a domain" required>
                        </div>

                        <div class="login-password">
                            <input type="password" name="password" id="password" placeholder="Password" required>
                        </div>

                        <div class="login-fill">

                        </div>

                        <div class="login-register-container">
                
                            <div class="login_register">
                                <P>No account? &nbsp;</P> 
                            </div>

                            <div class="login_register">
                                <a href="register.php"><P>Register here</P></a>
                            </div>
                        
                        </div>

                        <div class="login-btn">
                            <input type="submit" name="submit" value="login">
                        </div>
        
                    </form>
                </div>

            </div>
        </main>

        <footer>
            <!-- &copy; Alexandre Rodrigues  -->
        </footer>
        
    </body>
</html>
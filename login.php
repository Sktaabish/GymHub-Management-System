<?php
include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select_users = mysqli_query($conn, "SELECT * FROM `register` WHERE email = '$email' AND password = '$password'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {

        $row = mysqli_fetch_assoc($select_users);
        if($row['type']=='admin'){
    
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_passowrd'] = $row['password'];
        $_SESSION['user_id'] = $row['id'];
        header('location:admin.php');
        }
        else{
          $_SESSION['user_email'] = $row['email'];
          $_SESSION['user_passowrd'] = $row['password'];
          $_SESSION['user_id'] = $row['id'];
          header('location:home1.php');
        }
    
    
    
      } else {
        $message[] = 'incorrect email or password!';
      }

}

?>

<?php
include('include/header.php');
?>

<div class="login_wrapper">
    <div class="username">
        <form class="login-form" action="login.php" method="post">
            <h2>Login Here</h2>
            <div class="inputbox">
                <span class="icon">
                    <ion-icon name="person-sharp"></ion-icon>
                </span>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="inputbox">
                <span class="icon">
                    <ion-icon name="lock-open"></ion-icon>
                </span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="forgetpass">
                <a href="#">Forget Password?</a>
            </div>
            <div class="button">
                <button type="submit" name="submit" class="btn">Sign In</button>
            </div>
            <div class="registerlink">
                <p>Don't have an account?<a href="register.php">Register</a></p>
            </div>
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="Message" style="text-align: center; margin-bottom:10px;">
                    <span style="color:red; ">' . $message . '</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();" style="color:#fff";></i>
                    </div>';
                }
            }
            ?>
             <div class="backbtn">
                <div class="icon">
                    <span class=icons1>
                        <a href="home.php" class="a">
                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                        </a>
                    </span>
                </div>
                <div class="back">
                    <p><a href="home.php">Back to Home Page</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include('include/script.php');
?>
<?php
include('include/header.php');
?>
<?php
session_start();

include("config.php");
if (isset($_POST["submit"])) {
    $firstname = $_POST['Firstname'];
    $lastname = $_POST['Lastname'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $confirm = $_POST['Confirm'];
    $phoneno = $_POST['Phoneno'];
    $age = $_POST['Age'];
    $type = $_POST['type'];
    $error = array();
    if (strlen($password) < 8) {
        array_push($error, "<div class='form-body'> Password must be 8 character long</div>");
    }
    if (($password != $confirm)) {
        array_push($error, "<div class='form-body'> Password does not match</div>");
    }
    if (count($error) > 0) {
        foreach ($error as $error) {
            echo "<div class='form-body'> $error </div>";
        }
    } else {
        $sq = "SELECT * FROM register WHERE email = '$email' ";
        $result = mysqli_query($conn, $sq);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            echo "<div class='form-body'> duplicate data </div> ";
        } else {
            $sql = "INSERT INTO register (firstname, lastname, email, password, confirm, phoneno, age, type) VALUES ('$firstname','$lastname', '$email', '$password', '$confirm', '$phoneno', '$age', '$type')";
            mysqli_query($conn, $sql);
            echo "<div class='form-body'> REGISTER SUCESSFULLY </div>";
        }
    }
}
?>
<div class="register_wrapper">
    <div class="fullpage">
        <form class="register-form" action="register.php" method="post">
            <h2>Register</h2>
            <div class="input-box">
                <span class="icons">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <input type="text" name="Firstname" placeholder="Enter Your Firstname" required
                    title="Please Enter Your Name In Alphabets">
            </div>
            <div class="input-box">
                <span class="icons">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <input type="text" name="Lastname" placeholder="Enter Your Lastname" required
                    title="Please Enter Your Last Name In Alphabets">
            </div>
            <div class="input-box">
                <span class="icons">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" name="Email" placeholder="Enter Your Email-id" required>
            </div>
            <div class="input-box">
                <span class="icons">
                    <ion-icon name="eye-off-outline"></ion-icon>
                </span>
                <input type="password" min="5" max="9" name="Password" placeholder="Enter Your password" required>
            </div>
            <div class="input-box">
                <span class="icons">
                    <ion-icon name="eye-off-outline"></ion-icon>
                </span>
                <input type="password" name="Confirm" placeholder="Confirm password" required>
            </div>
            <div class="input-box">
                <span class="icons">
                    <ion-icon name="call"></ion-icon>
                </span>
                <input type="text" name="Phoneno" placeholder="Enter Your Number" required>
            </div>
            <div class="input-box">
                <span class="icons">
                    <ion-icon name="accessibility-outline"></ion-icon>
                </span>
                <input type="number" name="Age" placeholder="Enter Your Age" required>
                <input type="hidden" name="type" value="user" >
            </div>
            <div class="button">
                <button type="submit" name="submit" formaction="register.php" class="btn">Submit</button>
            </div>
            <div class="loginlink">
                <br>
                <p>Already have an account? <a href="login.php"> Login</a></p>
            </div>
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
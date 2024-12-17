<?php
include 'config.php';
session_start();
$email=$_SESSION['user_email'];
if(!isset($email)){
  header('location:login.php');
}
?>

<?php
include('include/header.php');
?>

<div class="admin_wrapper">
    <div class="container">
        <div class="side">
            <p class="p1">GYM HUB</p>
            <div class="logo">
                <img src="images/gym.jpg" alt="logo" class="logo">
            </div>
            <div class="dash">
                <button id="dash-page">Dashboard</button>
                <div class="icon">
                    <ion-icon name="grid-outline"></ion-icon>
                </div>
            </div>
            <div class="register">
                <button id="register-page">REGISTERED</button>
            </div>
            <div class="member">
                <button id="member-page">MEMBER</button>
            </div>
            <div class="upload">
                <button id="upload-page">UPLOAD PRODUCT</button>
            </div>
            <div class="icon1">
                <a href="logout.php"><p class="logico"><ion-icon name="log-out"></ion-icon></p></a>
            </div>
        </div>
        <div id="wel" class="welcome">
            <p class="wel">Welcome To Admin Page</p>
        </div>
        <!-- CONTENT-->
        <div id="content"></div>
    </div>
</div>

<?php
include('include/script.php');
?>
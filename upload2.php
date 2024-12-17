<?php
include 'config.php';
session_start();
$email = $_SESSION['user_email'];
if (!isset($email)) {
    header('location:login.php');
}
?>

<?php
include('include/header.php');
?>

<?php
require_once 'config1.php';

if (isset($_POST["submit"])) {
    $productname = $_POST["name"];
    $offer = $_POST["offer"];
    $price = $_POST["price"];

    $upload_dir = "protein/";
    $image = $upload_dir . $_FILES["imageUpload"]["name"];
    $upload_file = $upload_dir . basename($_FILES["imageUpload"]["name"]);
    $imageType = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
    $check = $_FILES["imageUpload"]["size"];
    $upload_ok = 0;

    if (file_exists($upload_file)) {
        echo "<script>alert('The File Already exists')</script>";
        $upload_ok = 0;
    } else {
        $upload_ok = 1;
        if ($check !== false) {
            $upload_ok = 1;
            if ($imageType == 'jpg' || $imageType == 'avif' || $imageType == 'webp') {
                $upload_ok = 1;
            } else {
                echo '<script>alert("Please Change the Image Format")</script>';
                $upload_ok = 0;
            }
        } else {
            echo '<script>alert("The Photo size is 0. Please Change the photo")</script>';
            $upload_ok = 0;
        }
    }

    if ($upload_ok == 0) {
        echo '<script>alert("Sorry, Your File Was Not Uploaded. Please try again")</script>';
    } else {
        if ($productname != "" && $price != "") {
            move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $upload_file);

            $sql = "INSERT INTO proteinproduct (name, offer, price, image) 
                    VALUES ('$productname', '$offer', '$price', '$image')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Your Product Uploaded Successfully')</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
            }
        }
    }
}
?>

<div class="upload_wrapper">
    <div class="head">
        <p class="heading">UPLOAD PROTEIN PRODUCTS</p>
    </div>
    <div class="back">
        <a href="admin.php"><button>Back To Admin Page<br></button></a>
        <div class="icons">
            <a href="admin.php"><ion-icon name="arrow-back-outline"></ion-icon></a>
        </div>
    </div>
    <section id="upload_container">
        <form action="upload2.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" id="name" placeholder="Product Name" required>
            <input type="text" name="offer" id="offer" placeholder="Product Offer">
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">Choose Image</button>
            <input type="submit" value="Upload" name="submit">
        </form>
    </section>
</div>

<script>
    var productname = document.getElementById("name");
    var offer = document.getElementById("offer");
    var price = document.getElementById("price");
    var choose = document.getElementById("choose");
    var uploadImage = document.getElementById("imageUpload");

    function upload() {
        uploadImage.click();
    }

    uploadImage.addEventListener("change", function () {
        var file = this.files[0];
        if (productname.value == "") {
            productname.value = file.name;
        }
        choose.innerHTML = "You can change (" + file.name + ") picture";
    });
</script>

<?php
include('include/script.php');
?>
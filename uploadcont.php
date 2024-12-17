<!-- HEADER -->
<?php
include('include/header.php');
?>


<?php
include("config1.php");
error_reporting(0);
$query3 = "SELECT * FROM menproduct ";
$data3 = mysqli_query($conn, $query3);

$total3 = mysqli_num_rows($data3);

$query4 = "SELECT * FROM womenproduct";
$data4 = mysqli_query($conn, $query4);

$total4 = mysqli_num_rows($data4);

$query5 = "SELECT * FROM proteinproduct";
$data5 = mysqli_query($conn, $query5);

$total5 = mysqli_num_rows($data5);

$query6 = "SELECT * FROM shakerproduct";
$data6 = mysqli_query($conn, $query6);

$total6 = mysqli_num_rows($data6);

$query7 = "SELECT * FROM bagproduct";
$data7 = mysqli_query($conn, $query7);

$total7 = mysqli_num_rows($data7);

$query8 = "SELECT * FROM shoesproduct";
$data8 = mysqli_query($conn, $query8);

$total8 = mysqli_num_rows($data8);

$query9 = "SELECT * FROM yogaproduct";
$data9 = mysqli_query($conn, $query9);

$total9 = mysqli_num_rows($data9);
?>


<div class="uploadcont_wrapper">
    <div class="head">
        <p class="heading">UPLOAD PRODUCTS</p>
    </div>
    <div class="main">
        <div class="container">
            <div class="container1">
                <div class="cont">
                    <h4>
                        MEN PRODUCTS
                    </h4>
                    <p class="total">
                        <?php echo $total3 ?>
                    </p>
                    <div class="button">
                        <a href="upload.php"><button class="design">UPLOAD PRODUCT</button></a>
                    </div>
                </div>
                <div class="cont">
                    <h4>
                        WOMEN PRODUCTS
                    </h4>
                    <p class="total">
                        <?php echo $total4 ?>
                    </p>
                    <div class="button">
                        <a href="upload1.php"><button class="design">UPLOAD PRODUCT</button></a>
                    </div>
                </div>
                <div class="cont">
                    <h4>
                        PROTEIN PRODUCTS
                    </h4>
                    <p class="total">
                        <?php echo $total5 ?>
                    </p>
                    <div class="button">
                        <a href="upload2.php"><button class="design">UPLOAD PRODUCT</button></a>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="cont">
                    <h4>
                        SHAKER PRODUCTS
                    </h4>
                    <p class="total">
                        <?php echo $total6 ?>
                    </p>
                    <div class="button">
                        <a href="upload3.php"><button class="design">UPLOAD PRODUCT</button></a>
                    </div>
                </div>
                <div class="cont">
                    <h4>
                        BAG PRODUCTS
                    </h4>
                    <p class="total">
                        <?php echo $total7 ?>
                    </p>
                    <div class="button">
                        <a href="upload4.php"><button class="design">UPLOAD PRODUCT</button></a>
                    </div>
                </div>
                <div class="cont">
                    <h4>
                        SHOES PRODUCTS
                    </h4>
                    <p class="total">
                        <?php echo $total8 ?>
                    </p>
                    <div class="button">
                        <a href="upload5.php"><button class="design">UPLOAD PRODUCT</button></a>
                    </div>
                </div>
            </div>
            <div class="container3">
                <div class="cont">
                    <h4>
                        YOGA PRODUCTS
                    </h4>
                    <p class="total">
                        <?php echo $total9 ?>
                    </p>
                    <div class="button">
                        <a href="upload6.php"><button class="design">UPLOAD PRODUCT</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <?php
    include('include/script.php');
    ?>
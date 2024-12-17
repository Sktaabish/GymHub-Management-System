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


$sql = "SELECT * FROM menproduct";
$men_product = $conn->query($sql);


?>

<div class="men_wrapper">
    <div id="product-list">
        <div class="common-heading">
            <div class="common-heading-left">
                <h1>MENS WEAR</h1>
            </div>
        </div>
        <main>
            <?php
            while ($row = mysqli_fetch_assoc($men_product)) {
                ?>
                <div class="main">
                    <div class="card">
                        <div class="common-row col-deals">
                            <div class="common-col">
                                <img src="<?php echo $row["image"]; ?>" alt="" class="product-img">
                                <h3 class="product-title"><b>
                                        <?php echo $row["name"]; ?>
                                    </b></h3>
                                <h4>
                                    <?php echo $row["offer"]; ?>
                                </h4>
                                <h6 class="price"><i class="fa-solid fa-indian-rupee-sign"></i>
                                    <?php echo $row["price"]; ?>
                                </h6>
                                <i class="fa-solid fa-bag-shopping" id="add-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </main>
    </div>
</div>
<?php
include('include/script.php');
?>
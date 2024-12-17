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


$sql = "SELECT * FROM product";
$all_product = $conn->query($sql);


?>

<div class="product_wrapper">
    <header>
        <div class="icon">
            <a href="product.php">
                <p class="ic"><ion-icon name="home"></ion-icon></p>
            </a>
        </div>
        <div class="header-left">
            <p class="logo">GYM HUB</p>
            <p class="prod">PRODUCTS</p>
        </div>
        <div class="header-center">
            <input class="header-center-input " type="text" placeholder="Search for more products" id="search-item"
                onkeyup="search()">
            <i class="fas fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="login">
            <a href="logout.php" class="login_btn">Log Out</a>
        </div>
        <a href="cart.php" class="link">
            <div class="cart_lan"><i class="fas fa-solid fa-cart-shopping" id="cart-icon">Cart</i>
        </a>
        <span>0</span>
    </header>
    <section>
        <div class="category-row">
            <div class="category-col">
                <img src="banner/p3.png" alt="">
                <div class="dropdown">
                    <button id="top">Top Offers</button>
                    <div class="dropdown-content">
                        <div class="header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="product-title">Protein & Accessories</h3>
                                    <a href="protein.php">Protein</a>
                                    <a href="shaker.php">Shaker</a>
                                    <a href="yoga.php">Yoga Mat</a>
                                </div>
                                <div class="col">
                                    <h3 class="product-title">Outfit</h3>
                                    <a href="men.php">Mens</a>
                                    <a href="women.php">Womens</a>
                                    <a href="bag.php">Bag</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category-col">
                <img src="logo/mens-logo.webp" alt="mens-logo">
                <div class="dropdown">
                    <button id="men">Men</button>
                </div>
            </div>
            <div class="category-col">
                <img src="logo/women-logo.jpg" alt="women-logo">
                <div class="dropdown">
                    <button id="women">Women</button>
                </div>
            </div>
            <div class="category-col">
                <img src="logo/protein-logo.webp" alt="protein-logo">
                <div class="dropdown">
                    <button id="protein">Protein</button>
                </div>
            </div>
            <div class="category-col">
                <img src="logo/shaker-logo.webp" alt="shaker-logo">
                <div class="dropdown">
                    <button id="shaker">Shaker</button>
                </div>
            </div>
            <div class="category-col">
                <img src="logo/bag-logo.webp" alt="bag-logo">
                <div class="dropdown">
                    <button id="bag">Bag</button>
                </div>
            </div>
            <div class="category-col">
                <img src="logo/shoes-logo.jpeg" alt="shoes-logo">
                <div class="dropdown">
                    <button id="shoes">Shoes</button>
                </div>
            </div>
            <div class="category-col">
                <img src="logo/yoga-logo.webp" alt="yoga-logo">
                <div class="dropdown">
                    <button id="yoga">Yoga Accessories</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="banner">
            <div class="slider">
                <img src="banner/p14.webp" alt="banner1">
                <img src="banner/p9.jpg" alt="banner2">
                <img src="banner/p14.webp" alt="banner3">
                <img src="banner/p10.jpg" alt="banner4">
                <img src="banner/p14.webp" alt="banner5">
                <img src="banner/p10.jpg" alt="banner6">
            </div>
        </div>
    </section>
    <div id="content"></div>
    <div id="remove">
        <div id="product-list">
            <section>
                <div class="common-heading">
                    <div class="common-heading-left">
                        <h1>GYM WEAR & ACCESSORIES</h1>
                    </div>
                </div>
                <main>
                    <?php
                    while ($row = mysqli_fetch_assoc($all_product)) {
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
            </section>
        </div>
    </div>
    <?php
    include('include/footer.php');
    ?>
</div>
<?php
include('include/script.php');
?>
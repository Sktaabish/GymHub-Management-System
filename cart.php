<?php
include('include/header.php');
?>
<div class="cart_wrapper">
<div id="cart">
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            <div class="products-container1">
                <div class="product-header">
                    <h5 class="product-title">PRODUCT</h5>
                    <h5 class="price">PRICE</h5>
                    <h5 class="quantity">QUANTITY</h5>
                    <h5 class="total">TOTAL</h5>
                </div>
            </div>
            <div class="cart-content">

            </div>
    
            <div class="button">
                <a href="product.php"><button class="btn-cont">Continue Shopping</button></a>
                <button formaction="buy.php" class="btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
<?php
include('include/script.php');
?>
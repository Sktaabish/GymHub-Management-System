<?php
include('include/header.php');
?>
<div class="payment_wrapper">
    <header>
        <div class="container">
            <form>
                <div class="right">
                    <h3>PAYMENT</h3>
                    Accepted Card<br>
                    <img src="images/img.png" width="75">
                    <img src="images/img2.jpg" width="30">
                    <img src="images/img3.jpg" width="80">
                    <br><br>
                    Credit/Debit Card Number
                    <input type="number" name="number" placeholder="ENTER CREDIT CARD NUMBER" required>
                    Exp Month
                    <input type="number" name="month" placeholder="ENTER MONTH" required>
                    <div id="zip" class="expire" required>
                        <label>
                            Exp Year
                            <select>
                                <option>Choose Year</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                                <option>2029</option>
                                <option>2030</option>
                                <option>2031</option>
                                <option>2032</option>
                                <option>2033</option>
                            </select>
                        </label>
                        <label>
                            CVV
                            <input type="number" class="cvv" name="cvv" placeholder="CVV" required>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <button class="btnn" formaction="reload.php">PAY</button>
                </div>
            </form>
        </div>
    </header>
</div>
<?php
include('include/script.php');
?>

<?php
include('include/header.php');
?>

<?php
session_start();

include("config.php");
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $aadhar = $_POST['aadhar'];
    if ($phoneno < 10) {
        $message[] = 'Phone No Must be 10-digit ';
    }
    if ($aadhar < 12) {
        $message[] = 'Aadhar No Must be 12-digit';
    } else {
        $sq = "SELECT * FROM member WHERE email = '$email' AND phoneno = '$phoneno' ";
        $result = mysqli_query($conn, $sq);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            echo "<div class='form-body'> You Are Already Member Of Our Gym </div> ";
        } else {
            $sql = "INSERT INTO member (name, address, phoneno, email, amount, aadhar) VALUES ('$name','$address', '$phoneno', '$email', '$amount', '$aadhar')";
            mysqli_query($conn, $sql);
            header('location:payment.php');
        }
    }
}
?>

<div class="memberform_wrapper">
    <div class="form">
        <div class="head">
            <p class="heading">GET ANNUAL MEMBERSHIP</p>
        </div>
        <form action="memberform.php" method="post">
            <div class="input">
                <div class="inputgrp">
                    <p class="label">Name</p>
                    <input type="name" name="name" placeholder="Enter Your Name" required>
                    <p class="label">Address</p>
                    <input type="address" name="address" placeholder="Enter Your Address" required>
                </div>
                <div class="inputgrp">
                    <p class="label">Phone No</p>
                    <input type="number" name="phoneno" placeholder="Enter Your Phone No" required>
                    <p class="label">Email</p>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="inputgrp">
                    <p class="label">Membership Amount</p>
                    <input name="amount" value="Annual: ₹14000" readonly>
                    <p class="label">Aadhar No</p>
                    <input type="number" name="aadhar" placeholder="Enter Your Aadhar No" required>
                </div>
                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '
                        <div class="message" style="text-align: center; margin-bottom: -13px;">
                        <span style="color:#000; ">' . $message . '</span>
                        </div>
                        ';
                    }
                }
                ?>
            </div>
            <div class="button">
                    <button name="submit" class="pay">PAYMENT</button>
            </div>
        </form>
    </div>
</div>

</body>

</html>
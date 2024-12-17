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
<div class="membership_wrapper">
  <!-- top bar -->
  <section>
    <div class="timing">
      We are open from <b>Monday to Saturday</b>. Timing: <b>7:00am to 10:00pm</b>
    </div>
  </section>
  <header class="main-header">
    <!--logo-->
    <section>
      <nav>
        <div class="container">
          <div class="container">
            <img src="images/gym.jpg" alt="logo" class="logo">
          </div>
          <!--end of logo-->
          <!-- nevbar -->
          <input type="checkbox" id="myNav">
          <label for="myNav" class="checkbtn">
            <i class="qode_icon_font_awesome fas fa-bars"></i>
          </label>
          <ul>
            <li>
              <a href="home1.php">Home</a>
            </li>
            <li>
              <a href="about1.php">AboutUs</a>
            </li>
            <li>
              <a href="services1.php">Services</a>
            </li>
            <li>
              <a class="active" href="membership.php">Membership</a>
            </li>
            <li>
              <a href="product.php">Product</a>
            </li>
            <li>
              <a href="gallery1.php">Gallery</a>
            </li>
            <li>
              <a href="contact1.php">Contact</a>
            </li>
            <li>
              <a href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <section>
      <div class="container">
        <div class="title">
          <h1 class="text-bold">Membership</h1>
        </div>
      </div>
    </section>
  </header>
  <!-- end of nevbar -->
  <!-- main -->
  <!-- common plans -->
  <section class="info">
    <H2>COMMON PLANS</H2>
    <div class="container-fluid">
      <div class="first">
        <div class="monthlypg">
          <div class="Mheading">
            <h1>Monthly</h1>
            <h4>Package</h4>
          </div>
          <div class="price-sec">
            <h3>₹3500</h3>
          </div>
          <div class="Mlist">
            <ul type="none">
              <li>GYM</li>
              <li>CARDIO</li>
              <li>CROSSFIT</li>
              <li>DIET & NUTRITION</li>
            </ul>
          </div>
          <div class="button">
            <a href="memberform.php" class="btn">Book</a>
          </div>
        </div>
        <div class="quarterlypg">
          <div class="Qheading">
            <h1>Quarterly</h1>
            <h4>Package</h4>
          </div>
          <div class="price-sec">
            <h3>₹7000</h3>
          </div>
          <div class="Qlist">
            <ul type="none">
              <li>GYM</li>
              <li>CARDIO</li>
              <li>CROSSFIT</li>
              <li>DIET & NUTRITION</li>
            </ul>
          </div>
          <div class="button">
            <a href="memberform1.php" class="btn">Book</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="second">
        <div class="smonthpg">
          <div class="Sheading">
            <h1>6 Months</h1>
            <h4>Package</h4>
          </div>
          <div class="price-sec">
            <h3>₹10000</h3>
          </div>
          <div class="Slist">
            <ul type="none">
              <li>GYM</li>
              <li>CARDIO</li>
              <li>CROSSFIT</li>
              <li>DIET & NUTRITION</li>
            </ul>
          </div>
          <div class="button">
            <a href="memberform2.php" class="btn">Book</a>
          </div>
        </div>
        <div class="annualpg">
          <div class="Aheading">
            <h1>Annual</h1>
            <h4>Package</h4>
          </div>
          <div class="price-sec">
            <h3>₹14000</h3>
          </div>
          <div class="Alist">
            <ul type="none">
              <li>GYM</li>
              <li>CARDIO</li>
              <li>CROSSFIT</li>
              <li>DIET & NUTRITION</li>
            </ul>
          </div>
          <div class="button">
            <a href="memberform3.php" class="btn">Book</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end of common plans -->
    <!--prrsonal traning  -->
    <section class="line">
    </section>
    <h2>EXTRA TRAINING</h2>
    <div class="container-fluid">
      <div class="third">
        <div class="ptpg">
          <div class="PTheading">
            <h1>Personal Training</h1>
          </div>
          <div class="price-section">
            <h3>₹9000</h3>
            <h4>Per Month </h4>
          </div>
          <div class="Plist">
            <ul type="none">
              <li>WEIGHT LOSS</li>
              <li>WEIGHT LIFTING</li>
              <li>CARDIO</li>
              <li>DIET & NUTRITION</li>
            </ul>
          </div>
          <div class="button">
            <a href="memberform4.php" class="btn">Book</a>
          </div>
        </div>
        <div class="extra">
          <div class="Eheading">
            <h1>Extra Session</h1>
          </div>
          <div class="price-section">
            <h4>AS PER THE SESSION</h4>
          </div>
          <div class="Elist">
            <ul type="none">
              <li>POWER YOGA</li>
              <li>KICK BOXING</li>
              <li>CROSS FIT TRAINING</li>
              <li class="text-capitalize">If any changes needed, contact us</li>
            </ul>
          </div>
          <div class="button">
            <a href="memberform5.php" class="btn">Book</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of personal traning -->
  <!-- end of main -->
</div>
<?php
include('include/footer.php');
?>
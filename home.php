<?php
include('include/header.php');
?>

<div class="home_wrapper">
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
              <a class="active" href="home.php">Home</a>
            </li>
            <li>
              <a href="about.php">AboutUs</a>
            </li>
            <li>
              <a href="services.php">Services</a>
            </li>
            <li>
              <a href="membership.php">Membership</a>
            </li>
            <li>
              <a href="product.php">Product</a>
            </li>
            <li>
              <a href="gallery.php">Gallery</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <!-- end of nevbar -->
    <!-- text -->
    <section>
      <div class="container">
        <div class="text">
          <h1 class="display-3 text-capitalize mb-2 text-bold"> Gym is a Goal <br>To finish the Race<br> without giving
            up<br> even if it is slow</h1>
          <a href="homepage.php" class="btn btn-lg mb-5 text-uppercase site-btn sb-gradient">Join Us</a>
        </div>
      </div>
    </section>
  </header>
  <!-- address section -->
  <section class="address-section">
    <div class="address">
      <h1 class="display-6 text-capitalize mb-2 text-bold">GYM HUB, KANDIVALI WEST - MUMBAI</h1>
      <p>Gym hub is one of the best gym which have been recently opned in Janta colony, New Linking Road, Kandivali
        West, Mumbai-67 </p>
    </div>
  </section>
  <!-- end of address section -->
  <!--highlights  -->
  <section class="highlight-section">
    <div class="container-fluid">
      <div class="highlight">
        <h1>Highlights</h1>
      </div>
      <div class="box">
        <div class="column">
          <img src="images/gym1.jpg" alt="img1" class="img1">
        </div>
        <div class="column">

        </div>
        <div class="column">
          <img src="images/gym3.jpg" alt="img3" class="img3">
        </div>
      </div>
    </div>
  </section>
  <!-- end of highlights -->
  <section class="line"></section>
  <!--bmi  -->
  <section class="cal">
    <div class="container-fluid">
      <div class="box1">
        <h1>BMI Calculator</h1>
        <div class="content">

          <div class="input">
            <label for="age">Age</label>
            <input type="text" class="text-input" id="age" autocomplete="off" required />
          </div>

          <div class="gender">

            <label class="container" for="m">
              <input type="radio" name="radio" id="m" value="male">Male
              <span class="checkmark"></span>
            </label>

            <label class="container" for="f">
              <input type="radio" name="radio" id="f" value="female">Female
              <span class="checkmark"></span>
            </label>

          </div>
          <div class="containerHW">

            <div class="inputH">
              <label for="height">Height(cm)</label>
              <input type="text" id="height" required>
            </div>

            <div class="inputW">
              <label for="weight">Weight(kg)</label>
              <input type="text" id="weight" required>
            </div>
          </div>

          <button class="calculate" id="submit" onclick="calculate();">Calculate BMI</button>
        </div>
        <div class="result">
          <p>Your BMI is </p>
          <div id="result">00.00</div>
          <p class="comment"></p>
        </div>
      </div>


      <!-- modal -->
      <div id="myModal" class="modal">
        <!-- modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <p id="modalText"></p>
        </div>
      </div>
    </div>
  </section>
  <!-- end of bmi -->
  <!-- gallery -->
  <section class="line"></section>
  <section class="gallery-section">
    <div class="container-fluid">
      <div class="gallery">
        <h1>GALLERY</h1>
      </div>
      <div class="rows">
        <div class="columns">
          <img src="images/p25.jpg" alt="pic1" class="pic1">
        </div>
        <div class="columns">
          <img src="images/bg1.jpg" alt="pic2" class="pic2">
        </div>
        <div class="columns">
          <img src="images/gym2.jpg" alt="pic3" class="pic3">
        </div>
      </div>
      <div class="rows">
        <div class="columns">
          <img src="images/gym5.jpg" alt="pic1" class="pic1">
        </div>
        <div class="columns">
          <img src="images/gym3.jpg" alt="pic2" class="pic2">
        </div>
        <div class="columns">
          <img src="images/gym4.jpg" alt="pic3" class="pic3">
        </div>
      </div>
    </div>
    <div class="view">
      HAVE A FULL GLANCE OF GYM HUB
      <a href="gallery.php" class="btn btn-lg mb-5 btn1 sb-gradient">Gallery</a>
    </div>
  </section>
  <!-- end of gallery -->
</div>
<?php
include('include/footer.php');
?>
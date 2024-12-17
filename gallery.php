<?php
include('include/header.php');
?>
<div class="gallery_wrapper">
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
              <a href="home.php">Home</a>
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
              <a class="active" href="gallery.php">Gallery</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <section>
      <div class="container">
        <div class="title">
          <h1 class="text-bold">Gallery</h1>
        </div>
      </div>
    </section>
    <!-- end of nevbar -->
    <!-- gallery -->
    <section>
      <div class="container-fluid">
        <div class="images">
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

          <div class="rows">
            <div class="columns">
              <img src="images/p27.jpg" alt="pic1" class="pic1">
            </div>
            <div class="columns">
              <img src="images/p28.jpg" alt="pic2" class="pic2">
            </div>
            <div class="columns">
              <img src="images/p29.jpg" alt="pic3" class="pic3">
            </div>
          </div>
        </div>
    </section>
    <!-- end of gallery -->
  </header>
</div>
<?php
include('include/footer.php');
?>
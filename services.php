<?php
include('include/header.php');
?>
<div class="service_wrapper">
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
              <a class="active" href="services.php">Services</a>
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
    <section>
      <div class="container">
        <div class="title">
          <h1 class="text-bold">Services</h1>
          <p class="text-capitalize">We provide best services in our gym</p>
        </div>
      </div>
    </section>
  </header>
  <!-- end of nevbar -->
  <!-- mainpart --/ -->
  <section class="service_section">
    <div class="container">
      <div class="service">
        <div class="img1">
          <div class="info1">
            <i class="fa-duotone fa-0 fa-10x"></i><i class="fa-duotone fa-1 fa-10x"></i>
            <h1 class="text-capitalize">weight lifting</h1>
            <h5 class="text-capitalize">Strength training can help you manage or lose weight,<br> and it can increase
              your
              metabolism to help you burn more calories.<br>Enhance your quality of life.</h5>
            <div class="info_btn">
              <a href="benefits1.php" class="btn">BENEFITS</a>
            </div>
          </div>
          <div>
            <img src="images/p23.jpg" alt="pic1" class="WL">
          </div>
        </div>
        <div class="img2">
          <div class="info2">
            <i class="fa-duotone fa-0 fa-10x"></i><i class="fa-duotone fa-2 fa-10x"></i>
            <h1 class="text-capitalize">Cardio</h1>
            <h5 class="text-capitalize">Cardio helps lower your blood pressure by reducing <br>the levels of bad
              cholesterol and raising levels of good cholesterol.<br> This will eventually lower your resting<br> heart
              rate because your heart pumps blood more efficiently.</h5>
            <div class="info_btn">
              <a href="benefits2.php" class="btn">BENEFITS</a>
            </div>
          </div>
          <div>
            <img src="images/p19.jpg" alt="pic2" class="cardio">
          </div>
        </div>
        <div class="img3">
          <div class="info3">
            <i class="fa-duotone fa-0 fa-10x"></i><i class="fa-duotone fa-3 fa-10x"></i>
            <h1 class="text-capitalize">power yoga</h1>
            <h5 class="text-capitalize">Yoga is well known for its ability to reduce stress and anxiety,<br>and promote
              feelings of relaxation and calm.<br>Even though power yoga isless meditativeand more fast-paced
              than<br>some
              types of yoga.</h5>
            <div class="info_btn">
              <a href="benefits3.php" class="btn">BENEFITS</a>
            </div>
          </div>
          <div>
            <img src="images/p18.jpg" alt="pic3" class="PY">
          </div>
        </div>
        <div class="img4">
          <div class="info4">
            <i class="fa-duotone fa-0 fa-10x"></i><i class="fa-duotone fa-4 fa-10x"></i>
            <h1 class="text-capitalize">Cross fit training</h1>
            <h5 class="text-capitalize">A form of high intensity interval training,<br>CrossFit is a strength and
              conditioning workout that <br>is made up of functional movement performed at a high intensity level.</h5>
            <div class="info_btn">
              <a href="benefits4.php" class="btn">BENEFITS</a>
            </div>
          </div>
          <div>
            <img src="images/p22.jpg" alt="pic3" class="CFT">
          </div>
        </div>
        <div class="img5">
          <div class="info5">
            <i class="fa-duotone fa-0 fa-10x"></i><i class="fa-duotone fa-5 fa-10x"></i>
            <h1 class="text-capitalize">Kickboxing</h1>
            <h5 class="text-capitalize">Kickboxing provides an aerobic workout that burns<br>calories and can help you
              lose weight.<br>Research shows that elite and amateur kickboxers have <br>more muscle mass and lower
              percentages of body fat.</h5>
            <div class="info_btn">
              <a href="benefits5.php" class="btn">BENEFITS</a>
            </div>
          </div>
          <div>
            <img src="images/p21.jpg" alt="pic3" class="KB">
          </div>
        </div>
        <div class="img6">
          <div class="info6">
            <i class="fa-duotone fa-0 fa-10x"></i><i class="fa-duotone fa-6 fa-10x"></i>
            <h1 class="text-capitalize">Personal training</h1>
            <h5 class="text-capitalize">A personal training is where an individual who has earned<br>a certification
              that
              demonstrates they have achieved a level of<br>competency for creating and delivering safe and effective
              exercise<br>programs for apparently healthy individuals and<br>groups or those with medical clearance to
              exercise.<br><br>They motivate clients by collaborating to set goals,providing meaningful<br>feedback, and
              by being a reliable source for accountability.</h5>
            <div class="info_btn">
              <a href="benefits6.php" class="btn">BENEFITS</a>
            </div>
          </div>
          <div>
            <img src="images/p20.jpg" alt="pic2" class="PT">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of mainpart -->
</div>
<?php
include('include/footer.php');
?>
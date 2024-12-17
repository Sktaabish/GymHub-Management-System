<?php
include('include/header.php');
?>
<div class="about_wrapper">
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
              <a class="active" href="about.php">AboutUs</a>
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
    <section>
      <div class="container">
        <div class="title">
          <h1 class="text-capitalize">about us</h1>
        </div>
      </div>
    </section>
  </header>
  <!-- end of nevbar -->
  <!-- main -->
  <div class="main">
    <div class="head">
      <p class="p1">| Our Gym |</p>
    </div>
    <div class="gym-info">
      <div class="imgg">
        <img src="images/p24.jpg" alt="GYM">
      </div>
      <div class="abt">
        <p>
          When it comes to choosing the right gym for their fitness needs, people don’t look beyond Gym Hub. When it
          comes
          to making the right choice for your career, you shouldn’t look too hard either. At Gym Hub, we support a
          culture
          of openness, learning and empowering our exercise instructors and front of house staff, to do the best they
          can.

          We are one of Mumbai’s most respected fitness destinations. With a<b> 10,000 Sq Ft </b>bspace located in the
          heart of Mumbai Kandivali West, Gym Hub is dedicated to making Mumbai fitter and stronger.

          At Gym Hub, we constantly strive to better ourselves. A culture of inclusiveness and perseverance is what we
          promise. We push our team to excel at whatever they set out to do and the results are there for all to see.

          We believe in creating a work environment that mirrors our core values, of hard work, determination,
          excellence
          and support. Our management has an open door policy, and your suggestions and queries will always be given a
          patient listening, and most often will be met with excellent additions and implementation.
        </p>
      </div>
    </div>
    <!-- end of main -->
    <!-- Ambience -->
    <div class="ambience">
      <p> <b>|View Our Ambience|</b></p>

      <div class="img-cont1">
        <img class="img1" src="images/p10.jpg" alt="">
        <img class="img2" src="images/p24.jpg" alt="">
        <img class="img3" src="images/p11.jpg" alt="">
      </div>
      <div class="img-cont1">
        <img class="img4" src="images/p12.jpg" alt="">
        <img class="img5" src="images/p13.jpg" alt="">
        <img class="img6" src="images/p14.jpg" alt="">
      </div>
      <div class="img-cont1">
        <img class="img7" src="images/p15.jpg" alt="">
        <img class="img8" src="images/p16.jpg" alt="">
        <img class="img9" src="images/p17.jpg" alt="">
      </div>

    </div>
    <!-- end  Ambience -->
    <!-- card -->
    <div class="main">
      <div class="card-container">
        <div class="heading">| OUR TRAINER |</div>
        <div class="card">
          <div class="img">
            <img src="images/p1.jpg" alt="Sam">
          </div>
          <div class="info">
            <h2>Sam</h2>
            <p><b>Profession: </b> Certified trainer, Full-Time Trainer.<br>
              <b>Expert in:</b> Streching, Glutes, Body Transformation.<br>
              <b>Timing:</b> 6am to 12pm.
            </p>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <img src="images/p2.jpg" alt="John">
          </div>
          <div class="info">
            <h2>John</h2>
            <p><b>Profession: </b> Certified trainer, Full-Time Trainer.<br>
              <b>Expert in:</b> Streching, Glutes, Body Transformation.<br>
              <b>Timing:</b> 4pm to 10pm.
            </p>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <img src="images/p3.jpg" alt="Alexa">
          </div>
          <div class="info">
            <h2>Alexa</h2>
            <p><b>Profession: </b> Certified trainer, Full-Time Trainer.<br>
              <b>Expert in:</b> Streching, Glutes, Body Transformation.<br>
              <b>Timing:</b> 1pm to 3pm.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('include/footer.php');
?>
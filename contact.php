<?php
include('include/header.php');
?>
<div class="contact_wrapper">
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
              <a href="gallery.php">Gallery</a>
            </li>
            <li>
              <a class="active" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <!-- end of nevbar -->
    <!-- title -->
    <section>
      <div class="container">
        <div class="title">
          <h1 class="text-capitalize">contact us</h1>
        </div>
      </div>
    </section>
  </header>
  <!-- end of title -->
  <!-- map -->
  <section>
    <div class="container4">
      <p class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2240.402054909772!2d72.83148012439905!3d19.19992416732885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b78d7bdf4c6d%3A0x18d5397ccf528f73!2sGym%20hub!5e0!3m2!1sen!2sin!4v1679297782054!5m2!1sen!2sin"
          width="1300" height="590" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </p>
    </div>
  </section>
  <!-- end of map -->
  <!-- info -->
  <section class="details_info">
    <section>
      <div class="main">
        <div class="container">
          <div class="info">
            <div class="loc">
              <i class="fa fas fa-location-dot fa-shake fa-3x"></i>
              <p class="text-capitalize">Janta colony, New Linking Road,<br> Kandivali West, Mumbai-67</p>
            </div>
            <div class="cont">
              <i class="fa fas fa-phone-volume fa-shake fa-3x"></i>
              <p>Example4@gmail.com<br>
                9594938270</p>
            </div>
            <div class="time">
              <i class="fa fas fa-clock fa-shake fa-3x"></i>
              <p class="text-capitalize">
                Monday to Saturday: 7:00am to 10:00pm<br>
                On sunday we are closed
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of info -->
    <!-- form -->
    <section>
      <div class="container">
        <div class="form-dets">
          <div class="heading">
            <h1 class="text-capitalize">contact form</h1>
            <h3 class="text-capitalize">fill the below form</h3>
          </div>
          <div class="box">
            <form>
              <div class="input">
                <input type="text" class="name" placeholder="Your Name" required>
                <input type="email" class="email" placeholder="Email Address" required>
                <input type="text" class="phone" placeholder="Phone Number" required><br>
              </div>
              <textarea class="message" placeholder="Message" rows="5" required></textarea>
              <div class="sub-button">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </section>
  <!-- end of form -->
</div>
<?php
include('include/script.php');
?>
<?php
include('include/footer.php');
?>
<!DOCTYPE html>
<html lang="en">

  <?php require('head.php');?>

  <body>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Navigation Bar-->
    <?php require('header.php');?>
    <!-- End Navigation Bar-->
    <section class="page-title parallax-bg">
      <div class="row-parallax-bg">
        <div class="parallax-wrapper">
          <div class="parallax-bg-element">
            <img src="images/contact/contact.jpg" alt="">
          </div>
        </div>
        <div class="parallax-overlay colored"></div>
      </div>
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="title">
              <h1 class="upper">Contact Us</h1>
              <h4>Let's get in touch.</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="section-scrolling"><a id="scroll-section" href="#"><i class="hc-angle-down"></i></a>
      </div>
    </section>
    <section class="grey-bg pt-0">
      <div class="container">
        <div class="section-content" data-negative-margin="100">
          <div class="box with-box-shadow">
            <div class="row">
              <div class="col-sm-12 col-md-7">
                <form id="contact-form" action="mail.php" method="POST">
                  <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Your Name" data-required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Your Email" data-required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Your Message" data-required></textarea>
                  </div>
                  <div class="form-group">
                    <input class="btn btn-color-out" type="submit" value="Send Message">
                  </div>
                </form>
              </div>
              <div class="col-sm-12 col-md-4 col-md-offset-1">
                <div class="icon-box-basic"><i class="hc-map-pin"></i>
                  <h4>Address</h4>
                  <p>Pieter CorneliszHooftstraat 76 1071 CB Amsterdam</p>
                </div>
                <div class="icon-box-basic"><i class="hc-headphones"></i>
                  <h4>Phone</h4>
                  <p>0031 638316634</p>
                </div>
                <div class="icon-box-basic"><i class="hc-map-pin"></i>
                  <h4>Email</h4>
                  <p>expatservices@outlook.com</p>
                </div>
                <div class="icon-box-basic"><i class="hc-linkedin"></i>
                  <h4>Professional profile</h4>
                  <a href="https://www.linkedin.com/in/marieke-swaneveld/" target="_blank">Marieke Swaneveld</a>
                  <br>
                  <a href="https://www.linkedin.com/in/willeke-s-6b00a769/" target="_blank">Willeke Swaneveld</a>
                  <br>
                  <a href="https://www.linkedin.com/company/full-expat-services/" target="_blank">Full Expat Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-0">
      <div class="container-fluid">
        <div class="row">
          <iframe style="width:100% !important" src="https://www.google.com/maps/d/embed?mid=1jqRZZE7cREzzU3GAFhSaNuDbTVJT9Z-H" height="480"></iframe>
          <!-- <div class="full-width" id="map" data-title="We are here!" data-lat="40.773328" data-long="-73.960088"></div> -->
        </div>
      </div>
    </section>
    <?php require('footer.php');?>
    <div id="search-modal">
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="search-form">
              <!-- Search Form-->
              <form class="searchform">
                <div class="input-group">
                  <input class="form-control" type="search" data-required="required" name="s" placeholder="Search..." value=""><span class="input-group-btn"><button class="btn btn-color" type="submit"><span><i class="hc-search"></i></span>
                  </button>
                  </span>
                </div>
              </form>
              <!-- End Search Form-->
            </div>
          </div>
        </div>
      </div>
      <a id="close-search-modal" href="#">
        <i class="hc-close"></i>
      </a>
    </div>
    <div class="go-top">
      <a href="#top">
        <i class="hc-angle-up"></i>
      </a>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bundle.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNGOsBBZo9vf0Tw4w6aJiilSTFVfQ5GPI"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>

</html>
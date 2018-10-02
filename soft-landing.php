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
            <img src="images/about-us/bg-image-10.jpg" alt="">
          </div>
        </div>
        <div class="parallax-overlay"></div>
      </div>
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="title">
              <h1 class="upper">Our soft landing</h1>
              <h3>Full Expat Services Amsterdam</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="section-scrolling"><a id="scroll-section" href="#"><i class="hc-angle-down"></i></a>
      </div>
    </section>
    <section class="p-0">
    <hr style="width: 100%;
    height: 3px;
    background-color: #fbc76b;
    border-color: #fbc76b;
    margin: 0;">
  </section>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-4 img-side img-left">
            <div class="img-holder">
              <img class="bg-img" src="images/services/services-kid.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-sm-7 col-md-5 col-sm-offset-5 col-md-offset-7">
          <div class="title">
            <h2>Soft landing</h2>
          </div>
          <div class="row pt-25 pb-25">
            <p style="text-align:justify">
              Out of different statistics it has been proven, local support is one of the main reasons for expats to feel at home. Someone you can turn to for advice about any kind of matter or problem you encounter, from translating a Dutch letter you received from the government to giving advice on booking a weekend to Italy. We are the only expats service in Holland that offers a soft landing package. You can call us 5 days a week for every kind of question you have concerning every kind of matter or problem you have. 
              </p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-4 img-side img-right">
            <div class="img-holder">
              <img class="bg-img" src="images/soft-landing/soft-landing.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-sm-7 col-md-5">
          <p style="text-align:justify">
              We are available for any advice or questions you have 5 days a week. What kind of questions:
              <br>
              <ul>
                  <li>When you receive Dutch government/ municipality papers by post that need to be translated</li>
                  <li>You want to know where to book cheap tickets for a weekend somewhere in Europe</li>
                  <li>Your roof is leaking and you need a plumber who speaks English</li>
                  <li>You need help with doing groceries online</li>
                  <li>You have an allergy and need gluten-free products</li>
                  <li>Your son needs a Dutch language teacher</li>
                 
              </ul>
              No matter what it is you can ask us.
          </p>
        </div>
      </div>
    </section>
    <section class="grey-bg">
      <div class="container">
        <div class="title center">
          <h2>Contact us for our soft landing service now</h2>
        </div>
        <div class="btn-container text-center">
          <div class="row">
              <a class="btn btn-color-out" href="contact.php">Contact us<span class="btn-icon btn-icon-animated"><i class="hc-arrow-right"></i></span></a>
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
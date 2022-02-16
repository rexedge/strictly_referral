<?php 
$pagetitle = "Striferral";
?>
<?php include 'inc/head.php';?>

    <body>
        <!--Main Navigation-->
    <header>
      <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 100vh;
        }

        .carousel-item:nth-child(1) {
          background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(2) {
          background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(3) {
          background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #introCarousel {
            margin-top: -58.59px;
          }
          #introCarousel,
          .carousel-inner,
          .carousel-item,
          .carousel-item.active {
            height: 50vh;
          }
        }

        .navbar .nav-link {
          color: #fff !important;
        }
      </style>

      <?php include 'inc/homepage/navbar.php';?>

      <!-- Carousel wrapper -->
      <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h1 class="mb-3">Strictly Referral</h1>
                  <h5 class="mb-4">Earn strictly by referring others.</h5>
                  <button
                    class="btn btn-outline-light btn-lg m-2"
                    role="button"
                    data-mdb-toggle="modal"
                    data-mdb-target="#signupModal"
                    >Sign Up</button
                  >
                  <button
                    class="btn btn-outline-light btn-lg m-2"
                    role="button"
                    data-mdb-toggle="modal"
                    data-mdb-target="#loginModal"
                    >Login</button
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                <h1 class="mb-3">Earn From Up To Three Levels</h1>
                  <h5 class="mb-4">
                    <ul type="none">
                      <li>Level 1 -> 60%</li>
                      <li>Level 2 -> 15%</li>
                      <li>Level 3 -> 5%</li>
                    </ul>
                  </h5>
                  <button
                    class="btn btn-outline-light btn-lg m-2"
                    role="button"
                    data-mdb-toggle="modal"
                    data-mdb-target="#signupModal"
                    >Sign Up</button
                  >
                  <button
                    class="btn btn-outline-light btn-lg m-2"
                    role="button"
                    data-mdb-toggle="modal"
                    data-mdb-target="#loginModal"
                    >Login</button
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div
              class="mask"
              style="
                background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                );
              "
            >
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center px-5">
                  <h2>Withdraw Your Earnings Immediately After The First Three Refferals</h2>
                  <button
                    class="btn btn-outline-light btn-lg m-2"
                    role="button"
                    data-mdb-toggle="modal"
                    data-mdb-target="#signupModal"
                    >Sign Up</button
                  >
                  <button
                    class="btn btn-outline-light btn-lg m-2"
                    role="button"
                    data-mdb-toggle="modal"
                    data-mdb-target="#loginModal"
                    >Login</button
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
      <div class="container">
        <!--Section: Content-->
        <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
              <iframe width="100%" height="250px" 
              src="https://www.youtube.com/embed/t1Ew5GEatQM" 
              title="YouTube video player" frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen></iframe>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
              <h4><strong>About Us</strong></h4>
              <p class="text-muted">
                Striferral (STRICTLY REFERRAL) is strictly a Multi-Level Referral website that rewards 
                your zeal for referral. You earn referral bonuses on up to three levels: Level 1 - Level 3.
              </p>
              <p><strong>Referral Bonus Details.</strong></p>
              <p class="text-muted">
                <ul>
                  <li>You earn 60% on the first level.</li>
                  <li>You earn 15% on the Second Level.</li>
                  <li>You earn 5% on the third level.</li>
                </ul>
              </p>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>Frequently Asked Questions</strong></h4>

          <div class="row">
            <div class="col-md-12 mb-4">
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      What is the first question?
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                    <div class="accordion-body">
                      <strong>This is the answer to the first question.</strong> It is shown by default,
                      until the collapse plugin adds the appropriate classes that we use to style each
                      element. <code>.accordion-body</code>.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseTwo">
                      What is the second question?
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                      <strong>This is the answer to the second.</strong> It is hidden by default,
                      until the collapse plugin adds the appropriate classes that we use to style each
                      element.
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
        <!--Section: Content-->

        <!--Section: Content-->
      </div>
    </main>
    <!--Main layout-->
    
    <!--Footer-->
    <footer class="bg-light text-lg-start">
      <div class="py-4 text-center">
        <a
          role="button"
          class="btn btn-primary btn-lg m-2"
          data-mdb-toggle="modal"
          data-mdb-target="#signupModal"
        >
          Sign Up
        </a>
        <a
          role="button"
          class="btn btn-primary btn-lg m-2"
          data-mdb-toggle="modal"
          data-mdb-target="#loginModal"
        >
          Log In
        </a>
      </div>

      <hr class="m-0" />

      <div class="text-center py-4 align-items-center">
        <p>Follow Striferral on social media</p>
        <a
          href="https://www.youtube.com/"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-youtube"></i>
        </a>
        <a
          href="https://www.facebook.com/"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-facebook-f"></i>
        </a>
        <a
          href="https://twitter.com/"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-twitter"></i>
        </a>
      </div>

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-dark" target="_blank" href="">STRIFERRAL</a>
      </div>
      <!-- Copyright -->
          <?php include 'inc/signup.php';?>
          <?php include 'inc/login.php';?>
          <?php include 'inc/tandc.php';?>
    </footer>
    <!--Footer-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
    </body>
</html>

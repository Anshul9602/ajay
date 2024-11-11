<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>AjayDiam</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/" rel="icon" />
    <link href="assets/img/" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&display=swap"
      rel="stylesheet"
    />
    <!-- Vendor CSS Files -->
    <link
      href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo base_url(); ?>/assets/vendor/aos/aos.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css"
      rel="stylesheet"
    />
   
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"> </script>
  
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>/assets/css/main.css" rel="stylesheet" />

  <script src="<?php echo base_url(); ?>/assets/js/splide-extension-auto-scroll.js"></script>
  
  </head>

  <body>
    <!-- ======= Header ======= -->

    <header id="header" class="header d-flex align-items-center">
      <div
        class="container-fluid d-flex align-items-center p-0 "
        
      >
        <img
          class="d_imgmob"
          src="<?php echo base_url(); ?>/assets/img/pro/top_d.png"
          style="z-index: 99999"
        />
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <img
            class="logo_imgmob"
            src="<?php echo base_url(); ?>/assets/img/logo.png"
          />
        </a>
        <nav
          id="navbar"
          class="navbar"
          style="margin-left: auto; padding-top: 30px; padding-bottom: 10px"
        >
          <ul>
            <li><a href="<?php echo base_url(); ?>" class="home">Home</a></li>

            <li class="dropdown">
              <a href="#" class="com"
                ><span>Company</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li>
                  <a href="<?php echo base_url('About_Us'); ?>">About Us</a>
                </li>

                <li>
                  <a href="<?php echo base_url('Company'); ?>"
                    >Company/Apporach</a
                  >
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="we"
                ><span>We & Market</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <!-- <li><a href="<?php echo base_url('Our_Work'); ?>">Our Work</a></li> -->

                <li><a href="<?php echo base_url('Market'); ?>">Market</a></li>
                <li>
                  <a href="<?php echo base_url('Operation'); ?>">Operations</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="<?php echo base_url('Diamond'); ?>" class="dia"
                >Diamonds</a
              >
            </li>
            <li class="dropdown">
              <a href="#" class="info"
                ><span>Information</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="<?php echo base_url('Event'); ?>">Event</a></li>

                <li>
                  <a href="<?php echo base_url('Gallery'); ?>">Gallery</a>
                </li>
                <li><a href="<?php echo base_url('Policy'); ?>">Policy</a></li>
              </ul>
            </li>

            <li>
              <a href="<?php echo base_url('CSR'); ?>" class="csr">CSR</a>
            </li>
            <li style="padding-right:25px;">
              <a
                href="<?php echo base_url('Connect_With_Us'); ?>"
                class="contact"
                >Contact Us</a
              >
            </li>
          </ul>
        </nav>
        <!-- .navbar -->

        <i
          class="mobile-nav-toggle mobile-nav-show bi bi-list"
          style="margin-left: auto"
        ></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->



  </body>
</html>

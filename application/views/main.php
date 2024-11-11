<style>
  body {
    font-family: "Raleway", sans-serif !important;
    color: var(--color-default);
  }

  .csr .splide__arrow--prev {
    left: -3em;
    background: none;
    color: #00416c !important;
  }

  .splide__arrow svg {
    fill: #00416c;
  }

  .csr .splide__arrow--next {
    right: -3em;
    background: none;
    color: #00416c !important;
  }

  .shap .splide__pagination {
    bottom: -2em;
    color: #00416c;
  }

  .shap .splide__pagination__page {
    background: #d9d9d9;
  }

  .shap .splide__pagination__page.is-active {
    background: #00416c;
  }

  .brand .splide__arrow--prev {
    display: none;
  }

  .brand .splide__arrow--next {
    display: none;
  }

  .brand .splide:not(.is-overflow) .splide__pagination {
    /* display: none; */
    display: flex !important;
    background: #00416c;
    bottom: -2em;
  }

  .csr .splide__pagination {
    display: none;
  }

  .brand .splide__pagination__page.is-active {
    background: #00416c;
    bottom: -2em;
  }

  .brand .splide__pagination__page {
    background: #d9d9d9;
    bottom: -2em;
  }

  .sideImage {
    position: absolute;
    right: 0;
    bottom: -82px;
  }

  .textimg {
    position: absolute;
    left: 10%;
    bottom: 42%;
  }

  .sideImageL {
    position: absolute;
    left: 0;
    bottom: -82px;
  }

  .texti {
    font-size: 54px;
  }

  .textp {
    font-size: 15px;
    margin-bottom: 2px;
  }
</style>

<main id="main">
  <!-- ======= Why Intercharge Section ======= -->
  <div style="padding-top: 70px" class="position-relative">
    <img class="process_desk" src="<?php echo base_url(); ?>assets/img/pro/main.png" alt="" style="width: 100%; object-fit: cover; height: auto" />
    <img class="process_mob" src="<?php echo base_url(); ?>assets/img/pro/main_mob.png" alt="" style="width: 100%; object-fit: cover; height: auto" />

    <div class="textimg">
      <h1 class="heading-main texti" style="color: #fff">Precision Cut !</h1>
      <p class="textp" style="color: #fff">Your fancy our creation</p>
      <a href="#about"><button type="button" class="btn mt-3" style="background: #00416c; color: white; max-width: 158px; font-size:12px;padding:10px 30px;">
          Explore
        </button></a>
    </div>

    <div class="sideImage">
      <img class="side_imgmob" src="assets/img/pro/bot_d.png" alt="" />
    </div>
  </div>
  <section class="space p-0" id="about" style="height:1px;"></section>
  <!-- ======= 'One network to bridge all borders' Section ======= -->
  <section class="wf-section pd_about">
    <div class="container container2 mt-2">
      <div class="row d-flex am">
        <div class="col-md-3 mb-2 d-flex justify-content-end am" style="align-items: center">
          <h1 class="heading-main" style="font-size: 45px">About Us</h1>
        </div>
        <div class="col-md-7 discon" style="margin-left: 50px">
          <p class="para p-0">
            Ajay Diam Ltd was incorporated in 2004 in Hong Kong which is the
            primary place for business. It is primarily in the business of
            trading in polished and rough diamonds and through its associate
            company is also in the wholesale business of diamond studded gold
            Jewellery.
          </p>
          <a href="<?php echo base_url('About_Us'); ?>"><button type="button" class="btn mt-2 bm" style="background: #00416c; color: white; width: 20%">
              More
            </button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Charging Section ======= -->
  <div class="section wf-section" style="
      background-image: url('<?php echo base_url(); ?>assets/img/pro/back.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 100%;
    ">
    <div class="container container2">
      <div class="pt-3 md_top">
        <p class="heading-main text-center">Process</p>
      </div>
      <div class="process_desk container">
        <div class="row">
          <div class="col-md-4 mb-5">
            <div class="row">
              <div class="col-md-6 d-flex" style="
                  text-align: end;
                  flex-direction: column;
                  justify-content: center;
                ">
                <h4 style="color: #000000; font-weight: 700; font-size: 18px">
                  Cutting
                </h4>
                <p style="color: #868686; font-weight: 700; font-size: 13px">
                  Skilled craftsmen use specialized tools to cut diamonds with
                  extreme precision.
                </p>
              </div>
              <div class="col-md-6 p-0">
                <img src="<?php echo base_url(); ?>assets/img/pro/1.png" width="100%" />
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-md-6 d-flex" style="
                  text-align: end;
                  flex-direction: column;
                  justify-content: center;
                ">
                <h4 style="color: #000000; font-weight: 700; font-size: 18px">
                  Polishing
                </h4>
                <p style="color: #868686; font-weight: 700; font-size: 13px">
                  Polishers use advanced techniques to create the perfect
                  finish.
                </p>
              </div>
              <div class="col-md-6 p-0">
                <img src="<?php echo base_url(); ?>assets/img/pro/3.png" width="100%" />
              </div>
            </div>
          </div>
          <div class="col-md-4 p-0" style="margin: auto">
            <img src="<?php echo base_url(); ?>assets/img/pro/mid.png" width="100%" />
          </div>
          <div class="col-md-4 mb-3">
            <div class="row">
              <div class="col-md-6 p-0">
                <img src="<?php echo base_url(); ?>assets/img/pro/2.png" width="100%" />
              </div>
              <div class="col-md-6 d-flex" style="
                  text-align: start;
                  flex-direction: column;
                  justify-content: center;
                ">
                <h4 style="color: #000000; font-weight: 700; font-size: 18px">
                  Sorting
                </h4>
                <p style="color: #868686; font-weight: 700; font-size: 13px">
                  Only the finest quality diamonds are selected for our
                  collections.
                </p>
              </div>
            </div>
            <br />
            <div class="row d-flex">
              <div class="col-md-6 p-0">
                <img src="<?php echo base_url(); ?>assets/img/pro/4.png" width="100%" />
              </div>
              <div class="col-md-6 d-flex" style="
                  text-align: start;
                  flex-direction: column;
                  justify-content: center;
                ">
                <h4 style="color: #000000; font-weight: 700; font-size: 18px">
                  Cleaning
                </h4>
                <p style="color: #868686; font-weight: 700; font-size: 13px">
                  Specialized cleaning solutions and equipment are used to clean
                  diamonds during the manufacturing process.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="process_mob">
        <div class="row">
          <div class="col-md-4 col-5 mb-5">
            <div class="row">
              <div class="col-md-6 p-0">
                <img src="<?php echo base_url(); ?>assets/img/pro/1.png" width="100%" />
              </div>
              <div class="col-md-6 d-flex p-0" style="
                  text-align: center;
                  flex-direction: column;
                  justify-content: center;
                ">
                <h4 style="
                    color: #000000;
                    font-weight: 700;
                    font-size: 12px;
                    margin-top: 10px;
                  ">
                  Cutting
                </h4>
                <p style="color: #868686; font-weight: 700; font-size: 9px">
                  Skilled craftsmen use specialized tools to cut diamonds with
                  extreme precision.
                </p>
              </div>
            </div>
            <div class="space" style="height: 20px"></div>
            <div class="row">
              <div class="col-md-6 p-0">
                <img src="<?php echo base_url(); ?>assets/img/pro/3.png" width="100%" />
              </div>
              <div class="col-md-6 d-flex p-0" style="
                  text-align: center;
                  flex-direction: column;
                  justify-content: center;
                ">
                <h4 style="
                    color: #000000;
                    font-weight: 700;
                    font-size: 12px;
                    margin-top: 10px;
                  ">
                  Polishing
                </h4>
                <p style="color: #868686; font-weight: 700; font-size: 9px">
                  Polishers use advanced techniques to create the perfect
                  finish.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-2 p-0 d-flex justify-content-center" style="align-items: center; margin-top: -25%">
            <img src="<?php echo base_url(); ?>assets/img/process.png" style="position: relative" width="51" />
          </div>
          <div class="col-md-4 col-5 mb-3">
            <div class="row">
              <div class="col-md-6 p-0">
                <img src="<?php echo base_url(); ?>assets/img/pro/2.png" width="100%" />
              </div>
              <div class="col-md-6 d-flex p-0" style="
                  text-align: center;
                  flex-direction: column;
                  justify-content: center;
                ">
                <h4 style="
                    color: #000000;
                    font-weight: 700;
                    font-size: 12px;
                    margin-top: 10px;
                  ">
                  Sorting
                </h4>
                <p style="color: #868686; font-weight: 700; font-size: 9px">
                  Only the finest quality diamonds are selected for our
                  collections.
                </p>
              </div>
            </div>

            <div class="space" style="height: 45px"></div>
            <div class="row d-flex">
              <div class="col-md-6 p-0">
                <img src="<?php echo base_url(); ?>assets/img/pro/4.png" width="100%" />
              </div>
              <div class="col-md-6 d-flex" style="flex-direction: column; justify-content: center">
                <h4 style="
                    color: #000000;
                    font-weight: 700;
                    font-size: 12px;
                    margin-top: 10px;
                  ">
                  Cleaning
                </h4>
                <p style="color: #868686; font-weight: 700; font-size: 9px">
                  Specialized cleaning solutions and equipment are used to clean
                  diamonds during the manufacturing process.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img class="mobile_img" src="<?php echo base_url(); ?>assets/img/pro/banner.png" width="100%" />
  <!-- ======= 3-Products-Scroll-Down Section ======= -->

  <!-- ======= 3-Products-Scroll-Down Section ======= -->
  <div class="wf-section position-relative" style="
      background-image: url('<?php echo base_url(); ?>assets/img/pro/our_bc.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 100%;
    ">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center heading-main text-center">
          <span style="padding-top: 20px"> Our Work</span>
        </div>

        <div class="col-12 container" style="padding-top: 30px">
          <div class="">
            <div class="row">
              <div class="col-md-4">
                <div class="d-flex justify-content-center">
                  <div class="col-12 text-center border_shape" style="font-size: 18px; font-weight: 700">
                    Shape
                  </div>
                </div>

                <div class="shap" style="margin-top: 34px">
                  <div class="splide" id="shapeSlider" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                      <ul class="splide__list">
                        <li class="splide__slide">
                          <img src="<?php echo base_url(); ?>assets/img/d/d4.png" width="168" class="d-flex mx-auto" />
                          <p class="d-flex justify-content-center mx-auto" style="color: #000000">
                            Single cut
                          </p>
                        </li>
                        <li class="splide__slide">
                          <img src="<?php echo base_url(); ?>assets/img/d/d6.png" width="168" class="d-flex mx-auto" />
                          <p class="d-flex justify-content-center mx-auto" style="color: #000000">
                            Full Cut
                          </p>
                        </li>
                        <li class="splide__slide">
                          <img src="<?php echo base_url(); ?>assets/img/d/d3.png" width="168" class="d-flex mx-auto" />
                          <p class="d-flex justify-content-center mx-auto" style="color: #000000">
                            Princess
                          </p>
                        </li>

                        <li class="splide__slide">
                          <img src="<?php echo base_url(); ?>assets/img/d/d1.png" width="168" class="d-flex mx-auto" />
                          <p class="d-flex justify-content-center mx-auto" style="color: #000000">
                            Tapered Baguette
                          </p>
                        </li>
                        <li class="splide__slide">
                          <img src="<?php echo base_url(); ?>assets/img/d/d7.png" class="d-flex mx-auto" />
                          <p class="d-flex justify-content-center mx-auto" style="color: #000000">
                            Straight Baguette
                          </p>
                        </li>
                        <li class="splide__slide">
                          <img src="<?php echo base_url(); ?>assets/img/d/d2.png" width="168" class="d-flex mx-auto" />
                          <p class="d-flex justify-content-center mx-auto" style="color: #000000">
                            Pear
                          </p>
                        </li>


                        <li class="splide__slide">
                          <img src="<?php echo base_url(); ?>assets/img/d/d5.png" width="168" class="d-flex mx-auto" />
                          <p class="d-flex justify-content-center mx-auto" style="color: #000000">
                            Marquise
                          </p>
                        </li>


                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-center size_mob" style="margin-bottom: 120px">
                <div class="row d-flex justify-content-center">
                  <p class="text-center border_size p-0" style="font-size: 18px; font-weight: 700">
                    Size
                  </p>
                  <div class="col-12 d-flex justify-content-center" style="margin-top: 24px">
                    <img src="<?php echo base_url(); ?>assets/img/pro/size.png" />
                  </div>
                  <div class="col-12 d-flex justify-content-center" style="margin-top: 24px">
                    <p class="p_size" style="font-size: 18px; color: #000000; font-weight: 500">
                      0.60 mm - 5.20 mm
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-center">
                <div class="" style="
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                  ">
                  <p class="border_b" style="font-size: 18px; font-weight: 700">
                    Strength
                  </p>
                  <img style="height: fit-content" src="<?php echo base_url(); ?>assets/img/pro/str.png" />
                  <div class="process_desk">
                    <div class="col-12 d-flex justify-content-center mb-5" style="margin-top: 24px">
                      <p class="col-md-8 text-center " style="color: #000000; font-weight: 500">
                        Size based service, Work under program, Fast delivery,
                        100% transparency
                      </p>
                    </div>
                  </div>
                  <div class="process_mob">
                    <div class="row d-flex justify-content-center mb-5" style="margin-top: 24px">
                      <p class="col-8 text-center p_size" style="color: #000000; font-weight: 500">
                        Size based service, Work under program, Fast delivery,
                        100% transparency
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sideImageL">
      <img class="d_imgmob" src="assets/img/pro/bot_l.png" alt="" />
    </div>
  </div>
  <div class="container container1 text-center process_mob">
    <div class="text-center csr">
      <p class="heading-main" style="font-size: 35px">CSR</p>
      <div>
        <div class="splide" id="csrSlider1" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <video width="100%" height="173" controls playsinline>
                  <source src="<?php echo base_url(); ?>assets/img/csr.mp4" type="video/mp4">

                </video>
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/pro/crs.png" style="width: 100%" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/pro/crs.png" style="width: 100%" />
              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/pro/crs.png" style="width: 100%" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <a href="<?php echo base_url('CSR'); ?>"><button type="button" class="btn mt-3" style="
          background: #00416c;
          color: white;
          font-size: 12px;
          padding: 10px 40px;
        ">
        Know More
      </button></a>
  </div>
  <section class="section bg1">
    <div class="container mob_c">
      <div class="row d-flex j_center1" style="justify-content: space-between">
        <style>
          .border_r {
            border-right: 2px solid #dcdcdc;
          }

          @media screen and (max-width: 768px) {
            .border_r {
              border-right: none !important;
            }

            .j_center1 {
              justify-content: center !important;
            }

            .bg1 {
              background-color: #ededed;
            }

            .mob_c {
              padding: 0 0;
            }
          }
        </style>
        <div class="col-md-7 row d-flex justify-content-center border_r" style="align-items: center">
          <div class="col-md-4 text-center mb-4">
            <img src="<?php echo base_url(); ?>assets/img/pro/b1.png" />
          </div>
          <div class="col-md-8 brand">
            <div class="splide" id="brandSlider" role="group" aria-label="Splide Basic HTML Example">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide d-flex aling-items-center" style="align-items: center">
                    <img src="assets/img/pro/f1.png" width="60%" class="mx-auto d-flex" />
                  </li>
                  <li class="splide__slide d-flex aling-items-center" style="align-items: center">
                    <img src="assets/img/pro/f2.png" width="60%" class="mx-auto d-flex" />
                  </li>
                  <li class="splide__slide d-flex aling-items-center" style="align-items: center">
                    <img src="assets/img/pro/f3.png" width="80%" class="mx-auto d-flex" />
                  </li>

                  <li class="splide__slide d-flex aling-items-center" style="align-items: center">
                    <img src="assets/img/pro/f4.png" width="60%" class="mx-auto d-flex" />
                  </li>
                  <li class="splide__slide d-flex aling-items-center" style="align-items: center">
                    <img src="assets/img/pro/f5.png" width="60%" class="mx-auto d-flex" />
                  </li>
                  <li class="splide__slide d-flex aling-items-center" style="align-items: center">
                    <img src="assets/img/pro/f6.png" width="80%" class="mx-auto d-flex" />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 process_desk text-center csr">
          <p class="heading-main" style="font-size: 35px">CSR</p>
          <div>
            <div class="splide" id="csrSlider" role="group" aria-label="Splide Basic HTML Example">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <video width="420" height="220" controls playsinline>
                      <source src="<?php echo base_url(); ?>assets/img/csr.mp4" type="video/mp4">
                    </video>
                  </li>
                  <li class="splide__slide">
                    <img src="assets/img/pro/crs.png" style="width: 100%" />
                  </li>
                  <li class="splide__slide">
                    <img src="<?php echo base_url(); ?>assets/img/pro/crs.png" style="width: 100%" />
                  </li>

                  <li class="splide__slide">
                    <img src="<?php echo base_url(); ?>assets/img/pro/crs.png" style="width: 100%" />
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <a href="<?php echo base_url('CSR'); ?>"><button type="button" class="btn mt-5" style="background: #00416c; color: white">
              Know More
            </button></a>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- End #main -->
<!-- Swiper JS -->

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    new Splide('#shapeSlider', {
      type: 'loop',
      drag: 'free',
      focus: 'center',
      perPage: 2,
      autoScroll: {
        speed: 1,
      },

      focus: "center",
    }).mount(window.splide.Extensions);

    new Splide("#brandSlider", {
      mediaQuery: "min",
      type: "loop",
      breakpoints: {
        240: {
          perPage: 3,
        },
        640: {
          perPage: 3,
        },
        767: {
          perPage: 3,
        },
        1024: {
          perPage: 3,
        },
      },
      autoScroll: {
        speed: 1,
      },
      focus: "center",
    }).mount(window.splide.Extensions);
  });



  new Splide("#csrSlider", {
    mediaQuery: "min",
    type: "loop",
    autoplay: true,
    interval: 6000,
    perPage: 1,
    perMove: 1,
  }).mount();
  new Splide("#csrSlider1", {
    mediaQuery: "min",
    type: "loop",
    perPage: 1,
    perMove: 1,
  }).mount();
</script>
<script src="path-to-the-file/splide.min.js"></script>
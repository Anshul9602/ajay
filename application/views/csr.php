<style>
  .csr {
    color: #ebc12c !important;
  }


  .gallery .splide__pagination__page.is-active {
    background: #00416C;
    bottom: -2em;
  }

  .gallery .splide__pagination__page {
    background: #D9D9D9;
    bottom: -2em;
  }

  .gallery .splide__arrow--prev {
    left: -3em;
    background: none;
  }

  .gallery .splide__arrow svg {
    fill: #00416C;
  }

  .gallery .splide__arrow--next {
    right: -3em;
    background: none;
  }
</style>

<section class="section_desk section_mob">
  <div class="process_mob">

    <div class="container container2 d-flex justify-content-center " style="flex-direction: column;align-items: center;">
      <div class="row bg2">
        <div class="col-md-5 d-flex justify-content-center text-center">
          <h4 class="d-flex justify-content-center mt-3 mb-3 heading-main" style="font-size: 40px;color: white;align-items: center;">
            Corporate & Social
            Responsibility</h4>
        </div>



        <div class="col-md-7 d-flex justify-content-center p-0">
          <div class="">
            <img src="assets/img/csr/m.png" width="100%" />
          </div>
        </div>
      </div>

      <div class="para ">
        <p>
          Since inception the company has taken its CS responsibility to the community
          very seriously and is actively involved in organizing regular blood camps and
          supporting a school for the differently abled through a trust. It has also been a
          regular contributor to United World Centre and HKICC and it continues to look
          for worthy causes to support.
        </p>
      </div>

    </div>
  </div>
  <div class="container  " style="padding:20px 50px;">
    <div class="row">
      <div class="col-md-6 process_desk" style="max-width: 523px">
        <img src="assets/img/csr/m.png" style="position: relative; width: 100%" />

      </div>
      <div class="col-md-6 process_desk">
        <h1 class="heading-main">Corporate & Social
          Responsibility</h1>
        <div class="para p-0">
          <p>
            Since inception the company has taken its CS responsibility to the community
            very seriously and is actively involved in organizing regular blood camps and
            supporting a school for the differently abled through a trust. It has also been a
            regular contributor to United World Centre and HKICC and it continues to look
            for worthy causes to support.
          </p>
        </div>

      </div>
      <h1 class="heading-main text-center mt-5">Gallery</h1>
      <div class="gallery process_desk container" style="margin-top: 30px;padding:20px 50px;">

        <div class="splide" id="mainSlider" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/1.png" alt="" />
              </li>
              <li class="splide__slide">
                <video width="100%" height="200" controls playsinline>
                  <source src="<?php echo base_url(); ?>assets/img/csr.mp4" type="video/mp4">
                </video>
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/2.png" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/3.png" alt="" />
              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/1.png" alt="" />

              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/2.png" alt="" />

              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/3.png" alt="" />

              </li>



            </ul>
          </div>
        </div>
      </div>
      <div class="gallery process_mob ">
        <div class="splide" id="mainSlider1" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
              <video width="100%" height="200" controls playsinline>
                  <source src="<?php echo base_url(); ?>assets/img/csr.mp4" type="video/mp4">
                </video>
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/1.png" class="d-flex mx-auto" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/2.png" class="d-flex mx-auto" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/3.png" class="d-flex mx-auto" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/1.png" class="d-flex mx-auto" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/2.png" class="d-flex mx-auto" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/3.png" class="d-flex mx-auto" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/1.png" class="d-flex mx-auto" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/2.png" class="d-flex mx-auto" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/csr/3.png" class="d-flex mx-auto" alt="" />
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  new Splide("#mainSlider", {
    mediaQuery: "min",
    type: "loop",
    perPage: 3,
    perMove: 1,
    focus: "center",
  }).mount();
  new Splide("#mainSlider1", {
    mediaQuery: "min",
    type: "loop",
    perPage: 1,
    perMove: 1,
    focus: "center",
  }).mount();
</script>
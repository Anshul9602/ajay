<style>
  .info {
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
<style>
    .nav-tabs {
      border-bottom: 1px solid #ddd;
    }

    .nav-tabs {
      --bs-nav-tabs-border-width: 0px;
    }

    .nav-tabs .nav-item .active {
      border-bottom: 2px solid #00416C !important;
    }

    .ws {
      width: 35%;
    }

    .splide__arrow--prev {
      left: -3em;
      background: none;
      color: #00416C;
    }

    .splide__arrow--next {
      right: -3em;
      background: none;
      color: #00416C;
    }

    @media screen and (max-width: 768px) {
      .ws {
        width: 100%;
      }

      .splide__arrow--prev {
        left: -1em;
        background: none;
        color: #00416C;
      }

      .splide__arrow--next {
        right: -1em;
        background: none;
        color: #00416C;
      }
      .mob_font1{
        font-size: 16px !important;
      }
    }
  </style>

<section style="padding-top: 60px;margin-top:70px;">

  <div class="container">
    <div class="row">

      <h1 class="heading-main text-center um">Gallery</h1>


    </div>
  </div>

 
  <div class="tab mt-2">
    <div class="container d-flex justify-content-center">
      <ul class="nav nav-tabs ws" id="myTab" role="tablist" style="display: contents;">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
            <h1 class="heading-main mob_font1"  style="font-size:25px ;">Factory</h1>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
            <h1 class="heading-main mob_font1" style="font-size:25px ;">Exhibitions</h1>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="false">
            <h1 class="heading-main mob_font1" style="font-size:25px ;">All</h1>
          </button>
        </li>


      </ul>
    </div>

    <div class="tab-content mt-5 mb-5 " id="myTabContent">
      <div class="tab-pane fade show active container  text-center" style="max-width:1150px ;" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <div class="splide " id="mainSlider" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g1.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g2.png" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g3.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g1.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g2.png" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g3.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g1.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g2.png" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g3.png" alt="" />
              </li>
            </ul>
          </div>
        </div>
        
      </div>
      <div class="tab-pane fade container text-center" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

      </div>
      <div class="tab-pane fade container  text-center" id="all-tab-pane" style="max-width:1150px ;" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
        <div class="splide " id="mainSlider3" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g1.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g2.png" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g3.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g1.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g2.png" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g3.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g1.png" alt="" />
              </li>
              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g2.png" alt="" />

              </li>

              <li class="splide__slide">
                <img src="<?php echo base_url(); ?>assets/img/g3.png" alt="" />
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
    breakpoints: {
      340: {
        perPage: 1,

      },
      640: {
        perPage: 1.5,

      },
      767: {
        perPage: 1.5,

      },
      1024: {
        perPage: 3,

      },
    },
    focus: "center",
  }).mount();
  
  new Splide("#mainSlider3", {
    mediaQuery: "min",
    type: "loop",
    breakpoints: {
      640: {
        perPage: 1,

      },
      767: {
        perPage: 2,

      },
      1024: {
        perPage: 3,

      },
    },
    focus: "center",


  }).mount();
</script>
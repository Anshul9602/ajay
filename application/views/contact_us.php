<style>
    .contact {
        color: #EBC12C !important;

    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 36px;
        margin: auto;
        text-align: center;
        background-color:
            #F5F5F5;
    }

    .colm {
        width: 95%;
    }

    input {
        max-width: 219px;
        background-color: #D9D9D9;
        border-radius: 8px;
        border-color: none !important;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 15px;
        border-width: 0px;
        font-size: 14px;
    }

    textarea {
        max-width: 219px;
        background-color: #D9D9D9;
        border-radius: 8px;
        border-color: none;
        padding-left: 10px;
        border-width: 0px;
        font-size: 14px;
        color: rgb(118, 118, 118);
    }

    .sub {
        max-width: 219px;
        background-color: #D9D9D9;
        border-radius: 8px;
        border-color: none;
        padding-left: 30px 10px;
    }

    .ts {
        text-align: left;
    }

    .card_mob {
        display: none !important;
    }

    @media screen and (max-width: 768px) {
        .m_in {
            margin-left: 20px;

        }

        .tc {
            text-align: center;
        }

        .jc {
            justify-content: center;
        }

        .b_mob {
            border-left: none !important;
            padding-left: 0px !important;
        }

        .mob_r {
            padding: 20px 15px !important;
            margin-left: 0px !important;
        }

        input {
            max-width: 100%;

        }

        textarea {
            max-width: 100%;
            color: rgb(118, 118, 118);
        }

        .card_mob {
            display: block !important;
            max-width: 320px !important;
        }

        .card_desk {
            display: none;
        }

        .c_p {
            font-size: 13px !important;
        }
    }
</style>

<section class="md_top" style="padding-top: 60px;margin-top:70px;">
    <div class="container text-center">
        <h1 class="heading-main mb-5 um" style="margin-bottom: 40px !important;">Contact Us</h1>

        <div class=" card card_mob " sty>
            <div class="container">
                <div class="row mob_r" style="padding: 50px 0px;margin-left:70px;">
                    <div class="col-md-4 text-center " style="margin:auto;">
                        <div class="border_side">
                            <div class="colm">
                                <h1 class="heading-main  " style="font-size:25px;">Our Address</h1>
                                <p class="c_p" style="font-size:17px;color:#000000;">
                                    FLAT 1301 A-B, 13/F, HART HOUSE,
                                    12-14 HART AVENUE, TSIM SHA
                                    TSUI, KOWLOON, Hong Kong
                                </p>
                            </div>
                            <div class="colm mt-5">
                                <h1 class="heading-main " style="font-size:25px;">Our Phone Numbers</h1>
                                <p class="c_p" style="font-size:17px;color:#000000;">
                                    Tel: (+852) 2316 7662<br>
                                    Fax: (+852) 2316 7611
                                </p>
                            </div>
                            <div class="colm mt-5">
                                <h1 class="heading-main  " style="font-size:25px;">Our Email</h1>
                                <p class="c_p" style="font-size:17px;color:#000000;">
                                    info@ajaydiamltd.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" card card_desk">
            <div class="container">
                <div class="row mob_r" style="padding: 50px 0px;margin-left:70px;">
                    <div class="col-md-4 text-center " style="margin:auto;">
                        <div class="border_side">
                            <div class="colm">
                                <h1 class="heading-main  " style="font-size:25px;">Contact Us</h1>
                                <p style="font-size:17px;color:#000000;">
                                    FLAT 1301 A-B, 13/F, HART HOUSE,
                                    12-14 HART AVENUE, TSIM SHA
                                    TSUI, KOWLOON, Hong Kong
                                </p>
                            </div>
                            <div class="colm mt-5">
                                <h1 class="heading-main " style="font-size:25px;">Our Phone Numbers</h1>
                                <p style="font-size:17px;color:#000000;">
                                    Tel: (+852) 2316 7662<br>
                                    Fax: (+852) 2316 7611
                                </p>
                            </div>
                            <div class="colm mt-5">
                                <h1 class="heading-main  " style="font-size:25px;">Our Email</h1>
                                <p style="font-size:17px;color:#000000;">
                                    info@ajaydiamltd.com
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-8 ts tc b_mob" style=" border-left: 1px solid #00416C;padding-left:20px;">
                        <h1 class="heading-main  " style="font-size:25px;">Send Us A Query</h1>
                        <p class="c_p" style="font-size:13px;color:#000000; margin-right:20px;">
                            At Ajaydiam, we are dedicated to providing high-quality diamonds and exceptional customer service. Our experienced
                            staff is available to answer your questions and assist you in selecting the perfect diamond for your needs. Contact us
                            today and let us help you make an informed decision.
                        </p>
                        <form action="insert_data" method="post">
                            <div class="row col-md-10 tc d-flex jc">
                                <div class="col-md-4 m_in" style="margin-top: 10px; max-width: 219px;">
                                    <input type="text" name="name" required placeholder="Name">
                                </div>
                                <div class="col-md-5" style="margin-top: 10px; max-width: 219px;margin-left:20px;">
                                    <input type="email" name="email" required placeholder="Email">
                                </div>
                                <div class="col-md-5 m_in" style="margin-top: 15px; max-width: 219px;">
                                    <input type="tel" name="phone" data-validation="number" data-validation-allowing="negative,number" datavalidation-ignore="$" required  id="phone_no" placeholder="Phone Number" pattern="\d*">
                                </div>
                            </div>
                            <div class="row col-md-10 tc d-flex jc">
                                <h1 class="heading-main  ts tc" style="font-size:25px;margin-top:40px;">Diamond Details</h1>
                                <div class="col-md-5 m_in" style="margin-top: 10px; max-width: 219px;">
                                    <input type="text" name="cut"  placeholder="Cut">
                                </div>
                                <div class="col-md-5" style="margin-top: 10px; max-width: 219px;margin-left:20px;">
                                    <input type="text" name="color"  placeholder="Color">
                                </div>
                                <div class="col-md-5 m_in" style="margin-top: 15px; max-width: 219px;">
                                    <input type="text" name="clarity"  placeholder="Clarity">
                                </div>
                                <div class="col-md-5" style="margin-top: 15px; max-width: 219px;margin-left:20px;">
                                    <input type="text" name="size"  placeholder="Size">
                                </div>
                                <div class="col-md-5 m_in" style="margin-top: 15px; max-width: 219px;">
                                    <textarea name="message" rows="4"  placeholder="Message" cols="21"></textarea>
                                </div>
                                <div class="col-md-5" style="margin-top: 15px; max-width: 219px;margin-left:20px;">
                                    <input type="text" name="price"  placeholder="Price Range"><br>
                                    <button type="submit" value="submit" class="btn btn-primary" style="margin-top:24px;padding:5px 35px;background:#00416C;    font-family: 'MADE Sunflower Regular';">Submit</button>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
        <div class=" card card_mob mt-4">
            <div class="container">
                <div class="row mob_r" style="padding: 50px 0px;margin-left:70px;">
                    <div class="col-md-8 ts tc b_mob" style=" border-left: 1px solid #00416C;padding-left:20px;">
                        <h1 class="heading-main  " style="font-size:25px;">Send Us A Query</h1>
                        <p style="font-size:13px;color:#000000; margin-right:20px;">
                            At Ajaydiam, we are dedicated to providing high-quality diamonds and exceptional customer service. Our experienced
                            staff is available to answer your questions and assist you in selecting the perfect diamond for your needs. Contact us
                            today and let us help you make an informed decision.
                        </p>
                        <form action="insert_data" method="post">
                            <div class="row col-md-11 tc d-flex jc">
                                <div class="col-md-4 " style="margin-top: 10px; min-width: 219px;">
                                    <input type="text" name="name" required placeholder="Name" style="min-width:100%;">
                                </div>
                                <div class="col-md-5" style="margin-top: 10px; min-width: 219px;">
                                    <input type="email" name="email" required placeholder="Email" style="min-width:100%;">
                                </div>
                                <div class="col-md-5 " style="margin-top: 15px; min-width: 219px;">
                                <input type="tel" name="phone"  data-validation-allowing="negative,number" input name="color" data-validation="number" datavalidation-ignore="$" required  id="phone_no" placeholder="Phone Number"  pattern="\d*"style="min-width:100%;">
                                   
                                </div>
                            </div>
                            <div class="row col-md-11 tc d-flex jc">
                                <h1 class="heading-main  ts tc" style="font-size:25px;padding-top:20px;">Diamond Details</h1>
                                <div class="col-md-5 " style=" min-width: 219px;">
                                    <input type="text" name="cut"  placeholder="Cut" style="min-width:100%;">
                                </div>
                                <div class="col-md-5" style="margin-top: 10px; min-width: 219px;">
                                    <input type="text" name="color"  placeholder="Color" style="min-width:100%;">
                                </div>
                                <div class="col-md-5 " style="margin-top: 15px; min-width: 219px;">
                                    <input type="text" name="clarity"  placeholder="Clarity" style="min-width:100%;">
                                </div>
                                <div class="col-md-5 " style="margin-top: 15px; min-width: 219px;">
                                    <input type="text" name="size"  placeholder="Size" style="min-width:100%;">
                                </div>


                                <div class="col-md-5 " style="margin-top: 15px; min-width: 219px;">
                                    <input type="text" name="price"  placeholder="Price Range" style="min-width:100%;">
                                </div>
                                <div class="col-md-5 " style="margin-top: 15px; min-width: 219px;">
                                    <textarea name="message" rows="4"  placeholder="Message" cols="21" style="min-width:100%;"></textarea>
                                </div>
                                <div class="col-md-5" style="margin-top: 5px;margin-bottom:10px; max-width: 219px;">

                                    <button type="submit" class="btn btn-primary" style="font-family: 'MADE Sunflower Regular';margin-top:24px;padding:5px 35px;background:#00416C;">Submit</button>

                                </div>



                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>




</section>
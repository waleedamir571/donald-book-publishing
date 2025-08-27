<?php include 'partials/header.php'; ?>
<div class="body-content">

    <style>
        section.form-section.custom-padding {
            padding: 0px 0;
            margin-bottom: 70px;
        }

        /* section.banner.contact-banner.custom-padding {
            padding-bottom: 0 !important;
        } */

        .fnone{
            display: none !important;
        }
    </style>
    

 <section class=" custom-padding bg-ctabottom pt-50">
        <div class="container-wrapper">
            <div class="row d-flex justify-content-around align-items-center">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="myheading-custom">
                        <h2>Ready to Begin?</h2>
                        <p>
                            Initiate the first step to your publishing success.
                        </p>
                        <p class="my-bigp clr-changed">
                            <strong>Join over thousands of Bestselling Authors Today.</strong>
                        </p>
                    </div>
                    <form action="backend/action/action.php" method="POST">
                        <input type="hidden" name="type" value="formLong">
                        <div class="form-style">
                            <div class="mb-3">
                                <input name="full_name" type="text" maxlength="60" id="txtcnsite"
                                    class="form-control cn" placeholder="Enter Your full Name" required
                                    aria-label="Full Name">

                            </div>
                            <div class="mb-3">
                                <div class="form-group iti-group" aria-hidden="true">
                                    <input name="phone_no" type="tel" id="phone_no" maxlength="10" minlength="10"
                                        tabindex="-1"
                                        class="phone-js form-control js-byphone js-valGet js-numbervalid pn"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="mb-3">
                                <input name="email" type="email" maxlength="60" id="txtemsite" class="form-control em"
                                    placeholder="Enter Your Email Address" required>

                            </div>

                            <div class="mb-3">

                                <input name="message" type="text" id="txttrsite1" class="form-control"
                                    placeholder="Message here">

                            </div>

                            <button type="submit" class="btn btn-primary web-blue-btn">submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="mycta-footerimg">
                        <!-- <img loading="lazy" alt="donalds Book Publishing" src="assets/images/Book-writing/footer.png"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <section class=" contact-banner custom-padding pb-25">
        <div class="container-wrapper text-center bannerh1">
            <div class="contactbanner">
              
                <h1 class="">Contact Us</h1>
                <h2>Your Story Starts Here
                    Let’s Bring It to Life!</h2>
            </div>
            <div class="banner-contact-details ">
                <div class="row d-flex justify-content-center mt-5 mb-5">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="contactboxs">
                                    <img loading="lazy" alt="donalds Book Publishing"
                                        src="assets/images/locationss.webp">
                                    <p>401 Park Avenue South New York NY 10016</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="contactboxs">
                                    <img loading="lazy" alt="donalds Book Publishing" src="assets/images/emails.webp">
                                    <p>
                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@donaldsbookpublishing.com"
                                            target="_blank">
                                             Email: info@donaldsbookpublishing.com
                                            </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="contactboxs">
                                    <img loading="lazy" alt="donalds Book Publishing"
                                        src="assets/images/support-ico.webp">
                                    <p> <a href="tel:(551) 290-8897">(551) 290-8897</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?php include 'partials/footer.php'; ?>
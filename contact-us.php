<?php include 'partials/header.php'; ?>
<div class="body-content">

    <style>
        section.form-section.custom-padding {
            padding: 0px 0;
            margin-bottom: 70px;
        }

        section.banner.contact-banner.custom-padding {
            padding-bottom: 0 !important;
        }
    </style>
    <section class="banner contact-banner custom-padding">
        <div class="container-wrapper text-center bannerh1">
            <div class="contactbanner">
                <img class="w-12" loading="lazy" alt="Seedspire Publishing" src="./assets/images/home/logo2.png">
                <h1 class="">Contact Us</h1>
                <h2>Your Story Starts Here
                    Let’s Bring It to Life!</h2>
            </div>
            <div class="banner-contact-details ">
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="contactboxs">
                                    <img loading="lazy" alt="Seedspire Publishing" src="assets/images/locationss.webp">
                                    <p>401 Park Avenue South New York NY 10016</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="contactboxs">
                                    <img loading="lazy" alt="Seedspire Publishing" src="assets/images/emails.webp">
                                    <p><a href="mailto:info@testepublishing.com">info@testepublishing.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="contactboxs">
                                    <img loading="lazy" alt="Seedspire Publishing" src="assets/images/support-ico.webp">
                                    <p><a href="tel:+1 (833) 123-4567">+1 (833) 123-4567</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="form-section custom-padding d-none">
        <div class="container-wrapper">
            <div class="row d-flex justify-content-around align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="myheading-custom">
                        <h2>Ready to Get Started?</h2>
                        <p>
                            Take the first step toward publishing success.

                        </p>
                        <p class="my-bigp clr-changed"><strong>Join the league of 1,200+ Bestselling Authors
                                Today.</strong></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-style">
                        <div class="mb-3">
                            <input name="ctl00$MainContent$txtcn" type="text" maxlength="60" id="MainContent_txtcn"
                                class="form-control cn" placeholder="Enter Your full Name" />
                            <span data-val-controltovalidate="MainContent_txtcn"
                                data-val-errormessage="Please enter correct name" data-val-display="Dynamic"
                                data-val-validationGroup="Validate" id="MainContent_RegularExpressionValidator2"
                                class="text-danger" data-val="true"
                                data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                data-val-validationexpression="^[a-zA-Z\s]+$" style="display:none;">Please enter correct
                                name</span>
                            <span data-val-controltovalidate="MainContent_txtcn"
                                data-val-errormessage="Please enter correct name" data-val-display="Dynamic"
                                data-val-validationGroup="Validate" id="MainContent_RequiredFieldValidator3"
                                data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid"
                                data-val-initialvalue="" style="color:Red;display:none;">Please enter correct
                                name</span>
                        </div>

                        <div class="mb-3">
                            <div class="form-group iti-group" aria-hidden="true">
                                <input type="hidden" value="" class="countryname">
                                <input type="hidden" value="" class="countrycode">
                                <input type="hidden" value="" class="dialcode" name="dc" id="dc">
                                <input name="ctl00$MainContent$pn" type="tel" id="MainContent_pn" maxlength="10"
                                    minlength="10" tabindex="-1"
                                    class="phone-js form-control js-byphone js-valGet js-numbervalid pn"
                                    placeholder="Phone Number" />
                                <span data-val-controltovalidate="MainContent_pn"
                                    data-val-errormessage="Please enter correct number 0 to 9"
                                    data-val-display="Dynamic" data-val-validationGroup="Validate"
                                    id="MainContent_RequiredFieldValidator1" data-val="true"
                                    data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid"
                                    data-val-initialvalue="" style="color:Red;display:none;">Please enter correct number
                                    0 to 9</span>
                                <span data-val-controltovalidate="MainContent_pn"
                                    data-val-errormessage="Please enter correct number 0 to 9"
                                    data-val-display="Dynamic" data-val-validationGroup="Validate"
                                    id="MainContent_RegularExpressionValidator412" class="text-danger" data-val="true"
                                    data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                    data-val-validationexpression="^[0-9]{10}$" style="display:none;">Please enter
                                    correct number 0 to 9</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <input name="ctl00$MainContent$txtem" type="text" maxlength="60" id="MainContent_txtem"
                                class="form-control em" placeholder="Enter Your Email Address" />
                            <span data-val-controltovalidate="MainContent_txtem"
                                data-val-errormessage="Please enter correct email" data-val-display="Dynamic"
                                data-val-validationGroup="Validate" id="MainContent_RegularExpressionValidator4"
                                class="text-danger" data-val="true"
                                data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                data-val-validationexpression="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                style="display:none;">Please enter correct email</span>
                            <span data-val-controltovalidate="MainContent_txtem"
                                data-val-errormessage="Please enter correct email" data-val-display="Dynamic"
                                data-val-validationGroup="Validate" id="MainContent_RequiredFieldValidator4"
                                data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid"
                                data-val-initialvalue="" style="color:Red;display:none;">Please enter correct
                                email</span>
                        </div>
                        <input type="hidden" value="" class="" name="Visitor">

                        <input type="hidden" name="ctl00$MainContent$hdnPageUrl" id="MainContent_hdnPageUrl"
                            value="contact-us.html" />
                        <p>
                            <span id="MainContent_lblErrorMessage" style="color:Red;"></span>
                        </p>
                        <input type="submit" name="ctl00$MainContent$btnSubmit" value="Submit"
                            onclick=""
                            id="MainContent_btnSubmit" class="btn btn-primary web-blue-btn" />
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?php include 'partials/footer.php'; ?>
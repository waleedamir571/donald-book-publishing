<footer>
    <section class=" custom-padding bg-ctabottom">
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
                    <form action="backend/action/action" method="POST">
                        <input type="hidden" name="type" value="middleForm">
                        <div class="form-style">
                            <div class="mb-3">
                                <input
                                    name="name"
                                    type="text"
                                    maxlength="60"
                                    id="txtcnsite"
                                    class="form-control cn"
                                    placeholder="Enter Your full Name"
                                >
                                <span
                                    data-val-controltovalidate="txtcnsite"
                                    data-val-errormessage="Please enter correct name"
                                    data-val-display="Dynamic"
                                    data-val-validationGroup="site"
                                    id="RegularExpressionValidator2"
                                    class="text-danger"
                                    data-val="true"
                                    data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                    data-val-validationexpression="^[a-zA-Z\s]+$"
                                    style="display:none;"
                                >
                                    Please enter
                                correct name
                                </span>
                                <span
                                    data-val-controltovalidate="txtcnsite"
                                    data-val-errormessage="Please enter correct name"
                                    data-val-display="Dynamic"
                                    data-val-validationGroup="site"
                                    id="RequiredFieldValidator3"
                                    data-val="true"
                                    data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid"
                                    data-val-initialvalue=""
                                    style="color:Red;display:none;"
                                >
                                    Please enter correct
                                name
                                </span>
                            </div>
                            <div class="mb-3">
                                <div class="form-group iti-group" aria-hidden="true">
                                    <input type="hidden" value="" class="countryname">
                                    <input type="hidden" value="" class="countrycode">
                                    <input
                                        type="hidden"
                                        value=""
                                        class="dialcode"
                                        name="dcsite"
                                        id="dcsite"
                                    >
                                    <input
                                        name="phone"
                                        type="tel"
                                        id="pnsite"
                                        maxlength="10"
                                        minlength="10"
                                        tabindex="-1"
                                        class="phone-js form-control js-byphone js-valGet js-numbervalid pn"
                                        placeholder="Phone Number"
                                    >
                                    <span
                                        data-val-controltovalidate="pnsite"
                                        data-val-errormessage="Please enter correct number 0 to 9"
                                        data-val-display="Dynamic"
                                        data-val-validationGroup="site"
                                        id="RequiredFieldValidator1"
                                        data-val="true"
                                        data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid"
                                        data-val-initialvalue=""
                                        style="color:Red;display:none;"
                                    >
                                        Please enter
                                    correct number 0 to 9
                                    </span>
                                    <span
                                        data-val-controltovalidate="pnsite"
                                        data-val-errormessage="Please enter correct number 0 to 9"
                                        data-val-display="Dynamic"
                                        data-val-validationGroup="site"
                                        id="RegularExpressionValidator412"
                                        class="text-danger"
                                        data-val="true"
                                        data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                        data-val-validationexpression="^[0-9]{10}$"
                                        style="display:none;"
                                    >
                                        Please
                                    enter correct number 0 to 9
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input
                                    name="email"
                                    type="text"
                                    maxlength="60"
                                    id="txtemsite"
                                    class="form-control em"
                                    placeholder="Enter Your Email Address"
                                >
                                <span
                                    data-val-controltovalidate="txtemsite"
                                    data-val-errormessage="Please enter correct email"
                                    data-val-display="Dynamic"
                                    data-val-validationGroup="site"
                                    id="RegularExpressionValidator4"
                                    class="text-danger"
                                    data-val="true"
                                    data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                    data-val-validationexpression="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                    style="display:none;"
                                >Please enter correct email</span>
                                <span
                                    data-val-controltovalidate="txtemsite"
                                    data-val-errormessage="Please enter correct email"
                                    data-val-display="Dynamic"
                                    data-val-validationGroup="site"
                                    id="RequiredFieldValidator4"
                                    data-val="true"
                                    data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid"
                                    data-val-initialvalue=""
                                    style="color:Red;display:none;"
                                >
                                    Please enter correct
                                email
                                </span>
                            </div>
                            <p>
                                <span id="lblErrorMessagesite" style="color:Red;"></span>
                            </p>
                            <button type="submit" class="btn btn-primary web-blue-btn">submit</button>
                            <!-- <input type="submit" name="" 
                            
                            id="btnSubmitsite" class="btn btn-primary web-blue-btn" /> -->
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="mycta-footerimg">
                        <!-- <img loading="lazy" alt="Seedspire Publishing" src="assets/images/Book-writing/footer.png"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container-wrapper">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="footer-content">
                        <div class="logofooter w-50">
                            <a href="index">
                                <img loading="lazy" alt="Seedspire Publishing" src="assets/images/home/logo2.png">
                            </a>
                        </div>
                        <p class="mt-2">Get your book published with the best book publishing services in USA. Trusted by authors for editing, design, and global distribution.</p>
                        <div class="d-flex align-items-center share mt-10">
                            <a href="#." class="d-none">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="33.598"
                                    height="33.598"
                                    viewBox="0 0 33.598 33.598"
                                >
                                    <defs>
                                        <filter id="Path_189">
                                            <feOffset dy="3" input="SourceAlpha"></feOffset>
                                            <feGaussianBlur stdDeviation="3" result="blur"></feGaussianBlur>
                                            <feFlood flood-opacity="0.161" result="color"></feFlood>
                                            <feComposite operator="out" in="SourceGraphic" in2="blur"></feComposite>
                                            <feComposite operator="in" in="color" in2=""></feComposite>
                                            <feComposite operator="in" in2="SourceGraphic"></feComposite>
                                        </filter>
                                    </defs>
                                    <g data-type="innerShadowGroup">
                                        <path
                                            id="Path_189-2"
                                            data-name="Path 189"
                                            d="M939.851,515.453a16.8,16.8,0,1,0,16.8,16.8A16.818,16.818,0,0,0,939.851,515.453Zm11.078,22.6a1.591,1.591,0,0,1-.939.772,4.32,4.32,0,0,1-1.238.351.942.942,0,0,0-1,.918c-.087.59-.264.674-.866.626-.143-.012-.284-.038-.425-.063a3.829,3.829,0,0,0-3.254.693,7.283,7.283,0,0,1-.6.413,4.515,4.515,0,0,1-5.068.188c-.47-.274-.916-.59-1.372-.888a3.035,3.035,0,0,0-1.237-.454,7.958,7.958,0,0,0-2.1.129c-.358.039-.7-.062-.723-.432-.049-.891-.6-1.109-1.345-1.192a3.818,3.818,0,0,1-1.023-.318,1.5,1.5,0,0,1-.857-.743v-.344a.912.912,0,0,1,.52-.348,5.883,5.883,0,0,0,3.931-3.025c.768-1.272.644-1.563-.77-2.064-.081-.029-.164-.052-.243-.085a3.02,3.02,0,0,1-.86-.479c-.633-.55-.259-1.343.488-1.523.545-.132,1.021.22,1.551.286.354.044.5-.075.452-.452a18.1,18.1,0,0,1-.063-2.922,4.944,4.944,0,0,1,2.55-4.193,6.435,6.435,0,0,1,6.9-.021,4.921,4.921,0,0,1,2.538,3.789,16.867,16.867,0,0,1-.009,3.307c-.038.479.06.566.534.456.588-.137,1.08-.44,1.691-.172a.932.932,0,0,1,.6.81.9.9,0,0,1-.333.63,3.449,3.449,0,0,1-.993.521c-.265.107-.542.191-.8.312-.534.25-.687.581-.438,1.109a6.133,6.133,0,0,0,4.193,3.7.984.984,0,0,1,.6.365Z"
                                            transform="translate(-923.052 -515.453)"
                                            fill="#707070"
                                        ></path>
                                        <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Path_189)">
                                            <path
                                                id="Path_189-3"
                                                data-name="Path 189"
                                                d="M939.851,515.453a16.8,16.8,0,1,0,16.8,16.8A16.818,16.818,0,0,0,939.851,515.453Zm11.078,22.6a1.591,1.591,0,0,1-.939.772,4.32,4.32,0,0,1-1.238.351.942.942,0,0,0-1,.918c-.087.59-.264.674-.866.626-.143-.012-.284-.038-.425-.063a3.829,3.829,0,0,0-3.254.693,7.283,7.283,0,0,1-.6.413,4.515,4.515,0,0,1-5.068.188c-.47-.274-.916-.59-1.372-.888a3.035,3.035,0,0,0-1.237-.454,7.958,7.958,0,0,0-2.1.129c-.358.039-.7-.062-.723-.432-.049-.891-.6-1.109-1.345-1.192a3.818,3.818,0,0,1-1.023-.318,1.5,1.5,0,0,1-.857-.743v-.344a.912.912,0,0,1,.52-.348,5.883,5.883,0,0,0,3.931-3.025c.768-1.272.644-1.563-.77-2.064-.081-.029-.164-.052-.243-.085a3.02,3.02,0,0,1-.86-.479c-.633-.55-.259-1.343.488-1.523.545-.132,1.021.22,1.551.286.354.044.5-.075.452-.452a18.1,18.1,0,0,1-.063-2.922,4.944,4.944,0,0,1,2.55-4.193,6.435,6.435,0,0,1,6.9-.021,4.921,4.921,0,0,1,2.538,3.789,16.867,16.867,0,0,1-.009,3.307c-.038.479.06.566.534.456.588-.137,1.08-.44,1.691-.172a.932.932,0,0,1,.6.81.9.9,0,0,1-.333.63,3.449,3.449,0,0,1-.993.521c-.265.107-.542.191-.8.312-.534.25-.687.581-.438,1.109a6.133,6.133,0,0,0,4.193,3.7.984.984,0,0,1,.6.365Z"
                                                transform="translate(-923.05 -515.45)"
                                                fill="#fff"
                                            ></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="#." class="d-none">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="33.599"
                                    height="33.598"
                                    viewBox="0 0 33.599 33.598"
                                >
                                    <path
                                        id="Path_187"
                                        data-name="Path 187"
                                        d="M1019.834,514.947a16.8,16.8,0,1,0,16.8,16.8A16.819,16.819,0,0,0,1019.834,514.947Zm9.728,10.685a.473.473,0,0,1-.1.312,7.783,7.783,0,0,1-1.559,1.629c-.089.066-.239.137-.239.263a12.077,12.077,0,0,1-3.185,8.811,11.856,11.856,0,0,1-11.509,2.691,11,11,0,0,1-2.226-.891c-.235-.128-.467-.261-.694-.411-.057-.046-.1-.089-.051-.12s.086-.026.265,0a7.855,7.855,0,0,0,3.33-.426,5.086,5.086,0,0,0,2.192-1.162c.009-.013.017-.013.026-.026-.146-.034-.291-.034-.437-.06a4.3,4.3,0,0,1-3.21-2.688c-.042-.107,0-.163.111-.142a4.611,4.611,0,0,0,1.528-.047,2.4,2.4,0,0,1-.518-.158,4.14,4.14,0,0,1-2.551-3.3,2.5,2.5,0,0,1-.026-.463c.009-.106.056-.141.15-.081a4.1,4.1,0,0,0,1.558.436c-.175-.137-.338-.286-.5-.436a4.093,4.093,0,0,1-.7-4.837c.077-.116.129-.116.223-.009a12.545,12.545,0,0,0,8.073,4.109c.086.013.094,0,.081-.094a4.336,4.336,0,0,1,.042-1.687,4.106,4.106,0,0,1,.8-1.6,4.277,4.277,0,0,1,1.336-1.091,4.174,4.174,0,0,1,1.656-.468,3.966,3.966,0,0,1,1.746.281,4.156,4.156,0,0,1,1.138.7,1.94,1.94,0,0,1,.206.21.157.157,0,0,0,.162.043,10.094,10.094,0,0,0,2.349-.9.111.111,0,0,1,.1-.009c.035.026.021.069,0,.1a3.638,3.638,0,0,1-.659,1.2c-.188.233-.658.81-.976.864a8.034,8.034,0,0,0,1.978-.565c.08-.036.073-.052.073,0Z"
                                        transform="translate(-1003.035 -514.947)"
                                        fill="#707070"
                                    ></path>
                                </svg>
                            </a>
                            <!-- <a href="https://www.tiktok.com/@donaldsbookpublishing">
                                <i class="fa fa-tiktok" aria-hidden="true"></i>

                            </a> -->
                            <a href="https://www.instagram.com/donaldsbookpublishing/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/donaldsbookpublishing/">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/donaldsbookpublishing/">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/donaldsbookpublishing/">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/donaldsbookpublishing/">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                    <div class="customulfooter padding-left-customs-desktop">
                        <h6>Company</h6>
                        <ul>
                            <li>
                                <a href="About">About Us</a>
                            </li>
                            <li>
                                <a href="contact-us">Contact Us</a>
                            </li>
                            <li>
                                <a href="privacy-policy">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-and-conditions">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="disclaimer-policy">Disclaimer Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h6 class="mb-20">Services</h6>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="customulfooter">
                                <ul>
                                    <li>
                                        <a href="book-writing-services">Book Writing Service</a>
                                    </li>
                                    <li>
                                        <a href="book-design-services">Book Design Service</a>
                                    </li>
                                    <li>
                                        <a href="book-publishing-services">Book Publishing Service</a>
                                    </li>
                                    <li>
                                        <a href="book-marketing-services">Book Marketing Service</a>
                                    </li>
                                    <li>
                                        <a href="audiobook-services">Audiobook Service</a>
                                    </li>
                                    <li>
                                        <a href="book-editing-services">Book Editing Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="customulfooter">
                                <ul class="customtopcss">
                                    <li>
                                        <a href="book-video-trailer">Book Video Trailer</a>
                                    </li>
                                    <li>
                                        <a href="web-design-and-seo">Web design & SEO</a>
                                    </li>
                                    <li>
                                        <a href="Illustration-services">Illustration Services</a>
                                    </li>
                                    <li>
                                        <a href="articles-services">Articles Services</a>
                                    </li>
                                    <li>
                                        <a href="book-printing-services">Book Printing Services</a>
                                    </li>
                                    <li>
                                        <a href="web-content-writing-service">
                                            Web Content Writing
                                            Service
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="customulfooter footer-content">
                        <h6 class="">Contact Details</h6>
                        <p>Phone</p>
                        <a href="tel:+1 (833) 123-4567">+1 (833) 123-4567</a>
                        <p>Email</p>
                        <a href="mailto:info@donaldsbookpublishing.com">info@donaldsbookpublishing.com</a>
                        <p>
                            Address
                            <br>
                            401 Park Avenue South New York NY 10016
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-bottom">
            <p class="rf">© 2025
                <a href="https://donaldsbookpublishing.com/">Donalds Book Publishing</a>  All rights reserved.
            </p>
        </div>
    </section>
</footer>
<div class="pos-rel-1">
    <a
        class="scroll-up-sticky-bar"
        href="#"
        data-bs-toggle="modal"
        data-bs-target="#contact-popup"
    >
        <span>Start Your Author Journey Now!</span>
        <svg
            class="svg-inline--fa fa-up-long"
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="up-long"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 320 512"
            data-fa-i2svg=""
        >
            <path fill="currentColor" d="M318 177.5c3.8-8.8 2-19-4.6-26l-136-144C172.9 2.7 166.6 0 160 0s-12.9 2.7-17.4 7.5l-136 144c-6.6 7-8.4 17.2-4.6 26S14.4 192 24 192H96l0 288c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32l0-288h72c9.6 0 18.2-5.7 22-14.5z"></path>
        </svg>
    </a>
    <div class="fixed-btm">
        <ul class="fixed-list">
            <li>
                <a href="tel:+1 (833) 501-8030">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#." data-bs-toggle="modal" data-bs-target="#contact-popup">
                    <i class="fa fa-envelope"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<div
    class="modal fade"
    id="contact-popup"
    tabindex="-1"
    role="dialog"
    aria-labelledby="contact-popup"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button
                    type="button"
                    class="close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                >
                    <img
                        loading="lazy"
                        alt="Seedspire Publishing"
                        src="assets/images/close.webp"
                        alt="close-icon"
                    >
                </button>
                <div class="modal-left-content">
                    <div class="position-relative custom-rr">
                        <div class="logo-popups">
                            <img
                                loading="lazy"
                                alt="Seedspire Publishing"
                                src="assets/images/logo-popup.webp"
                                alt=""
                            >
                        </div>
                        <div class="boxpopupimage">
                            <img
                                loading="lazy"
                                alt="Seedspire Publishing"
                                src="assets/images/popup-imagee.webp"
                                alt=""
                            >
                        </div>
                    </div>
                </div>
                <div class="modal-right-content">
                    <div class="form-box">
                        <p class="my-pform">Sign Up Now and</p>
                        <h3 class="clr-changed"> Start Your
                            <span class="clr-changed ">Best-Selling</span>
                            Journey!
                        </h3>

                        <form action="backend/action/action" method="POST">
                        <input type="hidden" name="type" value="formLong">
                        <div class="row">
                            <div class="col">
                                <input
                                    name="name"
                                    type="text"
                                    maxlength="60"
                                    id="txtcnsite1"
                                    class="form-control cn"
                                    placeholder="Enter Your full Name"
                                >
                                <span
                                    data-val-controltovalidate="txtcnsite1"
                                    data-val-errormessage="Please enter correct name"
                                    data-val-display="Dynamic"
                                    data-val-validationGroup="site1"
                                    id="RegularExpressionValidator1"
                                    class="text-danger"
                                    data-val="true"
                                    data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                    data-val-validationexpression="^[a-zA-Z\s]+$"
                                    style="display:none;"
                                >
                                    Please
                                    enter correct name
                                </span>
                                <span
                                    data-val-controltovalidate="txtcnsite1"
                                    data-val-errormessage="Please enter correct name"
                                    data-val-display="Dynamic"
                                    data-val-validationGroup="site1"
                                    id="RequiredFieldValidator2"
                                    data-val="true"
                                    data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid"
                                    data-val-initialvalue=""
                                    style="color:Red;display:none;"
                                >
                                    Please enter
                                    correct name
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group iti-group" aria-hidden="true">
                                    <input type="hidden" value="" class="countryname">
                                    <input type="hidden" value="" class="countrycode">
                                    <input
                                        type="hidden"
                                        value=""
                                        class="dialcode"
                                        name="phone"
                                        id="dcsite1"
                                    >
                                    <input
                                        name="ctl00$pnsite1"
                                        type="tel"
                                        id="pnsite1"
                                        maxlength="10"
                                        minlength="10"
                                        tabindex="-1"
                                        class="phone-js form-control js-byphone js-valGet js-numbervalid pn"
                                        placeholder="Phone Number"
                                    >
                                    <span
                                        data-val-controltovalidate="pnsite1"
                                        data-val-errormessage="Please enter correct number 0 to 9"
                                        data-val-display="Dynamic"
                                        data-val-validationGroup="site1"
                                        id="RequiredFieldValidator5"
                                        data-val="true"
                                        data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid"
                                        data-val-initialvalue=""
                                        style="color:Red;display:none;"
                                    >
                                        Please enter
                                        correct number 0 to 9
                                    </span>
                                    <span
                                        data-val-controltovalidate="pnsite1"
                                        data-val-errormessage="Please enter correct number 0 to 9"
                                        data-val-display="Dynamic"
                                        data-val-validationGroup="site1"
                                        id="RegularExpressionValidator3"
                                        class="text-danger"
                                        data-val="true"
                                        data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                        data-val-validationexpression="^[0-9]{10}$"
                                        style="display:none;"
                                    >
                                        Please
                                        enter correct number 0 to 9
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input
                                    name="email"
                                    type="text"
                                    maxlength="60"
                                    id="txtemsite1"
                                    class="form-control em"
                                    placeholder="Enter Your Email Address"
                                >
                                <span
                                    data-val-controltovalidate="txtemsite1"
                                    data-val-errormessage="Please enter correct email"
                                    data-val-display="Dynamic"
                                    data-val-validationGroup="site1"
                                    id="RegularExpressionValidator5"
                                    class="text-danger"
                                    data-val="true"
                                    data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                    data-val-validationexpression="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                    style="display:none;"
                                >Please enter correct email</span>
                                <span
                                    data-val-controltovalidate="txtemsite1"
                                    data-val-errormessage="Please enter correct email"
                                    data-val-display="Dynamic"
                                    data-val-validationGroup="site1"
                                    id="RequiredFieldValidator6"
                                    data-val="true"
                                    data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid"
                                    data-val-initialvalue=""
                                    style="color:Red;display:none;"
                                >
                                    Please enter
                                    correct email
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input
                                    name="message"
                                    type="text"
                                    id="txttrsite1"
                                    class="form-control"
                                    placeholder="Message here"
                                >
                            </div>
                        </div>
                        <div class="text-center">
                            <input
                                type="hidden"
                                value=""
                                class=""
                                name="visitorsite1"
                            >
                            <input
                                type="hidden"
                                name="ctl00$hdnPageUrlsite1"
                                id="hdnPageUrlsite1"
                                value="default.html"
                            >
                            <p>
                                <span id="lblErrorMessagesite1" style="color:Red;"></span>
                            </p>
                             <button type="submit" class="btn btn-primary web-blue-btn">submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/bootstrap.bundle.min.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js" defer></script>
<script src="assets/js/custom.js" defer></script>
<script src="assets/js/intl-tel-input.js" defer></script>
<script>
    $(document).ready(function () {
        var currentURL = window.location.href; // Current page ka URL get karein
        $('#canonicals').attr('href', currentURL); // Href attribute set karein
    });
</script>
</form>
</body>
</html>

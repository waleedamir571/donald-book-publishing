<?php include 'backend/function/meta.php' ?>

<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="preload" href="assets/images/mobile-logo.webp" as="image">
    <link rel="preload" href="assets/images/logo.webp" as="image">
    <link rel="preload" href="assets/images/sliderbook1.webp" as="image">
    <link rel="preload" href="assets/images/sliderbook2.webp" as="image">
    <link rel="preload" href="assets/images/sliderbook3.webp" as="image">
    <link rel="preload" href="assets/images/sliderbook4.webp" as="image">
    <link rel="preload" href="assets/images/sliderbook5.webp" as="image">

    <link rel="preload" href="assets/images/e-book-publishing.webp" as="image">
    <link rel="preload" href="assets/images/ghost-writing.webp" as="image">
    <link rel="preload" href="assets/images/book-marketing.webp" as="image">
    <link rel="preload" href="assets/images/illustration-book.webp" as="image">
    <link rel="preload" href="assets/images/editing-and-proof.webp" as="image">
    <link rel="preload" href="assets/images/audiobook.webp" as="image">
    <title>
        <?php echo $title_name; ?>
    </title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <link id="canonicals" rel="canonical" href="#">
    <meta name="robots" content="noindex, nofollow">

    <link rel="icon" type="image/x-icon" href="assets/images/home/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css" as="style" media="screen">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/intlTelInput.min.css" as="style" media="screen">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

</head>

<body>

    <header class="my-nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-gray">
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img loading="lazy" alt="Seedspire Publishing" class="d-none-desktop"
                        src="assets/images/home/logo2.png" width="137" height="40">
                    <img loading="lazy" alt="Seedspire Publishing" class="d-none-mobile w-100"
                        src="assets/images/home/logo2.png" width="127" height="52"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                    aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="book-writing-services">Book
                                Writing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="book-publishing-services">Book
                                Publishing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="book-marketing-services">Book
                                Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="audiobook-services">Audiobook </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="book-editing-services">Book
                                Editing </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="book-printing-services"></a>
                        </li> -->

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="services" id="navbarDarkDropdownMenuLink" role="button">

                               
                                Other Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="book-printing-services">Book Printing</a></li>
                                <li><a class="dropdown-item" href="book-video-trailer">Book Video Trailer</a></li>
                                <li><a class="dropdown-item" href="web-design-and-seo">Web design & SEO</a></li>
                                <li><a class="dropdown-item" href="book-illustration-services">Illustration Services</a>
                                </li>
                                <li><a class="dropdown-item" href="articles-services">Articles Services</a></li>
                                <li><a class="dropdown-item" href="book-design-services">Book Design Services</a></li>
                                <li><a class="dropdown-item" href="blog-writing-services">Blog Writing Services</a></li>
                                <li><a class="dropdown-item" href="web-content-writing-service">Web Content Writing
                                        Service</a></li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Blogs </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact-us">Contact </a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <form method="post" action="" onsubmit="javascript:return WebForm_OnSubmit();" id="ctl00">
        <div class="aspNetHidden">
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                value="NboSRTwaOJQMUaZNYYpbDre4AQmdIRuYQPPHaISCltYAbzDusy7OlB/N+RHs5pGj9exg015xTgbCbuyfI+UmRlKmkElzmMTJdxM9To+z494=" />
        </div>

        <!-- <script type="text/javascript">
           
            var theForm = document.forms['ctl00'];
            if (!theForm) {
                theForm = document.ctl00;
            }
            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
           
        </script> -->


        <!-- <script
            src="WebResource4e59.js?d=pynGkmcFUV13He1Qd6_TZJ51fZB5Q8gxkyPV9BvVcaHOrCdwmM5u_RUkOwtVgkkMwUnsGCMhY1vpgJbe--jp-Q2&amp;t=638610871965203766"
            type="text/javascript"></script> -->


        <script src="scripts/jquery-3.7.0.js" type="text/javascript"></script>
        <!-- <script
            src="WebResource2ffb.js?d=x2nkrMJGXkMELz33nwnakAoXx7BHhUButGZQnllUNwQzjFobvO9zm4wD8d7u7RvbfECFL3Gw4wAC1ggBp8oPYjI7a9JzEsLyq4bhPVVNI5U1&amp;t=638610871965203766"
            type="text/javascript"></script> -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const dropdownLink = document.getElementById('navbarDarkDropdownMenuLink');
                dropdownLink.addEventListener('click', function (e) {
                    // Prevent Bootstrap dropdown toggle behavior
                    if (!dropdownLink.classList.contains('show')) {
                        window.location.href = dropdownLink.getAttribute('href');
                    }
                });
            });
        </script>
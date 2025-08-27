<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pricing Slider - Same to Same Content</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  
</head>

<style>
.move-up {
  transform: scale(1.06) translateY(-15px);
  transition: 0.3s ease;
  z-index: 10;
}

.swiper-slide-active {
  transform: scale(1.06) translateY(-15px);
  transition: 0.3s ease;
  z-index: 5;
}



</style>
<body>

<div class="container py-5">
  <!-- Swiper START -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <!-- Slide 1 (same to same content) -->
      <div class="swiper-slide">
        <div class="pricing-card">
          <h5>Launch & Visibility 
             Package</h5>
          <div class="pt-10">
            <p class="price">$4,999<span class="fs-6"></span></p>
          </div>

          <div class="ptb-50 ">
            <img src="assets/images/book-design/imgline.png" alt="">
          </div>

          <p>For authors launching their book for the first time and needing professional exposure.
          </p>
          <!-- <button class="web-black-btn open-chat-button"></button> -->
          <div class="pt-20">
            <a href="#." class="web-black-btn open-chat-button" role="button"
              data-plan="Launch & Visibility Package" data-amount="$4,999">Buy Your plan </a>
          </div>

          <h5>Features</h5>

          <img src="assets/images/book-design/imgline.png" alt="">

          <ul class="overflow">
            <li>What You Get:</li>
            <li><img src="assets/images/book-design/check.png" alt="">Amazon & Goodreads optimization (SEO-rich
              profiles)
            </li>
            <li>
              <img src="assets/images/book-design/check.png" alt=""> Amazon Ads setup & management (3-month
              campaign)
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> 10 custom launch graphics + branded social
              posts
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Email launch sequence (3 professionally
              written emails)
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Landing page design optimized for
              conversions
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Monthly analytics + insights call
            </li>
          </ul>

          <div class="pt-40">
            <p class="black"> Why It’s Worth It:</p>
            <p> This isn’t “basic marketing” — it gives authors a fully managed book
              launch system with pro campaigns and assets.</p>
          </div>
        </div>
      </div>

      <!-- Slide 2 (same to same content) -->
      <div class="swiper-slide">
        <div class="pricing-card">
          <h5>Growth & Engagement Package</h5>
          <div class="pt-10">
            <p class="price">$7,999<span class="fs-6"></span></p>
          </div>

          <div class="ptb-50 ">
            <img src="assets/images/book-design/imgline.png" alt="">
          </div>

          <p>For authors ready to gain traction, build readership, and create momentum.
          </p>
          <!-- <button class="web-black-btn open-chat-button"></button> -->
          <div class="pt-20">
            <a href="#." class="web-black-btn open-chat-button" role="button"
              data-plan="Growth & Engagement Package" data-amount="$7,999">Buy Your plan </a>
          </div>

          <h5>Features</h5>

          <img src="assets/images/book-design/imgline.png" alt="">

          <ul class="overflow">
            <li>What You Get:
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Everything in Launch & Visibility, plus:
            </li>
            <li>
              <img src="assets/images/book-design/check.png" alt="">Social media content calendar + 20 posts/month
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Promotional video trailer for book launch
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Advanced ad campaigns across Amazon,
              Facebook, Instagram
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Media kit design + press release writing &
              distribution
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Blogger/reviewer outreach for reviews &
              mentions
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Bi-weekly strategy calls + optimization
              reports
            </li>
          </ul>

          <div class="pt-40">
            <p class="black"> Why It’s Worth It: </p>
            <p>This level moves authors from “launched” to actively growing their brand
              and sales with multiple channels working together.</p>
          </div>
        </div>
      </div>

      <!-- Slide 3 (same to same content) -->
      <div class="swiper-slide">
        <div class="pricing-card">
          <h5>Author Brand Accelerator Package </h5>
          <div class="pt-10">
            <p class="price">$9,999<span class="fs-6"></span></p>
          </div>

          <div class="ptb-50 ">
            <img src="assets/images/book-design/imgline.png" alt="">
          </div>

          <p>For serious authors looking to establish themselves as a recognized name.
          </p>
          <!-- <button class="web-black-btn open-chat-button"></button> -->
          <div class="pt-20">
            <a href="#." class="web-black-btn open-chat-button" role="button" data-plan="Author Brand Accelerator"
              data-amount="$9,999">Buy Your plan </a>
          </div>

          <h5>Features</h5>

          <img src="assets/images/book-design/imgline.png" alt="">

          <ul class="overflow">
            <li>What You Get:
            </li>
            <li><img src="assets/images/book-design/check.png" alt="">Everything in Growth & Engagement, plus:
            </li>
            <li>
              <img src="assets/images/book-design/check.png" alt=""> Full funnel ad strategy (Amazon, FB, IG,
              Google Ads)
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Book trailer + Audiobook promotion campaign
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> PR outreach to podcasts, book blogs, and
              media outlets
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Influencer & Bookstagram promotion
              campaigns
            </li>
            <li><img src="assets/images/book-design/check.png" alt="">Automated author newsletter setup + 6
              months’ content
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Dedicated campaign manager + weekly
              reporting
            </li>

            <li><img src="assets/images/book-design/check.png" alt=""> 1:1 Author Branding Session (positioning +
              long-term plan)
            </li>
          </ul>

          <div class="pt-40">
            <p class="black"> Why It’s Worth It: </p>
            <p>This is the all-in, fully customized growth program for authors who want
              to dominate their niche globally.</p>
          </div>
        </div>
      </div>

      <!-- Slide 4 (same to same content) -->
      <div class="swiper-slide">
        <div class="pricing-card">
          <h5>Bespoke Author Empire Package</h5>
          <div class="pt-10">
            <p class="price">Request Quote<span class="fs-6"></span></p>
          </div>

          <div class="ptb-50 ">
            <img src="assets/images/book-design/imgline.png" alt="">
          </div>

          <p>For bestselling authors, publishing houses, or writers with multiple titles/series.
          </p>
          <!-- <button class="web-black-btn open-chat-button"></button> -->
          <div class="pt-20">
            <a href="#." class="web-black-btn open-chat-button" role="button" data-plan="Author Brand Accelerator"
              data-amount="">Buy Your plan </a>
          </div>

          <h5>Features</h5>

          <img src="assets/images/book-design/imgline.png" alt="">

          <ul class="overflow">
            <li>What You Get:
            </li>
            <li><img src="assets/images/book-design/check.png" alt="">Custom strategy across multi-channel global campaigns
            </li>
            <li>
              <img src="assets/images/book-design/check.png" alt=""> PR, media tours, and paid interviews
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Long-term influencer collaborations
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Branding, design, and multi-book marketing rollouts

              media outlets
            </li>
            <li><img src="assets/images/book-design/check.png" alt=""> Speaking event & visibility opportunities
            </li>
            <li><img src="assets/images/book-design/check.png" alt="">Automated author newsletter setup + 6
              months’ content
            </li>
          </ul>

          <div class="pt-40">
            <p class="black"> <b>Why It’s Worth It:</b></p>
            <p> This is the all-in, fully customized growth program for authors who want
              to dominate their niche globally.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>
  <!-- Swiper END -->
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true, // infinite loop
    autoplay: {
      delay: 2500,             // auto slide
      disableOnInteraction: false // arrows click par bhi autoplay chalta rahe
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 }
    }
  });
</script>

</body>
</html>

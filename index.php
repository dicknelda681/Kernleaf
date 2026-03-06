<?php include('header.php');
   ?>
<!-- Start slider -->
<div class="slider-area" id="home">
   <div class="slider-item-active">
      <?php foreach ($hero_slider as $slide): ?>
      <div class="slider-item">
         <!-- Background Slide -->
         <div class="<?= $slide['bg_class']; ?> slider-height hero-overly d-flex align-items-center">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9 col-lg-10">
                     <div class="slide-content">
                        <h1><?= $slide['title']; ?></h1>
                        <img src="<?= $slide['signature']; ?>" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Bottom Caption -->
         <div class="slider-caption2">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-7 col-sm-8">
                     <div class="slide-content2">
                        <h4>
                           <dd><?= $slide['count']; ?></dd>
                           <span><?= $slide['subtitle']; ?></span>
                        </h4>
                        <p><?= $slide['text']; ?></p>
                       <a href="#contact" class="border-btn border-btn2">Get Your Quotation</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php endforeach; ?>
   </div>
   <!-- Slider Dots -->
   <div class="slider-nav text-center">
      <?php foreach ($hero_slider as $slide): ?>
      <div class="slider-thumb">
         <img src="<?= $slide['dot_image']; ?>" alt="">
      </div>
      <?php endforeach; ?>
   </div>
</div>
<!-- End Start slider -->
<!--? Gallery Area Start -->
<div class="gallery-area section-padding40" id="portfolio">
   <div class="container">
      <!-- Section Title -->
      <div class="row justify-content-between align-items-center">
         <div class="col-lg-6">
            <div class="section-tittle mb-50">
               <h2><?= $gallery_section['title']; ?></h2>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="section-tittle mb-60">
               <p><?= $gallery_section['description']; ?></p>
            </div>
         </div>
      </div>
      <!-- Gallery Items -->
      <div class="row justify-content-between">
         <?php foreach ($gallery_items as $item): ?>
         <div class="<?= $item['col']; ?>">
            <div class="box snake mb-30">
               <div class="gallery-img small-img"
                  style="background-image: url(<?= $item['image']; ?>);">
               </div>
               <figcaption><?= $item['caption']; ?></figcaption>
               <div class="overlay">
                  <div class="overlay-content">
                     <a href="<?= $item['image']; ?>" class="img-pop-up">
                     <i class="ti-plus"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <?php endforeach; ?>
      </div>
      <!-- Button -->
      <div class="row">
         <div class="col-lg-12">
            <div class="section-btn text-center mt-50">
               <a href="<?= $gallery_section['button_link']; ?>" class="border-btn">
               <?= $gallery_section['button_text']; ?>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Gallery Area End -->
<!--? All startups Start -->
<div class="all-starups-area fix" id="about">
   <!-- Left Content -->
   <div class="starups">
      <div class="starups-details">
         <h3><?= $about_section['title']; ?></h3>
         <p><?= $about_section['description']; ?></p>
         <?php if(!empty($about_section['button_text'])): ?>
         <a href="<?= $about_section['button_link']; ?>" 
            class="border-btn border-btn2">
         <?= $about_section['button_text']; ?>
         </a>
         <?php endif; ?>
      </div>
   </div>
   <!-- Right Image -->
   <div class="starups-img"></div>
</div>
<!--All startups End -->
<!--? Services Area Start -->
<div class="categories-area section-padding40">
   <div class="container">
      <!-- Section Heading -->
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="section-tittle mb-60 text-center">
               <h2><?= $categories_section['title']; ?></h2>
               <p><?= $categories_section['description']; ?></p>
            </div>
         </div>
      </div>
      <!-- Services -->
      <div class="row">
         <?php foreach ($categories_section['services'] as $service): ?>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-cat mb-50 text-center wow fadeInUp"
               data-wow-duration="1s"
               data-wow-delay="<?= $service['delay']; ?>">
               <div class="cat-icon">
                  <img src="<?= $service['icon']; ?>" alt="<?= $service['title']; ?>">
               </div>
               <div class="cat-cap">
                  <h5><?= $service['title']; ?></h5>
               </div>
            </div>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
</div>
<!--? Services Area End -->
<!--? Testimonial Area Start -->
<section class="testimonial-area testimonial-padding fix section-bg"
   data-background="<?= $testimonials['background']; ?>">
   <div class="container">
      <div class="row align-items-center justify-content-center">
         <div class="col-lg-9">
            <div class="about-caption">
               <!-- Testimonial Start -->
               <div class="h1-testimonial-active dot-style">
                  <?php foreach ($testimonials['items'] as $item): ?>
                  <div class="single-testimonial position-relative">
                     <div class="testimonial-caption">
                        <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                        <p>"<?= $item['message']; ?>"</p>
                     </div>
                     <div class="testimonial-founder d-flex align-items-center">
                        <div class="founder-img">
                           <img src="<?= $item['image']; ?>" alt="<?= $item['name']; ?>">
                        </div>
                        <div class="founder-text">
                           <span><?= $item['name']; ?></span>
                           <p><?= $item['designation']; ?></p>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; ?>
               </div>
               <!-- Testimonial End -->
            </div>
         </div>
      </div>
   </div>
</section>
<!--? Testimonial Area End -->
<!--? Pricing Card Start -->
<section class="pricing-card-area section-padding2" id="price">
   <div class="container">
      <!-- Section Tittle -->
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="section-tittle mb-60 text-center">
               <h2>Choose a plan</h2>
               <p>Find the perfect package that fits your needs and budget. Whether you’re just starting out or looking for premium features, our flexible plans are designed to give you the best value and results.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
            <div class="single-card text-center mb-30">
               <div class="card-top">
                  <img src="assets/img/icon/camera.svg" alt="">
                  <h4>Silver</h4>
                  <p>Only</p>
               </div>
               <div class="card-mid">
                  <h4>$50.00</h4>
               </div>
               <div class="card-bottom">
                  <ul>
                     <li>2 TB of space</li>
                     <li>unlimited bandwidth</li>
                     <li>full backup systems</li>
                     <li>free domain</li>
                     <li>unlimited database</li>
                  </ul>
                  <a href="#contact" class="border-btn get-btn">Get Started</a>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
            <div class="single-card text-center mb-30">
               <!-- stiker -->
               <div class="stiker">
                  <span>Most Popular</span>
               </div>
               <div class="card-top">
                  <img src="assets/img/icon/camera.svg" alt="">
                  <h4>Gold</h4>
                  <p>Only</p>
               </div>
               <div class="card-mid">
                  <h4>$100.00</h4>
               </div>
               <div class="card-bottom">
                  <ul>
                     <li>2 TB of space</li>
                     <li>unlimited bandwidth</li>
                     <li>full backup systems</li>
                     <li>free domain</li>
                     <li>unlimited database</li>
                  </ul>
                  <a href="#contact" class="border-btn get-btn">Get Started</a>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
            <div class="single-card text-center mb-30">
               <div class="card-top">
                  <img src="assets/img/icon/camera.svg" alt="">
                  <h4>Platinum</h4>
                  <p>Only</p>
               </div>
               <div class="card-mid">
                  <h4>$50.00</h4>
               </div>
               <div class="card-bottom">
                  <ul>
                     <li>2 TB of space</li>
                     <li>unlimited bandwidth</li>
                     <li>full backup systems</li>
                     <li>free domain</li>
                     <li>unlimited database</li>
                  </ul>
                  <a href="#contact" class="border-btn get-btn">Get Started</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Pricing Card End -->
<section class="contact-section" id="contact">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="section-tittle mb-60 text-center">
               <h2><?= $contactSection['title']; ?></h2>
               <p><?= $contactSection['subtitle']; ?></p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <h2 class="contact-title"><?= $contactSection['form_title']; ?></h2>
         </div>
         <!-- Contact Form -->
         <div class="col-lg-8">
            <form class="form-contact contact_form"
               action="<?= $contactSection['form_action']; ?>"
               method="post">
               <div class="row">
                  <div class="col-12">
                     <div class="form-group">
                        <textarea class="form-control w-100" name="message" rows="9"
                           placeholder="Enter Message"></textarea>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="name" type="text"
                           placeholder="Enter your name">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="email" type="email"
                           placeholder="Email address">
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-group">
                        <input class="form-control" name="" type="text"
                           placeholder="Enter Subject">
                     </div>
                  </div>
               </div>
               <div class="form-group mt-3">
                  <button type="submit" class="button button-contactForm boxed-btn">
                  Send
                  </button>
               </div>
            </form>
         </div>
         <!-- Contact Info -->
         <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-home"></i></span>
               <div class="media-body">
                  <h3><?= $contactSection['address']['city']; ?></h3>
                  <p><?= $contactSection['address']['detail']; ?></p>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-tablet"></i></span>
               <div class="media-body">
                  <h3><?= $contactSection['phone']['number']; ?></h3>
                  <p><?= $contactSection['phone']['time']; ?></p>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-email"></i></span>
               <div class="media-body">
                  <h3><?= $contactSection['email']['address']; ?></h3>
                  <p><?= $contactSection['email']['note']; ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--? instagram-social start -->
<div class="instagram-area fix">
   <div class="container-fluid p-0">
      <div class="row">
         <div class="col-xl-12">
            <div class="instagram-active owl-carousel">
               <div class="single-instagram">
                  <img src="assets/img/gallery/instra1.png" alt="">
                  <a href="#"><i class="ti-instagram"></i></a>
               </div>
               <div class="single-instagram">
                  <img src="assets/img/gallery/instra2.png" alt="">
                  <a href="#"><i class="ti-instagram"></i></a>
               </div>
               <div class="single-instagram">
                  <img src="assets/img/gallery/instra3.png" alt="">
                  <a href="#"><i class="ti-instagram"></i></a>
               </div>
               <div class="single-instagram">
                  <img src="assets/img/gallery/instra4.png" alt="">
                  <a href="#"><i class="ti-instagram"></i></a>
               </div>
               <div class="single-instagram">
                  <img src="assets/img/gallery/instra5.png" alt="">
                  <a href="#"><i class="ti-instagram"></i></a>
               </div>
               <div class="single-instagram">
                  <img src="assets/img/gallery/instra2.png" alt="">
                  <a href="#"><i class="ti-instagram"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- instagram-social End -->
</main>
<?php include('footer.php') ?>
<?php
$title = "About Us";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $title ?? $do->getValue('site_name'); ?>
  </title>
  <meta name="description" content="<?php echo $do->getValue('meta_description'); ?>">
  <meta name="keywords" content="<?php echo $do->getValue('meta_keyword'); ?>">
  <?php
  foreach ($links["css"] as $key) {
    echo '<link rel="stylesheet" href="' . $key . '">';
  }
  ?>
</head>

<body>
  <?php
  include_once 'tpl-page-header.php';
  echo navbar(about_active: 'active');
  ?>
  <section class="hero position-relative">
    <div class="">
      <img src="/static/image/services-bg.png" class="d-block w-100 desktop-carousel" alt="..." />
      <img src="/static/image/about-us-mobile.png" class="d-block w-100 mobile-carousel" alt="..." />
    </div>
  </section>

  <section class="about-us">
    <div class="container">
      <div class="row">
        <div class="col about-us-texts">
          <div class="stroke-text position-absolute start-50 translate-middle">
            KNOW
          </div>
          <div class="card-body position-relative">
            <h5 class="card-title">ABOUT US</h5>
            <p class="card-text">
              Welcome to Guheswori Dental Multispeciality and Implant Hub, an eminent dental care dedicated to providing top-tier oral health care and treatments. At Guheshwori, we have assembled a team of specialized professionals committed to delivering exceptional dental services that cater to the unique needs of our esteemed patients.




            </p>
            <p class="card-text">
              At Guheswori Dental Multispeciality and Implant Hub, we prioritize our patient's well-being and oral health above everything else. Our mission is to deliver top-notch dental care that goes beyond the ordinary, ensuring long-lasting results and educating our patients about their oral health every step of the way.
            </p>
            <p class="card-text">
              We understand that every patient has unique dental needs. Hence, we take the time to listen and understand your concerns, developing customized treatment plans tailored specifically to your individual requirements. Our experienced dental professionals will provide unwavering support and care throughout your treatment.

            </p>
            <p class="card-text">
              At Guheswori Dental Multispeciality and Implant Hub, we strive to maintain international standards in all aspects of our dental practice. Our dedicated support staffs are trained to provide friendly and professional service, ensuring your comfort throughout your visit. Moreover, we take hygiene and cleanliness very seriously. We are complemented by stringent infection control measures, creating a safe and sanitized environment for all our patients.
            </p>
            <p class="card-text">
              Your well-being is our top priority, and we are dedicated to ensuring your dental experience is as comfortable and pleasant as possible
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include_once 'tpl-tag-client-says.php';
  ?>


  <?php
  include_once 'tpl-page-footer.php';
  ?>

  <?php
  foreach ($links["js"] as $key) {
    echo '<script src="' . $key . '"></script>';
  }
  ?>

</body>

</html>
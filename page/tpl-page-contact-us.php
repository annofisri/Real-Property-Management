<?php
$title = "Contact Us";
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
    echo navbar(contact_active: 'active');
    ?>

    <section class="contact-us-page">
        <div class="container">
            <div class="row">
                <div class="appointment-col">
                    <div class="col-12 appointment-header">
                        <div class="header-title">Get in Touch With Us</div>
                    </div>

                    <form action="" method="post" data-url="./api/submit_form.php">
                        <div class="form-section row pb-5">
                            <div class="col-lg-8 appointment-form">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name*" required />

                                <input type="text" class="form-control" id="email" name="email" placeholder="Email*" required />
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Number*" required />
                                <textarea name="message" id="message" placeholder="Write a message*" required class="form-control text-area" rows="4"></textarea>

                                <button class="see-more btnSend" type="submit">
                                    Send message
                                </button>
                            </div>
                            <div class="col-lg-4 d-flex">
                                <!-- card -->

                                <div class="card h-100 d-flex">
                                    <div class="card-body">
                                        <h5 class="card-title">Our Contacts</h5>

                                        <ul class="card-text col nav flex-column nav-opacity nav-gap-sm">
                                            <li class="nav-item">
                                                <a class="pe-0" href="tel:<?php echo $tel2 ?? $do->getValue('tel2'); ?>">
                                                    <span><img src="/static/image/icons/contact-page-phone-icon.svg" alt="phone-icon" /></span>
                                                    <?php echo $tel2 ?? $do->getValue('tel2'); ?></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="pe-0" href="tel:<?php echo $tel1 ?? $do->getValue('tel1'); ?>">
                                                    <span><img src="/static/image/icons/contact-page-mobile-icon.svg" alt="phone-icon" /></span>
                                                    <?php echo $tel1 ?? $do->getValue('tel1'); ?></a>
                                            </li>

                                            <li class="nav-item">
                                                <a class=" " href="https://www.google.com/maps/place/Guheshwori+Dental+Multispeciality+and+Implants+Hub/@27.6743023,85.3125613,17z/data=!3m1!4b1!4m6!3m5!1s0x39eb19ccea5eb539:0xa1a024277eba90e3!8m2!3d27.6742976!4d85.3151362!16s%2Fg%2F11b6dx__r1?entry=ttu" target="_blank">
                                                    <span><img src="/static/image/icons/location.svg" alt="location-icon" /></span>
                                                    Jawalakhel, Laltipur, Nepal</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class=" " href="mailto:<?php echo $gmail ?? $do->getValue('gmail'); ?>" target="_blank">
                                                    <span><img src="/static/image/icons/contact-page-email-icon.svg" alt="mail-icon" /></span>
                                                    <?php echo $gmail ?? $do->getValue('gmail'); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-end">
                                    <div class="side-card d-flex flex-column justify-content-end">
                                        <a href="<?php echo $linked_in_link ?? $do->getValue('linked_in_link'); ?>" class=" linkedin-icon" target="_blank">
                                            <img src="/static/image/linked-in-icon.svg" alt="linked-in-icon" />
                                        </a>
                                        <a href="<?php echo $twitter_link ?? $do->getValue('twitter_link'); ?>" class="twitter-icon" target="_blank">
                                            <img src="/static/image/icons/twitter.svg" alt="twitter-icon" />
                                        </a>
                                        <a href="<?php echo $insta_link ?? $do->getValue('insta_link'); ?>" class="insta-icon" target="_blank">
                                            <img src="/static/image/icons/insta.svg" alt="insta-icon" />
                                        </a>
                                        <a href="<?php echo $facebook_link ?? $do->getValue('facebook_link'); ?>" class="facebook-icon" target="_blank">
                                            <img src="/static/image/icons/facebook.svg" alt="facebook-icon" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="embbeded-map">
        <!-- embbed a map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.880547821576!2d85.312561315031!3d27.67430228280129!2m3!1f0!2f39.99999899999999!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ccea5eb539%3A0xa1a024277eba90e3!2sGuheshwori%20Dental%20Multispeciality%20and%20Implants%20Hub!5e0!3m2!1sen!2snp!4v1634179128809!5m2!1sen!2snp" width="100%" height="450" allowfullscreen="" class="map" loading="lazy"></iframe>
    </section>

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
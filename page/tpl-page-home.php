<?php

//php version check


$title = "Home page";
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

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" nonce="NHMNsV85"></script>

    <?php
    include_once 'tpl-compontent-property-card.php';


    ?>



    <?php
    include_once 'tpl-page-header.php';
    echo navbar(home_active: 'active');
    ?>


    <div class="hero p-5">
        <div class="container">
            <div class="row">
                <?php

                echo propertyCard(
                    $id = 1000,
                    $type = 'sale',
                    $image = 'product-img.png',
                    $title = 'Beautiful Small Apartment',
                    $location = 'Budhanilkantha, Kathmandu',
                    $price = 'Rs. 1,50,00,000'
                );
                ?>
            </div>
        </div>

    </div>



    <?php
    include_once 'tpl-page-footer.php';

    ?>


    <?php
    foreach ($links["js"] as $key) {
        echo '<script src="' . $key . '"></script>';
    }
    ?>
    <script>
        $(document).ready(function() {
            $('#popup .modal').modal('show');
        });

        window.addEventListener('resize', function() {
            var fbPage = document.querySelector('.fb-page');
            var instaPage = document.querySelector('.instagram-media');
            if (window.innerWidth < 400) {
                fbPage.setAttribute('data-width', window.innerWidth);
                instaPage.style.width = window.innerWidth + 'px';
            } else {
                fbPage.setAttribute('data-width', '400');
                instaPage.style.width = '400px';
            }
        });

        // Trigger the event manually at document load
        window.dispatchEvent(new Event('resize'));
    </script>

</body>

</html>
<script async defer src="//www.instagram.com/embed.js"></script>
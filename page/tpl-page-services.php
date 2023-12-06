<?php
$objPost = new Post();
$objPost->section = "service"; // section is required
$objPost->active = 1; // -1 for All, 0 for Inactive only and 1 for Active only
$objPost->visibility = "Public"; // -1 for All, "public" for Public only and "private" for Private only

$services = $objPost->selectBySection();

$title = "Services";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title ?? $do->getValue("site_name"); ?>
    </title>
    <meta name="description" content="<?php echo $do->getValue(
                                            "meta_description"
                                        ); ?>">
    <meta name="keywords" content="<?php echo $do->getValue(
                                        "meta_keyword"
                                    ); ?>">
    <?php foreach ($links["css"] as $key) {
        echo '<link rel="stylesheet" href="' . $key . '">';
    } ?>
</head>

<body>
    <?php 
    include_once "tpl-page-header.php"; 
    echo navbar(service_active: "active");
    ?>
    <section class="services-page">

        <div class="container">
            <div class="row position-relative text-center">
                <div class="col-12 services-header">
                    <div class="header-title-small">Healthy Smiles</div>
                    <div class="header-title">Everyday!</div>
                    <div class="services-desc">
                        Get your day started with a smile: check our services to see
                    </div>
                    <div class="services-desc">what we can help you with!</div>
                </div>


                <?php
                // add <div class="d-flex justify-content-around"> to $result at the beginning ,loop $services as $service for 3 times, add </div> and repeat the same for remaining  data

                $result = "";
                // slice $services into as many parts as needed but it should contain 3 items in each part
                // $services = array_chunk($services, 3);



                foreach ($services as $service) {
                    $result .=
                        '<div class="col-md-4 d-flex justify-content-between service-card">
                            <a href="/service-single?id=' .
                        $service['id'] . '" class="services-box w-100">
                                                    <div class="services-box-img">
                                                        <img src="' . DIR_UPLOADS . $service["src"] . '" alt="image of teeth" class="w-100 h-100"/>
                                                    </div>
                                                    <div class="services-box-texts">
                                                        <div class="services-box-texts-title">
                                                            ' . $service["name"] . '
                                                        </div>
                                                        <div class="services-box-texts-desc">
                                                        ' . $service["long_description"] . '
                                                        </div>
                                                    </div>
                                                </a>
                        </div>';
                }


                ?>
                <?php echo $result; ?>
            </div>
        </div>
    </section>


    <?php include_once "tpl-page-footer.php"; ?>

    <?php foreach ($links["js"] as $key) {
        echo '<script src="' . $key . '"></script>';
    } ?>
</body>

</html>
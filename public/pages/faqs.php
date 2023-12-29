<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        FAQs | Real Property Nepal
    </title>
    <?php include_once './includes/links.php'; ?>
</head>

<body>
    <?php
    include_once './components/property-card.php';
    ?>
    <?php
    include_once './components/property-card.php';
    ?>
    <?php
    include_once 'tags/header.php';
    echo navbar();
    ?>


    <section class="faqs-hero-bg hero-bg">
        <div class="container">
            <div class="row">
                <div class="title col-12">
                    <h1 class="text-center">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="faqs-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    How to buy product?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    How to buy product?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    How to buy product?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="need-help">
                        <h2 class="title">Need Help?</h2>
                        <p>Our team is here to help you. If you have any questions or need any help, please contact us.</p>
                        <!-- <button class="btn btn-primary">Contact Us</button> -->
                    </div>
                </div>
            </div>
    </section>



    <section class="featured-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Property you may like</h2>
                </div>
            </div>
            <div class="row">
                <div class="property-slider">

                    <?php
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 'Rs. 1,50,00,000'
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 'Rs. 1,50,00,000'
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 'Rs. 1,50,00,000'
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 'Rs. 1,50,00,000'
                    );
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
    </section>








    <?php include_once 'tags/footer.php'; ?>

    <?php include_once './includes/scripts.php'; ?>
</body>

</html>
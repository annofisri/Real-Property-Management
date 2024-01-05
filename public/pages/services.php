<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Services | Real Property Nepal
    </title>
    <?php include_once './includes/links.php'; ?>

</head>

<body>

    <?php
    include_once './components/property-card.php';
    ?>
    <?php
    include_once 'tags/header.php';
    echo navbar();
    ?>
    <section class="service-hero-bg hero-bg">
        <div class="container">
            <div class="row">
                <div class="title col-12">
                    <h1 class="text-center">Our Services</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="services-text">
        <div class="container">
            <div class="row">
                <div class="col-12 services-texts">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-service1-tab" data-bs-toggle="pill" data-bs-target="#pills-service1" type="button" role="tab" aria-controls="pills-service1" aria-selected="true">Property / Land Management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-service2-tab" data-bs-toggle="pill" data-bs-target="#pills-service2" type="button" role="tab" aria-controls="pills-service2" aria-selected="false">Property Rental</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-service3-tab" data-bs-toggle="pill" data-bs-target="#pills-service3" type="button" role="tab" aria-controls="pills-service3" aria-selected="false">Real Estate Planning and management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-service4-tab" data-bs-toggle="pill" data-bs-target="#pills-service4" type="button" role="tab" aria-controls="pills-service4" aria-selected="false">End to End Service</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-service1" role="tabpanel" aria-labelledby="pills-service1-tab" tabindex="0">
                            <ul>
                                <li>
                                    <p>Preliminary property visit</p>
                                </li>
                                <li>
                                    <p>Periodic property visit with updates</p>
                                </li>
                                <li>
                                    <p>Property maintenance and repairs</p>
                                </li>
                                <li>
                                    <p>Property monitoring</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-service2" role="tabpanel" aria-labelledby="pills-service2-tab" tabindex="0">
                            <ul>
                                <li>
                                    <p>Connect with potential tenants</p>
                                </li>
                                <li>
                                    <p>Tenant verification</p>
                                </li>
                                <li>
                                    <p>Security deposit collection</p>
                                </li>
                                <li>
                                    <p>Preliminary property visit</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-service3" role="tabpanel" aria-labelledby="pills-service3-tab" tabindex="0">
                            <ul>
                                <li>
                                    <p>Buy and Sell properties</p>
                                </li>
                                <li>
                                    <p>Market Research</p>
                                </li>
                                <li>
                                    <p>Real Estate strategic investment advice for the overall portfolio</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-service4" role="tabpanel" aria-labelledby="pills-service3-tab" tabindex="0">
                            <ul>
                                <li>
                                    <p>Full online access to property details</p>
                                </li>
                                <li>
                                    <p>Photographs of all repairs</p>
                                </li>
                                <li>
                                    <p>Resolve any disputes with tenants</p>
                                </li>
                                <li>
                                    <p>Eviction services</p>
                                </li>
                                <li>
                                    <p>Facilitate 'move in' and 'move out' of tenants</p>
                                </li>
                                <li>
                                    <p>Personalized email/phone service to users who don't want to use online platform</p>
                                </li>
                                <li>
                                    <p>Property Tax and Accounting</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="featured-properties property-you-may-like">
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
                        $price = 15000000
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 15000000
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 15000000
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 15000000
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 15000000
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Service Fees | Real Property Nepal
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

    <section class="service-fees-bg">
        <div class="container">
            <div class="row">
                <div class="title col-12">
                    <h1 class="text-center">Service Fees</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="service-fees-hero">
        <div class="container">
            <div class="row">
                <div class="charges-fees col-md-6">

                    <div class="row">
                        <div class="col-md-12 charges">
                            <div class="title">
                                <h2>Charges</h2>
                            </div>
                            <ul>
                                <li>
                                    Property management only (without rental)
                                </li>
                                <li>
                                    Property management with rental
                                </li>
                                <li>
                                    Renter search and contract negotiations
                                </li>
                                <li>
                                    Rental contract and handling (if owner finds the renter)
                                </li>
                            </ul>
                            <p>
                                (Note: Multiple property discounts available)
                            </p>
                        </div>
                        <div class="col-md-12 Fees">
                            <div class="title">
                                <h2>Fees</h2>
                            </div>
                            <ul>
                                <li>
                                    NRs 2,500 per property
                                </li>
                                <li>
                                    Higher of NRs 4,000 or 8% of the rent per month
                                </li>
                                <li>
                                    One time 1 month rental
                                </li>
                                <li>
                                    One time half month rental
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>

                <div class="col-md-6 included-services">

                    <div class="title">
                        <h2>Included Services</h2>
                    </div>
                    <ul>
                        <li>
                            Full online access of property details and updates(with pictures)
                        </li>
                        <li>
                            Around the clock availability for maintenance and repair
                        </li>
                        <li>
                            Bookkeeping of all expenses

                        </li>
                        <li>
                            Annual property tax payment

                        </li>
                        <li>
                            Quarterly property visit and updates

                        </li>
                        <li>
                            Search for renters and renters verification

                        </li>
                        <li>
                            Facilitate ‘move in’ and ‘move out’ of tenants

                        </li>
                        <li>
                            Rent collection
                        </li>
                        <li>
                            Rental agreement negotiations
                        </li>
                        <li>
                            Research on market rental price
                        </li>
                        <li>
                            Eviction notice to renters

                        </li>
                        <li>
                            Personalized email/phone service to users

                        </li>
                        <li>
                            Strategic advice for renting, renovating and reconstruction*

                        </li>
                        <li>
                            Buy and sell properties

                        </li>
                        <li>
                            Travel and accommodation arrangements in Nepal*

                        </li>
                        <li>
                            Legal and accounting services*

                        </li>
                        <li>
                            Maintenance and repair*

                        </li>
                        <li>
                            *Any third party fees would be passed on to the customer

                        </li>

                    </ul>
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


    <?php
    include_once "tags/footer.php";
    ?>


    <?php
    include_once './includes/scripts.php'
    ?>
</body>

</html>
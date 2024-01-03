<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Home | Real Property Management
    </title>
    <?php include_once './includes/links.php'; ?>


</head>

<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" nonce="NHMNsV85"></script>

    <?php
    include_once './components/property-card.php';
    ?>



    <?php
    include_once 'tags/header.php';
    echo navbar();
    ?>


    <section class="home-hero">
        <div class="container">
            <div class="row">

                <div class="animated-text pb-4">
                    <span class="">LETS FIND A </span>
                    <div class=" animated-texts">
                        <span id="animated-word"></span><span class="cursor">|</span>
                        <span class="for-text">FOR</span>
                    </div>
                    <div class="you-text">YOU!</div>
                </div>


                <div class="search-form">
                    <form method="POST" class="d-flex justify-content-center gap-2">
                        <div class="search-inputs position-relative">
                            <div class="location-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <g clip-path="url(#clip0_37_2346)">
                                        <path d="M15.75 8.38135C15.75 13.6313 9 18.1313 9 18.1313C9 18.1313 2.25 13.6313 2.25 8.38135C2.25 6.59114 2.96116 4.87425 4.22703 3.60838C5.4929 2.34251 7.20979 1.63135 9 1.63135C10.7902 1.63135 12.5071 2.34251 13.773 3.60838C15.0388 4.87425 15.75 6.59114 15.75 8.38135Z" stroke="#4E4E4E" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9 10.6313C10.2426 10.6313 11.25 9.62399 11.25 8.38135C11.25 7.13871 10.2426 6.13135 9 6.13135C7.75736 6.13135 6.75 7.13871 6.75 8.38135C6.75 9.62399 7.75736 10.6313 9 10.6313Z" stroke="#4E4E4E" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_37_2346">
                                            <rect width="18" height="18" fill="white" transform="translate(0 0.881348)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <input type="text" name="location" class="location-input" placeholder="Location">
                            <select name="region" id="region">
                                <option>Region</option>
                                <option value="all">All</option>
                                <option value="kathmandu">Kathmandu</option>
                                <option value="lalitpur">Lalitpur</option>
                                <option value="bhaktapur">Bhaktapur</option>
                            </select>
                            <select name="type" id="type">
                                <option>Type</option>
                                <option value="all">All</option>
                                <option value="sale">Sale</option>
                                <option value="rent">Rent</option>
                            </select>
                        </div>
                        <button class="search-btn">
                            <svg class="pb-1" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.25 15.1313C11.5637 15.1313 14.25 12.4451 14.25 9.13135C14.25 5.81764 11.5637 3.13135 8.25 3.13135C4.93629 3.13135 2.25 5.81764 2.25 9.13135C2.25 12.4451 4.93629 15.1313 8.25 15.1313Z" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.75 16.6314L12.4875 13.3689" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            Search</button>
                    </form>
                </div>


            </div>
        </div>
    </section>


    <section class="home-about">
        <div class="container">
            <div class="row">

                <div class="col-md-12 home-about-text">
                    <h2 class="title">WHO WE ARE?</h2>
                    <p class="text">We are a family & friends owned and operated full-service Property Management & Marketing company. Collectively, we have decades of international experience in multi property ownership, Finance, IT and marketing. After working in various multinational companies around the globe and interacting with large number of expats, we have realized an urgent need for a customized care and service for NRNs (Non-Resident Nepalese) in the Property Management sector in Nepal. With you in mind, we have started a new company dedicated in providing</p>

                    <a href="/about" class="see-more-btn">See More</a>
                </div>
            </div>
        </div>

    </section>


    <section class="featured-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex mb-4 gap-3 featured-properties-head">
                    <h2 class="title mb-0">
                        Featured Property
                    </h2>
                    <a href="/properties?filterProperty&is_featured" class="see-more-btn d-flex" style="color:white;">
                        <div>
                            See More
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                            <path d="M6.75 14.3813L11.25 9.88135L6.75 5.38135" stroke="#F6F6F6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </a>
                </div>
            </div>
            <div class="row">
                <div id="featured_slider">
                </div>
            </div>
        </div>
    </section>


    <section class="featured-properties new-listed-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex gap-3">
                        <h2 class="title mb-0">
                            New Listed
                        </h2>
                        <a href="/properties?filterProperty&is_new" class="see-more-btn d-flex" style="color:white;">
                            <div>
                                See More
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                <path d="M6.75 14.3813L11.25 9.88135L6.75 5.38135" stroke="#F6F6F6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <div class="row new-property-slider" id="new_section">

            </div>
        </div>
    </section>



    <section class="home-services">
        <div class="container">
            <div class="row">
                <p2 class="title col-md-12">
                    Our Services
                </p2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <p2 class="service-card">
                        Property / Land Management
                    </p2>
                </div>
                <div class="col-md-6">
                    <p2 class="service-card">
                        Real Estate Planning and Management
                    </p2>
                </div>
                <div class="col-md-6">
                    <p2 class="service-card">
                        Property Rental
                    </p2>
                </div>
                <div class="col-md-6">
                    <p2 class="service-card">
                        End to End Service
                    </p2>
                </div>
            </div>

            <div class="row see-more-btn">
                <div class="col-md-12">
                    <a href="/services" class="default-btn-outlined" style="background:transparent !important;">See More

                    </a>
                </div>
            </div>
        </div>
    </section>





    <?php
    include_once 'tags/footer.php';

    ?>


    <?php
    include_once './includes/scripts.php'
    ?>
    <script>
        $(document).ready(function() {

            const $featured_slider = $('#featured_slider');
            const $new_section = $('#new_section');

            console.log($featured_slider, $new_section);

            var featuredProperties = [];

            function getFeaturedProperties() {
                $.ajax({
                    url: '/api/property.php?getFeaturedProperties',
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        featuredProperties = response.data;

                        $featured_slider.empty();
                        if (featuredProperties.length > 0) {
                            featuredProperties.forEach(property => {
                                $featured_slider.append(`
                                <div class="card property-card" style="width: 306px;">
                                    <div class="card-img-top position-relative" >
                                    <div class="property-type ${property.type}"><span class="text-capitalize">For ${property.type}</span></div>
                                    <img src="/upload/${property.default_image || 'placeholder.jpg'}" alt="product-img" class="img-fluid w-100 h-100">
                                    <div class="property-id d-flex justify-content-end p-2">ID: ${property.id}</div>

                                    <div class="property-category">${property.category_name}</div>
                                    </div>
                                    <div class="card-body ">
                                    
                                    <h5 class="card-title">${property.name}</h5>
                                    <div class="d-flex location">
                                            <div class="icon-box">
                                            <img src="./assets/images/location-icon.svg" alt="location-icon" class="h-100 img-fluid w-100" />
                                            </div>
                                            <a class="nav-link" href="">${property.address}</a>
                                    </div>
                                    <p class="card-text">Rs. ${property.price}</p>
                                    <a href="/property-single?id=${property.id}" class="view-details-btn">View Details</a>
                                    </div>
                                </div>
                                `);
                            });
                        }

                        $featured_slider.slick({
                            dots: true,
                            infinite: true,
                            autoplay: false,
                            speed: 300,
                            adaptiveHeight: true,
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            arrows: true,

                            height: '100%',
                            gap: 10,

                            responsive: [{
                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1,
                                        infinite: true,
                                        dots: false
                                    }
                                },
                                {
                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        infinite: true,
                                        dots: true,
                                        arrows: false
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        infinite: true,
                                        dots: true,
                                        arrows: false
                                    }
                                }
                                // You can unslick at a given breakpoint now by adding:
                                // settings: "unslick"
                                // instead of a settings object
                            ]
                        });
                    }
                });
            }

            var newProperties = [];

            function getNewProperties() {
                $new_section.empty();
                $.ajax({
                    url: '/api/property.php?getNewProperties',
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        newProperties = response.data;

                        newProperties.forEach(property => {
                            $new_section.append(`
                            <div class="col-lg-6">
                                <div class="new-listed-card d-flex flex-row position-relative">
                                    <div class="property-category">
                                        ${property.category_name}
                                    </div>
                                    <div class="property-id position-absolute new-listed-id end-0">ID: ${property.id}</div>
                                    <img src="/upload/${property.default_image || 'placeholder.jpg'}" class="property-img" alt="...">
                                    <div class="new-listed-card-body">
                                        <h5 class="new-listed-card-title">${property.address}</h5>
                                        <div class="location d-flex">
                                            <img src="./assets/images/location-icon.svg" alt="location-icon" class="h-100 " />
                                            <div class="new-listed-card-text">${property.city}, ${property.district}, ${property.province}</div>
                                        </div>
                                        <div class="new-listed-card-text price">Rs. ${property.price}/-</div>
                                        <div class="new-listed-card-text size">${property.contract}</div>
                                        <a href="/property-single?id=${property.id}" class="default-btn new-listed-see-details-btn position-absolute bottom-0 mb-3">View Details</a>
                                    </div>
                                </div>
                            </div>
                            `);
                        });

                    }
                });
            }

            function init() {
                getFeaturedProperties();
                getNewProperties();
            }
            init();


        });
    </script>

</body>

</html>
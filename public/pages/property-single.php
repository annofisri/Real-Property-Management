<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Property Single | Real Property Nepal
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

    <div class="property-details-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-9 all-details">
                    <div class="row">

                        <div class="images-gallery">
                            <div class="large-image position-relative">
                                <button class="arrow left-arrow">&lt;</button>
                                <img id="active-image" src="" alt="Image 1">
                                <button class="arrow right-arrow">&gt;</button>
                            </div>
                            <div class="thumbnails">
                                <!-- <img class="thumbnail" src="./assets/images/gallery-img-1.jpg" alt="Image 1">
                                <img class="thumbnail" src="./assets/images/gallery-img-2.jpg" alt="Image 2">
                                <img class="thumbnail" src="./assets/images/gallery-img-3.jpg" alt="Image 3">
                                <img class="thumbnail" src="./assets/images/gallery-img-1.jpg" alt="Image 1">
                                <img class="thumbnail" src="./assets/images/gallery-img-2.jpg" alt="Image 2">
                                <img class="thumbnail" src="./assets/images/gallery-img-3.jpg" alt="Image 3">
                                <img class="thumbnail" src="./assets/images/gallery-img-1.jpg" alt="Image 1">
                                <img class="thumbnail" src="./assets/images/gallery-img-2.jpg" alt="Image 2">
                                <img class="thumbnail" src="./assets/images/gallery-img-3.jpg" alt="Image 3">
                                <img class="thumbnail" src="./assets/images/gallery-img-1.jpg" alt="Image 1">
                                <img class="thumbnail" src="./assets/images/gallery-img-2.jpg" alt="Image 2">
                                <img class="thumbnail" src="./assets/images/gallery-img-3.jpg" alt="Image 3"> -->
                                <!-- Add more thumbnails as needed -->
                            </div>
                        </div>

                        <div class="property-name">

                        </div>
                        <div class="col-md-12 property-description">
                            <div class="title">Property Description</div>
                            <p class="texts"></p>
                        </div>
                        <div class="col-md-12 property-details">
                            <div class="title">Property Details</div>
                            <div class="row texts">
                                <div class="col-md-6 row " style="padding-left: 24px;">
                                    <!-- <ul class="col-6">

                                        <li>Property ID</li>
                                        <li>Price</li>
                                        <li>Location</li>
                                        <li>No. of Storeys</li>
                                        <li>Property Type</span></li>
                                    </ul>

                                    <ul class="col-6 border-end">
                                        <li>: 001</li>
                                        <li>: Rs. 1,50,00,000</li>
                                        <li>: Budhanilkantha, Kathmandu</li>
                                        <li>: 2</li>
                                        <li>: House</li>
                                    </ul> -->

                                    <div class="col-md-12 row detail-item justify-content-between border-bottom">
                                        <div class=" col-6 title">Property ID</div>
                                        <div class="col-6 data" data-key="id"></div>
                                    </div>
                                    <div class="col-md-12 row detail-item justify-content-between border-bottom">
                                        <div class=" col-6 title">Price</div>
                                        <div class="col-6 data" data-key="price"></div>
                                    </div>
                                    <div class="col-md-12 row detail-item justify-content-between border-bottom">
                                        <div class=" col-6 title">Location</div>
                                        <div class="col-6 data" data-key="address"></div>
                                    </div>
                                    <div class="col-md-12 row detail-item justify-content-between border-bottom">
                                        <div class=" col-6 title">No. of Storeys</div>
                                        <div class="col-6 data" data-key="storey"></div>
                                    </div>
                                    <div class="col-md-12 row detail-item justify-content-between border-bottom">
                                        <div class=" col-6 title">Property Type</div>
                                        <div class="col-6 data" data-key="type"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 row" style="padding-left: 24px;">
                                    <!-- <ul class="col-6">
                                        <li>Bedrooms</li>
                                        <li>Bathrooms</li>
                                    </ul>
                                    <ul class="col-6">
                                        <li>: 2</li>
                                        <li>: 2</li>
                                    </ul> -->
                                    <div class="col-md-12 row detail-item justify-content-between border-bottom">
                                        <div class=" col-6 title">Bedrooms</div>
                                        <div class="col-6 data" data-key="bedroom"></div>
                                    </div>
                                    <div class="col-md-12 row detail-item justify-content-between border-bottom">
                                        <div class=" col-6 title">Bathrooms</div>
                                        <div class="col-6 data" data-key="bathroom"></div>
                                    </div>
                                    <div class="col-md-12 row detail-item justify-content-between border-bottom">
                                        <div class=" col-6 title">Gym</div>
                                        <div class="col-6 data" data-key="gym"></div>
                                    </div>
                                    <div class="col-md-12 row detail-item justify-content-between border-bottom">
                                        <div class=" col-6 ">
                                            <div class="title w-100">Swimming Pool</div>
                                        </div>
                                        <div class="col-6 data" data-key="swimming_pool"></div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <!-- <div class="col-md-12 map property-description">
                            <div class="title">Map</div>
                            
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=chitwan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                                    <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a>
                                </div>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 400px;
                                        width: 100%;
                                    }

                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 400px;
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div> -->


                        <div class="col-md-12">
                            <div class="inquery-form">
                                <form method="POST">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="firstname">First Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" aria-label="First name" id="firstname" name="firstname" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastname">Last Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" aria-label="Last name" id="lastname" name="lastname" required>
                                        </div>


                                        <div class="col-md-6">
                                            <label for="email">Email<span class="required">*</span></label>
                                            <input type="email" class="form-control" aria-label="Email" id="email" name="email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone">Phone Number<span class="required">*</span></label>
                                            <input type="text" class="form-control" aria-label="Phone" id="phone" name="phone" required>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <label for="customerId">Customer ID (If available)</label>
                                            <input type="text" class="form-control" aria-label="Customer ID" id="customerId" name="customerId">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="requestType">Request Type</label>
                                            <select class="form-select" aria-label="Request Type" id="requestType" name="requestType">
                                                <option selected>Choose...</option>
                                                <option value="Inquiry">Inquiry</option>
                                                <option value="Complaint">Complaint</option>
                                                <option value="Feedback">Feedback</option>
                                            </select>
                                        </div> -->

                                        <div class="col-md-12 mt-4">
                                            <textarea class="form-control" id="message" name="message" rows="6" placeholder="Type your message here..." required></textarea>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <button type="submit" class="submit-inquery">Submit for Inquiry</button>
                                        </div>
                                    </div>




                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="similar-properties col-md-3">
                    <div class="title">Similar Properties</div>
                    <div class="row">



                    </div>

                </div>
            </div>
        </div>
    </div>











    <?php include_once 'tags/footer.php'; ?>

    <?php include_once './includes/scripts.php'; ?>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


    <script>
        //gallery thumbnails
        var thumbnails = $('.thumbnail');
        var currentIndex = 0;

        //get property id from url
        var url = window.location.href;
        const propertyId = url.split('?')[1].split('=')[1];

        //function to get all the property details by id
        function getPropertyDetails(propertyId) {
            $.ajax({
                url: '/api/property.php?action=getById&id=' + propertyId,
                method: 'GET',
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        var property = response.data;
                        console.log(property);
                        $('.detail-item .data').each(function() {
                            var key = $(this).data('key');
                            $(this).text(': ' + property[key]);
                        });

                        var images = property.images.split(',');

                        // update description and name
                        $('.property-name').text(property.name);
                        $('.property-description .texts').text(property.other_information);

                        //patch images to gallery thumbnails
                        images.forEach(function(image) {
                            $('.thumbnails').append('<img class="thumbnail" src="/upload/' + image + '" alt="Image 1">');
                        });
                        //patch first index image to large image
                        $('.large-image img').attr('src', '/upload/' + images[0]);



                        thumbnails = $('.thumbnail');
                        highlightThumbnail();

                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    console.log(error);
                    toastr.error('Something went wrong!');
                }
            });
        }

        //function to highlight the active thumbnail
        function highlightThumbnail() {
            thumbnails.removeClass('active-thumbnail');
            var activeThumbnail = thumbnails.eq(currentIndex).addClass('active-thumbnail');
            $('.thumbnails').animate({
                scrollTop: activeThumbnail.offset().top - $('.thumbnails').offset().top + $('.thumbnails').scrollTop() - $('.thumbnails').height() / 2 + activeThumbnail.height() / 2
            });
        }


        //function to get similar properties and patch to the DOM
        function getSimilarProperties() {
            $.ajax({
                url: '/api/property.php?action=getSimilarProperties&id=' + propertyId,
                method: 'GET',
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        var properties = response.data;
                        console.log(properties);
                        $('.similar-properties .row').empty();
                        properties.forEach(function(property) {
                            $('.similar-properties .row').append(

                                `
                                
                                <div class="col-md-12 item">
                                    <div class="card property-card">
                                        <div class="card-img-top position-relative">
                                            <img src="/upload/${property.default_image ? property.default_image : 'placeholder.jpg'}" alt="product-img" class="img-fluid w-100 h-100">
                                        </div>
                                        <div class="card-body ">
                                            <p class="card-text">Rs. ${property.price}</p>
                                            <a href="/property-single?id=${property.id}" class="card-title">${property.name}</a>
                                            <div class="d-flex location">
                                                <div class="icon-box">
                                                    <img src="./assets/images/location-icon.svg" alt="location-icon" class="h-100 img-fluid w-100" />
                                                </div>
                                                <div class="nav-link"> ${property.address}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                `
                            );
                        });
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    console.log(error);
                    toastr.error('Something went wrong!');
                }
            });
        }



        $(document).ready(function() {




            $('body').on('click', '.thumbnail', function() {
                $('.large-image img').attr('src', $(this).attr('src'));
                currentIndex = thumbnails.index(this);
                highlightThumbnail();
            });

            $('body').on('click', '.left-arrow', function() {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : thumbnails.length - 1;
                $('.large-image img').attr('src', thumbnails.eq(currentIndex).attr('src'));
                highlightThumbnail();
            });

            $('body').on('click', '.right-arrow', function() {
                currentIndex = (currentIndex < thumbnails.length - 1) ? currentIndex + 1 : 0;
                $('.large-image img').attr('src', thumbnails.eq(currentIndex).attr('src'));
                highlightThumbnail();
            });




            //get property details
            getPropertyDetails(propertyId);
            //get similar properties
            getSimilarProperties();

        });
    </script>
</body>

</html>
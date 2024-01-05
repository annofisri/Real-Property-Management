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
                <div class="col-12 breadcrumbs mb-4">
                    <a href="/">Home</a> / <a href="/properties">Properties</a> / <span>Property Details</span>
                </div>
                <div class="col-md-9 all-details">
                    <div class="row">

                        <div class="images-gallery">
                            <div class="large-image position-relative d-flex align-items-center">
                                <button class="arrow left-arrow">&lt;</button>
                                <img id="active-image" src="" alt="Image 1" class="object-fit-cover">
                                <video controls alt="video" class="w-100 d-none">
                                    <source src="" type="video/mp4">
                                </video>
                                <button class="arrow right-arrow">&gt;</button>
                            </div>
                            <div class="thumbnails">

                            </div>
                        </div>

                        <div class="property-name">

                        </div>
                        <div class="col-md-12 property-description">
                            <div class="head-title">Property Description</div>
                            <p class="texts"></p>
                        </div>
                        <div class="col-md-12 property-details">
                            <div class="head-title">Property Details</div>
                            <div class="texts">
                                <div class="row px-3">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">Property ID</div>
                                                    <div class="col-6 data" data-key="id"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">Price</div>
                                                    <div class="col-6 data" data-key="price"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">Province</div>
                                                    <div class="col-6 data" data-key="province_name"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">District</div>
                                                    <div class="col-6 data" data-key="district_name"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">City</div>
                                                    <div class="col-6 data" data-key="city_name"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">Address</div>
                                                    <div class="col-6 data" data-key="address"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">No. of Storeys</div>
                                                    <div class="col-6 data" data-key="storey"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">Property Type</div>
                                                    <div class="col-6 data" data-key="type"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">Bedrooms</div>
                                                    <div class="col-6 data " data-key="bedroom"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">Bathrooms</div>
                                                    <div class="col-6 data" data-key="bathroom"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 key">Gym</div>
                                                    <div class="col-6 data boolean" data-key="gym"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row border-bottom">
                                                    <div class=" col-6 ">
                                                        <div class="key w-100">Swimming Pool</div>
                                                    </div>
                                                    <div class="col-6 data boolean" data-key="swimming_pool"></div>
                                                </div>
                                            </div>
                                        </div>
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
                                <form method="POST" id="inqueryForm">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="firstname">First Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" aria-label="First name" id="firstname" name="first_name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastname">Last Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" aria-label="Last name" id="lastname" name="last_name" required>
                                        </div>


                                        <div class="col-md-6">
                                            <label for="email">Email<span class="required">*</span></label>
                                            <input type="email" class="form-control" aria-label="Email" id="email" name="email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone">Phone Number<span class="required">*</span></label>
                                            <input type="text" class="form-control" aria-label="Phone" id="phone" name="phone_number">
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
        const urlParams = new URLSearchParams(window.location.search);
        const propertyId = parseInt(urlParams.get('id'));

        //function to highlight the active thumbnail
        function highlightThumbnail() {
            thumbnails.removeClass('active-thumbnail');

            thumbnails.eq(currentIndex).addClass('active-thumbnail');
            var activeThumbnail = $('.active-thumbnail');
            $('.thumbnails').animate({
                scrollTop: activeThumbnail.offset().top - $('.thumbnails').offset().top + $('.thumbnails').scrollTop() - $('.thumbnails').height() / 2 + activeThumbnail.height() / 2
            });

        }

        //function to update the thumbnails
        function updateThumbnails(images, videos) {
            $('.thumbnails').empty();

            images.forEach(function(image) {
                $('.thumbnails').append(
                    `<img src="/upload/${image}" alt="Image thumbnail" class="thumbnail object-fit-cover" />`
                );
            });
            videos.forEach(function(video) {

                $('.thumbnails').append(
                    `
                    <img src="/assets/images/video-thumbnail.jpg" alt="Video thumbnail" class="thumbnail" data-video="/upload/${video}" />
                    `
                );
            });
            thumbnails = $('.thumbnail');
        }

        //function to get all the property details by id
        function getPropertyDetails(propertyId) {
            $.ajax({
                url: '/api/property.php?action=getById&id=' + propertyId,
                method: 'GET',
                success: function(response) {
                    if (response.success) {
                        var property = response.data;

                        saveVisitedPage(property);
                        $('.data').each(function() {
                            var key = $(this).data('key');
                            $(this).text(': ' + property[key]);
                            //check if key is null
                            if (property[key] == null) {
                                $(this).text(': N/A');
                            }
                            //check key is price
                            if (key == 'price') {
                                $(this).text(': Rs. ' + property[key]);
                            }
                        });

                        //select data with boolean value
                        $('.boolean').each(function() {
                            var key = $(this).data('key');
                            $(this).text(': ' + (property[key] ? 'Yes' : 'No'));
                            //check if property is null
                            if (property[key] == null) {
                                $(this).text(': N/A');
                            }
                        });
                        var images = [];
                        var videos = [];
                        if (property.images) {
                            images = property.images.split(',');



                        }

                        if (property.videos) {
                            videos = property.videos.split(',');

                        }


                        updateThumbnails(images, videos);
                        //patch first index image to large image
                        $('.large-image img').attr('src', '/upload/' + images[0]);
                        //heightlight first thumbnail
                        highlightThumbnail();
                        // update description and name
                        $('.property-name').text(property.name);
                        $('.property-description .texts').text(property.other_information);
                        //check if property.other_information is null
                        if (property.other_information == null) {
                            $('.property-description .texts').text('N/A');
                        }
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    // console.error(error);
                    toastr.error('Something went wrong!');
                }
            });
        }




        //function to get similar properties and patch to the DOM
        function getSimilarProperties() {
            $.ajax({
                url: '/api/property.php?action=getSimilarProperties&id=' + propertyId,
                method: 'GET',
                success: function(response) {
                    if (response.success) {
                        var properties = response.data;
                        $('.similar-properties .row').empty();
                        properties.forEach(function(property) {
                            $('.similar-properties .row').append(
                                `                                
                                <div class="col-md-12 item">
                                    <a href="/property-single?id=${property.id}" class="card property-card">
                                        <div class="card-img-top position-relative">
                                            <img src="/upload/${property.default_image ? property.default_image : 'placeholder.jpg'}" alt="product-img" class="img-fluid w-100 h-100">
                                        </div>
                                        <div class="card-body ">
                                            <p class="card-text">Rs. ${property.price}</p>
                                            <div class="card-title">${property.name}</div>
                                            <div class="d-flex location">
                                                <div class="icon-box">
                                                    <img src="./assets/images/location-icon.svg" alt="location-icon" class="h-100 img-fluid w-100" />
                                                </div>
                                                <div class="nav-link"> ${property.address}</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                `
                            );
                        });
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    // console.error(error);
                    toastr.error('Something went wrong!');
                }
            });
        }

        // for handling recent visited pages
        function saveVisitedPage(property) {
            let visitedPages = JSON.parse(localStorage.getItem('visitedPages')) || [];
            const index = visitedPages.findIndex((page) => page.id === propertyId);
            if (index !== -1) {
                visitedPages.splice(index, 1);
            }

            visitedPages.unshift(property);
            const maxSize = 3;
            visitedPages = visitedPages.slice(0, maxSize);
            localStorage.setItem('visitedPages', JSON.stringify(visitedPages));
        }


        function sendInquiry(data) {
            $.ajax({
                url: '/api/leads.php?action=addNew&type=property-inquiry',
                method: 'POST',
                data: data,
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        $('#inqueryForm').trigger('reset');
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    // console.error(error);
                    toastr.error('Something went wrong!');
                }
            });
        }


        $(document).ready(function() {


            //section to handle gallery thumbnails
            $('body').on('click', '.thumbnail', function() {
                //CHECK IF CLICKED THUMBNAIL IS VIDEO

                if ($(this).attr('data-video') !== undefined) {
                    // 

                    $('.large-image video source').attr('src', $(this).attr('data-video'));
                    $('.large-image video').removeClass('d-none');
                    $('.large-image img').addClass('d-none');
                    $('.large-image video')[0].load();
                    $('.large-image video')[0].play();
                    currentIndex = thumbnails.index(this);
                    highlightThumbnail();
                    return;
                }

                $('.large-image img').attr('src', $(this).attr('src'));
                $('.large-image img').removeClass('d-none');
                //remove src from video
                $('.large-image video source').attr('src', '');
                $('.large-image video').addClass('d-none');
                currentIndex = thumbnails.index(this);
                highlightThumbnail();
            });

            $('body').on('click', '.left-arrow', function() {

                currentIndex = (currentIndex > 0) ? currentIndex - 1 : thumbnails.length - 1;
                //CHECK IF CLICKED THUMBNAIL has video in it
                if (thumbnails.eq(currentIndex).attr('data-video') !== undefined) {
                    $('.large-image video source').attr('src', thumbnails.eq(currentIndex).attr('data-video'));
                    $('.large-image video').removeClass('d-none');
                    $('.large-image img').addClass('d-none');

                    $('.large-image video')[0].load();
                    $('.large-image video')[0].play();
                    highlightThumbnail();
                    return;
                }


                $('.large-image img').attr('src', thumbnails.eq(currentIndex).attr('src'));
                $('.large-image img').removeClass('d-none');
                $('.large-image video source').attr('src', '');
                $('.large-image video').addClass('d-none');
                highlightThumbnail();
            });

            $('body').on('click', '.right-arrow', function() {
                currentIndex = (currentIndex < thumbnails.length - 1) ? currentIndex + 1 : 0;
                //CHECK IF CLICKED THUMBNAIL has video in it
                if (thumbnails.eq(currentIndex).attr('data-video') !== undefined) {
                    $('.large-image video source').attr('src', thumbnails.eq(currentIndex).attr('data-video'));
                    $('.large-image video').removeClass('d-none');
                    $('.large-image img').addClass('d-none');
                    $('.large-image video')[0].load();
                    $('.large-image video')[0].play();
                    highlightThumbnail();
                    return;
                }


                $('.large-image img').attr('src', thumbnails.eq(currentIndex).attr('src'));
                $('.large-image img').removeClass('d-none');
                $('.large-image video source').attr('src', '');
                $('.large-image video').addClass('d-none');
                highlightThumbnail();
            });

            //handle thumbnails ends here

            //get property details
            getPropertyDetails(propertyId);
            //get similar properties
            getSimilarProperties();

            //send inquiry
            $('body').on('submit', '.inquery-form form', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();
                formData += '&property_id=' + propertyId;
                sendInquiry(formData);
            });

        });
    </script>
</body>

</html>
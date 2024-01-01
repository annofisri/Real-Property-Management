<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Properties | Real Property Nepal
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


    <div class="properties-hero-section">
        <div class="container">
            <div class="row">

                <div class="filters col-md-3">
                    <form id="filter_form">
                        <h5 class="title">
                            Filter Properties
                        </h5>
                        <h6 class="property-status">
                            Property Status
                        </h6>
                        <div class="property-status-btns d-flex gap-3">
                            <label for="checkbox-rent">
                                <input type="checkbox" id="checkbox-rent" name="type[]" value="rent" checked>
                                <div class="property-status-btn checkbox-btn">Rent</div>
                            </label>
                            <label for="checkbox-sale">
                                <input type="checkbox" id="checkbox-sale" name="type[]" value="sale" checked>
                                <div class="property-status-btn checkbox-btn">Sale</div>
                            </label>
                        </div>
                        <h6 class="property-category">
                            Property Category
                        </h6>
                        <div class="property-category-btn d-flex flex-column gap-2">
                            <label for="checkbox-cat-1">
                                <input type="checkbox" id="checkbox-cat-1" name="category_id[]" value="1" checked>
                                <div class="property-status-btn checkbox-btn">House</div>
                            </label>
                            <label for="checkbox-cat-2">
                                <input type="checkbox" id="checkbox-cat-2" name="category_id[]" value="2" checked>
                                <div class="property-status-btn checkbox-btn">Appartment</div>
                            </label>
                            <label for="checkbox-cat-3">
                                <input type="checkbox" id="checkbox-cat-3" name="category_id[]" value="3" checked>
                                <div class="property-status-btn checkbox-btn">Housing Colony</div>
                            </label>
                        </div>
                    </form>
                </div>


                <div class="col-md-9 properties">
                    <div class="row">
                        <div class="col-md-12 search-bar">
                            <form class="d-flex position-relative">
                                <div class="search-icon position-absolute">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                        <path d="M8.25 15.1313C11.5637 15.1313 14.25 12.4451 14.25 9.13135C14.25 5.81764 11.5637 3.13135 8.25 3.13135C4.93629 3.13135 2.25 5.81764 2.25 9.13135C2.25 12.4451 4.93629 15.1313 8.25 15.1313Z" stroke="#4E4E4E" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.75 16.6314L12.4875 13.3689" stroke="#4E4E4E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <input class="form-control me-2 search-input" id="search-property" type="search" placeholder="Search property by address, name or ID" aria-label="Search">
                            </form>
                        </div>
                        <div class="browse-properties col-md-12 d-flex">

                            <h4 class="title me-auto">
                                Browse Properties
                            </h4>
                            <div class="sort-by">
                                <div class="dropdown">
                                    <select name="sort_by" id="sort_by">
                                        <option value="">Sort By</option>
                                        <option value="price-low-high">Price: Low to High</option>
                                        <option value="price-high-low">Price: High to Low</option>
                                        <option value="property-desc">Newest</option>
                                        <option value="property-asc">Oldest</option>
                                    </select>
                                </div>
                            </div>




                        </div>

                        <div class="row" id="property-list">
                            <div class="col-md-4">
                                <div class="property-item">
                                    <div class="card property-card" style="width: 306px;">
                                        <div class="card-img-top position-relative">
                                            <div class="property-type sale">
                                                For sale
                                            </div>
                                            <img src="./assets/images/placeholder.jpg" alt="product-img" class="img-fluid w-100 h-100">
                                            <div class="property-id d-flex justify-content-end p-2">
                                                ID: 8
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <h5 class="card-title">Bhat Bhateni</h5>
                                            <div class="d-flex location">
                                                <div class="icon-box">
                                                    <img src="./assets/images/location-icon.svg" alt="location-icon" class="h-100 img-fluid w-100">
                                                </div>
                                                <div>Pokhara</div>
                                            </div>
                                            <p class="card-text">Rs. 36544000.00</p>
                                            <a href="/property-single?id=8" class="view-details-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pagination-section">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                                <path d="M11.25 14.3813L6.75 9.88135L11.25 5.38135" stroke="#192E3D" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                                <path d="M6.75 14.3813L11.25 9.88135L6.75 5.38135" stroke="#192E3D" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include_once 'tags/footer.php'; ?>
    <?php include_once './includes/scripts.php'; ?>

    <script>
        

        $(document).ready(function() {

            $('#filter_form').on('click', '.checkbox', function(){
                $(this).prop('checked', !$(this).prop('checked'));
            });

            var properties = [];

            const handleChange = function() {
                $('#property-list').addClass('opacity-05');
                const searchProperty = $('#search-property').val();
                const sortBy = $('#sort_by').val();
                let formData = 'filterProperty&';
                formData += $('#filter_form').serialize();
                if(searchProperty){
                    formData += `&searchProperty=${encodeURIComponent(searchProperty)}`;
                }
                if(sortBy){
                    formData += `&sortBy=${encodeURIComponent(sortBy)}`;
                }

                $.ajax({
                    url: '/api/property.php',
                    type: 'GET',
                    data: formData,
                    success: function(response) {
                        properties = response.data;
                        // Update the URI using the History API
                        const newUri = '?' + formData;
                        history.pushState({}, '', newUri);
                        getPropertiesByFilter();
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    },
                    complete: function(){
                        $('#property-list').removeClass('opacity-05');
                    }
                });
            }

            handleChange();
            
            $('#filter_form input, #sort_by, #search-property').on('change', handleChange);

            function getPropertiesByFilter() {
                if(properties.length > 0){
                    $('#property-list').empty();
                    properties.forEach(property => {
                        $('#property-list').append(`
                            <div class="col-md-4">
                                <div class="property-item">
                                    <div class="card property-card">
                                        <div class="card-img-top position-relative">
                                            <div class="property-type ${property.type}">
                                                For ${property.type}
                                            </div>
                                            <img src="./assets/images/${property.default_image || "placeholder.jpg"}" alt="product-img" class="img-fluid w-100 h-100">
                                            <div class="property-id d-flex justify-content-end p-2">
                                                ID: ${property.id}
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <h5 class="card-title">${property.name}</h5>
                                            <div class="d-flex location">
                                                <div class="icon-box">
                                                    <img src="./assets/images/location-icon.svg" alt="location-icon" class="h-100 img-fluid w-100">
                                                </div>
                                                <div>${property.address}, ${property.city_name}, ${property.district_name}, ${property.province_name}</div>
                                            </div>
                                            <p class="card-text">Rs. ${property.price}</p>
                                            <a href="/property-single?id=${property.id}" class="view-details-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                }
            }

        });
    </script>
</body>

</html>
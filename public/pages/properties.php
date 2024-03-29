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
                    <form id="filter_form" class="pe-3">
                        <h5 class="title">
                            Filter Properties
                        </h5>
                        <h6 class="property-status">
                            Property Status
                        </h6>
                        <div class="property-status-btns d-flex gap-3">
                            <label for="checkbox-rent">
                                <input type="checkbox" id="checkbox-rent" name="type[]" value="rent">
                                <div class="property-status-btn checkbox-btn">Rent</div>
                            </label>
                            <label for="checkbox-sale">
                                <input type="checkbox" id="checkbox-sale" name="type[]" value="sale">
                                <div class="property-status-btn checkbox-btn">Sale</div>
                            </label>
                        </div>
                        <h6 class="property-category">
                            Property Category
                        </h6>
                        <div class="property-category-btns">

                        </div>
                        <h6 class="property-price">
                            Price
                        </h6>
                        <div class="property-price-filter">
                            <div><span>Min:</span><input type="number" name="min" value="0"></div>
                            <div><span>Max:</span><input type="number" name="max" value="0"></div>
                        </div>
                    </form>
                </div>


                <div class="col-md-9 properties">
                    <div class="row">
                        <div class="col-md-12 search-bar">
                            <div class="d-flex position-relative">
                                <div class="search-icon position-absolute">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                        <path d="M8.25 15.1313C11.5637 15.1313 14.25 12.4451 14.25 9.13135C14.25 5.81764 11.5637 3.13135 8.25 3.13135C4.93629 3.13135 2.25 5.81764 2.25 9.13135C2.25 12.4451 4.93629 15.1313 8.25 15.1313Z" stroke="#4E4E4E" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.75 16.6314L12.4875 13.3689" stroke="#4E4E4E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <input class="form-control me-2 search-input" id="search-property" type="search" placeholder="Search property by address, name or ID" aria-label="Search">
                            </div>
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

                        </div>
                        <div class="pagination-section">
                            <div id="pagination">

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include_once 'tags/footer.php'; ?>
    <?php include_once './includes/scripts.php'; ?>

    <script>
        //fetch categories dynamically
        function fetchAndSetCategories() {
            $.ajax({
                url: '/api/category.php?action=getAll',
                type: 'GET',
                success: function(response) {

                    if (response.success) {
                        $('.property-category-btns').html('');
                        response.data.forEach((item, index) => {
                            $('.property-category-btns').append(`
                                <label for="checkbox-cat-${item.id}" class="mb-3">
                                    <input type="checkbox" id="checkbox-cat-${item.id}" name="category_id[]" value="${item.id}">
                                    <div class="property-status-btn checkbox-btn">${item.name}</div>
                                </label>
                            `)
                        });
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        $(document).ready(function() {
            //get categories dynamically
            $('body').on('load', fetchAndSetCategories());

            $('#search-property').click(function() {
                e.preventDefault();
            });

            $('#filter_form').on('click', '.checkbox', function() {
                $(this).prop('checked', !$(this).prop('checked'));
            });

            function updatePagination(currentPage, totalPages) {
                let paginationHtml = '';

                for (let i = 1; i <= totalPages; i++) {
                    const activeClass = i === currentPage ? 'active' : '';
                    paginationHtml += `<button class="pagination ${activeClass}" data-page="${i}">${i}</button>`;
                }

                $('#pagination').html(paginationHtml);

                $('.pagination').on('click', function() {
                    const newPage = $(this).data('page');
                    const updatedUrl = updateUrlParameter(location.href, 'page', newPage);
                    history.pushState(null, null, `${updatedUrl}`);
                    handleChange();
                    const scrollTop = $('#property-list').offset().top - 300;
                    $('html, body').animate({
                        scrollTop: scrollTop
                    }, 1000);
                });
            }

            var properties = [];

            const handleChange = function() {
                $('#property-list').addClass('opacity-05');
                let searchParams = window.location.search;
                if (searchParams.startsWith('?')) {
                    searchParams = searchParams.substring(1);
                }

                $.ajax({
                    url: '/api/property.php',
                    type: 'GET',
                    data: searchParams,
                    success: function(response) {
                        properties = response.data;
                        const pagination = response.pagination;
                        console.log(properties);
                        updatePagination(pagination.current_page, Math.ceil(pagination.total_property / 12));
                        getPropertiesByFilter();
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    },
                    complete: function() {
                        $('#property-list').removeClass('opacity-05');
                    }
                });
            }

            handleChange();
            //handle filter change for dynamic filters
            $('body').on('change', '#filter_form input, #sort_by, #search-property', pushState);

            function pushState() {
                const searchProperty = $('#search-property').val();
                const sortBy = $('#sort_by').val();
                let formData = 'filterProperty&';
                formData += $('#filter_form').serialize();
                if (searchProperty) {
                    formData += `&searchProperty=${encodeURIComponent(searchProperty)}`;
                }
                if (sortBy) {
                    formData += `&sortBy=${encodeURIComponent(sortBy)}`;
                }
                // Update the URI using the History API
                history.pushState({}, '', `?${formData}`);
                handleChange();
            }

            function updateUrlParameter(uri, key, value) {
                const url = new URL(uri);
                url.searchParams.set(key, value);
                return url.toString();
            }



            function getPropertiesByFilter() {
                $('#property-list').empty();
                if (properties.length > 0) {
                    properties.forEach(property => {
                        $('#property-list').append(`
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item">
                                    <div class="card property-card">
                                        <div class="card-img-top position-relative">
                                            <div class="property-type ${property.type}">
                                                For ${property.type}
                                            </div>
                                            <img src="/upload/${property.default_image || "placeholder.jpg"}" alt="product-img" class="img-fluid w-100 h-100">
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
                } else {
                    $('#property-list').html('<div class="alert alert-info">No property found. Try changing your filter criteria.</div>');
                }
            }

        });
    </script>
</body>

</html>
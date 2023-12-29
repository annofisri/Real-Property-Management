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
                    <form method="post">
                        <h5 class="title">
                            Filter Properties
                        </h5>
                        <h6 class="property-status">
                            Property Status
                        </h6>
                        <div class="property-status-btns d-flex gap-3">
                            <label for="rentCheckbox">
                                <input type="checkbox" id="rentCheckbox" name="rentStatus" value="true">
                                <div class="property-status-btn checkbox-btn" onclick="toggleCheckbox('#rentCheckbox')">Rent</div>
                            </label>
                            <label for="saleCheckbox">
                                <input type="checkbox" id="saleCheckbox" name="saleStatus" value="true">
                                <div class="property-status-btn checkbox-btn" onclick="toggleCheckbox('#saleCheckbox')">Sale</div>
                            </label>
                        </div>
                        <h6 class="property-category">
                            Property Category
                        </h6>
                        <div class="property-category-btn d-flex flex-column gap-2">
                            <label for="houseCheckbox">
                                <input type="checkbox" id="houseCheckbox" name="houseCategory" value="true">
                                <div class="property-status-btn checkbox-btn" onclick="toggleCheckbox('#houseCheckbox')">House</div>
                            </label>
                            <label for="appartmentCheckbox">
                                <input type="checkbox" id="appartmentCheckbox" name="appartmentCategory" value="true">
                                <div class="property-status-btn checkbox-btn" onclick="toggleCheckbox('#appartmentCheckbox')">Appartment</div>
                            </label>
                            <label for="housingColonyCheckbox">
                                <input type="checkbox" id="housingColonyCheckbox" name="housingColonyCategory" value="true">
                                <div class="property-status-btn checkbox-btn" onclick="toggleCheckbox('#housingColonyCheckbox')">Housing Colony</div>
                            </label>
                            <!-- <label for="landCheckbox">
                                <input type="checkbox" id="landCheckbox" name="landCategory" value="true">
                                <div class="property-status-btn checkbox-btn" onclick="toggleCheckbox('#landCheckbox')">Land</div>
                            </label> -->
                        </div>
                        <h6 class="property-price-range">
                            Price Range
                        </h6>
                        <div class="property-price-range-checkbox">
                            <input type="checkbox" id="all-range" name="all-range" value="all-range" checked disabled>
                            <label for="all-range">All Range</label><br>
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
                                <input class="form-control me-2 search-input" type="search" placeholder="Search property by address, name or ID" aria-label="Search">
                            </form>
                        </div>
                        <div class="browse-properties col-md-12 d-flex">

                            <h4 class="title me-auto">
                                Browse Properties
                            </h4>
                            <div class="sort-by">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort By
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                                        <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                                        <li><a class="dropdown-item" href="#">Newest</a></li>
                                        <li><a class="dropdown-item" href="#">Oldest</a></li>
                                    </ul>
                                </div>
                            </div>




                        </div>

                        <div class="row all-properties">

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


    <?php
    //     function propertyCard($id = '1', $type = 'sale', $image = 'product-img.png', $title = 'Beautiful Apartment', $location = 'Kathmandu', $price = 'Rs. 1,50,000', $category = 'Apartment')
    //     {


    //         $card = '

    //       <div class="card property-card" style="width: 306px;">
    //         <div class="card-img-top position-relative" >
    //           <div class="property-type ' . $type . '">For ' . ucfirst($type) . '</div>
    //           <img src="./assets/images/' . $image . '" alt="product-img" class="img-fluid w-100 h-100">
    //           <div class="property-id d-flex justify-content-end p-2">ID: ' . $id . '</div>

    //           ' . ($category == '' ? '' : '<div class="property-category">' . $category . '</div>') . '
    //         </div>
    //         <div class="card-body ">

    //           <h5 class="card-title">' . $title . '</h5>
    //           <div class="d-flex location">
    //                 <div class="icon-box">
    //                   <img src="./assets/images/location-icon.svg" alt="location-icon" class="h-100 img-fluid w-100" />
    //                 </div>
    //                 <a class="nav-link" href=""> ' . $location . '</a>
    //           </div>
    //           <p class="card-text">' . $price . '</p>
    //           <a href="/property-single" class="view-details-btn">View Details</a>
    //         </div>
    //       </div>

    //   ';
    //         return $card;
    //     } 

    ?>


    <script>
        //property card component
        function propertyCard(id = '', type = '', image = '', title = '', location = '', price = '', category = '') {
            return `
                <div class="card property-card" style="width: 306px;">
                    <div class="card-img-top position-relative" >
                        <div class="property-type ${type}">
                            For ${type}
                        </div>
                        <img src="./assets/images/${image ? image : 'placeholder.jpg'}" alt="product-img" class="img-fluid w-100 h-100">
                        <div class="property-id d-flex justify-content-end p-2">
                            ID: ${id}
                        </div>
                        ${category == '' ? '' : `<div class="property-category">${category}</div>`}
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title">${title}</h5>
                        <div class="d-flex location">
                                <div class="icon-box">
                                 <img src="./assets/images/location-icon.svg" alt="location-icon" class="h-100 img-fluid w-100" />
                                </div>
                                <a class="nav-link" href=""> ${location}</a>
                        </div>
                        <p class="card-text">Rs. ${price}</p>
                        <a href="/property-single?id=${id}" class="view-details-btn">View Details</a>
                    </div>
                </div>
            `;
        }

        $(document).ready(function() {

            function toggleCheckbox(checkbox) {
                $(checkbox).prop('checked', !$(checkbox).prop('checked'));
            }

            $.ajax({
                url: 'api/property.php?action=getAll',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        $('.properties .all-properties').html('');
                        response.data.forEach(property => {
                            $('.properties .all-properties').append(` 
                                <div class = "col-md-4 property-item" >
                                    ${propertyCard(
                                        property.id,
                                        property.type,
                                        property.image,
                                        property.name,
                                        property.address,
                                        property.price,
                                        property.category
                                    )}
                                </div>
                                `);
                        });
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    </script>
</body>

</html>
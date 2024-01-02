<?php


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php include_once('./includes/links.php'); ?>
    <title>Properties</title>
</head>

<body>

    <?php include_once('./includes/header.php'); ?>
    <?php include_once('./includes/sidebar.php'); ?>

    <main id="main-section">

        <!-- <button type="button" class="btn  status-active">active</button> -->
        <!-- <button type="button" class="btn  status-pending">pending</button> -->
        <!-- <button type="button" class="btn  status-rejected">rejected</button> -->

        <section class="property-home" id="propertyHome">
            <div class="head d-flex px-4 py-3 justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <div class="title">Properties</div>
                    <!-- <div class="total">Total:100</div> -->

                    <div class="search-block">

                        <form class="w-100" role="search" method="get">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="search" value="" id="search-input" data-control-filter="#propertiesList">

                        </form>
                    </div>
                </div>

                <div class="add-property-btn d-flex" id="addPropertyBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <g clip-path="url(#clip0_440_7771)">
                            <path d="M8.29688 12.1634V9.70244H5.83594C5.44757 9.70244 5.13281 9.38768 5.13281 8.99931C5.13281 8.61108 5.44757 8.29619 5.83594 8.29619H8.29688V5.83525C8.29688 5.44702 8.61163 5.13213 9 5.13213C9.38837 5.13213 9.70312 5.44702 9.70312 5.83525V8.29619H12.1641C12.5524 8.29619 12.8672 8.61108 12.8672 8.99931C12.8672 9.38768 12.5524 9.70244 12.1641 9.70244H9.70312V12.1634C9.70312 12.5517 9.38837 12.8665 9 12.8665C8.61163 12.8665 8.29688 12.5517 8.29688 12.1634ZM15.364 2.63603C13.6641 0.936172 11.4039 0 9 0C6.59605 0 4.33589 0.936172 2.63603 2.63603C0.936172 4.33589 0 6.59605 0 9C0 11.4039 0.936172 13.6641 2.63603 15.364C4.33589 17.0638 6.59605 18 9 18C10.6458 18 12.2561 17.5515 13.6568 16.7029C13.989 16.5017 14.0952 16.0694 13.894 15.7374C13.6928 15.4052 13.2604 15.299 12.9283 15.5002C11.7473 16.2155 10.3888 16.5938 9 16.5938C4.81284 16.5938 1.40625 13.1872 1.40625 9C1.40625 4.81284 4.81284 1.40625 9 1.40625C13.1872 1.40625 16.5938 4.81284 16.5938 9C16.5938 10.4973 16.1485 11.9546 15.3062 13.2148C15.0903 13.5375 15.1771 13.9742 15.4999 14.1901C15.8226 14.4058 16.2594 14.319 16.4752 13.9963C17.4727 12.5042 18 10.7765 18 9C18 6.59605 17.0638 4.33589 15.364 2.63603Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_440_7771">
                                <rect width="18" height="18" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="title">Add Property</div>
                </div>

            </div>

            <!-- New Table Design -->
            <div class="common-list">
                <div class="table-list">
                    <table class="table table-hover table-resposive" id="propertiesList">
                        <thead class="border border-buttom">
                            <tr>
                                <th scope="col" class="">S.No.</th>
                                <th scope="col">Date</th>
                                <th scope="col">Property ID</th>
                                <th scope="col">Property Name</th>
                                <th scope="col">Property Location</th>
                                <th scope="col">Name of Owner</th>
                                <th scope="col">Owner Contact</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <!-- <tr>
                                <td>1</td>
                                <td>12/12/2020</td>
                                <td>123</td>
                                <td>Property 1</td>
                                <td>Location 1</td>
                                <td>Owner 1</td>
                                <td>1234567890</td>
                                <td><button type="button" class="btn status pending">Pending</button></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="me-2">
                                            <img src="./assets/images/view-icon.svg" alt="">
                                        </a>
                                        <a href="#" class="me-2">
                                            <img src="./assets/images/edit-icon.svg" alt="">
                                        </a>
                                        <a href="#" class="">
                                            <img src="./assets/images/delete-icon.svg" alt="">
                                        </a>
                                    </div>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- New Table Design ends -->

        </section>


        <section class="property-add d-none" id="addProperty">
            <div class="head d-flex px-4 py-3 justify-content-between" style="height: 69px;">
                <div class="d-flex gap-2">
                    <div class="d-flex align-items-center property-back-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
                            <path d="M18 4.43303H2.17064L5.73852 0.865107L4.93671 0.0632935L0 4.99997L4.93671 9.93672L5.73852 9.13486L2.17064 5.56698H18V4.43303Z" fill="#192E3D" />
                        </svg>
                    </div>
                    <div class="title">Add Property Details</div>
                </div>
                <div class="save-btns d-flex gap-3">
                    <div class="default-btn-outlined cancel-btn">
                        Cancel
                    </div>
                    <div class="default-btn save-btn" onclick="$('form#addPropertyForm').submit()">
                        Save & Publish
                    </div>
                </div>
            </div>

            <div class="property-add-main">
                <form id="addPropertyForm">
                    <div class="row">
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <label for="clientInfo" class="form-label">Client Info*</label>
                                <input type="text" class="form-control" id="clientInfo" name="owner_id" required>
                            </div>
                            <div class="col-md-2 pe-0">
                                <label for="approveStatus" class="form-label">Approve Status*</label>
                                <select id="approveStatus" class="form-select" name="approve_status" required>
                                    <option value="">Choose...</option>
                                    <option value="approved">Approved</option>
                                    <option value="pending">Pending</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pt-2">
                            <div class="row g-3">

                                <div class="col-md-12">
                                    <label for="propertyName" class="form-label">Property Name*</label>
                                    <input type="text" class="form-control" id="propertyName" name="name" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="province_id" class="form-label">Province* </label>
                                    <select id="province_id" class="form-select" name="province_id" required>
                                        <option value="">Choose...</option>
                                        <option value="1">Province 1</option>
                                        <option value="2">Province 2</option>
                                        <option value="3">Province 3</option>
                                        <option value="4">Province 4</option>
                                        <option value="5">Province 5</option>
                                        <option value="6">Province 6</option>
                                        <option value="7">Province 7</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="district_id" class="form-label">District* </label>
                                    <select id="district_id" class="form-select" name="district_id" required>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="city_id" class="form-label">City* </label>
                                    <select id="city_id" class="form-select" name="city_id" required>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="propertyAddress" class="form-label">Property Address*</label>
                                    <input type="text" class="form-control" id="propertyAddress" name="address" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="propertyCategory" class="form-label">Category*</label>
                                    <select id="propertyCategory" class="form-select" name="category_id" required>
                                        <option value="">Choose...</option>
                                        <option value="1">Housing</option>
                                        <option value="2">Apartment</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="propertyType" class="form-label">Type*</label>
                                    <select id="propertyType" class="form-select" name="type" required>
                                        <option value="">Choose...</option>
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="contractTerms" class="form-label">Contract Terms*</label>
                                    <input type="text" class="form-control" id="contractTerms" name="contract_term" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="totalStoreys" class="form-label">Total Storeys</label>
                                    <input type="number" class="form-control" id="totalStoreys" name="storey" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="price" class="form-label">Price*</label>
                                    <input type="number" class="form-control" id="price" name="price" required>
                                </div>

                                <div class="col-md-12">
                                    <div class="border p-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Gym" class="form-label">Gym*</label>
                                                <select id="Gym" class="form-select" name="gym" required>
                                                    <option value="">Choose...</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>

                                            </div>
                                            <div class="col-md-4">
                                                <label for="security" class="form-label">Security*</label>
                                                <select id="security" class="form-select" name="security" required>
                                                    <option value="">Choose...</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="swimmingPool" class="form-label">Swimming Pool*</label>
                                                <select id="swimmingPool" class="form-select" name="swimming_pool" required>
                                                    <option value="">Choose...</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 upload-images">
                                    <div class="upload-images-title">
                                        Upload Property Images and Videos*
                                    </div>
                                    <input type="file" id="uploadImages" name="images" multiple required>
                                    <!-- <div class="default-btn-outlined mt-2" id="uploadImagesBtn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <g clip-path="url(#clip0_440_8663)">
                                                <path d="M8.29688 12.1634V9.70244H5.83594C5.44757 9.70244 5.13281 9.38768 5.13281 8.99931C5.13281 8.61108 5.44757 8.29619 5.83594 8.29619H8.29688V5.83525C8.29688 5.44702 8.61163 5.13213 9 5.13213C9.38837 5.13213 9.70312 5.44702 9.70312 5.83525V8.29619H12.1641C12.5524 8.29619 12.8672 8.61108 12.8672 8.99931C12.8672 9.38768 12.5524 9.70244 12.1641 9.70244H9.70312V12.1634C9.70312 12.5517 9.38837 12.8665 9 12.8665C8.61163 12.8665 8.29688 12.5517 8.29688 12.1634ZM15.364 2.63603C13.6641 0.936172 11.4039 0 9 0C6.59605 0 4.33589 0.936172 2.63603 2.63603C0.936172 4.33589 0 6.59605 0 9C0 11.4039 0.936172 13.6641 2.63603 15.364C4.33589 17.0638 6.59605 18 9 18C10.6458 18 12.2561 17.5515 13.6568 16.7029C13.989 16.5017 14.0952 16.0694 13.894 15.7374C13.6928 15.4052 13.2604 15.299 12.9283 15.5002C11.7473 16.2155 10.3888 16.5938 9 16.5938C4.81284 16.5938 1.40625 13.1872 1.40625 9C1.40625 4.81284 4.81284 1.40625 9 1.40625C13.1872 1.40625 16.5938 4.81284 16.5938 9C16.5938 10.4973 16.1485 11.9546 15.3062 13.2148C15.0903 13.5375 15.1771 13.9742 15.4999 14.1901C15.8226 14.4058 16.2594 14.319 16.4752 13.9963C17.4727 12.5042 18 10.7765 18 9C18 6.59605 17.0638 4.33589 15.364 2.63603Z" fill="#192E3D" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_440_8663">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="title">Add Images or Videos
                                        </div>
                                    </div> -->
                                    <label for="uploadImages" class="default-btn-outlined mt-2" id="uploadImagesBtn">
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <g clip-path="url(#clip0_440_8663)">
                                                    <path d="M8.29688 12.1634V9.70244H5.83594C5.44757 9.70244 5.13281 9.38768 5.13281 8.99931C5.13281 8.61108 5.44757 8.29619 5.83594 8.29619H8.29688V5.83525C8.29688 5.44702 8.61163 5.13213 9 5.13213C9.38837 5.13213 9.70312 5.44702 9.70312 5.83525V8.29619H12.1641C12.5524 8.29619 12.8672 8.61108 12.8672 8.99931C12.8672 9.38768 12.5524 9.70244 12.1641 9.70244H9.70312V12.1634C9.70312 12.5517 9.38837 12.8665 9 12.8665C8.61163 12.8665 8.29688 12.5517 8.29688 12.1634ZM15.364 2.63603C13.6641 0.936172 11.4039 0 9 0C6.59605 0 4.33589 0.936172 2.63603 2.63603C0.936172 4.33589 0 6.59605 0 9C0 11.4039 0.936172 13.6641 2.63603 15.364C4.33589 17.0638 6.59605 18 9 18C10.6458 18 12.2561 17.5515 13.6568 16.7029C13.989 16.5017 14.0952 16.0694 13.894 15.7374C13.6928 15.4052 13.2604 15.299 12.9283 15.5002C11.7473 16.2155 10.3888 16.5938 9 16.5938C4.81284 16.5938 1.40625 13.1872 1.40625 9C1.40625 4.81284 4.81284 1.40625 9 1.40625C13.1872 1.40625 16.5938 4.81284 16.5938 9C16.5938 10.4973 16.1485 11.9546 15.3062 13.2148C15.0903 13.5375 15.1771 13.9742 15.4999 14.1901C15.8226 14.4058 16.2594 14.319 16.4752 13.9963C17.4727 12.5042 18 10.7765 18 9C18 6.59605 17.0638 4.33589 15.364 2.63603Z" fill="#192E3D" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_440_8663">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <div class="title">Add Images or Videos
                                            </div>
                                        </div>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <label for="propertyDescription" class="form-label">Property Descriptions</label>
                            <textarea class="form-control" id="propertyDescription" name="other_information" rows="10"></textarea>
                        </div>
                        <div class="col-md-12 d-none">
                            <div class="images-viewer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                            <img src="./assets/images/property1.png" alt="" class="property-img">

                                            <div class="delete-icon position-absolute end-0 top-0">
                                                <div>
                                                    <img src="./assets/images/delete-icon.svg" alt="" class="w-100 h-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                            <img src="./assets/images/property1.png" alt="" class="property-img">

                                            <div class="delete-icon position-absolute end-0 top-0">
                                                <div>
                                                    <img src="./assets/images/delete-icon.svg" alt="" class="w-100 h-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                            <img src="./assets/images/property1.png" alt="" class="property-img">

                                            <div class="delete-icon position-absolute end-0 top-0">
                                                <div>
                                                    <img src="./assets/images/delete-icon.svg" alt="" class="w-100 h-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>


        <section class="property-add property-edit d-none" id="editProperty">
            <div class="head d-flex px-4 py-3 justify-content-between" style="height: 69px;">
                <div class="d-flex gap-2">
                    <div class="d-flex align-items-center property-back-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
                            <path d="M18 4.43303H2.17064L5.73852 0.865107L4.93671 0.0632935L0 4.99997L4.93671 9.93672L5.73852 9.13486L2.17064 5.56698H18V4.43303Z" fill="#192E3D" />
                        </svg>
                    </div>
                    <div class="title">Edit Property Details</div>
                </div>
                <div class="save-btns d-flex gap-3">
                    <div class="default-btn-outlined cancel-btn">
                        Cancel
                    </div>
                    <div class="default-btn save-btn" onclick="$('form#editPropertyForm').submit()">
                        Edit & Publish
                    </div>
                </div>
            </div>

            <div class="property-add-main property-edit-main">
                <form id="editPropertyForm">
                    <div data-key="id" class="d-none">
                        <input type="hidden" name="id" value="">
                    </div>
                    <div class="row">
                        <div class="col-md-12 row">
                            <div class="col-md-4" data-key="owner_id">
                                <label for="clientInfo" class="form-label">Client Info*</label>
                                <input type="text" class="form-control" id="clientInfo" name="owner_id" required>
                            </div>
                            <div class="col-md-2 pe-0" data-key="approve_status">
                                <label for="approveStatus" class="form-label">Approve Status*</label>
                                <select id="approveStatus" class="form-select" name="approve_status" required>
                                    <option value="">Choose...</option>
                                    <option value="approved">Approved</option>
                                    <option value="pending">Pending</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pt-2">
                            <div class="row g-3">

                                <div class="col-md-12" data-key="name">
                                    <label for="propertyName" class="form-label">Property name*</label>
                                    <input type="text" class="form-control" id="propertyName" name="name" required>
                                </div>
                                <div class="col-md-12" data-key="address">
                                    <label for="propertyAddress" class="form-label">Property Address*</label>
                                    <input type="text" class="form-control" id="propertyAddress" name="address" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="province_id" class="form-label">Province </label>
                                    <select id="province_id" class="form-select" name="province_id">
                                        <option value="">Choose...</option>
                                        <option value="1">Province 1</option>
                                        <option value="2">Province 2</option>
                                        <option value="3">Province 3</option>
                                        <option value="4">Province 4</option>
                                        <option value="5">Province 5</option>
                                        <option value="6">Province 6</option>
                                        <option value="7">Province 7</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="district_id" class="form-label">District</label>
                                    <select id="district_id" class="form-select" name="district_id">
                                    </select>
                                </div>
                                <div class="col-md-4" data-key="city_id">
                                    <label for="city_id" class="form-label">City* </label>
                                    <select id="city_id" class="form-select" name="city_id" required>
                                    </select>
                                </div>

                                <div class="col-md-4" data-key="category_id">
                                    <label for="propertyCategory" class="form-label">Category*</label>
                                    <select id="propertyCategory" class="form-select" name="category_id" required>
                                        <option value="">Choose...</option>
                                        <option value="1">Housing</option>
                                        <option value="2">Apartment</option>
                                    </select>
                                </div>
                                <div class="col-md-4" data-key="type">
                                    <label for="propertyType" class="form-label">Type*</label>
                                    <select id="propertyType" class="form-select" name="type" required>
                                        <option value="">Choose...</option>
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                    </select>
                                </div>
                                <div class="col-md-4" data-key="contract_term">
                                    <label for="contractTerms" class="form-label">Contract Terms*</label>
                                    <input type="text" class="form-control" id="contractTerms" name="contract_term" required>
                                </div>
                                <div class="col-md-4" data-key="storey">
                                    <label for="totalStoreys" class="form-label">Total Storeys</label>
                                    <input type="number" class="form-control" id="totalStoreys" name="storey" required>
                                </div>
                                <div class="col-md-4" data-key="price">
                                    <label for="price" class="form-label">Price*</label>
                                    <input type="number" class="form-control" id="price" name="price" required>
                                </div>

                                <div class="col-md-12">
                                    <div class="border p-3">
                                        <div class="row">
                                            <div class="col-md-4" data-key="gym">
                                                <label for="Gym" class="form-label">Gym*</label>
                                                <select id="Gym" class="form-select" name="gym" required>
                                                    <option value="">Choose...</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>

                                            </div>
                                            <div class="col-md-4" data-key="security">
                                                <label for="security" class="form-label">Security*</label>
                                                <select id="security" class="form-select" name="security" required>
                                                    <option value="">Choose...</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4" data-key="swimming_pool">
                                                <label for="swimmingPool" class="form-label">Swimming Pool*</label>
                                                <select id="swimmingPool" class="form-select" name="swimming_pool" required>
                                                    <option value="">Choose...</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 upload-images">
                                    <div class="upload-images-title">
                                        Upload Property Images and Videos*
                                    </div>
                                    <input type="file" id="uploadImages" name="images" multiple required>
                                    <!-- <div class="default-btn-outlined mt-2" id="uploadImagesBtn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <g clip-path="url(#clip0_440_8663)">
                                                <path d="M8.29688 12.1634V9.70244H5.83594C5.44757 9.70244 5.13281 9.38768 5.13281 8.99931C5.13281 8.61108 5.44757 8.29619 5.83594 8.29619H8.29688V5.83525C8.29688 5.44702 8.61163 5.13213 9 5.13213C9.38837 5.13213 9.70312 5.44702 9.70312 5.83525V8.29619H12.1641C12.5524 8.29619 12.8672 8.61108 12.8672 8.99931C12.8672 9.38768 12.5524 9.70244 12.1641 9.70244H9.70312V12.1634C9.70312 12.5517 9.38837 12.8665 9 12.8665C8.61163 12.8665 8.29688 12.5517 8.29688 12.1634ZM15.364 2.63603C13.6641 0.936172 11.4039 0 9 0C6.59605 0 4.33589 0.936172 2.63603 2.63603C0.936172 4.33589 0 6.59605 0 9C0 11.4039 0.936172 13.6641 2.63603 15.364C4.33589 17.0638 6.59605 18 9 18C10.6458 18 12.2561 17.5515 13.6568 16.7029C13.989 16.5017 14.0952 16.0694 13.894 15.7374C13.6928 15.4052 13.2604 15.299 12.9283 15.5002C11.7473 16.2155 10.3888 16.5938 9 16.5938C4.81284 16.5938 1.40625 13.1872 1.40625 9C1.40625 4.81284 4.81284 1.40625 9 1.40625C13.1872 1.40625 16.5938 4.81284 16.5938 9C16.5938 10.4973 16.1485 11.9546 15.3062 13.2148C15.0903 13.5375 15.1771 13.9742 15.4999 14.1901C15.8226 14.4058 16.2594 14.319 16.4752 13.9963C17.4727 12.5042 18 10.7765 18 9C18 6.59605 17.0638 4.33589 15.364 2.63603Z" fill="#192E3D" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_440_8663">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div class="title">Add Images or Videos
                                        </div>
                                    </div> -->
                                    <label for="uploadImages" class="default-btn-outlined mt-2" id="uploadImagesBtn">
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <g clip-path="url(#clip0_440_8663)">
                                                    <path d="M8.29688 12.1634V9.70244H5.83594C5.44757 9.70244 5.13281 9.38768 5.13281 8.99931C5.13281 8.61108 5.44757 8.29619 5.83594 8.29619H8.29688V5.83525C8.29688 5.44702 8.61163 5.13213 9 5.13213C9.38837 5.13213 9.70312 5.44702 9.70312 5.83525V8.29619H12.1641C12.5524 8.29619 12.8672 8.61108 12.8672 8.99931C12.8672 9.38768 12.5524 9.70244 12.1641 9.70244H9.70312V12.1634C9.70312 12.5517 9.38837 12.8665 9 12.8665C8.61163 12.8665 8.29688 12.5517 8.29688 12.1634ZM15.364 2.63603C13.6641 0.936172 11.4039 0 9 0C6.59605 0 4.33589 0.936172 2.63603 2.63603C0.936172 4.33589 0 6.59605 0 9C0 11.4039 0.936172 13.6641 2.63603 15.364C4.33589 17.0638 6.59605 18 9 18C10.6458 18 12.2561 17.5515 13.6568 16.7029C13.989 16.5017 14.0952 16.0694 13.894 15.7374C13.6928 15.4052 13.2604 15.299 12.9283 15.5002C11.7473 16.2155 10.3888 16.5938 9 16.5938C4.81284 16.5938 1.40625 13.1872 1.40625 9C1.40625 4.81284 4.81284 1.40625 9 1.40625C13.1872 1.40625 16.5938 4.81284 16.5938 9C16.5938 10.4973 16.1485 11.9546 15.3062 13.2148C15.0903 13.5375 15.1771 13.9742 15.4999 14.1901C15.8226 14.4058 16.2594 14.319 16.4752 13.9963C17.4727 12.5042 18 10.7765 18 9C18 6.59605 17.0638 4.33589 15.364 2.63603Z" fill="#192E3D" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_440_8663">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <div class="title">Add Images or Videos
                                            </div>
                                        </div>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class=" col-md-6" data-key="other_information">
                            <label for="propertyDescription" class="form-label">Property Descriptions</label>
                            <textarea class="form-control" id="propertyDescription" name="other_information" rows="10"></textarea>
                        </div>
                        <div class="col-md-12 d-none">
                            <div class="images-viewer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                            <img src="./assets/images/property1.png" alt="" class="property-img">

                                            <div class="delete-icon position-absolute end-0 top-0">
                                                <div>
                                                    <img src="./assets/images/delete-icon.svg" alt="" class="w-100 h-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                            <img src="./assets/images/property1.png" alt="" class="property-img">

                                            <div class="delete-icon position-absolute end-0 top-0">
                                                <div>
                                                    <img src="./assets/images/delete-icon.svg" alt="" class="w-100 h-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                            <img src="./assets/images/property1.png" alt="" class="property-img">

                                            <div class="delete-icon position-absolute end-0 top-0">
                                                <div>
                                                    <img src="./assets/images/delete-icon.svg" alt="" class="w-100 h-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>


        <section class="property-view d-none" id="propertyDetails">
            <div class="head d-flex px-4 py-3 justify-content-between" style="height: 69px;">
                <div class="d-flex gap-2">
                    <div class="d-flex align-items-center property-back-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
                            <path d="M18 4.43303H2.17064L5.73852 0.865107L4.93671 0.0632935L0 4.99997L4.93671 9.93672L5.73852 9.13486L2.17064 5.56698H18V4.43303Z" fill="#192E3D" />
                        </svg>
                    </div>
                    <div class="title">Property Details</div>
                </div>
                <div class="save-btns d-flex gap-3">
                    <div class="default-btn-outlined reject-btn approveOrRejectProperty" data-status="rejected" id="rejectProperty">
                        Reject
                    </div>
                    <div class="default-btn approve-btn approveOrRejectProperty" data-status="approved" id="approveProperty">
                        Approve
                    </div>
                </div>
            </div>

            <div class="property-add-main property-view-main">
                <div class="row" style="width: 100%;">

                    <div class=" col-md-6">
                        <div class="all-details m-3 p-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Property Owner ID
                                        </div>
                                        <div class="property-info-value" data-key="owner_id">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Owner Name
                                        </div>
                                        <div class="property-info-value" data-key="owner_name">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Property ID
                                        </div>
                                        <div class="property-info-value" data-key="id">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Property Name
                                        </div>
                                        <div class="property-info-value" data-key="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Property Address
                                        </div>
                                        <div class="property-info-value" data-key="address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Category
                                        </div>
                                        <div class="property-info-value" data-key="category_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Property Type
                                        </div>
                                        <div class="property-info-value" data-key="type">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Total Story
                                        </div>
                                        <div class="property-info-value" data-key="storey">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Gated Community
                                        </div>
                                        <div class="property-info-value" data-key="gated_community">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            No of Bedrooms
                                        </div>
                                        <div class="property-info-value" data-key="bedroom">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            No of Bathrooms
                                        </div>
                                        <div class="property-info-value" data-key="bathroom">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Security
                                        </div>
                                        <div class="property-info-value" data-key="security">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Swimming pool
                                        </div>
                                        <div class="property-info-value" data-key="swimming_pool">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Gym
                                        </div>
                                        <div class="property-info-value" data-key="gym">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Contract Terms
                                        </div>
                                        <div class="property-info-value" data-key="contract_term">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Monthly Rental
                                        </div>
                                        <div class="property-info-value" data-key="monthly_rental">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Price
                                        </div>
                                        <div class="property-info-value" data-key="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="property-info-name">
                                            Phone Number
                                        </div>
                                        <div class="property-info-value" data-key="phone_number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="propertyDetailsDescription" class="form-label">Property Descriptions</label>
                                <textarea class="form-control" id="propertyDetailsDescription" rows="10" readonly>hi</textarea>
                            </div>
                            <div class="col-md-12 view-all-images">
                                <div class="title">
                                    Images and Video
                                </div>
                                <div class="images-viewer">
                                    <div class="row">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form id="metaTagsForm">

                        <input type="hidden" name="id" value="">
                        <div class="col-md-12">
                            <div class="row px-4">
                                <div class="col-md-12 mb-2">
                                    <label for="metaTitle" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" id="metaTitle" name="meta_title">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="metaDescription" class="form-label">Meta Description</label>
                                    <textarea class="form-control" id="metaDescription" rows="3" name="meta_description"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include_once('./includes/scripts.php'); ?>

    <script>
        // function to show add property
        function showAddProperty() {
            $('#addProperty').removeClass('d-none');
            $('#propertyHome').addClass('d-none');
            $('#propertyDetails').addClass('d-none');
            $('#editProperty').addClass('d-none');
        }

        // function to show edit property
        function showEditProperty() {
            $('#editProperty').removeClass('d-none');
            $('#propertyHome').addClass('d-none');
            $('#propertyDetails').addClass('d-none');
            $('#addProperty').addClass('d-none');
        }

        // function to show property details
        function showPropertyDetails() {
            $('#propertyDetails').removeClass('d-none');
            $('#propertyHome').addClass('d-none');
            $('#addProperty').addClass('d-none');
            $('#editProperty').addClass('d-none');
        }

        // function to show property home
        function showPropertyHome() {
            $('#propertyHome').removeClass('d-none');
            $('#propertyDetails').addClass('d-none');
            $('#addProperty').addClass('d-none');
            $('#editProperty').addClass('d-none');
        }

        // function to fetch and set properties on properties table
        function fetchAndSetProperties() {
            $.ajax({
                url: '/api/property.php?action=getAll',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // console.log(response);
                    if (response.success) {
                        let properties = response.data;
                        let propertiesList = $('#propertiesList tbody');
                        propertiesList.empty();
                        properties.forEach((property, index) => {
                            let date = new Date(property.created_at);
                            let formattedDate = date.getFullYear() + '/' + ('0' + (date.getMonth() + 1)).slice(-2) + '/' + ('0' + date.getDate()).slice(-2);

                            let propertyRow = `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${formattedDate}</td>
                                <td>${property.id}</td>
                                <td>${property.name}</td>
                                <td class="text-capitalize">${property.address}, ${property.city_name}, ${property.district_name}, ${property.province_name}</td>
                                <td>${property.owner_name}</td>
                                <td>${property.phone_number}</td>
                                <td>
                                    <div class="btn status ${property.approve_status}">${property.approve_status}</div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button class="me-2 view-property" data-property-id="${property.id}">
                                            <img src="./assets/images/view-icon.svg" alt="">
                                        </button>
                                        <button class="me-2 edit-property" data-property-id="${property.id}">
                                            <img src="./assets/images/edit-icon.svg" alt="">
                                        </button>
                                        <button class="delete-property"  data-property-id="${property.id}">
                                            <img src="./assets/images/delete-icon.svg" alt="">
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            `;
                            propertiesList.append(propertyRow);
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }





        $(document).ready(function() {
            //fetch and set properties on page load
            fetchAndSetProperties();


            //on click of save and publish button of add property form
            $('#addPropertyForm').on('submit', function(e) {
                e.preventDefault();
                // check validity
                if (this.checkValidity()) {
                    console.log('valid');
                    let formData = new FormData(this);
                    console.log(formData);
                    $.ajax({
                        url: '/api/property.php?action=addNew',
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            console.log(response);
                            if (response.success) {
                                fetchAndSetProperties();
                                showPropertyHome();
                                toastr.success('New Property Successfully Added', 'Success');
                            }
                        },
                        error: function(error) {
                            console.log(error);
                            toastr.error('Something went wrong', 'Error');
                        }
                    });

                } else {
                    this.reportValidity();
                }
            });

            //on click of edit and submit button of edit property form
            $('#editPropertyForm').on('submit', function(e) {
                e.preventDefault();
                console.log('edit property form submitted');
                //check validity
                if (this.checkValidity()) {
                    let formData = new FormData(this);
                    //get id from form data
                    let id = formData.get('id');
                    $.ajax({
                        url: '/api/property.php?action=updateById&id=' + id,
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            console.log(response);
                            if (response.success) {
                                fetchAndSetProperties();
                                showPropertyHome();
                                toastr.success('Property Successfully Updated', 'Success');
                            }
                        },
                        error: function(error) {
                            console.log(error);
                            toastr.error('Something went wrong', 'Error');
                        }
                    });
                } else {
                    this.reportValidity();
                }

            });


            // show hide sections            
            $('.property-back-btn').click(function() {
                fetchAndSetProperties();
                showPropertyHome();
            });
            $('#addPropertyBtn').click(function() {
                showAddProperty();
            });
            $('.cancel-btn').click(function() {
                //reset all input fields of add property
                $('#addPropertyForm input').val('');
                $('#addPropertyForm textarea').val('');
                $('#addPropertyForm select').val('');
                $('#addPropertyForm .images-viewer .row').html('');
                //reset all input fields of edit property
                $('#editPropertyForm input').val('');
                $('#editPropertyForm textarea').val('');
                $('#editPropertyForm select').val('');
                $('#editPropertyForm .images-viewer .row').html('');
                fetchAndSetProperties();
                showPropertyHome();
            });

            //on click of view property button on action column of properties table
            $('body').on('click', '.view-property', function() {
                let propertyId = $(this).data('property-id');
                console.log(propertyId);

                $.ajax({
                    url: '/api/property.php?action=getById&id=' + propertyId,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.success) {

                            // reseting all fields
                            $('#propertyDetails .property-info-value').text('');
                            $('#propertyDetails .images-viewer .row').html('');
                            $('#propertyDetailsDescription').val('');
                            $('#metaTagsForm input[name="id"]').val('');
                            $('#metaTagsForm input[name="meta_title"]').val('');
                            $('#metaTagsForm textarea[name="meta_description"]').val('');


                            let property = response.data;
                            let date = new Date(property.created_at);
                            let formattedDate = date.getFullYear() + '/' + ('0' + (date.getMonth() + 1)).slice(-2) + '/' + ('0' + date.getDate()).slice(-2);

                            // patching data to property details
                            $('#propertyDetails .property-info-value').each(function() {
                                let key = $(this).data('key');
                                $(this).text(property[key]);
                            });

                            // patching property id to meta tags form
                            $('#metaTagsForm input[name="id"]').val(property.id);

                            // patching other_information to property description
                            $('#propertyDetailsDescription').val(property.other_information);

                            //patching images and videos to images viewer
                            const images = property.images;

                            if (images) {
                                let imagesHtml = '';
                                images.split(',').forEach(image => {
                                    imagesHtml += `
                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                            <img src="/upload/${image}" alt="" class="property-img">
                                        </div>
                                    </div>
                                    `;
                                });
                                $('#propertyDetails .images-viewer .row').append(imagesHtml);
                            }
                            const videos = property.videos;

                            if (videos) {
                                let imagesHtml = '';
                                videos.split(',').forEach(video => {
                                    imagesHtml += `
                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                            <img src="/upload/${video}" alt="" class="property-img">
                                        </div>
                                    </div>
                                    `;
                                });
                                $('#propertyDetails .images-viewer .row').append(imagesHtml);
                            }


                            showPropertyDetails();
                        }

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            //on click of approve property buttonon view property section
            $('.approveOrRejectProperty').click(function() {
                let status = $(this).data('status');

                //get meta tags form data
                let formData = new FormData($('#metaTagsForm')[0]);
                formData.append('action', 'approveOrRejectProperty');
                formData.append('status', status);

                $.ajax({
                    url: '/api/property.php',
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            fetchAndSetProperties();
                            showPropertyHome();
                            if (status == 'approved') {
                                toastr.success('Property Successfully Approved', 'Success');
                            } else {
                                toastr.error('Property Rejected', 'Success');
                            }
                        }
                    },
                    error: function(error) {
                        console.log(error);
                        toastr.error('Something went wrong', 'Error');
                    }
                });
            });


            getCities();
            var AllCities = [];

            function getCities() {
                $.ajax({
                    url: '/api/cities.php',
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        AllCities = response.data;
                    }
                });
            }

            function getDistrictsByProvince(selectedProvince) {
                const uniqueDistricts = [];
                const districtIdsSet = new Set();
                const districtsInProvince = AllCities.filter(district => district.province_id === selectedProvince).map(district => {
                    return {
                        "district_id": district.district_id,
                        "district_name": district.district_name
                    }
                });
                districtsInProvince.forEach(item => {
                    if (!districtIdsSet.has(item.district_id)) {
                        districtIdsSet.add(item.district_id);
                        uniqueDistricts.push(item);
                    }
                });

                return uniqueDistricts;
            }

            function getCitiesByDistrict(selectedProvince, selectedDistrict) {
                const citiesInDistrict = AllCities.filter(city => city.province_id === selectedProvince && city.district_id === selectedDistrict);
                return citiesInDistrict;
            }

            $('[name="province_id"]').change(function() {
                $('[name="district_id"]').empty();
                $('[name="city_id"]').empty();
                $('[name="district_id"]').append(`<option value="">Choose...</option>`);
                const selectedProvince = parseInt($(this).val());
                const districts = getDistrictsByProvince(selectedProvince);
                districts.forEach(district => {
                    $('[name="district_id"]').append(`
                    <option value="${district.district_id}">${district.district_name}</option>
                    `);
                });

            });
            $('[name="district_id"]').change(function() {
                $('[name="city_id"]').empty();
                $('[name="city_id"]').append(`<option value="">Choose...</option>`);
                const selectedProvince = parseInt($(this).closest('.row').find('[name="province_id"]').val());
                const selectedDistrict = parseInt($(this).val());

                const cities = getCitiesByDistrict(selectedProvince, selectedDistrict);
                cities.forEach(city => {
                    $('[name="city_id"]').append(`
                    <option value="${city.city_id}">${city.city_name}</option>
                    `);
                });
            });





            //on click of edit property button on action column of properties table
            $('body').on('click', '.edit-property', function() {
                let propertyId = $(this).data('property-id');

                $.ajax({
                    url: '/api/property.php?action=getById&id=' + propertyId,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            //reset all input fields of edit property
                            $('#editPropertyForm input').val('');
                            $('#editPropertyForm textarea').val('');
                            $('#editPropertyForm select').val('');
                            $('#editPropertyForm .images-viewer .row').html('');

                            let property = response.data;
                            let date = new Date(property.created_at);
                            let formattedDate = date.getFullYear() + '/' + ('0' + (date.getMonth() + 1)).slice(-2) + '/' + ('0' + date.getDate()).slice(-2);

                            // console.log(property);


                            //select all divs inside edit property form with data-key attribute
                            $('#editPropertyForm div[data-key]').each(function() {
                                let key = $(this).data('key');
                                //select all input, textarea and select inside div with data-key attribute
                                $(this).find('input, textarea, select').each(function() {
                                    let type = $(this).attr('type');
                                    if (type == 'file') {
                                        return;
                                    }
                                    $(this).val(property[key]);
                                });
                            });


                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
                showEditProperty();
            });

            //on click of delete property button on action column of properties table
            $('body').on('click', '.delete-property', function() {
                let propertyId = $(this).data('property-id');
                console.log(propertyId);
                $.ajax({
                    url: '/api/property.php?action=deleteById&id=' + propertyId,
                    method: 'GET',
                    dataType: 'json',
                    beforeSend: function() {
                        return confirm("Are you sure you want to delete this property?");
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            fetchAndSetProperties();
                            toastr.success('Property Successfully Deleted', 'Success');
                        }
                    },
                    error: function(error) {
                        console.log(error);
                        toastr.error('Something went wrong', 'Error');
                    }
                });
            });

        });
    </script>



</body>

</html>
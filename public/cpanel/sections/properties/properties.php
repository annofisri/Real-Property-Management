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


        <?php include_once('properties-add.php'); ?>
        <?php include_once('properties-edit.php'); ?>
        <?php include_once('properties-details.php'); ?>
    </main>

    <?php include_once('./includes/scripts.php'); ?>

    <script>
        let propertyId = null;

        //update file count on file upload
        function updateFileCount(count) {
            $('.selected-file-count').text(count);

        }

        //update media viewer on file upload in add property
        function updateAddPropertyMediaViewer(files) {
            $('#addPropertyForm .images-viewer .row').html('');
            let imagesHtml = '';
            files.forEach(file => {
                if (file.type.includes('image')) {
                    imagesHtml += `
                    <div class="col-md-3">
                        <div class="image-block position-relative">
                            <img src="${URL.createObjectURL(file)}" alt="" class="property-img">
                        </div>
                    </div>
                    `;
                } else if (file.type.includes('video')) {
                    imagesHtml += `
                    <div class="col-md-3">
                        <div class="image-block position-relative">
                            <video controls class="property-video w-100">
                                <source src="${URL.createObjectURL(file)}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    `;
                }
            });

            $('#addPropertyForm .images-viewer .row').append(imagesHtml);
        }


        //update media viewer on file upload in edit property
        function updateEditPropertyMediaViewer(files) {
            $('#editPropertyForm .selected-media-viewer .row').html('');
            let imagesHtml = '';
            files.forEach(file => {
                if (file.type.includes('image')) {
                    imagesHtml += `
                    <div class="col-md-3">
                        <div class="image-block position-relative">
                            <img src="${URL.createObjectURL(file)}" alt="" class="property-img">
                        </div>
                    </div>
                    `;
                } else if (file.type.includes('video')) {
                    imagesHtml += `
                    <div class="col-md-3">
                        <div class="image-block position-relative">
                            <video controls class="property-video w-100">
                                <source src="${URL.createObjectURL(file)}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    `;
                }
            });

            $('#editPropertyForm .selected-media-viewer .row').append(imagesHtml);
        }



        //fetch categories dynamically
        function fetchAndSetCategories() {
            $.ajax({
                url: '/api/category.php?action=getAll',
                type: 'GET',
                success: function(response) {
                    if (response.success) {
                        let categories = response.data;
                        let propertyCategoryAdd = $('#addPropertyForm #propertyCategory');
                        let propertyCategoryEdit = $('#editPropertyForm #propertyCategory');
                        propertyCategoryAdd.empty();
                        propertyCategoryEdit.empty();
                        propertyCategoryAdd.append(`<option value="">Choose...</option>`);
                        propertyCategoryEdit.append(`<option value="">Choose...</option>`);
                        categories.forEach((category, index) => {
                            let categoryOption = `<option value="${category.id}">${category.name}</option>`;
                            propertyCategoryAdd.append(categoryOption);
                            propertyCategoryEdit.append(categoryOption);
                        });
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        //function to fetch and set client info
        function fetchAndSetClientInfo() {
            $.ajax({
                url: '/api/property-owners.php?action=getAll',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        let clients = response.data;
                        let clientInfoAdd = $('#addPropertyForm #clientInfo');
                        let clientInfoEdit = $('#editPropertyForm #clientInfo');

                        clientInfoAdd.empty();
                        clientInfoEdit.empty();
                        clientInfoAdd.append(`<option value="">Choose...</option>`);
                        clientInfoEdit.append(`<option value="">Choose...</option>`);
                        clients.forEach((client, index) => {
                            let clientOption = `<option value="${client.id}">${client.name}</option>`;
                            clientInfoAdd.append(clientOption);
                            clientInfoEdit.append(clientOption);
                        });
                    }
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }

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
                    console.error(error);
                }
            });
        }

        //function to reset all input fields of add property
        function resetAddPropertyForm() {
            $('#addPropertyForm input').val('');
            $('#addPropertyForm textarea').val('');
            $('#addPropertyForm select').val('');
            $('#addPropertyForm .images-viewer .row').html('');
            $('#addPropertyForm .selected-file-count').text('0');
            $('#addPropertyForm .selected-media-viewer .row').html('');
        }
        //function to reset all input fields of edit property
        function resetEditPropertyForm() {
            $('#editPropertyForm input').val('');
            $('#editPropertyForm textarea').val('');
            $('#editPropertyForm select').val('');
            $('#editPropertyForm .images-viewer .row').html('');
            $('#editPropertyForm .selected-file-count').text('0');
            $('#editPropertyForm .selected-media-viewer .row').html('');
        }
        //function to reset all input fields of view property
        function resetPropertyDetailsForm() {
            $('#propertyDetails .property-info-value').text('');
            $('#propertyDetails .images-viewer .row').html('');
            $('#propertyDetailsDescription').val('');
            $('#metaTagsForm input[name="id"]').val('');
            $('#metaTagsForm input[name="meta_title"]').val('');
            $('#metaTagsForm textarea[name="meta_description"]').val('');
        }



        $(document).ready(function() {

            updateFileCount(0);

            //update media viewer on file upload for add property
            $('#addPropertyForm input[type="file"]#uploadImages').change(function() {
                let files = $(this)[0].files;
                files = Array.from(files);

                updateAddPropertyMediaViewer(files);
            });

            //update media viewer on file upload for edit property
            $('#editPropertyForm input[type="file"]#uploadImagesEdit').change(function() {
                let files = $(this)[0].files;
                files = Array.from(files);


                updateEditPropertyMediaViewer(files);
            });


            //update file count on file upload for edit property
            $('#editPropertyForm input[type="file"]').change(function() {
                let count = $(this)[0].files.length;
                updateFileCount(count);
            });

            //update file count on file upload for add property
            $('#addPropertyForm input[type="file"]').change(function() {
                let count = $(this)[0].files.length;
                updateFileCount(count);
            });

            //fetch and set properties on page load
            fetchAndSetProperties();

            //fetch and set client info and categories on page load
            $('#addPropertyForm').ready(function() {
                fetchAndSetClientInfo();
                fetchAndSetCategories();
            });
            $('#editPropertyForm').ready(function() {
                fetchAndSetClientInfo();
                fetchAndSetCategories();
            });


            //on click of save and publish button of add property form
            $('#addPropertyForm').on('submit', function(e) {
                e.preventDefault();
                // check validity
                if (this.checkValidity()) {
                    let formData = new FormData(this);
                    $.ajax({
                        url: '/api/property.php?action=addNew',
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.success) {
                                fetchAndSetProperties();
                                showPropertyHome();
                                toastr.success('New Property Successfully Added', 'Success');
                            }
                        },
                        error: function(error) {
                            console.error(error);
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
                            if (response.success) {
                                fetchAndSetProperties();
                                showPropertyHome();
                                toastr.success('Property Successfully Updated', 'Success');
                            }
                        },
                        error: function(error) {
                            console.error(error);
                            toastr.error('Something went wrong', 'Error');
                        }
                    });
                } else {
                    this.reportValidity();
                }

            });


            //on click of back and cancel button as well as add btn of property home
            $('.property-back-btn').click(function() {
                resetAddPropertyForm();
                resetEditPropertyForm();
                resetPropertyDetailsForm();
                fetchAndSetProperties();
                showPropertyHome();
            });

            $('#addPropertyBtn').click(function() {
                showAddProperty();
            });
            $('.cancel-btn').click(function() {
                resetAddPropertyForm();
                resetEditPropertyForm();
                resetPropertyDetailsForm();
                fetchAndSetProperties();
                showPropertyHome();
            });

            //on click of view property button on action column of properties table
            $('body').on('click', '.view-property', function() {
                propertyId = $(this).data('property-id');

                $.ajax({
                    url: '/api/property.php?action=getById&id=' + propertyId,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
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

                            $('#metaTagsForm input[name="meta_title"]').val(property.meta_title);
                            $('#metaTagsForm textarea[name="meta_description"]').val(property.meta_description);

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
                                    <div class="col">
                                        <div class="image-block position-relative">
                                            <video controls class="property-video w-100">
                                                <source src="/upload/${video}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    `;
                                });
                                $('#propertyDetails .images-viewer .row').append(imagesHtml);
                            }


                            showPropertyDetails();
                        }

                    },
                    error: function(error) {
                        console.error(error);
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
                        console.error(error);
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
                propertyId = $(this).data('property-id');

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

                            let medias = '';
                            let images = property.images;
                            let videos = property.videos;
                            if (images) {
                                medias += images;

                                let imagesArray = images.split(',');
                                imagesArray.forEach(image => {
                                    $('#editPropertyForm .images-viewer .row').append(`

                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                            <img src="/upload/${image}" alt="" class="property-img">
                                            <button type="button" class="btn btn-close position-absolute top-0 end-0 delete-media-btn" aria-label="Close" data-file_name="${image}" data-file_type="image">
                                                
                                            </button>
                                        </div>
                                    </div>
                                    `);
                                });

                            }

                            if (videos) {
                                medias += ',' + videos;
                                let videosArray = videos.split(',');
                                videosArray.forEach(video => {
                                    $('#editPropertyForm .images-viewer .row').append(`

                                    <div class="col-md-3">
                                        <div class="image-block position-relative">
                                        <video controls class="property-video w-100">
                                            <source src="/upload/${video}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                            <button type="button" class="btn btn-close position-absolute top-0 end-0 delete-media-btn" aria-label="Close" data-file_name="${video}" data-file_type="video">
                                                
                                            </button>
                                        </div>
                                    </div>
                                    `);
                                });
                            }

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
                        console.error(error);
                    }
                });
                showEditProperty();
            });

            //on click of delete media button on edit property form
            $('#editPropertyForm').on('click', '.delete-media-btn', function() {
                let fileName = $(this).data('file_name');
                let fileType = $(this).data('file_type');
                const button = $(this);
                let data = {
                    file_name: fileName,
                    file_type: fileType,
                    property_id: propertyId
                };

                // 

                $.ajax({
                    url: '/api/property.php?action=deleteMedia',
                    method: 'POST',
                    data: data,
                    dataType: 'json',
                    beforeSend: function() {
                        return confirm("Are you sure you want to delete this media?");
                    },
                    success: function(response) {
                        if (response.success) {
                            button.closest('.col-md-3').remove();
                            toastr.success('Media Successfully Deleted', 'Success');
                            // fetchAndSetProperties();

                        } else {
                            toastr.error('Something went wrong', 'Error');
                        }
                    },
                    error: function(error) {
                        console.error(error);
                        toastr.error('Something went wrong', 'Error');
                    }
                });

            });

            //on click of delete property button on action column of properties table
            $('body').on('click', '.delete-property', function() {
                propertyId = $(this).data('property-id');
                $.ajax({
                    url: '/api/property.php?action=deleteById&id=' + propertyId,
                    method: 'GET',
                    dataType: 'json',
                    beforeSend: function() {
                        return confirm("Are you sure you want to delete this property?");
                    },
                    success: function(response) {
                        if (response.success) {
                            fetchAndSetProperties();
                            toastr.success('Property Successfully Deleted', 'Success');
                        }
                    },
                    error: function(error) {
                        console.error(error);
                        toastr.error('Something went wrong', 'Error');
                    }
                });
            });

        });
    </script>



</body>

</html>
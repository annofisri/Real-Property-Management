<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php include_once('./includes/links.php'); ?>
    <title>Property Owners</title>
</head>

<body>

    <?php include_once('./includes/header.php'); ?>
    <?php include_once('./includes/sidebar.php'); ?>

    <main id="main-section">

        <!-- <button type="button" class="btn  status-active">active</button> -->
        <!-- <button type="button" class="btn  status-pending">pending</button> -->
        <!-- <button type="button" class="btn  status-rejected">rejected</button> -->

        <section class="property-owners-home" id="propertyOwnersHome">
            <div class="head d-flex px-4 py-3 justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <div class="title">Property Owners</div>
                    <!-- <div class="total">Total:100</div> -->

                    <div class="search-block">

                        <form class="w-100" role="search" method="get">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="search" value="" id="search-input" data-control-filter="#propertyOwnersList">

                        </form>
                    </div>
                </div>

                <div class="add-property-owners-btn d-flex" id="addPropertyOwnersBtn">
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
                    <div class="title">Add Property Owners</div>
                </div>

            </div>

            <!-- New Table Design -->
            <div class="common-list">
                <div class="table-list">
                    <table class="table table-hover table-resposive" id="propertyOwnersList">
                        <thead class="border border-buttom">
                            <tr>
                                <th scope="col" class="">S.No.</th>
                                <th scope="col">User ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
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


        <?php include_once('property-owners-add.php'); ?>
        <?php include_once('property-owners-edit.php'); ?>
        <?php include_once('property-owners-view.php'); ?>


    </main>



    <?php include_once('./includes/scripts.php'); ?>

    <script>
        // function to show add property
        function showAddPropertyOwners() {
            $('#addProperty').removeClass('d-none');
            $('#propertyOwnersHome').addClass('d-none');
            $('#propertyOwnerDetails').addClass('d-none');
            $('#editProperty').addClass('d-none');
        }

        // function to show edit property
        function showEditProperty() {
            $('#editProperty').removeClass('d-none');
            $('#propertyOwnersHome').addClass('d-none');
            $('#propertyOwnerDetails').addClass('d-none');
            $('#addProperty').addClass('d-none');
        }

        // function to show property details
        function showpropertyOwnerDetails() {
            $('#propertyOwnerDetails').removeClass('d-none');
            $('#propertyOwnersHome').addClass('d-none');
            $('#addProperty').addClass('d-none');
            $('#editProperty').addClass('d-none');
        }

        // function to show property home
        function showpropertyOwnersHome() {
            $('#propertyOwnersHome').removeClass('d-none');
            $('#propertyOwnerDetails').addClass('d-none');
            $('#addProperty').addClass('d-none');
            $('#editProperty').addClass('d-none');
        }

        // function to fetch and set propertyOwners on propertyOwners table
        function fetchAndSetpropertyOwners() {
            $.ajax({
                url: '/api/property-owners.php?action=getAll',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        let propertyOwners = response.data;
                        let propertyOwnersList = $('#propertyOwnersList tbody');
                        propertyOwnersList.empty();
                        propertyOwners.forEach((property, index) => {
                            let date = new Date(property.created_at);
                            let formattedDate = date.getFullYear() + '/' + ('0' + (date.getMonth() + 1)).slice(-2) + '/' + ('0' + date.getDate()).slice(-2);

                            let propertyRow = `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${property.id}</td>
                                <td>${property.name}</td>
                                <td>${property.email}</td>
                                <td>${property.phone_number}</td>
                                <td>
                                    <div class="d-flex">
                                        <button class="me-2 view-property" data-property-owners-id="${property.id}">
                                            <img src="./assets/images/view-icon.svg" alt="">
                                        </button>
                                        <button class="me-2 edit-property" data-property-owners-id="${property.id}">
                                            <img src="./assets/images/edit-icon.svg" alt="">
                                        </button>
                                        <button class="delete-property"  data-property-owners-id="${property.id}">
                                            <img src="./assets/images/delete-icon.svg" alt="">
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            `;
                            propertyOwnersList.append(propertyRow);
                        });
                    }
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }





        $(document).ready(function() {
            //fetch and set propertyOwners on page load
            fetchAndSetpropertyOwners();


            //on click of save and publish button of add property form
            $('#addPropertyForm').on('submit', function(e) {
                e.preventDefault();
                // check validity
                if (this.checkValidity()) {

                    let formData = new FormData(this);

                    $.ajax({
                        url: '/api/property-owners.php?action=addNew',
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(response) {

                            if (response.success) {
                                fetchAndSetpropertyOwners();
                                showpropertyOwnersHome();
                                toastr.success('New Property Owner Successfully Added', 'Success');
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
                        url: '/api/property-owners.php?action=updateById&id=' + id,
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(response) {

                            if (response.success) {
                                fetchAndSetpropertyOwners();
                                showpropertyOwnersHome();
                                toastr.success('Property Owner Successfully Updated', 'Success');
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


            // show hide sections            
            $('.property-owners-back-btn').click(function() {
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
                fetchAndSetpropertyOwners();
                showpropertyOwnersHome();
            });
            $('#addPropertyOwnersBtn').click(function() {
                showAddPropertyOwners();
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
                fetchAndSetpropertyOwners();
                showpropertyOwnersHome();
            });

            //on click of view property button on action column of propertyOwners table
            $('body').on('click', '.view-property', function() {
                let propertyId = $(this).data('property-owners-id');


                $.ajax({
                    url: '/api/property-owners.php?action=getById&id=' + propertyId,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {

                        if (response.success) {

                            // reseting all fields
                            $('#propertyOwnerDetails .property-owners-info-value').text('');
                            $('#propertyOwnerDetails .images-viewer .row').html('');
                            $('#propertyOwnerDetailsDescription').val('');

                            let property = response.data;
                            let date = new Date(property.created_at);
                            let formattedDate = date.getFullYear() + '/' + ('0' + (date.getMonth() + 1)).slice(-2) + '/' + ('0' + date.getDate()).slice(-2);

                            $('#propertyOwnerDetails .property-owners-info-value').each(function() {
                                let key = $(this).data('key');
                                $(this).text(property[key]);
                            });




                            $('#propertyOwnerDetailsDescription').val(property.other_information);

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
                                $('#propertyOwnerDetails .images-viewer .row').append(imagesHtml);
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
                                $('#propertyOwnerDetails .images-viewer .row').append(imagesHtml);
                            }


                            showpropertyOwnerDetails();
                        }

                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            //on click of edit property button on action column of property-owners-owners table
            $('body').on('click', '.edit-property', function() {
                let propertyId = $(this).data('property-owners-id');

                $.ajax({
                    url: '/api/property-owners.php?action=getById&id=' + propertyId,
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

            //on click of delete property button on action column of property-owners-owners table
            $('body').on('click', '.delete-property', function() {
                let propertyId = $(this).data('property-owners-id');

                $.ajax({
                    url: '/api/property-owners.php?action=deleteById&id=' + propertyId,
                    method: 'GET',
                    dataType: 'json',
                    //toaster to confirm
                    beforeSend: function() {
                        confirm('Are you sure you want to delete this property owner?');
                    },
                    success: function(response) {

                        if (response.success) {
                            fetchAndSetpropertyOwners();
                            toastr.success('Property Owner Successfully Deleted', 'Success');
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
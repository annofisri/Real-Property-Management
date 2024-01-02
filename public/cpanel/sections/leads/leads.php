<?php


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php include_once('./includes/links.php'); ?>
    <title>Leads</title>
</head>

<body>

    <?php include_once('./includes/header.php'); ?>
    <?php include_once('./includes/sidebar.php'); ?>

    <main id="main-section">


        <div class="head d-flex px-4 py-3 justify-content-between">
            <div class="title">Leads</div>
            <!-- <div class="total">Total:100</div> -->
            <div class="">

                <div class="search-block">

                    <form class="w-100" role="search" method="get">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="search" value="" id="search-input" data-control-filter="#leadsList">

                    </form>
                </div>
            </div>
        </div>

        <!-- New Table Design -->
        <div class="common-list">




            <div class="table-list">
                <table class="table table-hover table-resposive" id="leadsList">
                    <thead class="border border-buttom">
                        <tr>
                            <th scope="col" class="">S.No.</th>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">

                    </tbody>
                </table>
            </div>


        </div>
        <!-- New Table Design ends -->




    </main>

    <?php include_once('./includes/scripts.php'); ?>


    <script>
        function getAllLeads() {
            $.ajax({
                url: '/api/leads.php?action=getAll',
                type: 'GET',
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        $('.table-body').html('');
                        response.data.forEach((item, index) => {
                            $('.table-body').append(`
                            <tr scope="row">
                                <td class="">
                                    ${index+1}
                                </td>
                                <td>
                                    ${item.created_at}
                                </td>
                                <td>
                                    ${item.first_name + ' ' + item.last_name}
                                </td>
                                <td>
                                    ${item.email}
                                </td>
                                <td>
                                    ${item.phone_number}
                                </td>
                                <td>
                                    ${item.message}
                                </td>
                            `)
                        })
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        $(document).ready(function() {
            getAllLeads();
        })
    </script>



</body>

</html>
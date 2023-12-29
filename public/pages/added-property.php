<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Added Property | Real Property Nepal
    </title>
    <?php include_once './includes/links.php'; ?>
</head>

<body>

    <?php
    include_once 'tags/header.php';
    echo navbar();
    ?>


    <section class="edit-property-hero">
        <div class="container">
            <div class="row">
                <div class="title col-12">
                    <h4 class="">My Properties</h4>
                </div>
                <div class=" col-md-12 user-preview d-flex">
                    <img src="./assets/images/user-profile.png" alt="user-profile" class="user-profile-img">
                    <div class="">
                        <h5>User Name</h5>
                    </div>
                </div>


                <div class="col-md-12 property-insights d-flex">
                    <div class="total-properties">
                        <h5>Total Properties</h5>
                        <h4>10</h4>
                    </div>
                    <div class="properties-sold">
                        <h5>Properties Sold</h5>
                        <h4>10</h4>
                    </div>
                    <div class="Pending">
                        <h5>Pending</h5>
                        <h4>10</h4>
                    </div>
                </div>

                <div class="col-md-12 add-property ">
                    <a href="/add-property" class="">+ Add Property</a>
                </div>

                <div class="table-list">
                    <table class="table table-hover table-resposive">
                        <thead class="border border-buttom">
                            <tr>

                                <th scope="col">Thumbnail</th>
                                <th scope="col">Ad Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date</th>

                                <th scope="col" class="text-center">Status</th>

                                <th scope="col" class="text-center"></th>
                                <th scope="col" class="text-center"></th>

                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr scope="row">

                                <td class="thumbnail"><img src="./assets/images/property-1.png" alt="property-1"></td>
                                <td class="title">Ad Titledsada</td>
                                <td class="price">Rs. 1,00,00,000</td>
                                <td class="date">12/12/2021</td>

                                <td class="status text-center">Pending</td>

                                <td class="edit text-center"><a href="/edit-property">Edit</a></td>
                                <td class="delete text-center"><a href="#">Delete</a></td>
                            </tr>
                            <tr scope="row">

                                <td class="thumbnail"><img src="./assets/images/property-1.png" alt="property-1"></td>
                                <td class="title">Ad Title</td>
                                <td class="price">Rs. 1,00,00,000</td>
                                <td class="date">12/12/2021</td>

                                <td class="status text-center">Pending</td>

                                <td class="edit text-center"><a href="/edit-property">Edit</a></td>
                                <td class="delete text-center"><a href="#">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>



            </div>

        </div>
        </div>
    </section>

    <?php include_once 'tags/footer.php'; ?>
    <?php include_once './includes/scripts.php'; ?>

</body>

</html>
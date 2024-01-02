<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        FAQs | Real Property Nepal
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


    <section class="faqs-hero-bg hero-bg">
        <div class="container">
            <div class="row">
                <div class="title col-12">
                    <h1 class="text-center">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="faqs-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="accordion" id="accordionPanelsStayOpenExample">

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="need-help">
                        <h2 class="title">Need Help?</h2>
                        <p>Our team is here to help you. If you have any questions or need any help, please contact us.</p>
                        <!-- <button class="btn btn-primary">Contact Us</button> -->
                    </div>
                </div>
            </div>
    </section>



    <section class="featured-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Property you may like</h2>
                </div>
            </div>
            <div class="row">
                <div class="property-slider">

                    <?php
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 'Rs. 1,50,00,000'
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 'Rs. 1,50,00,000'
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 'Rs. 1,50,00,000'
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 'Rs. 1,50,00,000'
                    );
                    echo propertyCard(
                        $id = 1000,
                        $type = 'sale',
                        $image = 'product-img.png',
                        $title = 'Beautiful Small Apartment',
                        $location = 'Budhanilkantha, Kathmandu',
                        $price = 'Rs. 1,50,00,000'
                    );

                    ?>
                </div>
            </div>
        </div>
    </section>








    <?php include_once 'tags/footer.php'; ?>

    <?php include_once './includes/scripts.php'; ?>

    <script>
        function fetchAndSetFaqs() {
            $.ajax({
                url: '/api/faq.php?action=getAll',
                type: 'GET',
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        $('.accordion').html('');

                        response.data.forEach((item, index) => {
                            $('.accordion').append(`
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse${index}" aria-expanded="true" aria-controls="panelsStayOpen-collapse${index}">
                                        ${item.question}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse${index}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading${index}">
                                    <div class="accordion-body">
                                        ${item.answer}
                                    </div>
                                </div>
                            </div>
                            `)
                        })
                    } else {
                        toastr.error(response.message, 'Error');
                    }
                },
                error: function(error) {
                    console.log(error);

                }
            });
        }
        $(document).ready(function() {
            fetchAndSetFaqs();
        });
    </script>
</body>

</html>
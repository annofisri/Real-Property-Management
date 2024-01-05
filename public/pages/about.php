<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    About Us | Real Property Nepal
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
  <section class="about-hero-bg hero-bg">
    <div class="container">
      <div class="row">
        <div class="title col-12">
          <h1 class="text-center">WHO WE ARE</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="about-text">
    <div class="container">
      <div class="row">
        <div class="col-12 about-us-texts">
          <p class="text">
            We are a family & friends owned and operated full-service Property Management & Marketing company. Collectively, we have decades of international experience in multi property ownership, Finance, IT and marketing. After working in various multinational companies around the globe and interacting with large number of expats, we have realized an urgent need for a customized care and service for NRNs (Non-Resident Nepalese) in the Property Management sector in Nepal. With you in mind, we have started a new company dedicated in providing
          </p>
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
            $price = 15000000
          );
          echo propertyCard(
            $id = 1000,
            $type = 'sale',
            $image = 'product-img.png',
            $title = 'Beautiful Small Apartment',
            $location = 'Budhanilkantha, Kathmandu',
            $price = 15000000
          );
          echo propertyCard(
            $id = 1000,
            $type = 'sale',
            $image = 'product-img.png',
            $title = 'Beautiful Small Apartment',
            $location = 'Budhanilkantha, Kathmandu',
            $price = 15000000
          );
          echo propertyCard(
            $id = 1000,
            $type = 'sale',
            $image = 'product-img.png',
            $title = 'Beautiful Small Apartment',
            $location = 'Budhanilkantha, Kathmandu',
            $price = 15000000
          );
          echo propertyCard(
            $id = 1000,
            $type = 'sale',
            $image = 'product-img.png',
            $title = 'Beautiful Small Apartment',
            $location = 'Budhanilkantha, Kathmandu',
            $price = 15000000
          );

          ?>
        </div>
      </div>
    </div>
  </section>


  <?php
  include_once 'tags/footer.php';
  ?>

  <?php
  include_once './includes/scripts.php'
  ?>

</body>

</html>
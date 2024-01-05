<?php
function propertyCard($id = '1', $type = 'sale', $image = 'product-img.png', $title = 'Beautiful Apartment', $location = 'Kathmandu', $price = 150000, $category = 'Apartment')
{


  $card = '
      
      <div class="card property-card" style="width: 306px;">
        <div class="card-img-top position-relative" >
          <div class="property-type ' . $type . '">For ' . ucfirst($type) . '</div>
          <img src="./assets/images/' . $image . '" alt="product-img" class="img-fluid w-100 h-100">
          <div class="property-id d-flex justify-content-end p-2">ID: ' . $id . '</div>

          ' . ($category == '' ? '' : '<div class="property-category">' . $category . '</div>') . '
        </div>
        <div class="card-body ">
          
          <h5 class="card-title">' . $title . '</h5>
          <div class="d-flex location">
                <div class="icon-box">
                  <img src="./assets/images/location-icon.svg" alt="location-icon" class="h-100 img-fluid w-100" />
                </div>
                <a class="nav-link" href=""> ' . $location . '</a>
          </div>
          <p class="card-text">Rs. ' . $price . '</p>
          <a href="/property-single" class="view-details-btn">View Details</a>
        </div>
      </div>
  
  ';
  return $card;
}

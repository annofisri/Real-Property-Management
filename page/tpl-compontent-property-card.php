<?php
function propertyCard($id, $type, $image, $title, $location, $price)
{


  $card = '
      
      <div class="card property-card" style="width: 306px;">
        <div class="card-img-top position-relative" >
          <div class="property-type ' . $type . '">For ' . ucfirst($type) . '</div>
          <img src="static/image/' . $image . '" alt="product-img" class="img-fluid w-100 h-100">
          <div class="property-id d-flex justify-content-end p-2">ID: ' . $id . '</div>
        </div>
        <div class="card-body ">
          
          <h5 class="card-title">' . $title . '</h5>
          <div class="d-flex location">
                <div class="icon-box">
                  <img src="/static/image/location-icon.svg" alt="location-icon" class="h-100 img-fluid w-100" />
                </div>
                <a class="nav-link" href="https://goo.gl/maps/9Z3Z9Z9Z9Z9Z9Z9Z9">

                  Budhanilkantha, Kathmandu</a>
          </div>
          <p class="card-text">' . $price . '</p>
          <a href="property.php?id=' . $id . '" class="view-details-btn">View Details</a>
        </div>
      </div>
  
  ';
  return $card;
}

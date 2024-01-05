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
                  Contract Terms (Rent)
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
            <textarea class="form-control" id="propertyDetailsDescription" rows="10" readonly disabled></textarea>
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
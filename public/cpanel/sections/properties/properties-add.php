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
        Save
      </div>
    </div>
  </div>

  <div class="property-add-main">
    <form id="addPropertyForm">
      <div class="row">
        <div class="col-md-12 row">
          <div class="col-md-4">
            <label for="clientInfo" class="form-label">Client Info*</label>
            <select id="clientInfo" class="form-select" name="owner_id" required>

            </select>
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
              <label for="contractTerms" class="form-label">Contract Terms (Rent) </label>
              <input type="text" class="form-control" id="contractTerms" name="contract_term">
            </div>
            <div class="col-md-4">
              <label for="totalStoreys" class="form-label">Total Storeys</label>
              <input type="number" class="form-control" id="totalStoreys" name="storey" required>
            </div>
            <div class="col-md-4">
              <label for="price" class="form-label">Price*</label>
              <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="col-md-4">
              <label for="visibility_status" class="form-label">Visibility Status*</label>
              <select id="visibility_status" class="form-select" name="visibility_status" required>
                <option value="">Choose...</option>
                <option value="1">Visible</option>
                <option value="0">Hidden</option>
              </select>
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
              <input type="file" id="uploadImages" name="files[]" multiple hidden required>

              <label for="uploadImages" class="default-btn-outlined mt-2 d-inline-block" id="uploadImagesBtn">
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

              <div class="d-inline-block selected-file">
                <span class="selected-file-count">0</span> files selected
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class=" col-md-12">
            <label for="propertyDescription" class="form-label">Property Descriptions</label>
            <textarea class="form-control" id="propertyDescription" name="other_information" rows="10"></textarea>
          </div>

          <label class="selected-media-title mt-4">
            Selected Medias
          </label>
          <div class="col-md-12">
            <div class="images-viewer mt-0">
              <div class="row">

              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<section class="property-owners-add d-none" id="addProperty">
    <div class="head d-flex px-4 py-3 justify-content-between" style="height: 69px;">
        <div class="d-flex gap-2">
            <div class="d-flex align-items-center property-owners-back-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
                    <path d="M18 4.43303H2.17064L5.73852 0.865107L4.93671 0.0632935L0 4.99997L4.93671 9.93672L5.73852 9.13486L2.17064 5.56698H18V4.43303Z" fill="#192E3D" />
                </svg>
            </div>
            <div class="title">Add Property Owner Details</div>
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

    <div class="property-owners-add-main">
        <form id="addPropertyForm">
            <div class="row">

                <div class="col-md-6 pt-2">
                    <div class="row g-3">

                        <div class="col-md-12">
                            <label for="Name" class="form-label">Name*</label>
                            <input type="text" class="form-control" id="Name" name="name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="col-md-4">
                            <label for="phone_number" class="form-label">Phone Number*</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Address*</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="col-md-4">
                            <label for="dob" class="form-label">Date of Birth*</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div class="col-md-4">
                            <label for="password" class="form-label">Password*</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
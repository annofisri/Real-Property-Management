<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Add Property | Real Property Nepal
    </title>
    <?php include_once './includes/links.php'; ?>
</head>

<body>

    <?php
    include_once 'tags/header.php';
    echo navbar();
    ?>


    <section class="add-property-hero">
        <div class="container">
            <div class="row">
                <div class="title col-12">
                    <h4 class="">Upload Property</h4>
                </div>
                <div class=" col-md-12 user-preview d-flex">
                    <img src="./assets/images/user-profile.png" alt="user-profile" class="user-profile-img">
                    <div class="">
                        <h5>User Name</h5>
                        <p class="user-id">User ID: 123456</p>
                    </div>
                </div>
                <div class="col-md-8 border border-2">

                    <form method="POST">
                        <div class="row">
                            <div class="col-md-12 details-title">
                                <h4>Property Details</h4>
                            </div>

                            <div class="col-md-12">
                                <label for="property-name">Property Name<span class="required">*</span></label>
                                <input type="text" class="form-control" aria-label="Property Name" id="property-name" name="property-name" required>
                            </div>
                            <div class="col-md-12 d-flex flex-column">
                                <label for="category">Category<span class="required">*</span></label>
                                <div class="btn-group d-flex gap-2" role="group" aria-label="Category">
                                    <input type="radio" id="house" name="category" value="house" required>
                                    <label for="house" class="btn btn-primary">House</label>

                                    <input type="radio" id="appartment" name="category" value="appartment" required>
                                    <label for="appartment" class="btn btn-primary">Appartment</label>

                                    <input type="radio" id="housing-colony" name="category" value="housing-colony" required>
                                    <label for="housing-colony" class="btn btn-primary">Housing Colony</label>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-column">
                                <label for="type">Sale/ Rent<span class="required">*</span></label>
                                <div class="btn-group d-flex gap-2" role="group" aria-label="Type">
                                    <input type="radio" id="sale" name="type" value="sale" required>
                                    <label for="sale" class="btn btn-primary">Sale</label>

                                    <input type="radio" id="rent" name="type" value="rent" required>
                                    <label for="rent" class="btn btn-primary">Rent</label>

                                </div>
                            </div>


                            <div class="col-md-12">
                                <label for="address">Address<span class="required">*</span></label>
                                <input type="text" class="form-control" aria-label="Address" id="address" name="address" required>
                            </div>
                            <div class="col-md-4">
                                <label for="gated-community">Gated Community</label>
                                <select name="gated-community" id="gated-community" class="form-control">
                                    <option>Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="bedrooms">No. of Bedrooms</label>
                                <select name="bedrooms" id="bedrooms" class="form-control">
                                    <option>Select</option>
                                    <option value="1">1 BHK</option>
                                    <option value="2">2 BHK</option>
                                    <option value="3">3 BHK</option>
                                    <option value="4">4 BHK</option>
                                    <option value="5">5 BHK</option>
                                    <option value="6">6 BHK</option>
                                    <option value="7">7 BHK</option>
                                    <option value="8">8 BHK</option>
                                    <option value="9">9 BHK</option>
                                    <option value="10">10 BHK</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="bathrooms">No. of Bathrooms</label>
                                <select name="bathrooms" id="bathrooms" class="form-control">
                                    <option>Select</option>
                                    <option value="1">1 Bathroom</option>
                                    <option value="2">2 Bathrooms</option>
                                    <option value="3">3 Bathrooms</option>
                                    <option value="4">4 Bathrooms</option>
                                    <option value="5">5 Bathrooms</option>
                                    <option value="6">6 Bathrooms</option>
                                    <option value="7">7 Bathrooms</option>
                                    <option value="8">8 Bathrooms</option>
                                    <option value="9">9 Bathrooms</option>
                                    <option value="10">10 Bathrooms</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="storeys">Total Storeys</label>
                                <select name="storeys" id="storeys" class="form-control">
                                    <option>Select</option>
                                    <option value="1">1 Storey</option>
                                    <option value="2">2 Storeys</option>
                                    <option value="3">3 Storeys</option>
                                    <option value="4">4 Storeys</option>
                                    <option value="5">5 Storeys</option>
                                    <option value="6">6 Storeys</option>
                                    <option value="7">7 Storeys</option>
                                    <option value="8">8 Storeys</option>
                                    <option value="9">9 Storeys</option>
                                    <option value="10">10 Storeys</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="security">Security</label>
                                <select name="security" id="security" class="form-control">
                                    <option>Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>


                            <div class="col-md-4">
                                <label for="swimming-pool">Swimming Pool</label>
                                <select name="swimming-pool" id="swimming-pool" class="form-control">
                                    <option>Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="gym">Gym</label>
                                <select name="gym" id="gym" class="form-control">
                                    <option>Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="monthly-rental">Monthly Rental</label>
                                <input type="number" class="form-control" aria-label="Monthly Rental" id="monthly-rental" name="monthly-rental">
                            </div>

                            <div class="col-md-4">
                                <label for="total-price">Total Price (Rs.)</label>
                                <input type="number" class="form-control" aria-label="Total Price" id="total-price" name="total-price">
                            </div>

                            <div class="col-md-4">
                                <label for="contract-term">Contract Term</label>
                                <input type="text" class="form-control" aria-label="Contract Term" id="contract-term" name="contract-term">
                            </div>

                            <div class="col-md-6">
                                <label for="other-information">Other Information</label>
                                <textarea name="other-information" id="other-information" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="upload-images">Upload Images or Videos<p>(Max 8 pictures and Videos)</p></label>
                                <input type="file" class="form-control" aria-label="Upload Images or Videos" id="upload-images" name="upload-images">
                            </div>

                            <div class="col-md-12">
                                <button type="submit">Submit</button>
                            </div>



                        </div>
                    </form>

                </div>
                <div class="col-md-4 border border-2">
                    <div class="row need-help">
                        <div class="col-md-12">
                            <h4>Need Help?</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once 'tags/footer.php'; ?>
    <?php include_once './includes/scripts.php'; ?>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        User Profile | Real Property Nepal
    </title>
    <?php include_once './includes/links.php'; ?>
</head>

<body>

    <?php
    include_once 'tags/header.php';
    echo navbar();
    ?>


    <section class="user-profile-hero">
        <div class="container account-info">
            <div class="row p-5">
                <div class="title col-12 text-center">

                    <h4>Account Information</h4>

                </div>
                <div class="image-box">
                    <img src="./assets/images/user-profile.png" alt="user-profile" class="user-profile-img">

                    <p class="user-id">User ID: 123456</p>
                </div>
                <div class="col-md-3">
                    <label for="fullname">Full Name<span class="required">*</span></label>
                    <input type="text" class="form-control" aria-label="Full name" id="fullname" name="fullname" disabled>
                </div>
                <div class="col-md-3">
                    <label for="profession">Email<span class="required">*</span></label>
                    <input type="text" class="form-control" aria-label="Profession" id="profession" name="profession" disabled>
                </div>
                <div class="col-md-3">
                    <label for="address">Address<span class="required">*</span></label>
                    <input type="text" class="form-control" aria-label="Customer ID" id="address" name="address" disabled>
                </div>
                <div class="col-md-3">
                    <label for="phone">Phone Number<span class="required">*</span></label>
                    <input type="tel" class="form-control" aria-label="Phone" id="phone" name="phone" disabled>
                </div>
                <div class="col-md-3">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" aria-label="Date of Birth" id="dob" name="dob" disabled>
                </div>

                <button type="submit" name="btnSubmit" class="btn btn-primary">Edit Profile</button>
                <button type="submit" name="btnSubmit" class="btn btn-primary">Update Profile</button>


            </div>
        </div>

        <div class="container change-password">
            <div class="row">
                <div class="title col-12 text-center">

                    <h4>Change Password</h4>

                </div>
                <div class="col-md-3">
                    <label for="password">Old Password<span class="required">*</span></label>
                    <input type="password" class="form-control" aria-label="Password" id="password" name="password" required>
                </div>
                <div class="col-md-3">
                    <label for="password">New Password<span class="required">*</span></label>
                    <input type="password" class="form-control" aria-label="Password" id="password" name="password" required>
                </div>
                <div class="col-md-3">
                    <label for="password">Confirm Password<span class="required">*</span></label>
                    <input type="password" class="form-control" aria-label="Password" id="password" name="password" required>
                </div>
                <button type="submit" name="btnSubmit" class="btn btn-primary">Update Password</button>
            </div>
        </div>
    </section>

    <?php include_once 'tags/footer.php'; ?>
    <?php include_once './includes/scripts.php'; ?>

</body>

</html>
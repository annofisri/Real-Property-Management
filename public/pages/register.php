<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Register | Real Property Nepal
    </title>
    <?php include_once './includes/links.php'; ?>
</head>

<body>

    <?php
    include_once 'tags/header.php';
    echo navbar();
    ?>


    <section class="register-hero">
        <div class="container">
            <div class="row p-5">
                <div class="title col-12">

                    <span class="login-text">Create an account /</span>
                    <a href="/register" class="register-text">Already have an account</a>

                </div>


                <form method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="fullname">Full Name<span class="required">*</span></label>
                            <input type="text" class="form-control" aria-label="Full name" id="fullname" name="fullname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="profession">Profession</label>
                            <input type="text" class="form-control" aria-label="Profession" id="profession" name="profession">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone Number<span class="required">*</span></label>
                            <input type="tel" class="form-control" aria-label="Phone" id="phone" name="phone" required>
                        </div>

                        <div class="col-md-6">
                            <label for="address">Address<span class="required">*</span></label>
                            <input type="text" class="form-control" aria-label="Customer ID" id="address" name="address">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="required">*</span></label>
                            <input type="email" class="form-control" aria-label="Email" id="email" name="email" required>
                        </div>

                        <div class="col-md-6">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" aria-label="Date of Birth" id="dob" name="dob">
                        </div>


                        <div class="col-md-6">
                            <label for="password">Create a Password<span class="required">*</span></label>
                            <input type="password" class="form-control" aria-label="Password" id="password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="confirmPassword">Confirm Password<span class="required">*</span></label>
                            <input type="password" class="form-control" aria-label="Confirm Password" id="confirmPassword" name="confirmPassword" required>
                        </div>


                    </div>
                    <button type="submit">Sign Up</button>



                </form>

                <p>By signing up you agree to Real Property Management’s <a href="/terms-and-conditions">Terms of Use</a> & <a href="/privacy-policy">Privacy Policy</a></p>
            </div>
        </div>
    </section>


    <?php
    include_once 'tags/footer.php';
    ?>


    <?php include_once './includes/scripts.php'; ?>
</body>

</html>
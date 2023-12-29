<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login | Real Property Nepal
    </title>
    <?php include_once './includes/links.php'; ?>
</head>

<body>

    <?php
    include_once 'tags/header.php';
    echo navbar();
    ?>


    <section class="login-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="login-box col-md-4">
                    <div class="title col-12">

                        <span class="login-text">Sign in /</span>
                        <a href="/register" class="register-text">Create an account</a>

                    </div>


                    <form method="POST" class="col-12">
                        <div class="mb-3 ">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button class="w-100 login-btn" type="submit" name="btnSubmit">Sign In</button>
                        </div>
                    </form>

                    <p class="agreement-text">By signing in you agree to Real Property Management’s <a href="/terms-and-conditions">Terms of Use</a> & <a href="/privacy-policy">Privacy Policy</a></p>
                </div>

            </div>
        </div>
    </section>

    <?php
    include_once 'tags/footer.php';
    ?>
    <?php include_once './includes/scripts.php'; ?>
</body>

</html>
<?php
session_start();

$error = '';

// check if already logged in
if (isset($_SESSION["id"])) {
  header("Location:index.php");
  exit();
}

if (isset($_POST["btnLogin"])) {

  require_once('./core/class-user.php');

  $user = new User();
  $user->username = $_POST['email'];
  $user->password = md5($_POST['password']);
  $valid_user = $user->checkCredential();

  if ($valid_user) {

    switch ($valid_user['status']) {
      case 'active':
        $_SESSION['id'] = $valid_user['id'];
        $_SESSION['name'] = $valid_user['name'];
        $_SESSION['email'] = $valid_user['email'];
        $_SESSION['role_id'] = $valid_user['role_id'];
        header('Location:index.php');
        exit();
      case 'inactive':
        exit('Your account is currently inactive. Consult your administrator.');
      case 'suspended':
        exit('Your account is currently suspended. Consult your administrator.');
      default:
        exit('Your account is banned.');
        break;
    }
  } else {
    $error = 'Wrong username or password';
  }
  // To slow down Brute Force Attack
  sleep(rand(0, 10));
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/assets/cms/style.css">
  <title>CMS Login</title>
</head>

<body>
  <section id="login">
    <div class="container">
      <div class="login-wrapper">
        <div class="login-block">
          <div class="login-img-block">
            <div class="login-image">
              <img src="/assets/cms/image/img_avatar2.png" alt="">
            </div>
          </div>
          <div class="login-form">
            <h3>CMS</h3>
            <?php
            if (!empty($error)) {
              echo $error;
            }
            ?>
            <form method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Username or Email Address</label>
                <input type="text" class="form-control" id="email" name="email" autocomplete="off">

              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" autocomplete="off">
              </div>

              <div class="button-block">
                <button type="submit" class="btn btn-dark" name="btnLogin">Login</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>
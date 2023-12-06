<?php
require_once('./core/class-user.php');

if(isset($_POST["createUser"])){
  
  $user = new User();
  $user->name = isset($_POST['name']) ? $_POST['name'] : false;
  $user->username = $_POST['username'] ?? false;
  $user->email = $_POST['email'] ?? false;
  
  $user->password = $_POST['password'] ?? false;
  $user->role_id = 1; 
  $user->status = $_POST['status'] ?? false;

  if($user->name == false AND $user->name == ""){
    $alerts["error"][] = "Name is required.";
  }
  if($user->username == false){
    $alerts["error"][] = "Username is required.";
  }
  if($user->email == false){
    $alerts["error"][] = "Email is required.";
  }
  if($user->password == false){
    $alerts["error"][] = "Password is required.";
  }
  if($user->role_id == false){
    $alerts["error"][] = "Role is required.";
  }
  if($user->status == false){
    $alerts["error"][] = "Status is required.";
  }

  $result = false;
  if(!isset($alerts['error'])){
    $password = $user->password;
    $password = md5($password);
    $user->password = $password;
    $result = $user->insert();
  }

  if($result){
    $alerts["success"][] = "Saved successfully.";
  }else{
    $alerts["error"][] = "Operation failed.";
  }	

}
$title = "ADD USER";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
        foreach ($links["css"] as $key) {
            echo '<link rel="stylesheet" href="'.$key.'">';
        }
    ?>
  <title><?=$title?></title>
</head>
<body>

<?php

include_once('./section/tag-sidebar.php');
include_once('./section/tag-header.php');

?>
	
<main id="main-section">
  <?php
  $do->showAlerts($alerts);
  ?>
    <section id="new-user">
      <div class="container-fluid">
        <div class="new-user-wrapper border p-4 m-4 w-50">
          <form method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="username" name="username" autocomplete="off">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="password" name="password" autocomplete="off">
            </div>
           
            <select class="form-select mb-3" aria-label="Default select example" name="status">
              <option selected>Status</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
              <option value="suspended">Suspended</option>
              <option value="blocked">Blocked</option>
            </select>
            
            <button type="submit" class="btn btn-outline-primary" name="createUser">Submit</button>
          </form>
        </div>
      </div>
    </section>
</main>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="/assets/cms/custom.js"></script>

</body>
</html>
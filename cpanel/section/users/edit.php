<?php
require_once('./core/class-user.php');
if(isset($_POST["createUser"])){

  $user = new User();
  $user->id = $_GET['id'] ?? null;
  $user->name = $_POST['name'] ?? null;
  $user->username = $_POST['username'] ?? false;
  $user->email = $_POST['email'] ?? false;
  $user->password = $_POST['password'] ?? false;
  $user->role_id = 1; 
  $user->status = $_POST['status'] ?? false;

  if($user->id == false OR $user->id == ""){
    $alerts["error"][] = "Id is required.";
  }
  if($user->name == false AND $user->name == ""){
    $alerts["error"][] = "Name is required.";
  }
  if($user->username == false){
    $alerts["error"][] = "Username is required.";
  }
  if($user->email == false){
    $alerts["error"][] = "Email is required.";
  }
  if($user->role_id == false){
    $alerts["error"][] = "Role is required.";
  }
  if($user->status == false){
    $alerts["error"][] = "Status is required.";
  }

  $result = false;
  // var_dump($alerts);
  if(!isset($alerts['error'])){

    $result = $user->edit();
  }

  if($user->password != '' AND $user->password != NULL){
    $user->password = md5($user->password);
    $user->changePassword();
  }
  

  if($result){
    $alerts["success"][] = "Successfully saved.";
  }else{
    $alerts["error"][] = "Operation failed.";
  }	

}

$objEditUser = new User();
$objEditUser->id = $_GET['id'] ?? null;
$data = $objEditUser->selectById();
// var_dump ($data);
$title = "EDIT USERS";
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
  <title><?=$title;?></title>
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
<section id="post-add" class="pt-4">
        <div class="container-fluid">
            <div class="post-add-wrapper border p-4 w-50">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="name" name="name" autocomplete="off" value="<?=$data['name'];?>">
                    </div>                 
                    <div class="mb-3">
                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" name="username" autocomplete="off" value="<?=$data['username'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail Address <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" value="<?=$data['email'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" name="password" value="" placeholder="Type if you want to change your password">
                    </div>
                   
                   
                   
                  
                    
                   
                     
                    <select class="form-select mb-3" name="status">
                      <option selected>Status</option>
                      <option value="active" <?php  echo ($data['status'] == "active" ? 'selected':"")?>>Active</option>
                      <option value="inactive" <?php  echo ($data['status'] == "inactive" ? 'selected':"")?>>Inactive</option>
                      <option value="suspended" <?php  echo ($data['status'] == "suspended" ? 'selected':"")?>>Suspended</option>
                      <option value="blocked" <?php  echo ($data['status'] == "blocked" ? 'selected':"")?>>Blocked</option>
                    </select>
                                      
                    <button type="submit" class="btn btn-outline-primary" name="createUser">Submit</button>
                </form>
            </div>
        </div>
    </section>
</main>
	

<?php
include_once('./section/tag-modal-delete-confirmation.php');
?>
<?php 
foreach ($links["js"] as $key) {
    echo '<script src="'.$key.'"></script>';
}
?>

</body>
</html>
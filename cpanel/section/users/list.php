<?php
require_once("./core/class-user.php");
$_user = new User();

$id = $_GET['delete-id'] ?? null;

// Check if request is made to delete some id
if($id != null){
  $ids = explode(',', $id);
  if(!empty($ids)){

    foreach ($ids as $id) {
      if($id > 0){
        $_user->deleteById($id);

        if($_user->rowCount > 0){
          $alerts["success"][] = "Successfully saved.";
        }else{
          $alerts["error"][] = "Operation failed.";
        }
      }
    }
         
  }    
}

$title = "USER LISTS";
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
     <!-- user list code -->
     <section class="user-list">
          <div class="container-fluid">
            <div class="user-list-wrapper">
              <div class="head">
                USER
                <div class="btn-global">
                  <a href="/cpanel/users/new" class="btn btn-outline-primary">Add New</a>
                </div>
              </div>
            </div>
          </div>
          
        </section>

    <!-- user tabel -->
            <section class="table-list">
              <div class="container-fluid">
                <div class="table-list-wrapper">
                  <table class="table border table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="color-blue">Email</th>
                        
                        <th scope="col">Action</th>                        

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                            $tr = "";
                            $users = $_user->selectAll();
                            foreach($users as $user){
                              $tr .= '<tr>
                              <th scope="row">
                                <div class="list-name">
                                  
                                  <div class="user-info">
                                  
                                    <div>
                                      '.$user["username"].'
                                    </div>
                                  </div>
                                </div>
                              </th>
                              <td>
                                  '.$user["name"].'
                              </td>
                              <td class="color-blue">'.$user["email"].'</td>
                            
                              <td>
                              <a href="/cpanel/users_edit?id='.$user["id"].'">edit</a>
                              <a class="btn_delete_icon" data-delete-id="'.$user["id"].'" href="#">delete</a>
                              </td>
                            </tr>';
                            }
                            echo $tr;

                      ?>
                      
                      
                    
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </section>

    <!-- user tabel ends-->
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
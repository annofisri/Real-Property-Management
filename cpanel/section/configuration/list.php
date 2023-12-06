<?php

require_once('./core/class-post.php');
$objPost = new Post();
require_once('./core/handle-delete.php');

// Get list of hero section after deleting above id
$objPost->section = 'configuration'; // section is required
$objPost->active = -1; // -1 for All, 0 for Inactive only and 1 for Active only
$objPost->visibility = -1; // -1 for All, "Public" for Public only and "Private" for Private only
$section_lines = $objPost->selectBySection();

$title = "Configuration LISTS"
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
  <?php
// echo "<pre>".print_r($heros[0], true)."</pre>";
  ?>
     <!-- user list code -->
     <section class="user-list">
          <div class="container-fluid">
            <div class="user-list-wrapper">
              <div class="head">
              Configuration Section
                <div class="btn-global">
                  <a href="/cpanel/configuration/new" class="btn btn-outline-primary">Add New</a>
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
                        <th scope="col"><input type="checkbox" class="form-check-input" id="check-all"> </th>
                        <th scope="col">Name</th>
                        <th scope="col">Value</th>
                        
                       
                                 
                        <th scope="col">Action</th>                        
                                              
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                            $tr = "";
                           
                            foreach($section_lines as $key){
                              
                              $tr .= '<tr scope="row">
                              <td>
                                <input type="checkbox" class="form-check-input"/>
                              </td>
                              <td>
                              '.$key["name"].'
                              </td>
                             
                              <td>
                              '.$key["short_description"].'
                              </td>
                             
                              
                              
                            
                              <td>
                              <a href="/cpanel/configuration_edit?id='.$key["id"].'">edit</a>
                              <a class="btn_delete_icon" data-delete-id="'.$key["id"].'" href="#">delete</a>
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
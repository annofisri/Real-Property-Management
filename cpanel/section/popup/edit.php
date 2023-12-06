<?php
$objEditPost = new Post();
$objEditPost->id = $_GET['id'] ?? null;
$data = $objEditPost->selectById();
if(isset($_POST["btnCreate"])){

  $objPost = new Post();
  // var_dump($_POST);
  $objPost->section = 'popup'; // section is required for all post operations
  $objPost->id = $_GET['id'] ?? null;
  $objPost->name = $_POST['name'] ?? null;
  $objPost->parent_id = $_POST['parent'] ?? null;
  $objPost->short_description = $_POST['short_description'] ?? null;
  $objPost->long_description = $_POST['long_description'] ?? null;
  $objPost->link = $_POST['link'] ?? null;
  $objPost->src = $objPost->saveFile('src') ?? null;
  if ($objPost->src == null){
    $objPost->src = $data['src'];
}
  $objPost->reorder = $_POST['reorder'] ?? null;
  $objPost->active = $_POST['status'] ?? null;
  $objPost->show_on_header = $_POST['show_on_header'] ?? null;
  $objPost->show_on_footer = $_POST['show_on_footer'] ?? null;
  $objPost->visibility = $_POST['visibility'] ?? null;
  $objPost->is_featured = $_POST['is_featured'] ?? null;
  $objPost->is_new = $_POST['is_new'] ?? null;
  $objPost->classes = $_POST['classes'] ?? null;

  // Pass fields name which are mandatory
   $requireds = ['name', 'reorder', 'status', 'visibility'];


  require_once("./core/validation.php");
  
  $result = false;
  // var_dump($alerts);
  if(!isset($alerts['error'])){
    $result = $objPost->edit();
  }
  

  if($result){
    $alerts["success"][] = "Successfully saved.";
  }else{
    $alerts["error"][] = "Operation failed.";
  }	

}

$objEditPost = new Post();
$objEditPost->id = $_GET['id'] ?? null;
$data = $objEditPost->selectById();
// var_dump ($data);
$title = "EDIT POPUP";
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
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="name" name="name" autocomplete="off" value="<?=$data['name'];?>">
                    </div>     
                             
                
                    <div class="mb-3">
                        <label for="src" class="form-label">Default Image</label>
                        <input type="file" class="form-control" id="src" name="src">
                    </div>
                
                    <div class="mb-3">
                        <label for="reorder" class="form-label">Reorder <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="reorder" name="reorder" value="<?=$data['reorder'];?>">
                    </div>
                    <select class="form-select mb-3" name="status">
                      <option selected>Status <span class="text-danger">*</span></option>
                      <option value="1" <?php  echo ($data['active'] == 1 ? 'selected':"")?>>Active</option>
                      <option value="0" <?php  echo ($data['active'] == 0 ? 'selected':"")?>>Inactive</option>
                    </select>
                    <select class="form-select mb-3" name="visibility">
                      <option selected>Visibility <span class="text-danger">*</span></option>
                      <option value="public" <?php  echo ($data['visibility'] == "Public" ? 'selected':"")?>>Public</option>
                      <option value="private" <?php  echo ($data['visibility'] == "Private" ? 'selected':"")?>>Private</option>
                    </select>                    
                    <button type="submit" class="btn btn-outline-primary" name="btnCreate">Submit</button>
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
<?php
if(isset($_POST["btnCreate"])){

  $objPost = new Post();
  // var_dump($_POST);
  $objPost->section = 'hero-slider'; // section is required for all post operations
  $objPost->name = $_POST['name'] ?? null;
  $objPost->parent_id = $_POST['parent'] ?? null;
  $objPost->short_description = $_POST['short_description'] ?? null;
  $objPost->long_description = $_POST['long_description'] ?? null;
  $objPost->link = $_POST['link'] ?? null;
  $objPost->src = $objPost->saveFile('src') ?? null;
  $objPost->reorder = $_POST['reorder'] ?? null;
  $objPost->active = $_POST['status'] ?? null;
  $objPost->show_on_header = $_POST['show_on_header'] ?? null;
  $objPost->show_on_footer = $_POST['show_on_footer'] ?? null;
  $objPost->visibility = $_POST['visibility'] ?? null;
  $objPost->is_featured = $_POST['is_featured'] ?? null;
  $objPost->is_new = $_POST['is_new'] ?? null;
  $objPost->classes = $_POST['classes'] ?? null;


  // Pass fields name which are mandatory
  $requireds = ['name',  'reorder', 'status', 'visibility'];

  require_once("./core/validation.php");

  
  $result = false;
  // var_dump($alerts);
  if(!isset($alerts['error'])){
    $result = $objPost->insert();
  }
  

  if($result){
    $alerts["success"][] = "Successfully saved.";
  }else{
    $alerts["error"][] = "Operation failed.";
  }	

}
$title = "ADD NEW HERO SLIDER";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/assets/cms/style.css">
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
                        <input class="form-control" type="text" id="name" name="name" autocomplete="off">
                    </div>
                   
                
                    <div class="mb-3">
                        <label for="src" class="form-label">Default Image </label>
                        <input type="file" class="form-control" id="src" name="src">
                    </div>
                 
                    <div class="mb-3">
                        <label for="reorder" class="form-label">Reorder <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="reorder" name="reorder" value="0">
                    </div>
                   
                    <select class="form-select mb-3" name="status">
                      <option selected>Status <span class="text-danger">*</span></option>
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                    <select class="form-select mb-3" name="visibility">
                      <option selected>Visibility <span class="text-danger">*</span></option>
                      <option value="public">Public</option>
                      <option value="private">Private</option>
                    </select>                    
                    <button type="submit" class="btn btn-outline-primary" name="btnCreate">Submit</button>
                </form>
            </div>
        </div>
    </section>
</main>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="/assets/cms/custom.js"></script>

</body>
</html>
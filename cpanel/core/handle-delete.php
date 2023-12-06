<?php

$id = $_GET['delete-id'] ?? null;

// Check if request is made to delete some id
if ($id != null) {
    $ids = explode(',', $id);
    if (!empty($ids)) {

        foreach ($ids as $id) {
            if ($id > 0) {
                $objPost->deleteById($id);

                if ($objPost->rowCount > 0) {
                    $alerts["success"][] = "Saved succesfully.";
                } else {
                    $alerts["error"][] = "Operation failed.";
                }
            }
        }
    }
}

<?php

require_once('class-database.php');

class Post extends Database
{

	private $table_name;
	private $conn;
	public $id;
	public $name;
	public $parent_id;
	public $short_description;
	public $long_description;
	public $src;
	public $link;
	public $active;
	public $reorder;
	public $section;
	public $show_on_header;
	public $show_on_footer;
	public $created_at;
	public $updated_at;
	public $additional_info;
	public $visibility;
	public $is_featured;
	public $is_new;
	public $lastInsertId;
	public $error;
	public $rowCount;
	public $classes;

	public function __construct($section = null)
	{
		if ($section != null) {
			$this->section = $section;
		}
		$this->table_name = TBL_POST;
		$this->conn = parent::__construct();
	}

	public function insert()
	{

		try {
			if ($this->section === null) {
				throw new Exception("Section name is NULL", 1);
			}
			if ($this->name === null) {
				throw new Exception("Name is NULL", 1);
			}
			$sql = 'INSERT INTO ' . $this->table_name . ' (id, name, short_description, long_description, src, link, active, reorder, section, show_on_header, show_on_footer, additional_info, visibility, is_featured, is_new, parent_id, classes) VALUES (:id, :name, :short_description, :long_description, :src, :link, :active, :reorder, :section, :show_on_header, :show_on_footer, :additional_info, :visibility, :is_featured, :is_new, :parent_id, :classes)';

			$params = [':id' => $this->id, ':name' => $this->name, ':short_description' => $this->short_description, ':long_description' => $this->long_description, ':src' => $this->src, ':link' => $this->link, ':active' => $this->active, ':reorder' => $this->reorder, ':section' => $this->section, ':show_on_header' => $this->show_on_header, ':show_on_footer' => $this->show_on_footer, ':additional_info' => $this->additional_info, ':visibility' => $this->visibility, ':is_featured' => $this->is_featured, ':is_new' => $this->is_new, ':parent_id' => $this->parent_id, ':classes' => $this->classes];
			$q = $this->conn->prepare($sql);
			$result = $q->execute($params);
			$this->lastInsertId = $this->conn->lastInsertId();
			return $result;
		} catch (Exception $e) {
			if (ALLOW_DEBUG) {
				$this->error =  $e->getMessage();
				echo $this->error;
			} else {
				$this->error = 'Error occured. Line No. ' . __LINE__;
			}
			return false;
		}
	}

	public function edit()
	{

		try {
			if ($this->id === null) {
				throw new Exception("Id is NULL", 1);
			}
			if ($this->section === null) {
				throw new Exception("Section name is NULL", 1);
			}
			if ($this->name === null) {
				throw new Exception("Name is NULL", 1);
			}
			$sql = 'UPDATE ' . $this->table_name . ' SET name=:name, short_description=:short_description, long_description=:long_description, src=:src, link=:link, active=:active, reorder=:reorder, section=:section, show_on_header=:show_on_header, show_on_footer=:show_on_footer, additional_info=:additional_info, visibility=:visibility, is_featured=:is_featured, is_new=:is_new, parent_id=:parent_id, classes=:classes WHERE id=:id';

			$params = [':id' => $this->id, ':name' => $this->name, ':short_description' => $this->short_description, ':long_description' => $this->long_description, ':src' => $this->src, ':link' => $this->link, ':active' => $this->active, ':reorder' => $this->reorder, ':section' => $this->section, ':show_on_header' => $this->show_on_header, ':show_on_footer' => $this->show_on_footer, ':additional_info' => $this->additional_info, ':visibility' => $this->visibility, ':is_featured' => $this->is_featured, ':is_new' => $this->is_new, ':id' => $this->id, ':parent_id' => $this->parent_id, ':classes' => $this->classes];
			$q = $this->conn->prepare($sql);
			$result = $q->execute($params);
			$this->rowCount = $q->rowCount();
			return $result;
		} catch (Exception $e) {
			if (ALLOW_DEBUG) {
				$this->error =  $e->getMessage();
				echo $this->error;
			} else {
				$this->error = 'Error occured. Line No. ' . __LINE__;
			}
			return false;
		}
	}

	public function wildSearch($search, $page = 0, $limit = 0)
	{
		$search = "%" . $search . "%";
		$page = (int)$page;
		$page = ($page - 1) * $limit;
		$limit = (int)$limit;
		$params = array(':search' => $search);

		if ($limit == 0) {
			$sql = "SELECT * FROM  $this->table_name where name like :search and section= 'our-blog'";
		} else {

			$sql = "SELECT * FROM  $this->table_name where name like :search and section= 'our-blog' limit $page, $limit";
		}

		$q = $this->conn->prepare($sql);
		$q->execute($params);
		$result = $q->fetchAll();

		return $result;
	}
	public function select($settings = [])
	{


		$columns = isset($settings['columns']) ? $settings['columns'] : '*';
		$where = isset($settings['where']) ? $settings['where'] : '';
		$order_by = isset($settings['order_by']) ? $settings['order_by'] : 'reorder DESC, id DESC';
		$page =	isset($settings['page']) ? (int)$settings['page'] : 1;
		$limit = isset($settings['limit']) ? (int)$settings['limit'] : '';

		$params = array();
		$sql = "SELECT $columns FROM $this->table_name";

		if (!empty($where)) {
			$where_clause = $this->buildWhereClause($where, $params);
			$sql .= " WHERE " . $where_clause;
		}

		if (!empty($order_by)) {
			$sql .= " ORDER BY $order_by";
		}

		if (!empty($limit)) {
			$page = ($page - 1) * $limit;
			$sql .= " LIMIT $page, $limit";
			// $params['offset'] = $offset;
			// $params['limit'] = $limit;
		}

		$q = $this->conn->prepare($sql);
		$q->execute($params);
		$result = $q->fetchAll();

		return $result;
	}


	private function buildWhereClause($where, &$params)
	{
		$conditions = array();

		foreach ($where as $key => $value) {
			if (is_array($value)) {
				$operator = isset($value['operator']) ? $value['operator'] : '=';
				$values = $value['values'];
				$condition = $key . " $operator (" . implode(',', array_fill(0, count($values), '?')) . ")";
				$conditions[] = $condition;
				foreach ($values as $v) {
					$params[] = $v;
				}
			} else {
				$condition = $key . ' = :' . $key;
				$conditions[] = $condition;
				$params[$key] = $value;
			}
		}

		$where_clause = implode(' AND ', $conditions);

		return $where_clause;
	}


	public function selectById()
	{

		$result = $this->select(['where' => ['id' => $this->id]]);

		if (!empty($result)) {
			return $result[0];
		} else {
			$result;
		}
	}

	public function selectByParentId()
	{

		$result = $this->select(['where' => ['parent_id' => $this->parent_id]]);

		return $result;
	}

	public function selectBySection($settings = [])
	{

		$settings['where']['section'] = $this->section;

		if ($this->active === null) {
			$this->active = true;
		}
		$settings['where']['active'] = $this->active;
		if ($this->active === -1) {
			unset($settings['where']['active']);
		}

		if ($this->visibility === null) {
			$this->visibility = 'Public';
		}
		$settings['where']['visibility'] = $this->visibility;
		if ($this->visibility === -1) {
			unset($settings['where']['visibility']);
		}

		$result = $this->select($settings);

		return $result;
	}

	public function deleteById($id)
	{
		try {
			$sql = 'DELETE FROM ' . $this->table_name . ' WHERE id=:id';
			$q = $this->conn->prepare($sql);
			$result = $q->execute([':id' => $id]);
			$this->rowCount = $q->rowCount();
			return $result;
		} catch (Exception $e) {
			if (ALLOW_DEBUG) {
				$this->error =  $e->getMessage();
				echo $this->error;
			} else {
				$this->error = 'Error occured. Line No. ' . __LINE__;
			}
			return false;
		}
	}

	public function saveFile($key, $isfile = false, $uploadDir = DIR_UPLOADS)
	{
		$file = isset($_FILES[$key]) ? $_FILES[$key] : [];
		if (isset($_FILES[$key]) && $file['error'] == 0) {
			$fileName = time() . "-" . rand(1000, 9999) . "-" . basename($file['name']);
			$fileName = strtolower($fileName);
			$extension = explode(".", $fileName);
			$extension = end($extension);

			$allowed_type = ALLOW_UPLOAD_FILE_TYPE;

			if (!in_array($extension, $allowed_type)) {
				return null;
			}

			$targetPath = DIR_ROOT . "/" . $uploadDir . $fileName;
			if (move_uploaded_file($file['tmp_name'], $targetPath)) {
				if ($isfile) {
				} else {
					// If auto resize is TRUE then resize the image
					if (AUTO_RESIZE_IMAGE) {
						$this->resizeImage($targetPath);
					}
				}
				return $fileName;
			} else {
				return null;
			}
		} else {
			return null;
		}
	}

	public function resizeImage($file, $max_width = 1280, $max_height = 1280, $quality = 90)
	{
		// Get the current dimensions of the image
		list($width, $height, $type) = getimagesize($file);

		// Check if image dimension is already smaller than the proposed resize dimensions then skip optimization.
		if ($width < $max_width and $height < $max_height) {
			return false;
		}

		// Determine the new dimensions while maintaining aspect ratio
		$ratio = min($max_width / $width, $max_height / $height);
		$new_width = $width * $ratio;
		$new_height = $height * $ratio;

		// Create a new image based on the original file type
		switch ($type) {
			case IMAGETYPE_JPEG:
				$image = imagecreatefromjpeg($file);
				break;
			case IMAGETYPE_PNG:
				$image = imagecreatefrompng($file);
				break;
			default:
				return false;
		}

		// Create a new image with the new dimensions
		$new_image = imagecreatetruecolor($new_width, $new_height);

		// Resize the image to the new dimensions
		imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

		// Save the resized image to a new file
		switch ($type) {
			case IMAGETYPE_JPEG:
				imagejpeg($new_image, $file, $quality);
				break;
			case IMAGETYPE_PNG:
				imagepng($new_image, $file, $quality / 10);
				break;
		}

		// Free up memory by destroying the images
		imagedestroy($image);
		imagedestroy($new_image);

		return true;
	}
}

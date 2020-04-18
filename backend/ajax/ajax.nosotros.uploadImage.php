<?php
 //upload.php
	$output = '';

	if(is_array($_FILES))
	{
	  foreach($_FILES['images']['name'] as $name => $value)
	  {
		   $file_name = explode(".", $_FILES['images']['name'][$name]);
		   $allowed_extension = array("jpg", "jpeg", "png", "gif","JPG", "JPEG", "PNG", "GIF");
		   if(in_array($file_name[1], $allowed_extension))
		   {
				$new_name   = rand() . '.'. $file_name[1];
				$sourcePath = $_FILES["images"]["tmp_name"][$name];
				$targetPath = "../images_noticias/temp/".$new_name;
				move_uploaded_file($sourcePath, $targetPath);
		   }
	  }
	  $images = glob("../images_noticias/temp/*.*");
	  foreach($images as $image)
	  {
		  $img = substr($image, 3);
		  $output .= '<img src="'.$img.'" width="300px" height="150px" style="margin-top:15px; padding:8px; border:1px solid #ccc;" />';
	  }
	  echo $output;
	}
 ?>

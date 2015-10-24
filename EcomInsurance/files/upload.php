<?php 



if(isset($_FILES) && $_POST['username']){
	$username = $_POST['username'];
	$destination ='uploads/'.$username;
	//if save folder doesnt exist then create it
	if(!file_exists($destination)){
		mkdir($destination,0777);
		}
		
		foreach($_FILES['filename']['tmp_name'] as $key => $tmp_name){
			
			$file_name = $key.$_FILES['filename']['name'][$key];
			$file_tmp = $_FILES['filename']['tmp_name'][$key];
			$path = $destination."/".$file_name;
			move_uploaded_file($file_tmp,$path);
			
			
			echo '<img width = "400" height="400" src="'.$path.'" />';
			}
		
		
	}



?>
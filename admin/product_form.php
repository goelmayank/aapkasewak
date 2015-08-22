<!DOCTYPE html>
<html lang="en">
<head>
	<title>Php Practice</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<?php  
		include("adminheader.php");
		include("connection.php") ;
		if(isset($_POST["submit"])) {
			$sql="select DISTINCT category from image";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc())
			{
				if(isset($_POST['$row["category"]'])){
					$city = $row["category"];
				}
			}
			$result->free();

			$imagedesc = $_POST['imagedesc'];

			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			echo $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$file_type= "<dt>File is an image - " . $check["mime"] . ".</dt>";
				$uploadOk = 1;
			} else {
				$file_type= "<dt>File is not an image.</dt>";
				$uploadOk = 0;
			}

				// Check if file already exists
			if (file_exists($target_file)) {
				$file_status= "<dt>Sorry, file already exists.</dt>";
				$uploadOk = 0;
			}
				// Check file size
			if ($_FILES["fileToUpload"]["size"] > 1000000) {
				$file_status.= "<dt>Sorry, your file is too large.</dt>";
				$uploadOk = 0;
			}
				// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				$file_status.= "<dt>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</dt>";
				$uploadOk = 0;
			}
				// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$file_status.= "<dt>Sorry, your file was not uploaded.</dt>";
				// if everything is ok, try to upload file
			}
			else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					$imagename = basename( $_FILES["fileToUpload"]["name"]);
					$_SESSION["upload"] = basename( $_FILES["fileToUpload"]["name"]);
					$file_status.= "<dt>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</dt>";
				}
				else {
					$file_status.= "<dt>Sorry, there was an error uploading your file.</dt>";
					$imagename = '';
				}
			}

			$sql = "INSERT INTO users (imagename, imagedesc, category) VALUES ($imagename, $imagedesc, $category)";
			$result=$conn->query($sql);

			$sql="select * from users";
			$result=$conn->query($sql);
			$num_rows= $result->num_rows;
			$result->free();

			$sql="select * from users where id = $num_rows";
			$result=$conn->query($sql);
			$row=$result->fetch_assoc();
			echo "<dl>";	
			echo "<dt>Category: ".$row['category']."</dt>";
			echo "<dt class='pre-scrollable' style='height:5%;'>".$row['imagedesc']."</p>";
			echo "<dt>".$file_type."</dt>";
			echo "<dt>".$file_status."</dt>";
			echo "<dt>File Name: ".$imagename."</dt>";
			echo "<dt>Time: ".date("l jS \of F Y h:i:s A",time())."</dt>";
			echo "</dl>";
			$result->free();

			if (!empty($_SERVER['HTTP_REFERER']))
				header("Location: ".$_SERVER['HTTP_REFERER']);
			else
				echo "No referrer.";
		}
		?>
	</div>
</body>
</html>
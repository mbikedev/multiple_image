<?php //index.php file ?>
<html>
	<head>
		<title>Multiple Images in one field</title>
	</head>	
	<body>
		<form action="" method="POST" enctype="multipart/form-data">
			<input type="text" name="car_name" />
			<input type="file" name="images[]" multiple/>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>
<?php
 include "config.php";
 if(isset($_POST['submit']))
 {	$car_name=$_POST['car_name'];
	 $file='';
	 $file_tmp='';
	 $location="upload/";
	 $data='';
	 foreach($_FILES['images']['name'] as $key=>$val)
	{
	 $file=$_FILES['images']['name'][$key];
	 $file_tmp=$_FILES['images']['tmp_name'][$key];
	 move_uploaded_file($file_tmp,$location.$file);
	 $data .=$file." ";
	}
	$query="insert into test (car_name,images) values('$car_name','$data')";
	$fire=mysqli_query($con,$query);
	if($fire)
	{
		echo "Successful";
	}
	else
	{
		echo "Failed";
	}
 }
?>













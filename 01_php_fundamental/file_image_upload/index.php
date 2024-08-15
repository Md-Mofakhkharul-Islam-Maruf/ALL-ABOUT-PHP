<?php include 'header.php'?>
<?php
	echo "<hr>File image upload:<hr><br>";
	
	if(isset($_FILES['image'])){
		$filename= $_FILES['image']['name'];
		$filetmp= $_FILES['image']['tmp_name'];
		move_uploaded_file($filetmp,"images/".$filename);
		echo "Image uploaded";
	}
?>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" value="submit">
</form>
<?php include 'footer.php'?> 
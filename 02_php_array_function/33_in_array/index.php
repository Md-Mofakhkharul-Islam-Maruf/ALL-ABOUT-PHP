<?php include 'header.php'?>
<?php
	echo "<hr>in_array:<hr><br>";
	
	$arr= array("apple","cat","banana","orange");
	if(isset($_POST['name'])){
		$text=$_POST['name'];
		if(in_array($text, $arr)){
			echo "text exist";
		}else{
			echo "text not exist";
		}
	}
	////array er value er name dhore searchn korar jnno
?>
<form action="" method="post">
  <label for="name">Name: </label>
  <input type="text" id="name" name="name"> 
  <input type="submit" value="Search">
</form>
<?php include 'footer.php'?>  
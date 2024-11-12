<?php include 'header.php'?>
<?php echo "<hr>namespace:<hr><br>"; ?> 
<?php
// namespace basically features to working with same name of class, function, etc that comes from various pages within a project. using 'namespace' keyword that confirm the directory thats why if the name of classes though same in multiple page but for directory it doesn't occur any issue in main page.
	include 'classes/java.php';
	include 'classes/php.php';
	//use java\phpl;
	
	new java\phpl(); // here we create a phpl classes object that exist in java.php and here we mention the directory as '\' for using 'namespace java' in java.php page;
	
	new php\phpl();
	
	// Here we access two different pages same classes with different namespace. 
?>
<?php include 'footer.php'?>  
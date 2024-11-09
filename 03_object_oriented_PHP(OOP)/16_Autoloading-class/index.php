<?php include 'header.php'?>
<?php echo "<hr>Autoloading class:<hr><br>"; ?> 
<?php
	spl_autoload_register(function($page_name){ // Ai function er meaning holo directory folder er joto page ache sob pabe.
		include "class-folder/".$page_name.".php"; // first a folder dhore sob page pabe then extention dhore akta akta kore page a jabe r jehetu nice object create kora ache tai oi page er class autoload hobe......		
	});
	$obj_ami= new ami;
	$obj_tumi= new tumi;
	$obj_amra= new amra;
?>
<?php include 'footer.php'?>  
<?php include 'header.php'?>
<?php echo "<hr>Strategy pattern:<hr><br>"; ?> 
<?php

   spl_autoload_register(function($clname){
   include "classes/".$clname.".php";
		});
	$blogpost= getallpost();
	$posts = new Posts();
	foreach($posts as $post){
		echo $post->getTitle();
		echo $post->getContent();
		echo $post->getDate();
		echo $post->getAuthor();
		$comments = new comments($post->getComments());
		foreach($comments as $comment){
			echo $comment->getCommentAuthor();
			echo $comment->getCommentContent();
		}
	}
?>
<?php include 'footer.php'?>  
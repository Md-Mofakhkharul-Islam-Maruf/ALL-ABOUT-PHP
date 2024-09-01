<?php include 'header.php'?>
<?php
	echo "<hr>Filter:<hr><br>";
	echo "<table>
				<tr>
					<td>Filter Name</td>
					<td></td>
					<td>Filter ID</td>
				</tr>
		</table>";
			
	foreach(filter_list() as $a => $b){
		echo "<table>
				<tr>
					<td>".$b."</td>
					<td></td>
					<td>".filter_id($b)."</td>
				</tr>
			</table>";
	}
    
	
	$str = "<h2>I am learning php</h2>";
	echo $tmp = filter_var($str, FILTER_SANITIZE_STRING);
	echo "<br><br>";
	
	$int = 40;
	if(filter_var($int, FILTER_VALIDATE_INT)){
		echo "$int is a integer value.<br><br>";
	}else{
		echo "$int is not a integer value.<br><br>";
	}
	
	$ip = "127.0.0.1";
	if(filter_var($ip, FILTER_VALIDATE_IP)){
		echo "$ip is a correct IP.<br><br>";
	}else{
		echo "$ip is not a correct IP.<br><br>";
	}
	
	$email	= "maruf236hasan@gmail.com";
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "$email is a correct email.<br><br>";
	}else{
		echo "$email is not a correct email.<br><br>";
	}
	
	$url = "https://www.maruf.com";
	if(filter_var($url, FILTER_VALIDATE_URL)){
		echo "$url is a correct url.<br><br>";
	}else{
		echo "$url is not a correct url.<br><br>";
	}
?>
<?php include 'footer.php'?>
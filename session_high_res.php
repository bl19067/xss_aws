<?php
 session_start();
 ?>

<?php
		
	if($_SESSION["data"] == "@nice_hacker"){
		echo "You are admin! @nice_hacker" ;
	}else{
		echo "hello ". $_SESSION["data"];
	}
	$param = $_GET["data"];
	echo " " . $param;
	
?>
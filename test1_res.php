<?php


if(!array_key_exists ("data", $_POST) || $_POST['data'] == NULL || $_POST['data'] == ''){

 $isempty = true;


}else {
	
	echo '<pre>';
	echo 'Hello ' . $_POST['data'];

	echo '</pre>';
	}

?>

<?php
$data = $_POST["data"];
if($data == "<script>alert('1')</script>" || $data == "<script>alert('0')</script>"){
	
	echo "correct!\n";
	echo "<br>";
	echo "xss_str{eHNzbm9raWhvbm50b2RheW8}";
	echo '<br>';
	

	
	
} else {
	echo "Wrong....";
	echo "<br>";
	echo '<a href="http://localhost:8080/testprogram/test3_req.php">やり直す</a>';
    
}

?> 

<br>
<a href="http://18.183.207.65/xss-learning/start.php">問題選択へ戻る</a>
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

	$data = $_POST['data'];

	if($data == "<script>windows.location.href='https://x.gd/h0ivn';</script>"){
		echo '悪意のあるサイトに飛ばせたようだ...<br>';
		#aws上に偽サイトを作っておく
		echo "xss_str{a29yZWRlZmlzaGluZ3NpdGV3b291eW9kZWtpcnVuZQ}";
		
	}
	else{
		echo 'Wrong...';
		echo '<br>';
		echo '<a href="http://localhost:8080/testprogram/test3_req.php">やり直す</a>';
	}
	
?>

<br>
<a href="http://18.183.207.65/xss-learning">問題選択へ戻る</a>
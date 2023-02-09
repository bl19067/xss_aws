<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>


<?php

	$data = $_POST['data'];

	if($data == "<script>window.location.href='./xss_aws/aaaaaaaaaaaaaaaaaaaaaaaaa.php';</script>"){
		echo '指定されたサイトに飛ばせたようだ...<br>';
		#aws上に偽サイトを作っておく
		echo "xss_str{a29yZWRlZmlzaGluZ3NpdGV3b291eW9kZWtpcnVuZQ}";
		
	}
	else{
		echo 'Wrong...';
		echo '<br>';
		echo '<a href="http://18.181.193.86/xss_aws/test3_req.php">やり直す</a>';
	}
	
?>

<br>
<a href="http://18.181.193.86/xss-learning/start.php">問題選択へ戻る</a>
</html>

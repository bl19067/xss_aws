<?php
$data = $_POST['data'];

$jadge=!array_key_exists ("data", $_POST) || $data == NULL || $data == '';

if($jadge){

 $isempty = 1;

} else {

 echo '<pre>';
 echo 'Hello ' . str_replace('<script>', '', $data);
 echo '</pre>'; 

}


?> 

<?php 
$data = $_POST['data'];
$a='<SCRIPT>alert("0")</script>';
$b='<SCRIPT>alert("1")</script>';
$c='<scr<script>ipt>alert("0")</script>';
$d='<scr<script>ipt>alert("1")</script>';
$d="<SCRIPT>alert('0')</script>";
$f="<SCRIPT>alert('1')</script>";
$g="<scr<script>ipt>alert('0')</script>";
$h="<scr<script>ipt>alert('1')</script>";

if ($data==$a || $data==$b || $data==$c || $data==$d || $data==$e || $data==$f || $data==$g || $data==$h){
	echo "correct!!";
	echo "<br>";
	echo "xss_str{a29yZWRlZmlzaGluZ3NpdGV3b291eW9kZWtpcnVuZQ}";
	
}else{
	echo '<a href="http://18.183.207.65/xss_aws/test4_req.php">やり直す</a>';
}
?>

<br>
<a href="http://18.183.207.65/xss_aws/start.php">問題選択へ戻る</a>



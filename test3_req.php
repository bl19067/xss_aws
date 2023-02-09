<!doctype html>
<meta charset="UTF-8">
悪意のあるサイトへ誘導するURLを送り付けて機密情報を読み取ることができるみたいだ....</br>
※別のサイトはwindow.location.href='' で指定のサイトに飛ばせるようだ<br>

<h4>指定したサイト: </h4>
<br>※URLを暗号化して気付かれないようにしてくる場合が多い。<br>


<br>
    <img src="./images/alert_example.png" alt="script例">
    <br>
<form method="POST" action="./test3_res.php">
		
       <input type="text" name="data" size="50" placeholder="ここに指定したサイトに飛ばすスクリプトを入れる">
       <input type="submit" value="送り付ける"/>
</form>
<br>
<a href="http://18.181.193.86/xss_aws/start.php">戻る</a>
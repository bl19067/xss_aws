
<!doctype html>

    <p3>XSSの対策をしたが、まだ脆弱性があるみたい...</p3></br>
    <img src="./images/script.png" alt="code"></br>
    <p3>'0'か'1'が表示される任意スクリプトを実行すると...</p3>


    <br>
    <h3>埋め込む文字は('0')あるいは('1')に統一する.</h3>
    <img src="./images/alert_example.png" alt="script例">
    <br>
    
    <form method="POST" action="./test4_res.php">
       <input type="text" name="data"/>
       <input type="submit" value="送信"/>
   </form>
   <br>
<a href="http://54.199.54.161/xss_aws/start.php">戻る</a>
</body>
</html>
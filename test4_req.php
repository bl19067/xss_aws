
<!doctype html>

    <p3>XSSの対策をしたが、まだ脆弱性があるみたい...</p3></br>
    <p3>'0'か'1'が表示される任意スクリプトを実行すると...</p3>
    <form method="POST" action="./test4_res.php">
       <input type="text" name="data"/>
       <input type="submit" value="送信"/>
   </form>
</body>
</html>
<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    //檢查是否登入
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//連結 MYSQL 資料庫
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");//查詢帳號   查詢條件是查$_GET['id'] 使用者資料
        $row=mysqli_fetch_array($result);//使用 $row 儲存資料
        echo "  
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>

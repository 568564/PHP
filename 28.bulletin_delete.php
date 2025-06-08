<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {//未登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   //如果已登入
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";// 取得 URL 上的 bid準備刪除對應資料
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";//成功或錯誤都會跳回布告欄
    }
?>

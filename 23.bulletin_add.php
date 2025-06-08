<?php
    error_reporting(0);//關閉錯誤訊息
    session_start();//開啟session功能
    if (!$_SESSION["id"]) {//如果沒有登入則跳回登入頁面
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//連結 MYSQL 資料庫
        //將title, content, type, time寫入bulletin
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";//3 秒後跳回url=11.bulletin.php頁面
        }
    }
?>

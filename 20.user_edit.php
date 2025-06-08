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
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){//更新 user 資料表中該帳號的密碼
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";//3 秒後跳回18.user.php頁面
        }
    }

?>

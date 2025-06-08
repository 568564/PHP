<?php
//檢查是否登入
error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    
   
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//連接 MySQL 資料庫     
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";//輸入帳號密碼新增到user表格
   if (!mysqli_query($conn, $sql)) {//執行失敗
     echo "新增命令錯誤";
   }
   else{//執行成功
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>

<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");# 連結MySQL資料庫 建立連線
   $result=mysqli_query($conn, "select * from user");#從user資料表選取全部欄位
   $login=FALSE;
   #用迴圈比對每筆輸入的帳號密碼
   while ($row=mysqli_fetch_array($result)) {

     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;#符合就設成TRUE
     }
   } 
   #登入成功跳轉到11.bulletin.php
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }
  #錯誤就跳回登入畫面
  else{
    echo "帳號/密碼 錯誤";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>

<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#連結MySQL資料庫 建立連線
   $result=mysqli_query($conn, "select * from user");#從 user資料表選取全部欄位
   #user的帳號密碼用 $_POST["id"] 和 $_POST["pwd"]比對
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   #判斷是否成功
   if ($login==TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>

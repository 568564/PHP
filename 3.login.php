<?php 
    #判斷帳號和密碼兩者都符合 列印登入成功
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功";
    #反之列印登入失敗
    else
        echo "登入失敗";
?>

<?php
    #session 來記錄使用者每次開啟這個網頁的次數
    session_start();
    if (!isset($_SESSION["counter"]))

        $_SESSION["counter"]=1;#如果使用者第一次開啟頁面設定為1

    else
        $_SESSION["counter"]++;#反之已經來過會把counter+1
    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>

<?php
    #重置 session 計數器並自動返回上一頁
    session_start();   
    unset($_SESSION["counter"]); #刪除計數
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";#重置後過兩秒自動跳回8.counter.php的頁面

?>

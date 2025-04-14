<?php
    session_start();
    unset($_SESSION["id"]);#清除當時登入儲存的帳號
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";#3秒後退回登入畫面

?>

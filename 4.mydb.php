<?php
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #連結MySQL資料庫 建立連線
    $result=mysqli_query($conn, "select * from user");#從 user資料表選取全部欄位
    #抓取這兩筆資料列印帳號密碼
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>

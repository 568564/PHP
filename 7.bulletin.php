<?php
    error_reporting(0);#關閉錯誤
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#連結MySQL資料庫 建立連線
    $result=mysqli_query($conn, "select * from bulletin");#從user資料表選取全部欄位
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";#使用table 設定表格格式
     #從 $result 查詢結果中取出資料列 直到沒有資料
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
?>

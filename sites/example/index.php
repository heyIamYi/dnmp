<?php
$servername = "dnmp_mysql"; // docker-compose.yml 裡的 MySQL 服務名稱
$username = "root"; // MySQL 帳號
$password = "root"; // MySQL 密碼
$dbname = "test"; // 目標資料庫名稱

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}
echo "連線成功！<br>";

// 測試查詢 (例如檢查一個資料表)
$sql = "SELECT VERSION() AS version"; // 查詢資料庫版本
$result = $conn->query($sql);

if ($result && $row = $result->fetch_assoc()) {
    echo "MySQL 版本: " . $row["version"];
} else {
    echo "查詢失敗或無結果。";
}

$conn->close();

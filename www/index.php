<?php
ini_set("display_errors","On");
error_reporting(E_ALL);
//date
echo date("Y-m-d H:i:s")."<br />\n";

try {
    $conn = new PDO('mysql:host=mysql;port=3306;dbname=mysql;charset=utf8', 'root', '123456');
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$conn->exec('set names utf8');
$sql = "SELECT * FROM `user` WHERE 1";
$result = $conn->query($sql);
while($rows = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $rows['Host'] . ' ' . $rows['User']."<br />\n";
}
?>

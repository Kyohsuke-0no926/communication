<?php
try {
    $db = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_0cc7505b17a6a12;charset=utf8','b3ce9eada919c4', 'adc6d4a8');
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}
?>

<?php
ini_set('error_reporting', E_COMPILE_ERROR | E_RECOVERABLE_ERROR | E_ERROR | E_CORE_ERROR);
?>
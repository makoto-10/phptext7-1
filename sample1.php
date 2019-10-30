<?php
session_start();
if($_SESSION['name']){
    echo $_SESSION['name'];
}
$_SESSION['name'] = 'タナカタロウ';
?>
<meta charset="utf-8">
<button onclick="location.href='sample2.php'">次のページへ</button>
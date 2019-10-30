<?php
session_start();
echo $_SESSION['name'];
if($_SESSION['name']){
    session_destroy();
}

?>
<meta charset="utf-8">
<button onclick="location.href='sample1.php'">戻る</button>
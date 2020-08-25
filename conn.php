<?php
$conn = new mysqli("localhost","mcloc_api","rPSZa7yJYXBfFPwH","mcloc_api");//数据库信息
if($conn->connect_error){
    die("数据连接失败");
}
?>
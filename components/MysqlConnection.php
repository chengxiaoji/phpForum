<?php
//创建连接数据库
$conn = mysqli_connect("121.199.15.46","forum","forum","forum");
if(!$conn){
    die("连接失败：" . mysqli_connect_error());
}
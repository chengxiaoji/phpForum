<?php
session_start();
if(isset($_SESSION['username'])){
    $msg=$_SESSION['username'];
    $isLogin=true;
}
else {
    $msg = '未登录';
    $isLogin=false;
}
$str = array(
    'msg'=>$msg,
    'isLogin'=>$isLogin,
);
echo json_encode($str);
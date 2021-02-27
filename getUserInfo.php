<?php
session_start();
if(isset($_SESSION['userInfo'])){
    $msg=$_SESSION['userInfo'];
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
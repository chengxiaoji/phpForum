<?php
$conn=new Connection();
require 'components/MysqlConnection.php';
$data = file_get_contents("php://input");
$data = json_decode($data,true);
$username= trim($data['name']);
$password= trim($data['pass']);
$sql = "select * from forum.forum_user where username='$username' and password='$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if ($row==null)
{
    $code=401;
    $msg="用户名或密码错误！请输入正确的用户名和密码！";
}
else{
    $code=200;
    $msg="账号密码正确！";
    session_start();
    $_SESSION['userInfo']=$username;
}
$str = array(
    'msg'=>$msg,
    'code'=>$code,
);
echo json_encode($str);
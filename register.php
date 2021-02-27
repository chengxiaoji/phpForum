<?php
require 'components/MysqlConnection.php';
$data = file_get_contents("php://input");
$data = json_decode($data,true);
$username= trim($data['name']);
$password= trim($data['pass']);
$email=trim($data['email']);
$last_login=null;
$date_joined=date('Y-m-d H:i:s',time());

$sql = "INSERT INTO forum.forum_user VALUES(null,'$username','$password','$email','$last_login','$date_joined',0,1,0)";
$result = mysqli_query($conn,$sql);
if ($result==null)
{
    $code=401;
    $msg="注册失败！";
}
else{
    $code=200;
    $msg="注册成功！";

}
$str = array(

    'msg'=>$msg,
    'code'=>$code,

);
echo json_encode($str);
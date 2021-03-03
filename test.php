<?php
require 'components/MysqlConnection.php';
require 'components/user.php';
$info = getUserInfo();
setCookies($info);
checkLoginInfo($info);
if(checkLogin($info)){
    setCookies($info);
    setSessions($info);
    updateLogin($info);
    echoSuccess();
}else
{
    exit();
}




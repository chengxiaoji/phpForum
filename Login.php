<?php
require 'components/MysqlConnection.php';
require 'components/user.php';
header('Content-Type:text/json;charset=utf-8');
$info = getUserInfo();
checkLoginInfo($info);
checkLogin($info);
setCookies($info);
setSessions($info);
updateLogin($info);

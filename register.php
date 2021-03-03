<?php
require 'components/MysqlConnection.php';
require 'components/user.php';
header('Content-Type:text/json;charset=utf-8');
$info = getRegisterInfo();
checkRegisterInfo($info);
register($info);

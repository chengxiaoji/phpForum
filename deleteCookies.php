<?php
require 'component/MysqlConnection.php';
$conn=new Connection();
$calories = "Q'; DELETE FROM forum.car;";
$colour = 'red';
$sql="select * from forum.forum_user ";
echo 1;
$stmt=$conn->mysqli->prepare($sql);
//$stmt->bind_param("s",$calories);
$res=$stmt->execute();
$result = $stmt->get_result();   // You get a result object now
if($result->num_rows > 0) {     // Note: change to $result->...!
    while ($data = $result->fetch_assoc()) {
        echo $data['username'].'/'.$data['password'];
    }
}
echo $res;
<?php
$mysqli = new mysqli('mysql.sys','root','','traintick','null','/cloudsql/project-parallel-237015:asia-east2:traintick;dbname=traintick');
if($mysqli->connect_errno){
  echo $mysqli->connect_errno.": ".$mysqli->connect_error;
}
else {
  // code...
  echo "connected";
}



?>

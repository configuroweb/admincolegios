<?php
function countrecords($table){
  include("libs/db_connect.php");
$recordcount=sqlValue("SELECT COUNT(*) FROM $table");
echo $recordcount;
}

?>

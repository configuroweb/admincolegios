<?php 
function getrecentfees($table){
	include("libs/db_connect.php");
 $sql="SELECT * FROM $table ORDER BY id DESC LIMIT 10";
    if ($result=mysqli_query($con,$sql))
      {
      // Return the number of rows in result set
      $rowcount=mysqli_num_rows($result);
     if ($rowcount==0) {
     	# code...
     	echo "No Recent Fees";
     }
     foreach ($result as $recentfees => $feesdetails) {
        $StudentID=$feesdetails['Student'];
        $BalanceID=$feesdetails['Balance'];
        $getfullname=sqlValue("SELECT FullName FROM students WHERE id='$StudentID'");
        $getbalance=sqlValue("SELECT Balance FROM students WHERE id='$BalanceID'");
     	# code...
     	echo '<tr>
        <td>'.$feesdetails['id'].'</td>
        <td>'.$getfullname.'</td>
        <td>'.$feesdetails['PaidAmount'].'</td>
        <td>'.$getbalance.'</td></tr>';
 }
      }
    mysqli_close($con);

}
?>
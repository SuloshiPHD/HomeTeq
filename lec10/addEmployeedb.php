<?php
$item1=$_POST['empId'];
$item2=$_POST['fName'];
$item3=$_POST['empPosition'];
$item4=$_POST['empEmail'];
$item5=$_POST['compCode'];

 
$con=mysqli_connect("localhost","root","")
or die("Access denied");
$res=mysqli_select_db($con,"w1697801_Futurity");
if(!$res)
echo"Connection Failure";
else
$qry="insert into w1697801_Employee (w1697801_empId,w1697801_empFullName,w1697801_empPosition,w1697801_empEmail,w1697801_compCode) values('$item1','$item2','$item3','$item4','$item5')";
$rslt=mysqli_query($con,$qry)
or die(mysqli_error($con));
if($rslt)
{
 header( 'Location: addEmployee.php?response=success' ) ;  // Page redirection with query string. If insertion successful
}
mysqli_close();

?>
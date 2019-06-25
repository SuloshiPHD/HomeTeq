<?php
$item1=$_POST['usr'];
$item2=$_POST['pwd'];
$con=mysqli_connect("localhost","root","")
or die("Access denied");
$res=mysqli_select_db($con,"testphp");
if(!$res)
echo"Connetion Faliur";
else
$qry="insert into log_details (User_name,Password) values('$item1','$item2')";
$rslt=mysqli_query($con,$qry)
or die(mysqli_error($con));
if($rslt)
{
 header( 'Location: register.php?response=success' ) ;  // Page redirection with query string. If insertion successful
}
mysqli_close();
?>


?>

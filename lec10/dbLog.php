<?php
$item1=$_POST['usr'];
$item2=$_POST['pwd'];
$con=mysqli_connect("localhost","root","")
or die("Access denied");
$res=mysqli_select_db($con,"testphp");
if(!$res)
echo"Connetion Faliur";
else
$qry="select User_name,Password from log_details where User_name='$item1' and Password ='$item2' ";
$rslt=mysqli_query($con,$qry)
or die(mysqli_error($con));

if(mysqli_fetch_assoc($rslt)==false)  // No similar type of record captured from the DB
{
header( 'Location: login.php?response=faliur' ) ;
}

else 
{
 header( 'Location: login.php?response=success' ) ;
}

mysqli_close();
?>


?>

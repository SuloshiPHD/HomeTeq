<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>w1697801</title>
	
    </head>
	
	<body>
		<h1>New Employee Confirmation</h1>
		
		<hr>
		
		<h3>Your new employee has been added successfully.</h3>
		<?php
		$con=mysqli_connect("localhost","root","")
        or die("Access denied");
		$res=mysqli_select_db($con,"w1697801_Futurity");
        if(!$res)
        echo"Connection Failure";
        else
		$qry="SELECT * FROM w1697801_Employee  ORDER BY w1697801_empId DESC LIMIT 1" ;
		$rslt=mysqli_query($con,$qry)
         or die(mysqli_error($con));
		 
		$print_data=mysqli_fetch_row($rslt);
		
		echo "Added Employee Id : " .$print_data[0];
		echo '<BR>';
		echo "\n";
		
		echo "Added Full Name : " .$print_data[1];
		echo '<BR>';
		
		echo "Added Position : " .$print_data[2];
		echo '<BR>';
		
		echo "Added Email : " .$print_data[3];
		echo '<BR>';
		
		echo "Added Company Code : " .$print_data[4];
		echo '<BR>';
		
		
		
		?>
        
    </body>
</html>


<?php
if(!isset($_GET['response']))
{
        $_GET['response']=-99;
}
 else if ($_GET['response'] == "faliur") 
 {
        echo "Login Failed";
 }
 else if ($_GET['response'] == "success") 
 {
        echo "Access granted";
 }

?>
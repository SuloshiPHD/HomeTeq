<?php
//check if the user has clicked the sign up button

 if(isset($_POST['addname'])){
	 
	 
	 
	 // get the data from the form
	$item1=$_POST['empId'];
	$item2=$_POST['fName'];
	$item3=$_POST['empPosition'];
	$item4=$_POST['empEmail'];
	$item5=$_POST['compCode'];
	
	//check if inputs are empty
	
	if(empty($item1)|| empty($item2)|| empty($item3)|| empty($item4)|| empty($item5) ){
		header ("Location: ../addEmployee.php?fields=empty");
		exit();
	}else{
		//validate the email address
		if(!filter_var($item4,FILTER_VALIDATE_EMAIL)){
			header ("Location: ../addEmployee.php?fields=invalidemail");
			exit();
		}
		else{
			header ("Location: ../addEmployee.php?fields=success");
			echo "Add the new Employee";
			exit();
		}
	}
 }
	else{
	 	   header ("Location: ../addEmployee.php");
		   exit();
	}
	 
 

?>
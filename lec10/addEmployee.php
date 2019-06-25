<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>w1697801</title>
		
    <style>
    th {
    text-align: left;
    }
	th, td {
    padding: 15px;
    }
	
	input[type=submit], input[type=reset] {
    border: 2px;
    padding: 10px 30px;
    margin: 4px 2px;
    cursor: pointer;
    }


    </style>
    </head>
	
	<body>
		<h1>Add a New Employee</h1>
		
		<hr>
		
		<h3>Fill the form to add a new employee</h3>
        <form method="post" action="addEmployeedb.php">
    
        <table cell padding="10" cell spacing="5">
		
            <tr>
            <th>*Employee Id </th>
            <td><input type="text" name="empId"></td>
            </tr>
			
            <tr>
            <th>*Full Name </th>
            <td><input type="txt" name="fName"></td>
            </tr>
			
			<tr>
            <th>*Position </th>
            <td><input type="txt" name="empPosition"></td>
            </tr>
			
			<tr>
            <th>*Email </th>
            <td><input type="email" name="empEmail"></td>
            </tr>
			
			<tr>
            <th>*Company Code </th>
				<td>
					<select name="compCode">
					<option>10</option>
					<option>20</option>
					<option>30</option>
					<option>40</option>
					</select>
				</td>
            </tr>
			
            <tr>
				 
                 <th colspan="2" align="center"><input type="submit" value="Add" name="addbtn"></th>
				 <th colspan="2" align="center"><input type="reset" value="clear" name="clearbtn"></th>
             
            </tr>
			
        </table>
   
        </form>
    </body>
</html>


<?php
if(!isset($_GET['response']))
{
        $_GET['response']=-99;
}
 else if ($_GET['response'] == "success") 
 {
        echo "New Employee added to the database successfully"; 
 }

?>
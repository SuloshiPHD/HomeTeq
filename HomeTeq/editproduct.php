<?php
session_start();
include ("db.php");       //include db.php file to connect to DB 
 
$pagename="Make your home smart";    //create and populate variable called $pagename 

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php"); 
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text

if(isset($_POST['h_prodid'])){
	$pridtobeupdated = $_POST['h_prodid'];
	$newprice = $_POST['newPrice'];
	$newqutoadd = $_POST['newQuantity'];
	
	$SQL1="select prodQuantity from Product where prodId =".$pridtobeupdated; 
    $exeSQL1=mysqli_query($conn, $SQL1) or die (mysqli_error());
	$arrayqu=mysqli_fetch_array($exeSQL1);
	$newstock = $newqutoadd+$arrayqu['prodQuantity'];
	
	if(!empty($_POST['newPrice'])){
		$SQL2 = "UPDATE Product SET prodPrice=".$newprice.", prodQuantity=".$newqutoadd." WHERE prodId=".$pridtobeupdated;
		$exeSQL2=mysqli_query($conn, $SQL2) or die (mysqli_error());
	}
	else{
		$SQL3 = "UPDATE Product SET prodQuantity=".$newqutoadd." WHERE prodId=".$pridtobeupdated;
		$exeSQL3=mysqli_query($conn, $SQL3) or die (mysqli_error());
	}
}

//create a $SQL variable and populate it with a SQL statement that retrieves product details 
$SQL="select prodId, prodName, prodPicNameSmall,prodDescripShort,prodPrice,prodQuantity from Product"; 
//run SQL query for connected DB or exit and display error message 
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());  

echo "<table style='border: 0px'>"; 
//create an array of records (2 dimensional variable) called $arrayp. 
//populate it with the records retrieved by the SQL query previously executed.  
//Iterate through the array i.e while the end of the array has not been reached, run through it 
while ($arrayp=mysqli_fetch_array($exeSQL))       
{
	echo "<form action= editproduct.php method=post>";
	echo "<tr>";
	echo "<td style='border: 0px'>";
	//display the small image whose name is contained in the array
	
	//make the image into an anchor to prodbuy.php and pass the product id by URL (the id from the array)
	echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">"; 
	echo "<img src=images/".$arrayp['prodPicNameSmall']." height=200 width=200>";
	
	//close the anchor 
	echo "</a> ";
	
	echo "</td>";  
	echo "<td style='border: 0px'>";
	echo "<p><h5>".$arrayp['prodName']."</h5><br>".$arrayp['prodDescripShort']."<br><br>Current Price :<b>&nbsp £ &nbsp".$arrayp['prodPrice']."</b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp New Price : £ &nbsp<input type='number' name='newPrice'></p>";
	echo "<p>Current Stock : <b>&nbsp".$arrayp['prodQuantity']."</b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Add number of items : <select name= newQuantity>";
	for ($i = 1;$i<=500;$i++){
	   echo "<option value=".$i.">".$i." </option>";
   }
       echo "</select>";
	   echo "<input type=hidden name=h_prodid value=".$arrayp['prodId'].">";
	   echo "<br><br><input type='submit' value= 'SUBMIT'>";
	//display product name as contained in the array
	echo "</td>";
	echo "</tr>";
	echo "</form>";
} 
echo "</table>";

include("footfile.html"); //include head layout
echo "</body>";
?>
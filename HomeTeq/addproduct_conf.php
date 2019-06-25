<?php
session_start();
include("db.php");
$pagename="Your Sign Up Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$proName = $_POST['proName'];
$smallPic = $_POST['sPicName'];
$largePic = $_POST['lPicName'];
$shortDesc = $_POST['shortDesc'];
$longDesc = $_POST['longDesc'];
$proPrice = $_POST['proPrice'];
$proQuantity = $_POST['proQuantity'];


if (!empty($proName||$smallPic||$largePic||$shortDesc||$longDesc||$proPrice||$proQuantity)){

			$SQL="INSERT INTO product (prodName,prodPicNameSmall,prodPicNameLarge,prodDescripShort,prodDescripLong,prodPrice,prodQuantity)
			VALUES('".$proName."','".$smallPic."','".$largePic."','".$shortDesc."','".$longDesc."',".$proPrice.",".$proQuantity.")"; 
            //run SQL query for connected DB or exit and display error message 
            $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());  
			
			$errNo = mysqli_errno($conn);
			if ($errNo == 0){
				echo "Successfully enter the new product";
				
			}
			if($errNo != 0){
			  if($errNo = 1062){
				echo " The uniqueness of the product name has been breached";
		        echo "<br><a href='addproduct.php'>Go Back</a>";
			  }
			  if ($errNo == 1064){
				echo "Illegal characters have been entered such as apostrophes [ ' ] and backslashes [ \ ]";
		        echo "<br><a href='addproduct.php'>Go Back</a>";
			  }
			  if($errNo == 1054){
				echo "Illegal characters have been entered in the fields that are expecting numerical values";
		        echo "<br><a href='addproduct.php'>Go Back</a>";
			  }
			}
}
else{
	echo "Fill all the mandatory fields !!";
	echo "<br><a href='addproduct.php'>Go Back</a>";
}



include("footfile.html"); //include head layout
echo "</body>";
?>
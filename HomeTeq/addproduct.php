<?php
session_start();
$pagename="Add a New Product"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<form action=addproduct_conf.php method=post>";
echo "<table>";
echo "<tr><td>*Product Name : </td>";
echo "<td><input type='text' name='proName' size='50'></td></tr>";

echo "<tr><td>*Small Picture Name : </td>";
echo "<td><input type='text' name='sPicName' size='50' ></td></tr>";

echo "<tr><td>*Large Picture Name : </td>";
echo "<td><input type='text' name='lPicName' size='50'></td></tr>";

echo "<tr><td>*Short Description : </td>";
echo "<td><input type='text' name='shortDesc' size='50'></td></tr>";

echo "<tr><td>*Long Description : </td>";
echo "<td><input type='text' name='longDesc' size='50'></td></tr>";

echo "<tr><td>*Price : </td>";
echo "<td><input type='number' name='proPrice' size='5'></td></tr>";

echo "<tr><td>*Initial Stock Quantity : </td>";
echo "<td><input type='number' name='proQuantity' size='5'></td></tr>";

echo "<tr><td><input type='submit' value= 'Add Product'></td>";
echo "<td><input type='submit' value= 'Clear Form'></td></tr>";

echo "</table>";
echo "</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>
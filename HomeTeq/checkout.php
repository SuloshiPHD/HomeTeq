<?php
session_start(); 
include("db.php"); 
$pagename="Order Confirmation"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php"); 
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
$currentdatetime = Date('Y-m-d H:i:s');
$SQL="INSERT INTO orders (userId,orderDateTime,orderTotal) VALUES ('".$_SESSION['userid']."','".$currentdatetime."','".null."')";
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());

$errNo = mysqli_errno($conn);
			if ($errNo == 0){
				$SQL1="SELECT MAX(orderNo) AS 'orderNo' FROM orders INNER JOIN users ON orders.userId = users.userId WHERE orders.userId=".$_SESSION['userid'];
				$exeSQL1=mysqli_query($conn, $SQL1) or die (mysqli_error());
				$arrayord=mysqli_fetch_array($exeSQL1);
				$orderNum = $arrayord['orderNo'];
				echo "Order has been placed successfully.Your order number :".$orderNum;
				
				echo "<table>";
                echo "<th>Product Name</th>";
                echo "<th>Price</th>";
                echo "<th>Quantity</th>";
                echo "<th>Subtotal</th>";
				
				if (isset($_SESSION['basket'])) {
	            $total = 0;
				
	                foreach($_SESSION['basket'] as $index => $value) {
						$SQL2="select prodId, prodName, prodPrice from product where prodId = ".$index; 
                        $exeSQL2=mysqli_query($conn, $SQL2) or die (mysqli_error($conn)); 
                        $arrayb=mysqli_fetch_array($exeSQL2);
						$subtotal = $arrayb['prodPrice']*$value;
						
						$SQL3="INSERT INTO order_line (orderNo,prodId,quantityOrdered,subTotal) VALUES (".$orderNum.",".$index.",".$value.",".$subtotal.")";
                        $exeSQL3=mysqli_query($conn, $SQL3) or die (mysqli_error($conn));
						
						echo "<tr>";
	                    echo "<td>".$arrayb['prodName']."</td>";
	                    echo "<td>$".$arrayb['prodPrice']."</td>";
	                    echo "<td>".$value."</td>";
	                    echo "<td>$".$subtotal."</td>";               
	                    echo "</tr>";
	                    $total += $subtotal;
				    }
					echo "<tr>";
                    echo "<td colspan = '3' style = 'text-align:right'><b>Total</b></td>";
                    echo "<td><b>$".$total."</b></td>";
                    echo "</tr>";
					$SQL4="UPDATE orders SET orderTotal=".$total." WHERE orderNo=".$orderNum; 
                    $exeSQL4=mysqli_query($conn, $SQL4) or die (mysqli_error($conn)); 
				    echo "<br>Logout : <a href='logout.php'>Logout</a>";
				
			    }
			    else{
	                echo "<br>Empty Basket";
	                echo "<tr><td colspan = '3' style = 'text-align:right'><b>Total</b></td>";
                    echo "<td><b>$0.00</b></td></tr>";
                }
                echo "</table>";
			}
			else{
				echo "There has been an error with placing the order !!";
			}
			
session_unset();
include("footfile.html"); //include head layout
echo "</body>";
?>
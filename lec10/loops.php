<?php
   $myfrds=array("Inu","Sama","Jana","Dunee","Sulo","thaththa","Amma");
   //for each loop
   foreach($myfrds as $value){
	   echo "$value <br>";
   }

//function
   function family($name,$age){
	   echo "$name Peduru Hewa $age years old now <br>";
       	   
   }
   family("Saman Nishantha",49);
   family("Thushari",44);
   family("Sampath",40);
   family("Duneesha Suloshinie",19);
   family("Kevin",07);
   //function 
   function sum($x,$y){
	   $z=$x+$y;
	   echo "($x + $y )  = $z <br>" ;
	   return $z;
	   
   }
   sum(2,5);
   sum(4,9);
   sum(10,14);
//
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>
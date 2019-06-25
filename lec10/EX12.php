<?php

/*
STUDENTS
		NAME  AGE  WEIGHT
		DUNEE 19   56
		SAMA  20   67
		INU   21   40
		WARSH 23   50
		WATH  20   55
*/
// I AM GOING TO CREATE MULTIDIMENSIONAL ARRAY TO STORE ABOVE DETAILS
$STUDENTS=ARRAY(ARRAY('DUNEE',19,56),
				ARRAY('SAMA',20,67),
				ARRAY('INU',21,40),
				ARRAY('WARSH',23,50),
				ARRAY('WATH',20,55));

PRINT_R($STUDENTS);
echo '<br>';
echo $STUDENTS [0][0].' ';echo $STUDENTS [0][1].' ';echo $STUDENTS [0][2].'<br>';
echo $STUDENTS [1][0].' ';echo $STUDENTS [1][1].' ';echo $STUDENTS [1][2].'<br>';
echo $STUDENTS [2][0].' ';echo $STUDENTS [2][1].' ';echo $STUDENTS [2][2].'<br>';
echo $STUDENTS [3][0].' ';echo $STUDENTS [3][1].' ';echo $STUDENTS [3][2].'<br>';
echo $STUDENTS [4][0].' ';echo $STUDENTS [4][1].' ';echo $STUDENTS [4][2].'<br>';






?>
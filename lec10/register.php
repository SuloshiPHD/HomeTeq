<html>
    <body>
        <form method="post" action="db.php">
    <center>
        <table border="5" cell padding="10" cell spacing="5">
            <tr>
            <th>User Name </th>
            <td><input type="text" name="usr"></td>
            </tr>
            <tr>
            <th>Password </th>
            <td><input type="password" name="pwd"></td>
            </tr>
             <tr>
                 <th colspan="2" align="center" ><input type="submit" value="Register" name="btn"></th>
             </center>
            </tr>
        </table>
    </center>
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
        echo "User registered  successfully";
 }

?>

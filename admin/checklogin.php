<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">


<?php
session_start();
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
//session_start();
require('connection.php');
include('config.php');



$myusername=$_POST['email'];
$mypassword=$_POST['adminpwd'];
$encrypted_mypassword=md5($mypassword); 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$mysql = "SELECT * FROM tbadministrators WHERE email='$myusername' and password='$mypassword'" or die(mysql_error());



$result= $mysql;
$rows=$result;
$count=$result; 
    //Check whether the query was successful or not
    



if($count == 0){
     $user = $result;
     $_SESSION['admin_id'] = $user['admin_id'];
    
                if(isset($_POST['remember']))
                {
                    setcookie('$email',$_POST['myusername'], time()+30*24*60*60); // 30 days
                    setcookie('$pass', $_POST['mypassword'],time()+30*24*60*60); // 30 days
                    $_SESSION['curname']=$myusername;
                    $_SESSION['curpass']=$mypassword;

                    $user = myql_fetch_assoc($result);
     				$_SESSION['admin_id'] = $user['admin_id'];

                    header("Location:admin.php");
                    exit;
                }
                else
                {
                    $log1=11;
                    $_SESSION['log1'] = $log1;
                    $_SESSION['curname']=$myusername;
                    $_SESSION['curpass']=$mypassword;

                    $user = $result;
     				$_SESSION['admin_id'] = $user['admin_id'];

                    header("Location:admin.php");
                    exit;
                }
            

}
else {
    echo "<br> <br> <br> ";
    echo "<center> <h3>Wrong Username or Password<br><br>Return to <a href=\"index.php\">login</a> </h3></center>";
}

ob_end_flush();

?> 




</body>
</html>

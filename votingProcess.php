
<?php
	
	//Include database connection details
	require('connection.php');
	session_start();
	$aid=$_SESSION['member_id'];
	$ID=$_GET['id'];
	//$aid = $_GET['aid'];
  
  if(empty($_SESSION['$aid'])){
     header("location:access-denied.php");
   }

   	
	
	$querry="SELECT * FROM logId WHERE member_id='$aid'" or die(mysqli_error());
			
			$result=mysql_query($querry);
			
			// If username and password is a match, the count will be 1

			if(mysql_num_rows($result) == 1){
				// If everything checks out, you will now be forwarded to voter.php
				$error = "<script>alert('You can't vote more than once');</script>";
				$user = mysql_fetch_assoc($result);
				$_SESSION['member_id'] = $user['member_id'];
				header("location:voteDenied.php");
			}
			//If the username or password is wrong, you will receive this message below.
			else {
				//echo "Wrong Username or Password<br><br>Return to <a href=\"login.php\">Login</a>";


	$data = mysql_query("SELECT * FROM tbmembers WHERE member_id='$aid'")
       or die(" There are no records at the moment ... \n");

     while ($row= mysql_fetch_array ($data) ){
     	$name = $row ['first_name'];
     	$regNo = $row ['regNo'];
     	$fac = $row ['faculty'];
     	
     }
			
 

    $sql = mysql_query( "INSERT INTO logId(member_id,name,regNo,faculty) VALUES ('$aid','$name','$regNo','$fac')" )
              or die( mysql_error() );

      

    
	
	
    $res = mysql_query("SELECT * FROM tbCandidates WHERE candidate_id='$ID'")
       or die(" There are no records at the moment ... \n");

     while ($row= mysql_fetch_array ($res) ){
     	$vote = $row ['candidate_cvotes'];
     	$newVote = $vote + 1;
     }
	
			
//Create INSERT query
	$qry = "UPDATE tbcandidates SET candidate_cvotes = '$newVote' WHERE candidate_id = '$ID'";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: vote.php");
		exit();
	}else {
		die("User Already Exists In The System");
	}
	
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Error</title>
</head>
<body>
	<p><?php echo $error; ?> </p>
</body>
</html>
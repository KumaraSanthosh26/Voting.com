<?php


session_start();
require('connection.php');
/*if(empty($_SESSION['admin_id'])){
 	header("location:access-denied.php");
}*/
$result=mysql_query("select * from tbcandidates")or die(mysql_error());
//$result=mysql_fetch_array($query);
?>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<script language="JavaScript" src="js/user.js">
</script>
</head>


<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    
    <div class="fl_left">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="https://uk.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="https://www.rss.com/"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +246754748990</li>
        <li><i class="fa fa-envelope-o"></i> kayosoft.inc@gmail.com </li>
      </ul>
    </div>
    
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div id="logo" class="fl_left">
      <h1><a href="index.php">ONLINE VOTING</a></h1>
    </div>
    
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="positions.php">Home</a></li>
        <li><a class="drop" href="#">Admin Panel Pages</a>
          <ul>
            <li><a href="manage-admins.php">Manage Admin</a></li>
            <li><a href="positions.php">Manage Positions</a></li>
            <li><a href="candidates.php">Manage Candidates</a></li>
            <li><a href="refresh.php">Results</a></li>
          </ul>
        </li>
        
        <li><a href="http://localhost/online_voting/index.php">Voter Panel</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
   
  </header>
</div>

<div >
	

	<table border="0" width="420" align="center">
		<CAPTION><h3>RESULTS</h3></CAPTION>
		<tr>
		<th>Candidate's ID</th>
		<th>Candidate Name</th>
		<th>No. of votes</th>
		</tr>

		<?php
			//loop through all table rows
			while ($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['candidate_id']."</td>";
			echo "<td>" . $row['candidate_name']."</td>";
			echo "<td>" . $row['candidate_cvotes']."</td>";
			echo '<td><a href="positions.php?id=' . $row['candidate_id'] . '">Delete Result</a></td>';
			echo "</tr>";
			}
			mysql_free_result($result);
			mysql_close($link);
		?>

	</table>
	<hr>
</div>

<div >
	

	<table border="0" width="420" align="center">
		<CAPTION><h3>RESULTS</h3></CAPTION>
		<tr>
		<th>Candidate's ID</th>
		<th>Candidate Name</th>
		<th>No. of votes</th>
		</tr>

		<?php
			//loop through all table rows
			while ($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['candidate_id']."</td>";
			echo "<td>" . $row['candidate_name']."</td>";
			echo "<td>" . $row['candidate_cvotes']."</td>";
			echo '<td><a href="positions.php?id=' . $row['candidate_id'] . '">Delete Result</a></td>';
			echo "</tr>";
			}
			mysql_free_result($result);
			mysql_close($link);
		?>

	</table>
	<hr>
</div>

<div >
	

	<table border="0" width="420" align="center">
		<CAPTION><h3>RESULTS</h3></CAPTION>
		<tr>
		<th>Candidate's ID</th>
		<th>Candidate Name</th>
		<th>No. of votes</th>
		</tr>

		<?php
			//loop through all table rows
			while ($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['candidate_id']."</td>";
			echo "<td>" . $row['candidate_name']."</td>";
			echo "<td>" . $row['candidate_cvotes']."</td>";
			echo '<td><a href="positions.php?id=' . $row['candidate_id'] . '">Delete Result</a></td>';
			echo "</tr>";
			}
			mysql_free_result($result);
			mysql_close($link);
		?>

	</table>
	<hr>
</div>

<div >
	

	<table border="0" width="420" align="center">
		<CAPTION><h3>RESULTS</h3></CAPTION>
		<tr>
		<th>Candidate's ID</th>
		<th>Candidate Name</th>
		<th>No. of votes</th>
		</tr>

		<?php
			//loop through all table rows
			while ($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['candidate_id']."</td>";
			echo "<td>" . $row['candidate_name']."</td>";
			echo "<td>" . $row['candidate_cvotes']."</td>";
			echo '<td><a href="positions.php?id=' . $row['candidate_id'] . '">Delete Result</a></td>';
			echo "</tr>";
			}
			mysql_free_result($result);
			mysql_close($link);
		?>

	</table>
	<hr>
</div>




<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    
    <div class="one_third first">
      <h6 class="title">Address</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
         
          <p>
          Name        : Kalumba Jalaludin <br>
          University  : LIRA <br>
          Batch       : 2k14 <br>
          Dept        : LCS <br>
          </p>
          </address>
        </li>
      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Phone</h6>
      <ul class="nospace linklist contact">
       
        <li><i class="fa fa-phone"></i> +256754748990<br>
          +256754748990</li>


      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Email</h6>
      <ul class="nospace linklist contact">
        
        <li><i class="fa fa-envelope-o"></i> kayosoft.inc@gmail.com </li>

      </ul>
    </div>


  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
   
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Kalumba Jalaludin</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    
  </div>
</div>
s
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script language="javascript" src="js/jquery.timers-1.0.0.js"></script>
<script type="text/javascript">

$(document).ready(function(){
   var j = jQuery.noConflict();
	j(document).ready(function()
	{
		j(".refresh").everyTime(1000,function(i){
			j.ajax({
			  url: "refresh.php",
			  cache: false,
			  success: function(html){
				j(".refresh").html(html);
			  }
			})
		})
		
	});
   j('.refresh').css({color:"green"});
});
</script>

</body>
</html>
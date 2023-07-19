
<?php
    session_start();
    require('../connection.php');
    $log1 = $_SESSION['log1'];

?>
 <?php //if(empty($_SESSION['admin_id'])){
//   header("location:access-denied.php");
 ?>
<?php
      if(isset($_COOKIE['$email']) && $_COOKIE['$pass']){
            $curnam = $_SESSION['curname'];
            $curpas = $_SESSION['curpass'];
        }
        else if($log1 == 11)
        {
            $curnam = $_SESSION['curname'];
            $curpas = $_SESSION['curpass'];
        }
        else 
        {
           echo '<img src="e1.jpg" width="300%" height="300%"  />';  /* here goes the page when destroy the cookies */
           exit;
        }
?>



<!DOCTYPE html>
<html>
<head>
<title>online voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script language="JavaScript" src="js/user.js">
</script>

</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html">ONLINE VOTING</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="admin.php">Home</a></li>
        <li><a class="drop" href="#">Admin Panel Pages</a>
          <ul>
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

<body style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear"> 
   
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Online <a href="#">Voting</a></h2>
    <ul class="nospace group">

       <li class="one_third">

          <blockquote>In this page, Admin can set candidates for voting and view results.</blockquote>
        
      </li> 

    </ul>
   
  </section>


  <div id="copyright" > 
    <p class="center">Copyright &copy; 2023 - All Rights Reserved </p>
    </div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</body>
</html>

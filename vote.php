<?php
  require_once('connection.php');

  session_start();

  
  if(empty($_SESSION['member_id'])){
    header("location:access-denied.php");
  }
?>

<?php
    
    $positions= "SELECT * FROM tbPositions"
    or die("There are no records to display ... \n" . mysqli_error()); 
  ?>
  <?php
    
     if (isset($_POST['Submit']))
     {
       
       $position = addslashes( $_POST['position'] ); 
       
       
       $result = mysql_query("SELECT * FROM tbCandidates WHERE candidate_position='$position'")
       or die(" There are no records at the moment ... \n"); 
     
     }
     else{
     // do something
    }
?>
<!DOCTYPE html>

<html>
<head>
<title>online voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link href="css/user_styles.css" rel="stylesheet" type="text/css" /> -->
<script language="JavaScript" src="js/user.js">
</script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
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
        <li><i class="fa fa-phone"></i> +256754748990</li>
        <li><i class="fa fa-envelope-o"></i> kayosoft.inc@gmail.com </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">ONLINE VOTING</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="voter.php">Home</a></li>
        <li><a class="drop" href="#">Voter Pages</a>
          <ul>
            <li><a href="vote.php">Vote</a></li>
            <li><a href="manage-profile.php">Manage my profile</a></li>
          </ul>
        </li>
        
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Online <a href="#">Voting</a></h2>
    <ul class="nospace group">
      <li class="one_half first">
        <blockquote> 

    <div id="container">
    <p> Click a link above voter pages to do some stuff.</p>
    <form action="" method="post">
    <div class="mb-3" >
                
                
        <div id="container" style=" background:none; top:20px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#66FFCC" size="+2" style="font-weight:bold; font-style:oblique">Candidates</font>
<br /><br />

 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr><td colspan="2" bgcolor="indigo" style="text-align:center;"><a href="###" title="Details"><span><font color="#FFFFCC"><b><img src="images/add.png"> Details</b></font></span></a></td><td colspan="10" bgcolor="indigo"></td></tr>
                                <tr>
                                  
                                    <th style="text-align:center;">ID</th>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Position</th>
                                    <th style="text-align:center;">Votes</th>
                                    <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                <?php
                
                $result= mysql_query("select * from tbcandidates order by candidate_id ASC" ) or die (mysql_error());
                while ($row= mysql_fetch_array ($result) ){
                $id=$row['candidate_id'];
                ?>
                <tr style="color: black;">
                <td style="text-align:center; word-break:break-all; width:80px;"><?php echo $row ['candidate_id']; ?></td>
                <td style="text-align:center; word-break:break-all; width:200px; text-transform:uppercase; font-size:0.6em;"> <?php echo $row ['candidate_name']; ?></td>
                <td style="text-align:center; word-break:break-all; width:300px; text-transform:uppercase;"> <?php echo $row ['candidate_position']; ?></td>
                <td style="text-align:center; word-break:break-all; width:100px; text-transform:uppercase;"> <?php echo $row ['candidate_cvotes']; ?></td>
                                
                                   
                                <td style="text-align:center; width:100px;">
                                     <?php echo "<a href=votingProcess.php?id=".$row['candidate_id']."> <img src='images/logo.jpg' border=0 title='vote' style='width:30px; height:30px;'></a>"; ?>
                                     
                                     
                </td>
                  
          
                </div>
                </div>
                </tr>

                <!-- Modal Bigger Image -->
                <div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">

                <h3 id="myModalLabel"><b></b></h3>
                </div>
                
                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                        
                          </div>
                
                
  </div>
  </form>
    </div> </blockquote>
      
      </li>
      
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Address</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
         
          <p>
          Name        : BB. Kalumba Jalaludin <br>
          University  : Lira <br>
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
          +25657900000</li>


      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Email</h6>
      <ul class="nospace linklist contact">
        
        <li><i class="fa fa-envelope-o"></i> kayosoft.inc@gmail.com </li>

      </ul>
    </div>


    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">BB. Kalumba Jalaludin</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">Kayosoft Inc</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>


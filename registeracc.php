<?php
  session_start();
    require('connection.php');
    include('connection.php');
    //Process
    if (isset($_POST['submit']))
    {

      $FirstName = $_POST['fName']; 
      $LastName = $_POST['lName'];
      $UserName = $_POST['uName'];
      $Gender = $_POST['gender'];
      $Email = $_POST['email'];
      $Contact = $_POST['contact'];
      $RegNo = $_POST['regNo'];
      $Course = $_POST['course'];
      $Faculty = $_POST['faculty'];
      $Password = $_POST['pwd'];
      $Code = $_POST['code'];

      //$newpass = md5($Password); //This will make your password encrypted into md5, a high security hash

      $sql = mysql_query( "INSERT INTO tbmembers(first_name, last_name, u_name, gender, email, contact, regNo, course, faculty, password, code) VALUES ('$FirstName','$LastName', '$UserName','$Gender','$Email','$Contact','$RegNo','$Course','$Faculty', '$Password','$Code')" )
              or die( mysql_error() );
              

    die( "You have registered for an account.<br><br>Go to <a href=\"login.php\">Login</a>" );
    }else{
      echo " ";
    }

    
    
  ?>
<!DOCTYPE html>

<html>
<head>
<title>online voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="">
    <meta name="author" content="">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<link href="styles/form-validation.css" rel="stylesheet">
<!-- <link href="css/user_styles.css" rel="stylesheet" type="text/css" /> -->
<script language="JavaScript" src="js/user.js">
</script>

</head>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">ONLINE VOTING</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        
        <li><a href="login.php">Login</a></li>
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
      <li class="one_half">
        <blockquote>


<div  >
  
</div> 
		

<div class="col-md-8 order-md-1">
  <?php 
    echo "<center><h3>Register an account by filling in the needed information below:</h3></center>";
  ?>
          
          <form class="needs-validation" name="form1" method="post" action="registeracc.php" onSubmit="return registerValidate(this)" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" name="fName" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" name="lName" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" name="uName" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
                <label for="state">Gender</label>
                <select name="gender" class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid gender.
                </div>
              </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Required)</span></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for voting updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Contact</label>
              <input type="number" name="contact" class="form-control" id="address" placeholder="0772954309" required>
              <div class="invalid-feedback">
                Please enter your contact number.
              </div>
            </div>
            <div class="mb-3">
              <label for="address">Registration No</label>
              <input type="text" name="regNo" class="form-control" id="address" placeholder="15/U/0001/LCS OR 15/U/0001/LCS/PS" required>
              <div class="invalid-feedback">
                Please enter your reg No.
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Course</label>
                <select name="course" class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>LCS</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid Course.
                </div>
              </div>

              <div class="col-md-5 mb-3">
                <label for="country">Faculty</label>
                <select name="faculty" class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>HEALTH SCIENCE</option>
                  <option>MANAGEMENT SCIE</option>
                  <option>EDUCATION</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid faculty.
                </div>
              </div>
              
              
            </div>


            <div class="mb-3">
              <label for="password">Password </label>
              <input type="password" name="pwd" class="form-control" id="password" required>
              <div class="invalid-feedback">
                  Required 
                </div>
            </div>
            <div class="mb-3">
              <label for="co-password">Confirm Password</label>
              <input type="password" name="cpwd" class="form-control" id="co-password" required >
              <div class="invalid-feedback">
                  Required 
                </div>
            </div>

            
            <hr class="mb-4">
           
            
            <div class="row">
              
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Code<img src="codeGen.php" style="height: 1.8em;height: 1.8em;margin-left:30px;" /></label>
                <input type="text" name="code" class="form-control" id="cc-cvv" placeholder="Enter the Code" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Sign Up</button>
          </form>
        </div>


<center>
<br>Already have an account? <a href="login.php"><b>Login Here</b></a>
</center>



        </blockquote>
      
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div><a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->


<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
</body>
</html>


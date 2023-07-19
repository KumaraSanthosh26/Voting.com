
<?php
//$id = $_GET['id'];
include('includes/config.php');
include('includes/db.php');

if($_SESSION['id'])
{ ?><div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
        <?php
								 $aid=$_SESSION['id'];
                                $db = mysqli_connect("localhost", "root", "", "hostel");
                                $sql = "SELECT * FROM userRegistration WHERE id='$aid'";
                                $result = mysqli_query($db,$sql);
                                while($row=mysqli_fetch_array($result)){
                                 ?> 
                                
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="uploadform.php" title="Change photo"><span><?php echo "<img src='".$row['photo']."' id='img' class='ts-avatar hidden-side'>";?><?php echo $row['firstName']?></span> <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
           <?php }?>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>
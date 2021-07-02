<?php
session_start();
error_reporting(0);
include('config.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $userid=$_SESSION['detsuid'];
    $fullname=$_POST['fullname'];
  $mobno=$_POST['contactnumber'];

     $query=mysqli_query($con, "update user set FullName ='$fullname', MobileNumber='$mobno' where ID='$userid'");
    if ($query) {
    $msg="User profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>

<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<head>
    <style>
        .panel-heading{
            color:white;
        }
    </style>
</head>
<body>


<?php include"top_nav.php";?>

<div class="col-lg-12 mx-auto">
		<div class="row justify-content-center">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		
				
		<div class="col-md-6 " align="center"></div>
		<div class="row ">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				
		<div class="panel panel-default">
					<div class="panel-heading" style="color:white;">Profile</div> <?php if($msg){
    echo $msg;
  }  ?> </p>
					<div class="panel-body">
						
						<div class="col-md-12"> <?php

$userid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select * from user where ID='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							
							<form role="form" method="post" action="">
								<div class="form-group">
									<label>Full Name</label>
									<input class="form-control" type="text" value="<?php  echo $row['FullName'];?>" name="fullname" required="true">
								</div>
								<div class="form-group">
									<label>Email</label>
<input type="email" class="form-control" name="email" value="<?php  echo $row['Email'];?>" required="true" readonly="true">
								</div>
								
								<div class="form-group">
									<label>Mobile Number</label>
									<input class="form-control" type="text" value="<?php  echo $row['MobileNumber'];?>" required="true" name="contactnumber" maxlength="10">
								</div>
								<div class="form-group">
									<label>Registration Date</label>
									<input class="form-control" name="regdate" type="text" value="<?php  echo $row['RegDate'];?>" readonly="true">
								</div>
								
								<div class="form-group has-success">
                                    <div class="col-md-12 text-center">
									<button type="submit" class="btn btn-primary" align="center" name="submit">Update</button>
									<a href="logout.php" class="btn btn-primary"><em class="fa fa-power-off">&nbsp;</em> Logout</a></span>
								</div>
								</div>
								<?php } ?>
								</div>
								
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
</div>	
		</div><!-- /.row -->
	</div><!--/.main-->
	

	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

   


</body>

</html>
<?php }  ?>
<?php
session_start();
error_reporting(0);
include('config.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $contactno=$_SESSION['contactno'];
    $email=$_SESSION['email'];
    $password=md5($_POST['newpassword']);

        $query=mysqli_query($con,"update user set Password='$password'  where  Email='$email' && MobileNumber='$contactno' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
session_destroy();
   }
  
  }
  ?>
<!DOCTYPE html>
<html>
<html lang="en">
<?php include"head.php";?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 

</script>
</head>
<body>
<?php include"top_nav.php";?>
<div class="col-lg-12 ">
		<div class="row justify-content-center">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user"></em>
				</a></li>
				<li class="active" >User</li>
			</ol>
		</div>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="color: white;">Reset Password</div>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center"> 
					<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
					<form role="form" action="" method="post" name="changepassword" onsubmit="return checkpass()">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="newpassword" type="password" value="" required="true">
							</div>
							
							<div class="form-group">
								<input class="form-control" placeholder="Confirm Password" name="confirmpassword" type="password" value="" required="true">
							</div>
							<div class="checkbox">
								<button type="submit" value="" name="submit" class="btn btn-primary">Reset</button><span style="padding-left:250px"><a href="login.php" class="btn btn-primary">Login</a></span>

							</div>
						
							</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

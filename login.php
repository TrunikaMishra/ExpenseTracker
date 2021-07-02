<?php
session_start();
error_reporting(0);
include('config.php');

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from user where  Email='$email' && Password='$password' && status='active' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['detsuid']=$ret['ID'];
     header('location:dashboard1.php');
    }
    else{
    $msg="Invalid Details/ Verification Required.";
    }
  }
  ?>


<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Expense Tracker - Signup</title>
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
				<div class="panel-heading" style="color: white;">Log in</div>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center"> 
					<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  
					<form role="form" action=" " method="post" id="" name="login">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required="true">
							</div>
							<a href="forgot_password.php">Forgot Password?</a>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
							</div>
							
							<center>
							<div class="checkbox">
							<button type="submit" value="login" name="login" class="btn btn-primary">login</button><span style="padding-left:250px">
								<a href="register.php" class="btn btn-primary">Register</a></span>
							</div>
							</center>
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

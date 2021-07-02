<?php 
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['name'];
    $mobno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

	$token= bin2hex(random_bytes(15));

    $ret=mysqli_query($con, "select Email from user where Email='$email' ");
    $result=mysqli_fetch_array($ret);
   
   
    if($result>0){
		 echo "This email  associated with another account";
			}
			else{
	$query=mysqli_query($con, "insert into user(FullName, MobileNumber,Email,  Password, token, status) value('$fname', '$mobno','$email', '$password', '$token', 'inactive' )");
	if ($query) {
    
	 $subject ="Email Activation";
	 $body=
	"Hi, $fname. Click here to activate your account http://localhost/MiniProject%20ETS/verify.php?token=$token";
	 $sender_mail = "From:trackerexpense16@gmail.com";

	 if(mail($email, $subject, $body ,$sender_mail)){
		echo "<script>alert('Check your mail to activate your account');</script>";
		echo "<script>window.location.href='register.php'</script>";
		
	 }
	 else{
		 echo "Email sending failed....";
	 }
	

  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
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
				<li class="active">User</li>
			</ol>
		</div>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="color: white;">Sign Up</div>
				<div class="panel-body">
					<form role="form" action=" " method="post" id="" name="signup" onsubmit="return checkpass();">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
           
    
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Full Name" name="name" type="text" required="true">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" required="true">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" maxlength="10" pattern="[0-9]{10}" required="true">
							</div>
							
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="repeatpassword" name="repeatpassword" placeholder="Repeat Password" required="true">
							</div>

							<center>
							<div class="checkbox">
							<button type="submit" value="submit" name="submit" class="btn btn-primary">Register</button><span style="padding-left:250px">	
							<a href="login.php" class="btn btn-primary">Login</a></span>
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
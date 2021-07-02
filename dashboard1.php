<?php
session_start();
error_reporting(0);
include('config.php');
if (strlen($_SESSION['detsuid']==0)) {
    header('location:logout.php');
    } else{
  
    
  
    ?>

  
<!DOCTYPE html>
<html lang="en">

<?php include"head.php";?>


<body>
<?php include"top_nav.php";?>


<div class="col-lg-12 mx-auto">
		<div class="row justify-content-center">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
        </div>
</div>


<br/><br/><center><div>
          <img class="img-fluid" src="images/user.png" style="border: none; border-radius: 50%;">
          <center>
          <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from user where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                <div class="profile-usertitle-name"><h2><b><?php echo $name; ?></h2></b></div>
                
</div>

</center>


<br/>
<div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i> Expenses</h4>
                    </div>
                    <div class="panel-body">
                        <p>Add your expenses and manage them.<br/>"A wealthy mindset minimizes expenses in self-entertainment and maximizes investments in self-education"</p>
                        <center>
                        <a href="addExp.php" class="btn btn-primary">Add</a>
                        <a href="manageExp.php" class="btn btn-primary">Manage</a>
                        <a href="view.php" class="btn btn-primary">View</a>
                        </center>
                    </div>
                </div>
            </div>

			 <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i> Expense Report</h4>
                    </div>
                    <div class="panel-body">
                        <p>Keep a Track on your Expenses on daily, monthly and yearly basis.<br/>"The expenses required to prevent a war are much lighter than those that will, if not prevented, be absolutely necessary to maintain"</p>
                        <center>
                        <a href="ExpDailyReport.php" class="btn btn-primary">Daily</a>
                        <a href="ExpMonthlyReport.php" class="btn btn-primary">Monthly</a>
                        <a href="ExpYearlyReport.php" class="btn btn-primary">Yearly</a>
                        </center>
                    </div>
                </div>
            </div>
            </br>
            <center>
            <a href="profile.php" class="btn btn-primary">View Profile<a>
    </center>
            <div>
    
</div>

			 
			  
			 
        </div>
</body>

</html>
<?php } ?>
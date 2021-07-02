<?php  
session_start();
error_reporting(0);
include('config.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

//code deletion
if(isset($_GET['delid']))
{
$rowid=intval($_GET['delid']);
$query=mysqli_query($con,"delete from expense where ID='$rowid'");
if($query){
echo "<script>alert('Record successfully deleted');</script>";
echo "<script>window.location.href='manageExp.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}

}


?>
<!DOCTYPE html>
<html>
<head>
<?php include"head.php";?>
	<link href="css/datepicker3.css" rel="stylesheet">

</head>
<body>
<?php include"top_nav.php";?>
	
<div class="col-lg-12 ">
		<div class="row justify-content-center">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user"></em>
				</a></li>
				<li class="active">Manage Expense</li>
			</ol>
		</div>
	<hr/

		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading"  style="color: white;">Expense</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
							
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Expense Item</th>
                  <th>Expense Cost</th>
                  <th>Expense Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
              $userid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select * from expense where UserId='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['ExpenseItem'];?></td>
                  <td><?php  echo $row['ExpenseCost'];?></td>
                  <td><?php  echo $row['ExpenseDate'];?></td>
                  <td><a href="manageExp.php?delid=<?php echo $row['ID'];?>">Remove</a>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
               
              </tbody>
            </table>
          </div>
						</div>
					</div>
				</div><!-- /.panel-->
				<center>							
								<div>
									<a href="dashboard1.php" class="btn btn-primary">Back</a>
								</div>
								</center>
			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.main-->

	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
<?php }  ?>
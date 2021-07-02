<?php
session_start();
error_reporting(0);
include('config.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

  

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
				<li class="active">Daily Expense</li>
			</ol>
		</div>
	<hr /
				
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading" style="color: white;">Datewise Expense Report</div>
					<div class="panel-body">

						<div class="col-md-12">
					
<?php
$fdate=$_POST['fromdate'];
 $tdate=$_POST['todate'];
$rtype=$_POST['requesttype'];
?>
<h5 align="center" style="color:blue">Datewise Expense Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<hr />
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <tr>
              <th>S.NO</th>
              <th>Date</th>
              <th>Expense Amount</th>
                </tr>
                                        </tr>
                                        </thead>
 <?php
$userid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"SELECT ExpenseDate,SUM(ExpenseCost) as totaldaily FROM `expense`  where (ExpenseDate BETWEEN '$fdate' and '$tdate') && (UserId='$userid') group by ExpenseDate");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['ExpenseDate'];?></td>
                  <td><?php  echo $ttlsl=$row['totaldaily'];?></td>
           
           
                </tr>
                <?php
                $totalsexp+=$ttlsl; 
$cnt=$cnt+1;
}?>

 <tr>
  <th colspan="2" style="text-align:center">Grand Total</th>     
  <td><?php echo $totalsexp;?></td>
 </tr>     

                                    </table>


							<center><a href="dashboard1.php" class="btn btn-primary">Back</a></center>


						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		
		</div><!-- /.row -->
	</div><!--/.main-->
	

	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
<?php } ?>
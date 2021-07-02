<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<?php include"top_nav.php";?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/img1.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/img2.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/img3.jpeg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

       
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-primary">
                   <b>EXPENSE TRACKER SYSTEM</b>
                </h1>
            </div>
            		 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Login</h4>
                    </div>
                    <div class="panel-body">
                        <p>This section allows the user to register themselves for managing out their expenses on the daily, monthly and annual basis.</p>
                        <a href="login.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i> Dashboard</h4>
                    </div>
                    <div class="panel-body">
                        <p>User will get the facilities to updates their daily expenses.Allows user to have their tracker on daily, monthly and yearly basis for the better understanding.</p>
                        <a href="login.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 
			  <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i>About Us</h4>
                    </div>
                    <div class="panel-body">
                        <p>This will navigate you to the developer information. Also the basic  objective for the development of this Expense Tracker is provided here.</p>
                        <a href="about.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Why we need Expense Tracker???</h2>
            </div>
            <div class="col-md-6">
              

			<ul>
			
				<li>Expense Tracker aims to help everyone who is planning to know their expenses and save from it</li>

				<li>This is a website which users can execute in their laptop/computers and update their daily expenses so that they are well known to their expenses. </li>

				<li>User can manage their expense on a daily and monthly basis and also user can define their own categories for expense type like food, clothing, rent and bills where they have to enter the money that has been spent and also can add some information in additional information to specify the expense. </li>

				<li>This website is focused on new job holders, interns and teenagers, everyone who wants to track their expense can use this system. System provides an integrated set of features to help you to manage your expenses and cash flow.</li>

			</ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/expense.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
		<img src='' width="100%" height="100%" id='ModalImg'>
    </div>
  </div>
</div>

<?php include"footer.php";?>

</body>

</html>

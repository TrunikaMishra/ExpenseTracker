<hr>
    <div>
    <footer class="text-center mt-5 py-2">
        <p>Expense Tracker System</br> Developed By Apurva Wankhade, Trunika Mishra, Kanchan Dharmale</p>
    </footer>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>

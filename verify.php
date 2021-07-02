<?php
session_start();
include 'config.php';
if(isset($_GET['token'])){
    $token = $_GET['token'];

    $updatequery = "update user set status= 'active' where token= '$token'";

    $query = mysqli_query($con,$updatequery);

    if($query){
        if(isset($_SESSION['msg'])){
        echo "<script>alert('Account Upadated successfully');</script>";
		echo "<script>window.location.href='login.php'</script>";
		
        }
        else{  
        echo "<script>alert('Account Upadated successfully');</script>";
		echo "<script>window.location.href='login.php'</script>";
		
        }
    }
    else{
        echo "<script>alert('Account not Upadated ');</script>";
		echo "<script>window.location.href='register.php'</script>";
    }
}
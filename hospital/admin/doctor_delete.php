<?php 
session_start();
$id = $_GET['id'];
  $servername="localhost";
$username="root";
$password="";
$dbname="hospital";
$conn= new mysqli($servername,$username,$password,$dbname);
$q = mysqli_query($conn, "DELETE  From  doctor  Where id = '$id'");
if($q){
	 
	  echo "<script>window.location='view_doctor.php'</script>";
	}
	else{
	
	   echo "<script>window.location='view_doctor.php'</script>";
		
		}
?>
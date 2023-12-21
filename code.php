<?php
session_start();
$con=mysqli_connect("localhost","root","","phptest");
if(isset($_POST['insert']))
{

 $id=$_POST["id"];
 $name=$_POST["name"];
 $email=$_POST["email"];
 $gender=$_POST["gender"];

 $query="INSERT INTO  students (Id,Name,Email,gender) VALUES($id,'$name','$email','$gender')";
 
 $query_run=mysqli_query($con,$query);

 if($query_run)
 {
   $_SESSION['status']="inserted successfully";
   header("Location: insertstudent.php");
 }
 else
 {
 $_SESSION['status']="data not inserted";
 header("Location:insertstudent.php");
 }
}
?>
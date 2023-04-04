<?php 
$con=new mysqli("localhost","root","root","newdb");
$name=$_POST['name'];
$gender=$_POST['gender'];
$sql="INSERT INTO namegender(name,gender) VALUES('$name','$gender')";
$result=mysqli_query($con,$sql);
if($result=="true"){
 echo "<center><h2>Submitted successfully..</h2></center>";
}
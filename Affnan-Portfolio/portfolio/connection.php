<?php 
// mysql connection
$con = mysqli_connect ('localhost','root');
if($con){
    echo "connection successful";
}
else{
    echo "No connection";
}
mysqli_select_db($con,'portfolio');
$Name = $_POST['firstname'];
$Mail = $_POST['email'];
$Message = $_POST['message'];
$query = "insert into contact(firstname,email,message)
values('$Name','$Mail','$Message')";
mysqli_query($con,$query);
header('location:service.php');

?>
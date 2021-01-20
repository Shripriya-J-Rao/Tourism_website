<?php
$dbhost="localhost";  
$dbuser="root";
$dbpass="";
$db="tourist";
$do=0;
$conn=new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
$x=$_GET["username"];
$y=$_GET["password"];
$res1=mysqli_query($conn,"select * from signup");
function add($do){
if($do){
echo '<script>alert("Signin Successfully")</script>';
header("Refresh:0.05;url='index.html'");
exit;
}
else{
echo '<script>alert("Username not Exist")</script>';
header("Refresh:0.05;url='signin.html'");
exit;
}}
while($row = mysqli_fetch_array($res1))
{
if(($x==$row[0])&&($y==$row[3])){
$do=1;
}}
add($do);
$conn -> close(); 
?>

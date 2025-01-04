<?php
session_start();
include("connect.php");
//$sql="select * from user where password='$password' and role='$role'";
//if(isset($mobile)||isset($password)||isset($role))
//{
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$role=$_POST['role'];
//$check=mysqli_query($connect,$sql);
$check=mysqli_query($connect,"select *from user where mobile='$mobile' and password='$password' and role='$role'");
if(mysqli_num_rows($check)>0)
{
$userdata=mysqli_fetch_array($check);
$groups=mysqli_query($connect,"select *from user where role=2");
$groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);

$_SESSION['userdata']=$userdata;
$_SESSION['groupsdata']=$groupsdata;
$_SESSION['status'] = $userdata;

echo '
    <script>
    window.location="../dashboard.php";
    </script>
    '; //😍❤❤ windows+.
}
else
{
    echo '
    <script>
    alert("✨invalid user 😯✨");
    window.location="../index.html";
    </script>
    '; 
//}
}
?>
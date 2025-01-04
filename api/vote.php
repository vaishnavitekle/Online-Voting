<?php
session_start();
include('connect.php');
//if(isset($votes)||isset($total_votes)||isset($gid)||isset($uid))
//{
if($_SESSION['status']==1)
{
    echo'
    <script>
    alert("You can not vote again");
    window.location="../dashboard.php";
    </script>
    ';
}
else{
$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['id'];
$update_votes=mysqli_query($connect,"update user set votes='$total_votes' where id='$gid' ");
$update_status=mysqli_query($connect,"update user set status=1 where id='$uid'");
if($update_votes and $update_status)
{
$groups=mysqli_query($connect,"select id,name,votes,photo from user where role=2");
$groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
$_SESSION['status']=1; //$_SESSION['userdata']['status']=1;
$_SESSION['groupsdata']=$groupsdata;
session_destroy();
echo'
<script>
alert("voting success!");
window.location="../index.html";
</script>
';
}
else
{
    echo'
    <script>
    alert("some error occured!");
    window.location="../dashboard.php";
    </script>
    ';
//}
}
}
?>
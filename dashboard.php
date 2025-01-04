<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:index.html");
}
$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];
$userdata = $_SESSION['userdata'];
$_SESSION['status']=$userdata['status'];
if($_SESSION['status']==1)
{
    $status='<b style="color:red">voted</b>';
}
else
{
    $status='<b style="color:green">not voted</b>';
}
?>

<html>
    <head>
        <title>Online voting system-Dashboard</title>
        <link rel="stylesheet" href="css\stylesheet.css">
    </head>
    <body>
        <style>
            #backbtn{
               padding: 5px;
               border-radius: 5px;
               background-color: rgb(15, 27, 136);
               color: white;
               border-radius: 5px;
               float:left;
                }
                #logoutbtn{
               padding: 5px;
               border-radius: 5px;
               background-color: rgb(15, 27, 136);
               color: white;
               border-radius: 5px;
               float: right;
                }
                #profile{
                background-color: white;
                width:30%;
                padding: 20px;
                float: left;
                }
                #group{
                background-color: white;
                width:63%;
                padding: 20px;
                float: right;
                margin: 10px;
                }
                #votebtn{
               padding: 5px;
               border-radius: 5px;
               background-color: green;
               color: white;
               border-radius: 5px;
               float:left;
               margin: 10px;
                }
               
               </style>
               <div id="mains">
                   <center>
        <div id="headers">
        <a href="index.html"> <button id="backbtn">Back</button></a>
        <a href="logout.php"><button id="logoutbtn">Logout</button></a>
            <h1>Online voting system</h1>
        </div>
            </center>
        <hr>
        <div id="profile">
            <?php if(isset($_SESSION['userdata'])){
               $userdata = $_SESSION['userdata']; 
               ?>
            <center><img src="uploads/<?php echo $userdata['photo'] ?>"height="200" width="200"></center><br><br>
            <b>Name:</b><?php echo $userdata['name'] ?><br><br>
            <b>Mobile:</b><?php echo $userdata['mobile'] ?><br><br>
            <b>Address:</b><?php echo $userdata['address'] ?><br><br>
            <b>Status:</b><?php echo $status ?><br><br>
            <?php } ?>
        </div>
        <div id="group">
       <?php
     if(isset($_SESSION['groupsdata'])){
        $groupsdata = $_SESSION['groupsdata'];
       for($i=0;$i<count($groupsdata);$i++) 
       {
        ?>
        <img style="float:right" src="uploads/<?php echo $groupsdata[$i]['photo']?>" height="150" width="200"><br><br>
        <b>Group Name : </b><?php echo $groupsdata[$i]['name']?><br><br>
        <b>Votes :</b> <?php echo $groupsdata[$i]['votes']?><br><br>
        <form method="POST" action="api/vote.php">
        <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
        <input type="hidden" name = "gid" value="<?php echo $groupsdata[$i]['id']?>">
        <input type="submit" name="votebtn" value="vote" id="votebtn"><br><br>
        </form>
        <hr>
        <?php
       }
     }
     ?>
    </div>
</div>
</body>
</html>
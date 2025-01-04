<html>
 <head>
     <title>online voting system-registration </title>
     <link rel="stylesheet" href="css\stylesheet.css">
 </head>   
 <body>
     <center>
     <style>
         #address{
             width: 30%;
         }
         #imagepart{
             border: 2px solid black;
             border-radius: 5px;
             padding: 10px;
             width: 30%;
         }
         #role{
            border: 2px solid black;
             border-radius: 5px;
             padding: 10px;
             width: 30%;
         }
         #role select{
             border-radius: 5px;
             padding: 10px;
         }
     </style>
     <h1>Online voting system</h1>
     <hr>
     <h3>Registration</h3>
     <?php
       //session_start();
       //$_SESSION['number']=$_POST['number'];
       ?>
     <form action="api\register.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter name">
        <?php
       session_start();
       $_SESSION['number']=$_POST['number'];
       ?>
        <input type="text" name="mobile" placeholder="Enter mobile" required readonly value="<?php $_POST['number'] ?>"><br><br>
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="password" name="cpassword" placeholder="Conform password"><br><br>
        <input id="address" type="text" name="address" placeholder="Enter address"><br><br>
        <div id="imagepart">
        Upload image:<input type="file" name="image">
        </div>
        <br><br>
        <div id="role">
        Select role:<select name="role" required>
            <option value="1">Voter</option>
            <option value="2">Group</option>
        </select>
        </div>
        <br><br>
       <button 
       style=" padding: 5px;
               border-radius: 5px;
               background-color: rgb(15, 27, 136);
               color: white;
               border-radius: 5px;">Register</button><br><br>
       Already user?<a href="index.html">Login here</a>
     </form>
     </center>
 </body>
</html>
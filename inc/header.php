

    <?php
    $filepath=realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Session.php');
    include_once ($filepath.'/../lib/Database.php');




    spl_autoload_register(function($class){
    include_once "classes/".$class.".php";
    });
               
          $db =new Database();
        
          $cmr =new User();
  ?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>User Authentication</title>
<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/style.css">

<script src="assets/jquery.min.js"></script>

    
  
    
</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" background:#dee2e6 !important;">
         
         

          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto"  >
              <li class="nav-item active">
                <a class="nav-link" href="index.php" style="margin-left:30px; "> <strong>Home</strong> <span class="sr-only">(current)</span></a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="userlist.php"><strong style="color:#000">User List</strong></a>
              </li>
            </ul>
             <a class="nav-link" href="register.php" style="margin-right:30px;"><strong>Register</strong> <span class="sr-only">(current)</span></a>
              
              
          
          </div>
        </nav>
<style>
 a:hover{
  background: #fff;
  padding: 5px;
  

 }

</style>
<?php
   include('login.php'); // Includes Login Script
   if(isset($_SESSION['login_user_email']))header("Location: profile.php");
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="assets/js/jquery.js"></script>
      <link href="assets/css/main_v1.css" rel="stylesheet" type="text/css">
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/style1.css">
   </head>
  <body class="bgimg">
      <div class="top-bar">
         <form method='post' class=""><span><b>Login : </b></span>
            <input type="text" name= "email" placeholder="Email" required/>
            <input type="password" name= "pwd" placeholder="Password" required/>
            <input class="form-submit-button" name="submit" type="submit" onclick="myFunction()" value="Login" >
         </form>
      </div>
      <?php include('footer.php'); ?>
   </body>
</html>

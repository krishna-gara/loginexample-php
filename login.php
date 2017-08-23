<?php
   ob_start();
   session_start();
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
<html lang = "en">   
   <head>
      <title>Login Page</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
	  <link href = "css/styles.css" rel = "stylesheet">
   </head>	
   <body>      
      
      <div class = "container form-signin">         
	  <h3>Enter Username and Password</h3> 
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'test' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'test';
                  
                  echo "Entered Correct details, Below is your username ".$_SESSION['username'];
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      <div class = "container">      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = test" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>         
      </div> 
	  <div class="col-md-offset-4 col-sm-offset-4">Click here to clean <a href = "logout.php" tite = "Logout">Session.</div>      
   </body>
</html>
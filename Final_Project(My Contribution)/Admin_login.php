<?php  
     include 'Controller/AdminLoginController.php';
?>

<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/Style5.css">
</head>
<body>
      <div class="login">
      	 <img src="Picture/avatar.png" class="avatar">
           <h1>Login Here</h1>

            <form method="Post" action="">
             	          <p>Email</p>

             	          <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
                         <font color="red"><?php echo $err_email;?></font>

             	          <p>Password</p>
             	          <input type="Password" name="password" placeholder="Password" value="<?php echo $pass;?>">
             	          <font color="red"><?php echo $err_pass;?></font>
                         <input type="submit" value="Login" name="login">
                         <font color="red"><?php echo $err_db; ?></font>
                         <a href="ResetPassword.php">Forgot Your Password?</a>
            </form>
     </div>
</body>
</html>
<?php  
     include 'Controller/AdminLoginController.php';

     if(isset($_GET["msg"]) ){
          if($_GET["msg"] == "reset_success"){
               echo "<script>alert('Password Changed Successfully');</script>";
          }
     }

?>

<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/Style5.css">
     <script src="JavaScript/Signin.js"></script>
</head>
<body>
      <div class="login">
      	 <img src="Picture/avatar.png" class="avatar">
           <h1>Login Here</h1>

            <form method="Post" action="">
             	          <p>Email</p>

             	          <input type="text" onfocusout="checkEmail(this)" name="email" placeholder="Email" value="<?php echo $email;?>">
                         <font color="red"><span id="err_email"><?php echo $err_email;?></span></font>

             	          <p>Password</p>
             	          <input type="Password" onfocusout="checkPassword(this)" name="password" placeholder="Password" value="<?php echo $pass;?>">
             	          <font color="red"><?php echo $err_pass;?></font>

                         <input type="submit" value="Login" name="login">
                         <font color="red"><?php echo $err_db; ?></font>

                         <a href="ResetPassword.php">Forgot Your Password?</a>
                         
            </form>
     </div>
</body>
</html>
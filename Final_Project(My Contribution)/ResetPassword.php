<?php  
     include 'Controller/AdminLoginController.php';
     //$id= $_GET["id"];
     //$c= idPassword($id);
?>

<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="CSS/Style5.css">
</head>
<body>
<div class="login">
      	 <img src="Picture/avatar.png" class="avatar">
           <h1>Reset Password</h1>

            <form method="Post" action="">
                         <input type="hidden" name="id" value="<?php echo $id?>">
                         <p>Email</p>

                         <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
             	          <p>New Pssword</p>
                         
             	          <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>">
                         <font color="red"><?php echo $err_pass;?></font>

             	          <p>Confirm Password</p>
             	          <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $cpass;?>">
             	          <font color="red"><?php echo $err_cpass;?></font>
                         <input type="submit" value="Submit" name="reset" onclick="">
            </form>
     </div>
</body>
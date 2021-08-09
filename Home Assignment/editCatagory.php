<?php  
     include 'Controller/Category.php';
     $id= $_GET["id"];
     $c= idCatagory($id);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Catagory</title>
</head>
<body>
      <form action="" method="post">
      	     <h3 align="center">Name</h3>
               <input type="hidden" name="id" value="<?php echo $id?>">
      	     <div align="center">
      	     	   <input type="text" name="name" size="50" value="<?php echo $c["Name"]; ?>">
      	     	   <span>
                         <?php echo $err_name;?>   
                       </span>
      	     </div><br>

      	     <div align="center">
      	     	   <input type="submit" name="Edit" value="Submit">
      	     </div><br>

      	     <?php echo $err_db; ?>     	    
      </form>
</body>
</html>
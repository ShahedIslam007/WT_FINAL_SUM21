<?php  
     include 'Controller/StudentController.php';
     $id= $_GET["id"];
     $c= idStudent($id);
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Delete Student Information</title>
</head>
<body>
      <form action="" method="post">
               <h2 align="center">Name</h2>
               <input type="hidden" name="id" value="<?php echo $id?>">
               <div align="center">
                       <input type="text" name="name" size="50" value="<?php echo $c["Name"]; ?>">
                       <span>
                         <?php echo $err_name;?>   
                   </span>
               </div><br>

               <div align="center">
                       <input type="submit" name="Delete" value="Delete Student">
               </div><br>

               <?php echo $err_db; ?>            
      </form>
</body>
</html>
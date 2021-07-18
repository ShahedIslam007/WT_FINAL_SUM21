<?php  
     include 'Controller/StudentController.php';

     $department = getAllDepartment();
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Add Student</title>
</head>
<body>
      <h1 align="center">Add Student</h1><br>
      <?php  
           echo $err_db;
      ?>
      <form action="" method="POST">
             <div align="center">
                   <tr>
                       <td>
                            Student Name:
                            <input type="text" name="name" size="30"value="<?php echo $name; ?>">
                            <span>
                                  <?php echo $err_name; ?>
                            </span>
                       </td>
                   </tr><br>

                   <tr>
                       <td>
                           Date of Birth:
                           <input type="text" name="birth" size="30" value="<?php echo $birth; ?>">
                       </td>

                       <span>
                              <?php echo $err_birth; ?>
                       </span>
                   </tr><br>

                   <tr>
                       <td>
                           Credit:
                           <input type="text" name="credit" size="30" value="<?php echo $credit; ?>">
                       </td>

                       <span>
                              <?php echo $err_credit; ?>
                       </span>
                   </tr><br>

                   <tr>
                       <td>
                           CGPA:
                           <input type="text" name="cgpa" size="30" value="<?php echo $cgpa; ?>">
                       </td>

                       <span>
                              <?php echo $err_cgpa; ?>
                       </span>
                   </tr><br>

                   <tr>
                       <td>
                           Department:
                           <select name="Dept_id">
                                <option disabled selected>Choose</option>
                           <?php
                                foreach ($department as $d) 
                                {
                                   echo '<option value="'.$d["id"].'">'.$d["Name"].'</option>';
                                }  
                           ?>
                           </select>
                       </td>
                   </tr>  
             </div><br>

             <div align="center">
                   <input type="submit" name="Submit" value="Submit">
             </div>
      </form>
</body>
</html>
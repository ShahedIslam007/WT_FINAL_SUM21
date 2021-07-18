<?php  
     include 'Controller/StudentController.php';
     $id= $_GET["id"];
     $c= idStudent($id);
     $department = getAllDepartment();
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Edit Student Information</title>
</head>
<body>
      <form action="" method="POST">
          <input type="hidden" name="id" value="<?php echo $id?>">
             <div align="center">
                   <tr>
                       <td>
                            Student Name:
                            <input type="text" name="name" size="30"value="<?php echo $c["Name"]; ?>">
                            <span>
                                  <?php echo $err_name; ?>
                            </span>
                       </td>
                   </tr><br>

                   <tr>
                       <td>
                           Date of Birth:
                           <input type="text" name="birth" size="30" value="<?php echo $c["DOB"]; ?>">
                       </td>

                       <span>
                              <?php echo $err_birth; ?>
                       </span>
                   </tr><br>

                   <tr>
                       <td>
                           Credit:
                           <input type="text" name="credit" size="30" value="<?php echo $c["Credit"]; ?>">
                       </td>

                       <span>
                              <?php echo $err_credit; ?>
                       </span>
                   </tr><br>

                   <tr>
                       <td>
                           CGPA:
                           <input type="text" name="cgpa" size="30" value="<?php echo $c["CGPA"]; ?>">
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
                                   echo '<option value="'.$d["id"].'" name="dept">'.$d["Name"].'</option>';
                                }  
                           ?>
                           </select>
                       </td>
                   </tr>  
             </div><br>

             <div align="center">
                   <input type="submit" name="Edit" value="Submit">
             </div>
      </form>
</body>
</html>
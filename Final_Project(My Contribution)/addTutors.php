<?php  
     include 'Controller/Tutors.php';
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Insert Tutor</title>
</head>
<body>
      <form action="" method="post" enctype="multipart/form-data">
               <table align="center">
                        <tr>
                         <td><h2 align="center">Name</h2></td>
                         <td>
                              <input type="text" name="name" size="50" value="<?php echo $name; ?>">
                                <span>
                                 <?php echo $err_name;?>   
                            </span>
                         </td>
                        </tr>

                        <tr>
                        <td><h2 align="center">Phone</h2></td>
                         <td>
                              <input type="text" name="phone" size="50" value="<?php echo $phone; ?>">
                                <span>
                                 <?php echo $err_phone;?>   
                            </span>
                         </td>                    
                        </tr>

                        <tr>
                         <td><h2 align="center">Address</h2></td>
                         <td>
                              <input type="text" name="addr" size="50" value="<?php echo $Addr; ?>">
                                <span>
                                 <?php echo $err_Addr;?>   
                                </span>
                         </td>  
                        </tr>

                        <tr>
                            <td><h2 align="center">Tution Topic</h2></td>
                            <td>
                                <select name="Category">
                                     <option selected disabled>Photography</option>
                                          <?php
                                          foreach($Categories as $cd)
                                          {
                                             if($categories == $cd)
                                                  echo "<option selected>$cd</option>" ;
                                             else
                                                  echo "<option>$cd</option>";
                                          }
                                          ?>
                                </select>
                                <span>
                                      <?php echo $err_categories;?>   
                                </span>
                            </td>
                        </tr>

                        <tr>
                             <td><h2 align="center">Image</h2></td>
                             <td>
                                 <input type="file" name="file"> 
                             </td>
                        </tr>
               </table>

               <div align="center">
                       <input type="submit" name="Insert" value="Submit">
               </div><br>
      </form>
</body>
</html>
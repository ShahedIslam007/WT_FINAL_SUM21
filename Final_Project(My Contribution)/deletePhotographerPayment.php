<?php  
     include 'Controller/All_Payments.php';
     $id= $_GET["id"];
     $p= getPhotographers($id);
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Edit Photographer Payment</title>
</head>
<body>
      <form action="" method="post">
             <table align="center">
               <input type="hidden" name="id" value="<?php echo $id?>">
                     <tr>
                         <td><h2>Customer Name</h2></td>
                         <td>
                             <input type="text" name="c_name" size="50" value="<?php echo $p["C_Name"]; ?>">
                            <span>
                                 <?php echo $err_c_name;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                         <td><h2>Payment</h2></td>
                         <td>
                             <input type="text" name="paid" size="48" value="<?php echo $p["Paid"]; ?>">TK
                            <span>
                                 <?php echo $err_paid;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                         <td><h2>Photographer Name</h2></td>
                         <td>
                             <input type="text" name="p_name" size="50" value="<?php echo $p["P_Name"]; ?>">
                            <span>
                                 <?php echo $err_p_name;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                            <td><h2 align="center">Paid Via</h2></td>
                            <td>
                                <select name="Category">
                                     <option selected disabled><?php echo $p["Via"]; ?></option>
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
             </table><br><br>

             <div align="center">
                   <button name="delete">Submit</button>
             </div>
      </form>
</body>
</html>
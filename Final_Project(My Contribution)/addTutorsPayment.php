<?php  
     include 'Controller/All_Payments.php';
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Insert Tutors Payment</title>
</head>
<body>
      <form action="" method="post">
             <table align="center">
                     <tr>
                         <td><h2>Learner Name</h2></td>
                         <td>
                             <input type="text" name="l_name" size="50" value="<?php echo $l_name; ?>">
                            <span>
                                 <?php echo $err_l_name;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                         <td><h2>Payment</h2></td>
                         <td>
                             <input type="text" name="t_paid" size="48" value="<?php echo $t_paid; ?>">TK
                            <span>
                                 <?php echo $err_t_paid;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                         <td><h2>Tutor Name</h2></td>
                         <td>
                             <input type="text" name="t_name" size="50" value="<?php echo $t_name; ?>">
                            <span>
                                 <?php echo $err_t_name;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                            <td><h2 align="center">Paid Via</h2></td>
                            <td>
                                <select name="Category">
                                     <option selected disabled>Transition</option>
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
                   <button name="tl_paid">Submit</button>
             </div>
      </form>
</body>
</html>
<?php  
     include 'Controller/All_Payments.php';
     $id= $_GET["id"];
     $p= getPhotographersReview($id);
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Edit Photographer Review & Ratting</title>
</head>
<body>
      <form action="" method="post">
             <table align="center">
             <h1 align="center">Edit Photographer Review & Ratting</h1><br><br>
               <input type="hidden" name="id" value="<?php echo $id?>">
                     <tr>
                         <td><h2>Reviwer Name</h2></td>
                         <td>
                             <input type="text" name="r_name" size="50" value="<?php echo $p["Name"]; ?>">
                            <span>
                                 <?php echo $err_r_name;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                         <td><h2>Review to</h2></td>
                         <td>
                             <input type="text" name="p_review" size="50" value="<?php echo $p["ReviewTo"]; ?>">
                            <span>
                                 <?php echo $err_p_review;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                         <td><h2>Reviewer Review</h2></td>
                         <td>
                             <textarea name="review"><?php echo $p["Review"]; ?></textarea>
                            <span>
                                 <?php echo $err_review;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                            <td><h2 align="center">Ratting</h2></td>
                            <td>
                                <select name="Ratting">
                                     <option selected disabled><?php echo $p["Ratting"]; ?></option>
                                          <?php
                                          foreach($Ratting as $cd)
                                          {
                                             if($ratting == $cd)
                                                  echo "<option selected>$cd</option>" ;
                                             else
                                                  echo "<option>$cd</option>";
                                          }
                                          ?>
                                </select>
                                <span>
                                      <?php echo $err_ratting;?>   
                                </span>
                            </td>
                        </tr>
             </table><br><br>

             <div align="center">
                   <button name="rr">Submit</button>
             </div>
      </form>
</body>
</html>
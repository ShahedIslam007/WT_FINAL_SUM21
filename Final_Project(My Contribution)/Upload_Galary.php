<?php  
     include 'Controller/Galary.php';
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Upload On Gallery</title>
</head>
<body>
    <div align="right">

           <a href="AdminDashboard.php" style="text-decoration: none; font-size: 28px;">Dashboard</a>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
             <h1 align="center">Upload Photo On Gallery</h1>
             <table align="center">
                     <tr>
                         <td>
                             <h2>Choose Category of Photo</h2>
                         </td>

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
             </table><br>

             <div align="center">
                       <input type="submit" name="upload" value="Upload">
               </div>
      </form>
</body>
</html>
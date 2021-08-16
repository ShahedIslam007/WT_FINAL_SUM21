<?php  
     include 'Controller/Photographers.php';
     $id= $_GET["id"];
     $p= getPhotographers($id);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Photographer</title>
</head>
<body>
      <form action="" method="post" enctype="multipart/form-data">
      	     <table align="center">
      	     	<?php echo $err_db;?> 
      	     	<input type="hidden" name="id" value="<?php echo $id?>">
      	     	    <tr>
      	     	    	<td><h2 align="center">Name</h2></td>
      	     	    	<td>
      	     	    		<input type="text" name="name" size="50" value="<?php echo $p["Name"]; ?>">
      	     	            <span>
                                 <?php echo $err_name;?>   
                            </span>
      	     	    	</td>
      	     	    </tr>

      	     	    <tr>
                        <td><h2 align="center">Phone</h2></td>
      	     	    	<td>
      	     	    		<input type="text" name="phone" size="50" value="<?php echo $p["Phone"]; ?>">
      	     	            <span>
                                 <?php echo $err_phone;?>   
                            </span>
      	     	    	</td>    	     	    	
      	     	    </tr>

      	     	    <tr>
      	     	    	<td><h2 align="center">Address</h2></td>
      	     	    	<td>
      	     	    		<input type="text" name="addr" size="50" value="<?php echo $p["Address"]; ?>">
      	     	            <span>
                                 <?php echo $err_Addr;?>   
                            </span>
      	     	    	</td>  
      	     	    </tr>

                    <tr>
                            <td><h2 align="center">Category</h2></td>
                            <td>
                            <input type="text" name="Category" size="50" value="<?php echo $p["Category"]; ?>">
                            <span>
                                 <?php echo $err_Addr;?>   
                            </span>
                        </td>
                        </tr>

      	     	    <tr>
                             <td><h2 align="center">Image</h2></td>
                             <td>
                                 <input type="file" name="file" value="<?php echo $p["img"]; ?>"> <?php echo $p["img"]; ?>
                             </td>
                        </tr>
      	     </table>

      	     <div align="center">
      	     	   <button name="confirm">Confirm</button>
      	     </div>
      </form>
</body>
</html>
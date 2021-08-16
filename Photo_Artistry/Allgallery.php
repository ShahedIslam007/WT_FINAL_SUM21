<?php
          include 'Dashboard.php';
		  include 'controllers/Gallery_Controller';
		  
		  $Gallery = getAllgallery();
		  
		 
?>

<div>
 <table>
   
   <tbody>
   <?php
         
        foreach($Gallery as $g){
		  
			 echo "<td>";
			 echo"<tr><a href=<'Gallery.php'><img src='".$g['Image']."' width='100px' height='100px'></a></tr>";
			 echo"<br>";
			 echo"<br>";
		     echo" Name :";
			 echo"<tr>".$g["Name"]."</tr>";
			 echo"<br>";
		     echo" Photographertype :";
			 echo"<tr>".$g["Photographertype"]."</tr>";
			 echo"<br>";
		     echo" Description :";
			 echo"<tr>".$g["Desc"]."</tr>";
			 echo"<br>";   
				   
			echo "</td>";
			
		}
			
			
			
   ?>
   
   </tbody>
   </table>
   </div>
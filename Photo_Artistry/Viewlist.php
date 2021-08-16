<?php
          include 'Dashboard.php';
		  include 'controllers/R_Controller';
		  
		  
		  $Photographer = getviewlist();
		  
		 
?>

<div class="center">
 <table>
 
     <thead>
     <th style="color: red;">sl</th>
	 <th ></th>
	 <th style="color: red; ">Image</th>
	 <th></th>
	 <th></th>
     <th style="color: red; ">Name</th>
	  <th></th>
	  <th></th>
	 <th style="color: red; ">Email</th>
	 <th></th>
	 <th></th>
	 <th style="color: red; ">Gender</th>
	 <th></th>
	 <th></th>
	 <th style="color: red; ">Ptype</th> 
   </thead>
 <tbody>
   <?php         
		  $i=1;
        foreach($Photographer as $v){
		  echo"<tr>";
		     echo"<td>$i</td>";
			 echo"<td></td>";
			 echo"<td><img src='".$v['Image']."' width='100px' height='100px'></a></td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td>".$v["Name"]."</td>";	
             echo"<td></td>";
             echo"<td></td>";			 
			 echo"<td>".$v["Email"]."</td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td>".$v["Gender"]."</td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td>".$v["Ptype"]."</td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 
          echo"</tr>";
		  $i++;
		} 
   
		  
		  
   
   ?>
   
   
   </table>
   </div>
   
   
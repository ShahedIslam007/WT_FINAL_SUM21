<?php
          include 'Dashboard.php';
		  include 'controllers/P_Controller';
		  
		  
		  $Contact = getContactlist();
		  
		 
?>

<div class="center">
 <table>
 
     <thead>
     <th>sl</th>
	 <th></th>
     <th>Name</th>
	  <th></th>
	  <th></th>
	 <th>Email</th>
	 
   </thead>
 <tbody>
   <?php         
		  $i=1;
        foreach($Contact as $c){
		  echo"<tr>";
		     echo"<td>$i</td>";
			 echo"<td></td>";
			 echo"<td>".$c["Name"]."</td>";	
             echo"<td></td>";
             echo"<td></td>";			 
			 echo"<td>".$c["Email"]."</td>";
			 echo'<td><a href="MsgBox.php?id='.$c["Id"].'">Message</a></td>';
          echo"</tr>";
		  $i++;
		} 
   
		  
		  
   
   ?>
   
   
   </table>
   </div>
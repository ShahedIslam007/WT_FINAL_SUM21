<?php
          include 'Dashboard.php';
		  include 'controllers/User_Controller';
		  
		  
		  $Message = getMsgBox();
		  
		 
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
	 <th></th>
	  <th></th>
	 <th>Message</th>
	 
   </thead>
 <tbody>
   <?php         
		  $i=1;
        foreach($Message as $M){
		  echo"<tr>";
		     echo"<td>$i</td>";
			 echo"<td></td>";
			 echo"<td>".$M["Name"]."</td>";	
             echo"<td></td>";
             echo"<td></td>";			 
			 echo"<td>".$M["Email"]."</td>";
			 echo"<td></td>";
             echo"<td></td>";			 
			 echo"<td>".$M["Message"]."</td>";
			 
          echo"</tr>";
		  $i++;
		} 
   
		  
		  
   
   ?>
   
   
   </table>
   </div>
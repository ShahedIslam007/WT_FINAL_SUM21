<?php
          include 'Dashboard.php';
		  include 'controllers/P_Controller';
		  
		  
		  $Payment = getpayment();
		  
		 
?>

<div class="center">
 <table>
 
     <thead>
     <th>sl</th>
	 <th></th>
	 <th>Pgtype</th>
	 <th></th>
	 <th></th>
     <th>Expected Charge</th>
   </thead>
 <tbody>
   <?php         
		  $i=1;
        foreach($Payment as $q){
		  echo"<tr>";
		     echo"<td>$i</td>";
			 echo"<td></td>";
			 echo"<td>".$q["Pgtype"]."</td>";	
             echo"<td></td>";
             echo"<td></td>";			 
			 echo"<td>".$q["amount"]."</td>";	
			 echo"<td></td>";
          echo"</tr>";
		  $i++;
		} 
   
		  
		  
   
   ?>
   
   </tbody>
   </table>
   </div>
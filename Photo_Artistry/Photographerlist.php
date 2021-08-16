<?php
          include 'UserDashboard.php';
		  include 'controllers/User_Controller';
		  
		  
		  $Pgrapher = getviewPglist();
		  
		 
?>

<div class="center">
 <table>
 
     <thead>
     <th>sl</th>
	 <th></th>
	 <th>Image</th>
	 <th></th>
	 <th></th>
     <th>Name</th>
	  <th></th>
	  <th></th>
	 <th>Email</th>
	 <th></th>
	 <th></th>
	 <th>Gender</th>
	 <th></th>
	 <th></th>
	 <th>Ptype</th> 
   </thead>
 <tbody>
   <?php         
		  $i=1;
        foreach($Pgrapher as $p){
		  echo"<tr>";
		     echo"<td>$i</td>";
			 echo"<td></td>";
			 echo"<td><img src='".$p['Image']."' width='100px' height='100px'></a></td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td>".$p["Name"]."</td>";	
             echo"<td></td>";
             echo"<td></td>";			 
			 echo"<td>".$p["Email"]."</td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td>".$p["Gender"]."</td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo"<td>".$p["Ptype"]."</td>";
			 echo"<td></td>";
			 echo"<td></td>";
			 echo'<td><a href="booking.php?id='.$p["Id"].'">Booking</a></td>';
          echo"</tr>";
		  $i++;
		} 
   
		  
		  
   
   ?>
   
   
   </table>
   </div>
   
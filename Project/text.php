<?php       
		  include 'controllers/ContactController.php';
          $learner_m=get_learnerm();
          $tutor_m=get_tutorm();
		  
		 
	     if($learner_m){
	      foreach($learner_m as $l){
	            
	            echo "<td>";
						echo "<tr><b>".$l["name"]."</b></tr></br>";
						echo "<tr>".$l["message"]."</tr>";
	            echo "</td>"; 
				        echo "</br>"; 
		  }
		 }
	        elseif($tutor_m){   
	      foreach($tutor_m as $t){
	            
	            echo "<td>";
						echo "<tr><b>".$t["name"]."</b></tr></br>";
						echo "<tr>".$t["message"]."</tr>";
	            echo "</td>"; 
				        echo "</br>"; 
		       }
			}
		  
	
		  
		
?>
 
 

      

	


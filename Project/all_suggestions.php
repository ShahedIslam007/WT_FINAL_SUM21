<?php
 include 'controllers/LearnerController.php';
 $key=$_GET["key"];
 $learner=search($key);
 if(count($learner)>0)
 {
     echo "<table>";
	 
	 ?>
	 <thead>
			<th>Image</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Address</th>
			
		</thead>
	 <?php
     echo "<tbody>";
    foreach($learner as $l){
                
                echo "<tr>";
                        echo "<td><img src='".$l["img"]."' width='50px' height='50px'></td>";
                        echo "<td>".$l["name"]."</td>";
                        echo "<td>".$l["email"]."</td>";
                        echo "<td>".$l["gender"]."</td>";
                        echo "<td>".$l["address"]."</td>";
                echo "</tr>"; 
                echo "</br"; 
    }
    echo "</tbody>";
    echo "</table>";
 }

 


?>
<?php
 include 'controllers/TutorController.php';
 $key=$_GET["key"];
 $tutor=search($key);
 if(count($tutor)>0)
 {
	 echo "<table border='1'>";
	 echo "<tbody>";
	foreach($tutor as $t){
	            
	            echo "<tr>";
	                    echo "<td><img src='".$t["img"]."' width='50px' height='50px'></td>";
						echo "<td>".$t["name"]."</td>";
						echo "<td>".$t["email"]."</td>";
						echo "<td>".$t["gender"]."</td>";
						echo "<td>".$t["address"]."</td>";
	            echo "</tr>"; 
				echo "</br"; 
	}
	echo "</tbody>";
	echo "</table>";
 }


?>
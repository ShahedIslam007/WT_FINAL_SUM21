<?php
       include 'controllers/R_Controller';
 $key=$_GET["key"];
 $phgrapher=Search($key);
 if(count($phgrapher)>0)
 {
	 echo "<table border='1'>";
	 echo "<tbody>";
	foreach($phgrapher as $n){
	            
	            echo "<tr>";
	                    echo "<td><img src='".$n["Image"]."' width='50px' height='50px'></td>";
						echo "<td>".$n["Name"]."</td>";
						echo "<td>".$n["Email"]."</td>";
						echo "<td>".$n["Gender"]."</td>";
						echo "<td>".$n["Ptype"]."</td>";
	            echo "</tr>"; 
				echo "</br"; 
	}
	echo "</tbody>";
	echo "</table>";
 }


?>
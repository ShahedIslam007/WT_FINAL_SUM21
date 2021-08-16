<?php
 include 'controllers/UserController.php';
 $key=$_GET["key"];
 $user=search($key);
 if(count($user)>0)
 {
     echo "<table border='1'>";
	?>
	<thead>
            <th>Event Name</th>
            <th>Discount Date</th>
            <th>Discount</th>
            <th>Contact Number</th>
  
        </thead>
	<?php
     echo "<tbody>";
    foreach($user as $u){
		       
                
                echo "<tr>";
                       
                        echo "<td>".$u["name"]."</td>";
                        echo "<td>".$u["date"]."</td>";
                        echo "<td>".$u["dis"]."</td>";
                        echo "<td>".$u["num"]."</td>";
                echo "</tr>"; 
                echo "</br"; 
    }
    echo "</tbody>";
    echo "</table>";
 }

 


?>
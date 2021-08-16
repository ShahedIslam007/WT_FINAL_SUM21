<?php  
     include 'controllers/User_Controller';
     session_start();
     $userprofile = [];
     if(isset($_SESSION['v_profile']))
     {
         $userprofile = $_SESSION['v_profile'];
     }
?>


<html>
<head>
     <title>Profile</title>
</head>
<body>
      <table align="center" border="1">
                <th>Sl</th>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender </th>
				<th>address</th>
                <th>Password</th>

 


                <?php  
                   $i=1;
                   foreach ( $userprofile as $m) 
                   {
                     echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td><img src='".$m["Image"]."' width='150px' height='100px'></td>";
                             echo "<td>".$m["Name"]."</td>";
                             echo "<td>".$m["Email"]."</td>";
                             echo "<td>".$m["Gender"]."</td>";
							 echo "<td>".$m["Address"]."</td>";
                             echo "<td>".$m["Password"]."</td>";
                      echo "</tr>";
                      $i++;
                   }
                ?>
      </table>
</body>
</html>
	 
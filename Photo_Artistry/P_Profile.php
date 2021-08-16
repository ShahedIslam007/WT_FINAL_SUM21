 <?php 
    
     include 'Dashboard.php';	
     include 'controllers/P_Controller';
     session_start();
     $profile = [];
     if(isset($_SESSION['s_profile']))
     {
        $profile = $_SESSION['s_profile'];
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
				<th>Photographer_Type:</th>
                <th>Password</th>

 


                <?php  
                   $i=1;
                   foreach ( $profile as $l) 
                   {
                     echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td><img src='".$l["Image"]."' width='100px' height='100px'></td>";
                             echo "<td>".$l["Name"]."</td>";
                             echo "<td>".$l["Email"]."</td>";
                             echo "<td>".$l["Gender"]."</td>";
							 echo "<td>".$l["Ptype"]."</td>";
                             echo "<td>".$l["Password"]."</td>";
							 echo'<td><a href="manageprofile.php?id='.$l["Id"].'">Maanage Profile</a></td>';
							 echo'<td><a href="Addgallery.php?id='.$l["Id"].'">Gallery Upload</a></td>';
                      echo "</tr>";
                      $i++;
                   }
                ?>
      </table>
</body>
</html>
	 
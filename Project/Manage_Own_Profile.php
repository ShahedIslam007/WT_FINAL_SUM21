<?php
       include 'Tutor_header.php'; 
       include 'controllers/TutorController.php';
     session_start();
     $Tutor = [];
     if(isset($_SESSION['tutor_profile']))
     {
        $Tutor = $_SESSION['tutor_profile'];
     }
?>
	  
 
               
<?php
            echo "<table align='center'>";
			
			foreach($Tutor as $t){
				
			  echo "<td>";
			            echo "<tr><h1>MY PROFILE</h1></tr>";
						echo "<br>";
						echo "<br>";			
						echo "<tr><img src='".$t["img"]."' width='200px' height='200px'></tr>";
						echo "<br>";
						echo "<br>";
						echo "Name : ";
						echo "<tr>".$t["name"]."</tr>";
						echo "<br>";
						echo "Email : ";
						echo "<tr>".$t["email"]."</tr";
						echo "<br>";
						echo "<br>";
						echo "Address : ";
						echo "<tr>".$t["address"]."</tr>";
						echo "<br>";
						echo "NID Number : ";
						echo "<tr>".$t["nid"]."</tr>";
						echo "<br>";
						echo "Phone Number : ";
						echo "<tr>".$t["number"]."</tr>";
						echo "<br>";
						echo "Gender : ";
						echo "<tr>".$t["gender"]."</tr>";
						echo "<br>";
						echo "Blood Group : ";
						echo "<tr>".$t["blood_group"]."</tr>";
						echo "<br>";
						echo "Category : ";
						echo "<tr>".$t["category"]."</tr>";
						echo "<br>";
						echo "<br>";
						echo '<tr><a href="T_Profile_update.php?id='.$t["id"].'" class="btn btn-success">Update</a></tr>';
						echo "<br>";
						echo "<br>";
			echo "</td>";
			}
			
			echo "</table>";
			?>
      
		  				
 <?php include 'Tutor_footer.php';?>
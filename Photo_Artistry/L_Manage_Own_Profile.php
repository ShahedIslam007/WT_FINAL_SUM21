<?php
       include 'Learner_header.php';
       include 'controllers/TutorController.php';
     session_start();
     $learner = [];
     if(isset($_SESSION['learner_profile']))
     {
        $learner= $_SESSION['learner_profile'];
     }
?>
	  
 
               
<?php
            echo "<table>";
			
			foreach($learner as $l){
				
			  echo "<td>";
			            echo "<tr><h1>MY PROFILE</h1></tr>";
						echo "<br>";
						echo "<br>";			
						echo "<tr><img src='".$l["img"]."' width='200px' height='200px'></tr>";
						echo "<br>";
						echo "<br>";
						echo "Name : ";
						echo "<tr>".$l["name"]."</tr>";
						echo "<br>";
						echo "Email : ";
						echo "<tr>".$l["email"]."</tr";
						echo "<br>";
						echo "<br>";
						echo "Address : ";
						echo "<tr>".$l["address"]."</tr>";
						echo "<br>";
						echo "Postal Code: ";
						echo "<tr>".$l["postal_code"]."</tr>";
						echo "<br>";
						echo "Phone Number : ";
						echo "<tr>".$l["number"]."</tr>";
						echo "<br>";
						echo "Gender : ";
						echo "<tr>".$l["gender"]."</tr>";
						echo "<br>";
						echo "Blood Group : ";
						echo "<tr>".$l["blood_group"]."</tr>";
						echo "<br>";
						echo "<br>";
						echo '<tr><a href="L_Profile_update.php?id='.$l["id"].'" class="btn btn-success">Update</a></tr>';
						echo "<br>";
						echo "<br>";
			echo "</td>";
			}
			
			echo "</table>";
			?>
      
		  				

		<?php include 'Learner_footer.php';?>
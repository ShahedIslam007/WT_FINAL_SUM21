         <?php  
		  include 'Tutor_header.php'; 
          include 'controllers/TutorController.php';
		  $tutor = getAllTutor();
		  
        ?>
     
<div class="center">
	<h3 class="text">View All</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Image</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Blood Group</th>
			<th>Category</th>
			
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($tutor as $t){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td><img src='".$t["img"]."' width='60px' height='60px'></td>";
						echo "<td>".$t["name"]."</td>";
						echo "<td>".$t["email"]."</td>";
						echo "<td>".$t["address"]."</td>";
						echo "<td>".$t["gender"]."</td>";
						echo "<td>".$t["blood_group"]."</td>";
						echo "<td>".$t["category"]."</td>";
					echo "</tr>";
					$i++;
				}
		?>
			
			
		</tbody>
	</table>
</div>

		
		<?php include 'Tutor_footer.php';?>
		
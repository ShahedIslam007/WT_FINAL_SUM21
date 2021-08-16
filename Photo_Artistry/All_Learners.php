        <?php  
		  include 'Tutor_header.php'; 
          include 'controllers/LearnerController.php';
		  $learner = getAllLearner();
		  
        ?>



<div class="center">
	<h3 class="text">All ll</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Image</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Postal Code</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($learner as $l){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td><img src='".$l["img"]."' width='60px' height='60px'></td>";
						echo "<td>".$l["name"]."</td>";
						echo "<td>".$l["email"]."</td>";
						echo "<td>".$l["gender"]."</td>";
						echo "<td>".$l["address"]."</td>";
						echo "<td>".$l["postal_code"]."</td>";
						echo '<td><a href="Edit_Learner.php?id='.$l["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="Delete_Learner.php?id='.$l["id"].'" class="btn btn-success">Delete</a></td>';
					echo "</tr>";
					$i++;
				}
				
				
			?>
			
			
		</tbody>
	</table>
</div>

		
		<?php include 'Tutor_footer.php';?>
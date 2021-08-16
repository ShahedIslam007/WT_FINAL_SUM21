  <?php  
		  include 'Tutor_header.php'; 
		  include 'controllers/LearnerController.php';
		  $learner = getAllLearner();
	?>


<div class="center">
	<table class="table table-striped">
		<tbody>
			<?php
				foreach($learner as $l){
					echo "<tr>";
						echo "<td><img src='".$l["img"]."' width='60px' height='60px'></td>";
						echo "<td>".$l["name"]."</td>";
						echo '<td><a href="L_ContactForm.php?id='.$l["id"].'" class="btn btn-success">Message</a></td>';
						
					echo "</tr>";
				
				}
			?>
			
			
		</tbody>
	</table>
 </div>

<?php include 'Tutor_footer.php';?>
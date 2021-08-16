<script src="JS/learners.js"></script>
<?php 
     
          include 'Tutor_header.php';
		  include 'controllers/LearnerController.php';
		  $learner = getAllLearner();
?>
      


    <div class="center">
	<h3 class="text">Search</h3>
	<input type="text" class="form-control" onkeyup="search(this)" placeholder="Search..." size="60">
	</br>
	</br>
	<div id="search-result">
	</div>
	
	<?php include 'Tutor_footer.php';?>

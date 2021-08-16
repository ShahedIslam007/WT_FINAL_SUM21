<script src="JS/tutors.js"></script>
<?php 
     
          include 'Learner_header.php';
		 include 'controllers/TutorController.php';
		 //$learner = getAllTutor();
?>
      


    <div class="center">
	<h3 class="text">Search</h3>
	<input type="text" class="form-control" onkeyup="search(this)" placeholder="Search...." size="60">
	</br>
	</br>
	<div id="search-result">
	</div>
	
	<?php include 'Learner_footer.php';?>

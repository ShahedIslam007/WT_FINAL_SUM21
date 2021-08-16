<script src="JS/Photographer.js"></script>
<?php 
     
          include 'Dashboard.php';
		  include 'controllers/R_Controller';
		  $Photographer = getviewlist();
?>
      


    <div class="center">
	<h3 class="text">Search</h3>
	<input type="text" class="form-control" onkeyup="Search(this)" placeholder="Search..." size="60">
	</br>
	</br>
	<div id="Search">
	</div>
	
	
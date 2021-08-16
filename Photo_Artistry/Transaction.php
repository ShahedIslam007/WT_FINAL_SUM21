 
 <?php  
     include 'controllers/User_Controller';
     session_start();
     $Payment = [];
     if(isset($_SESSION['u_profile']))
     {
        $profile = $_SESSION['u_profile'];
     }
?>


<div class="center">
	<h3 class="text">My Account</h3>
	<table class="table table-striped">
		<thead>
			<th>SL</th>
			<th>Erom</th>
			<th>To</th>
			<th>Type Of Transaction</th>
			<th>Tansaction No</th>
			<th>Date </th>
			<th>Balance</th>
			
		</thead>
		<tbody>
			<?php
				$j=1;
				foreach($Payment as $t){
					echo "<tr>";
						echo "<td>$j</td>";
						echo "<td>".$t["Email"]."</td>";
						echo "<td>".$t["Email"]."</td>";
						echo "<td>".$t["transaction_type"]."</td>";
						echo "<td>".$t["transaction_no"]."</td>";
						echo "<td>".$t["date"]."</td>";
						echo "<td>".$t["balance"]."</td>";
					echo "</tr>";
					$j++;
				}
				
				
			?>
			
			
		</tbody>
	</table>
</div>
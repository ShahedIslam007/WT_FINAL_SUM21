         <?php  
		  include 'Tutor_header.php'; 
          include 'controllers/LearnerController.php';
		  $transaction = getTransaction();;
		  
        ?>



<div class="center">
	<h3 class="text">My Account</h3>
	<table class="table table-striped">
		<thead>
			<th>SL</th>
			<th>Type Of Transaction</th>
			<th>Tansaction No</th>
			<th>Date </th>
			<th>Payment By</th>
			<th>Received By</th>
			<th>Balance</th>
			
		</thead>
		<tbody>
			<?php
				$j=1;
				foreach($transaction as $t){
					echo "<tr>";
						echo "<td>$j</td>";
						echo "<td>".$t["transaction_type"]."</td>";
						echo "<td>".$t["transaction_no"]."</td>";
						echo "<td>".$t["date"]."</td>";
						echo "<td>".$t["payment_by"]."</td>";
						echo "<td>".$t["received_by"]."</td>";
						echo "<td>".$t["balance"]."</td>";
					echo "</tr>";
					$j++;
				}
				
				
			?>
			
			
		</tbody>
	</table>
</div>

		
		<?php include 'Tutor_footer.php';?>
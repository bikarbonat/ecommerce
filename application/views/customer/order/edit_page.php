<?php echo $this->load->view('include/header_page'); ?>
    <div class="row twelve columns">
<?php echo $this->load->view('include/sidebar_page');?>
    <!-- Thumbnails -->
	<div class="nine columns">
	
	<div class="row">
	<h4>My Cart</h4>
		<table class="twelve table table-bordered" id="example">
		  <thead>
			<tr>
			  <th>Order</th>
			  <th>Ordered On</th>
			  <th>Status</th>
			  <th>Total</th>
			  <th>Action</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				foreach($order as $row)
				{
			?>
			<tr>
			<td><?php echo $row->order_id;?></td>
			<td><?php echo $row->order_date;?></td>
			<td>
			<?php
			$status = $row->order_status;
			
			switch($status)
			{
				case 0:
					echo "Pending";
				break;
				case 1:
					echo "Processing";
				break;
				case 2:
					echo "Delivered";
				break;
				case -1:
					echo "Cancelled";
				break;
			}
			?>
			</td>
			<td>RM <?php echo $row->order_total;?></td>
			<td><?php echo anchor('invoice/'.$row->order_id,'View');?></td>
			</tr>
			<?php
				}
			?>
		  </tbody>
		</table>
	<!-- End Thumbnails -->
	<div class="twelve columns">
	</div>
	</div>
	</div>
    </div>
<?php echo $this->load->view('include/footer_page');?>
</div>
</body>
</html>

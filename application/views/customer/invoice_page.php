<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
			<?php
				foreach($order as $row)
				{
			?>
			<b>Order Number #</b> <?php echo $row->order_number;?>
			<div class="row-fluid">
				<div class="span4">
					<h4>Customer Info</h4>
					<p><b>Name:</b><?php echo $row->order_name;?></p>
					<p><b>Phone:</b><?php echo $row->order_phone;?></p>
				</div>
				<div class="span4">
					<h4>Billing Info</h4>
					<p>
					<?php echo $row->order_name;?><br/>
					<?php echo $row->order_address;?><br/>
					<?php echo $row->order_zip_code;?> , <?php echo $row->order_city;?><br/>
					<?php echo $row->order_state;?><br/>
					</p>
				</div>
				<div class="span4">
					<h4>Shipping Info</h4>
					<p>
					<?php echo $row->order_name;?><br/>
					<?php echo $row->order_address;?><br/>
					<?php echo $row->order_zip_code;?> , <?php echo $row->order_city;?><br/>
					<?php echo $row->order_state;?><br/>
					</p>
				</div>
			</div>
			<hr>
			<table class="table">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>Code</th>
				  <th>Price</th>
				  <th>Quantity</th>
				  <th>Subtotal</th>
				</tr>
			  </thead>
			  <tbody>
				<?php 
					foreach($product as $item)
					{
				?>
				<tr>
					<?php
						$content = unserialize($item->order_contents);
					?>
					<td><?php echo $content['Name'];?></td>
					<td><?php echo $content['Code'];?></td>
					<td>RM <?php echo $item->order_product_price;?></td>
					<td><?php echo $item->order_product_quantity;?></td>
					<td>RM <?php echo $item->order_product_subtotal;?></td>
				</tr>
				<?php
					}
				?>
				<tr class="well">
					<td colspan="4">Shipping Charge</td>
					<td>RM <?php echo $row->order_shipping;?></td>
				</tr>
				<tr class="well">
					<td colspan="4">Total</td>
					<td>RM <?php echo $row->order_total;?></td>
				</tr>
				<?php
					}
				?>
			  </tbody>
			</table>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>

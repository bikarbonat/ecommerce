<?php echo $this->load->view('include/header_page'); ?>
<div class="row twelve columns">
	<div class="row">
		<?php
			foreach($order as $row)
			{
		?>
		<div class="four columns">
			<h4>Customer Info</h4>
			<p><b>Name:</b><?php echo $row->order_name;?></p>
			<p><b>Phone:</b><?php echo $row->order_phone;?></p>
		</div>
		<div class="three columns">
			<h4>Billing Info</h4>
			<p>
			<?php echo $row->order_name;?><br/>
			<?php echo $row->order_address;?><br/>
			<?php echo $row->order_zip_code;?> , <?php echo $row->order_city;?><br/>
			<?php echo $row->order_state;?><br/>
			</p>
		</div>
		<div class="three columns">
			<h4>Shipping Info</h4>
			<p>
			<?php echo $row->order_name;?><br/>
			<?php echo $row->order_address;?><br/>
			<?php echo $row->order_zip_code;?> , <?php echo $row->order_city;?><br/>
			<?php echo $row->order_state;?><br/>
			</p>
		</div>
		<div class="two columns">
			<?php echo form_open('admin/order/update/'.$row->order_id); ?>
			<label>Status</label>
			<select name="orderStatus">
				<?php
					$status = $row->order_status;
				?>
				<option value="0" <?php if($status == 0) echo "selected='selected'";?>>Pending</option>
				<option value="1" <?php if($status == 1) echo "selected='selected'";;?>>Processing</option>
				<option value="2" <?php if($status == 2) echo "selected='selected'";?>>Delivered</option>
				<option value="-1" <?php if($status == -1) echo "selected='selected'";?>>Cancelled</option>
			</select>
		</div>
		<?php
			}
		?>
	</div>
		<table class="twelve">
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
			foreach(unserialize($item->order_contents) as $content)
			{
		?>
			<td><?php echo $content;?></td>
	  <?php
		}
		?>
      <td>RM <?php echo $item->order_product_price;?></td>
      <td><?php echo $item->order_product_quantity;?></td>
      <td>RM <?php echo $item->order_product_subtotal;?></td>
    </tr>
	<?php
		}
	?>
  </tbody>
</table>
<input type="submit" value="Update" class="button">
<a href="" class="button">Edit</a>
</div>
<?php echo $this->load->view('include/footer_page');?>
</div>
</body>
</html>

<?php echo $this->load->view('include/header_page');?>
  <body>
<?php echo $this->load->view('include/menu');?>
    <div class="container">
		<div class="row-fluid header">
			<div class="span3 block">
			Logo
			</div>
			<div class="span9">
			header
			</div>
		</div>
		<div class="row-fluid">
		<?php
		foreach($order as $row)
		{
	?>
	<b>Order Number</b> <?php echo $row->order_number;?>
	<div class="row">
		<div class="four columns">
			<h4>Customer Info</h4>
			<p><b>Name:</b><?php echo $row->order_name;?></p>
			<p><b>Phone:</b><?php echo $row->order_phone;?></p>
		</div>
		<div class="four columns">
			<h4>Billing Info</h4>
			<p>
			<?php echo $row->order_name;?><br/>
			<?php echo $row->order_address;?><br/>
			<?php echo $row->order_zip_code;?> , <?php echo $row->order_city;?><br/>
			<?php echo $row->order_state;?><br/>
			</p>
		</div>
		<div class="four columns">
			<h4>Shipping Info</h4>
			<p>
			<?php echo $row->order_name;?><br/>
			<?php echo $row->order_address;?><br/>
			<?php echo $row->order_zip_code;?> , <?php echo $row->order_city;?><br/>
			<?php echo $row->order_state;?><br/>
			</p>
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
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>

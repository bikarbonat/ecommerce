<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<?php echo $this->load->view('include/sidebar_right');?>
			<div class="span9">
				<h3>Shopping Cart</h3>
				<legend></legend>
			  <div class="row-fluid">
			  <?php
				$message = $this->session->flashdata('message');
				if(isset($message))
					echo $message;
				if($this->cart->total_items() > 0)
				{
				?>
			  <table class="table">
				  <thead>
					<tr>
					  <th><?php echo $this->lang->line('product_image');?></th>
					  <th><?php echo $this->lang->line('product_name');?></th>
					  <th><?php echo $this->lang->line('product_price');?></th>
					  <th><?php echo $this->lang->line('product_quantity');?></th>
					  <th><?php echo $this->lang->line('product_total');?></th>
					  <th></th>
					</tr>
				  </thead>
					<?php
							foreach($this->cart->contents() as $item)
							{
					echo form_open('cart/update/');
					?>
					<tr>
						<td></td>
						<td><?php echo $item['name'];?></td>
						<td>RM <?php echo $item['price'];?></td>
						<td><input type="hidden" name="id[]" value="<?php echo $item['rowid'];?>"><input name="quantity[]" type="text" value="<?php echo $item['qty'];?>" class="span5">
						</td>
						<td>RM <?php echo $this->cart->format_number($item['subtotal']);?></td>
						<td><a href="<?php echo site_url()."cart/remove/".$item['rowid'];?>" rel="tooltip" data-placement="top" title="Remove Product"><i class="icon-remove"></i></a></td>
					</tr>
					<?php
							}
					?>
					<tr>
						<td colspan="4">Total</td>
						<td colspan="2">RM <?php echo $this->cart->format_number($this->cart->total()); ?></td>
					</tr>
				</table>
					<input type="submit" value="Update" class="btn btn-info">
					<a href="<?php echo site_url('checkout');?>" class="btn btn-primary">Checkout</a>
				<?php
				}
				else
				{
				?>
					No product in shopping cart. Go shopping now !
					<h3>Bestseller Product</h3>
				<?php 
				}
				?>
			  </div>
			</div>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>

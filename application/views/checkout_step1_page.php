<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<?php echo $this->load->view('include/sidebar_right');?>
			<div class="span9">
				<h3>Shipping To</h3>
				<legend></legend>
			  <div class="row-fluid">
				<?php echo form_open('confirm'); ?>
					<?php echo validation_errors(); ?>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Full Name</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="fullName" type="text" class="uneditable-input" value="<?php echo $this->input->post('fullName');?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Address</label>
						</div>
						<div class="">
						<textarea id="address" name="address" class="uneditable-input"><?php echo $this->input->post('address')?></textarea>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Postcode</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="zipcode" type="text" class="uneditable-input" value="<?php echo $this->input->post('zipcode')?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">City</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="city" type="text" class="uneditable-input" value="<?php echo $this->input->post('city');?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">State</label>
						</div>
						<div class="ten mobile-three columns">
							<input name="state" type="text" class="uneditable-input" value="<?php echo $this->input->post('state');?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
							<label class="right inline">Phone</label>
						</div>
						<div class="ten mobile-three columns">
							<input name="phone" type="text" class="uneditable-input" value="<?php echo $this->input->post('phone');?>"/>
						</div>
					</div>
				<div class="well well-small">
				Your Total
				</div>
				<?php
					$state = $this->input->post('state');
					$weight = 0;
					$shipping = 0;
					if($state == "Sabah/Labuan")
					{
						foreach($this->cart->contents() as $row)
						{	
							$contents = serialize($this->cart->product_options($row['rowid']));
							$contents = unserialize($contents);
							$weight = $weight + $contents['Weight'];
						}
						if($weight >= 1000)
						{
							$shipping = $shipping + 15;
							$weight = $weight - 1000;
						}
						else
						{
							$shipping = $shipping + 15;
							$weight = 0;
						}
						while($weight != 0)
						{
							
							if($weight >= 250)
							{
								$shipping = $shipping + 3;
								$weight = $weight - 250;
							}
							else
							{
								$shipping = $shipping + 3;
								$weight = 0;
							}
						}
					}
					else if($state == "Sarawak")
					{
					
					}
					else
					{
						$shipping = 8;
					}
				?>
				<table class="table">
					<tr>
						<td>Subtotal</td>
						<td>RM <?php echo $this->cart->format_number($this->cart->total()); ?></td>
					</tr>
					<tr>
						<td>Shipping</td>
						<td>RM <?php echo $shipping;?></td>
						<input type="hidden" name="shipping" value="<?php echo $shipping;?>">
					</tr>
					<tr>
						<td>Total</td>
						<td>RM <?php echo $this->cart->total()+ $shipping; ?></td>
						<input type="hidden" name="total" value="<?php echo $this->cart->total()+ $shipping; ?>">
					</tr>
				</table>
				<input class="btn btn-primary" type="submit" value="Confirm">
				</form>
			  </div>
			</div>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>

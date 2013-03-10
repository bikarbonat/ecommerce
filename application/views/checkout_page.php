<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<?php echo $this->load->view('include/sidebar_right');?>
			<div class="span9">
				<h3>Ship To</h3>
				<legend></legend>
			  <div class="row-fluid">
				<?php echo form_open('checkout/step1'); ?>
				<?php
					if(isset($user))
					{
						foreach($user as $row)
						{
				?>
					<?php echo validation_errors(); ?>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Full Name</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="fullName" placeholder="Full Name" type="text" class="eight" value="<?php echo $row->user_name;?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Address</label>
						</div>
						<div class="">
						<textarea id="address" name="address" placeholder="Shipping Address"><?php echo $row->user_address;?></textarea>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Postcode</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="zipcode" type="text" class="four" placeholder="Postcode" value="<?php echo $row->user_zip_code;?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">City</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="city" type="text" class="eight" placeholder="City" value="<?php echo $row->user_city;?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">State</label>
						</div>
						<div class="ten mobile-three columns">
							<select name="state" class="four">
								<option value="Perlis">Perlis</option>
								<option value="Kedah">Kedah</option>
								<option value="Pulau Pinang">Pulau Pinang</option>
								<option value="Kelantan">Kelantan</option>
								<option value="Terengganu">Terengganu</option>
								<option value="Pahang">Pahang</option>
								<option value="Perak">Perak</option>
								<option value="Selangor">Selangor</option>
								<option value="Kuala Lumpur">Kuala Lumpur</option>
								<option value="Melaka">Melaka</option>
								<option value="Negeri Sembilan">Negeri Sembilan</option>
								<option value="Johor">Johor</option>
								<option value="Sabah/Labuan">Sabah / Labuan</option>
								<option value="Sarawak">Sarawak</option>
							</select>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
							<label class="right inline">Phone</label>
						</div>
						<div class="ten mobile-three columns">
							<input name="phone" type="text" class="eight" placeholder="Phone Number" value="<?php echo $row->user_phone?>"/>
						</div>
					</div>
				<?php }} ?>
				<input class="btn btn-primary" type="submit" value="Next">
				</form>
			  </div>
			</div>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>

<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<?php echo $this->load->view('include/sidebar_right');?>
			<div class="span9">
				<h3>Registration Page</h3>
				<?php echo form_open('register'); ?>
				<fieldset>
					<h4><?php echo $this->lang->line('message_new_user_detail');?></h4>
					<hr>
					<?php echo validation_errors('<p><label class="error">','</label></p>'); ?>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Full Name</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="fullName" placeholder="Full Name" type="text" class="eight" value="<?php echo set_value('fullName')?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Address</label>
						</div>
						<div class="ten mobile-three columns">
						<textarea name="address" placeholder="Shipping Address"><?php echo set_value('address')?></textarea>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Postcode</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="zipcode" type="text" class="four" placeholder="Postcode" value="<?php echo set_value('zipcode')?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">City</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="city" type="text" class="eight" placeholder="City" value="<?php echo set_value('city')?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">State</label>
						</div>
						<div class="ten mobile-three columns">
							<select name="state">
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
								<option value="Sawarak">Sarawak</option>
							</select>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Phone</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="phone" type="text" class="eight" placeholder="Phone Number" value="<?php echo set_value('phone')?>"/>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<h4><?php echo $this->lang->line('message_login_detail');?></h4>
					<hr>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Email</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="email" type="text" placeholder="e.g. admin@stylobag.com" class="eight"  value="<?php echo set_value('email')?>"/>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Password</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="password" type="password" class="eight" />
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
						<label class="right inline">Confirm Password</label>
						</div>
						<div class="ten mobile-three columns">
						<input name="confirmpassword" type="password" class="eight" />
						</div>
					</div>
				</fieldset>
				<input class="btn btn-primary" type="submit" value="Register">
				</form>
			</div>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
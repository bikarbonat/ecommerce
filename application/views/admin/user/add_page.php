<?php echo $this->load->view('include/header_page'); ?>
    <div class="row twelve columns">
		<h4>Registration Page</h4>
		<?php echo form_open('register'); ?>
		<fieldset>
			<legend><?php echo $this->lang->line('message_new_user_detail');?></legend>
			<?php echo validation_errors('<p><label class="error">','</label></p>'); ?>
			<div class="row">
				<div class="two mobile-one columns">
				
				<label class="right inline">Full Name</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="fullName" placeholder="Full Name" type="text" class="eight" value="<?php echo set_value('fullName')?>"/>
				</div>
			</div>
			<div class="row">
				<div class="two mobile-one columns">
				<label class="right inline">Address</label>
				</div>
				<div class="ten mobile-three columns">
				<textarea class="eight" name="address" placeholder="Shipping Address"><?php echo set_value('address')?></textarea>
				</div>
			</div>
			<div class="row">
				<div class="two mobile-one columns">
				<label class="right inline">Postcode</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="zipcode" type="text" class="four" placeholder="Postcode" value="<?php echo set_value('zipcode')?>"/>
				</div>
			</div>
			<div class="row">
				<div class="two mobile-one columns">
				<label class="right inline">City</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="city" type="text" class="eight" placeholder="City" value="<?php echo set_value('city')?>"/>
				</div>
			</div>
			<div class="row">
				<div class="two mobile-one columns">
				<label class="right inline">State</label>
				</div>
				<div class="ten mobile-three columns">
					<select name="state" class="three">
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
			<div class="row">
				<div class="two mobile-one columns">
				<label class="right inline">Phone</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="phone" type="text" class="eight" placeholder="Phone Number" value="<?php echo set_value('phone')?>"/>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend><?php echo $this->lang->line('message_login_detail');?></legend>
			<div class="row">
				<div class="two mobile-one columns">
				<label class="right inline">Email</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="email" type="text" placeholder="e.g. admin@stylobag.com" class="eight"  value="<?php echo set_value('email')?>"/>
				</div>
			</div>
			<div class="row">
				<div class="two mobile-one columns">
				<label class="right inline">Password</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="password" type="password" class="eight" />
				</div>
			</div>
			<div class="row">
				<div class="two mobile-one columns">
				<label class="right inline">Confirm Password</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="confirmpassword" type="password" class="eight" />
				</div>
			</div>
		</fieldset>
		<input class="button medium" type="submit">
		</form>
    </div>
<?php echo $this->load->view('include/footer_page');?>
</div>
</body>
</html>
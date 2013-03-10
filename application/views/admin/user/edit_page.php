<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
			<?php
			foreach($user as $row)
			{
		?>
		<?php echo form_open("admin/user/edit/$row->user_id"); ?>
		<fieldset>
			<h4>Edit Your Detail Information</h4>
			<hr>
			<?php echo validation_errors('<p><label class="error">','</label></p>'); ?>
			<div class="row-fluid">
				<div class="span3">
				<label class="right inline">Full Name</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="fullName" placeholder="Full Name" type="text" class="five" value="<?php echo $row->user_name?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
				<label class="right inline">Address</label>
				</div>
				<div class="ten mobile-three columns">
				<textarea class="five" name="address" placeholder="Shipping Address"><?php echo $row->user_address;?></textarea>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
				<label class="right inline">Postcode</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="zipcode" type="text" class="three" placeholder="Postcode" value="<?php echo $row->user_zip_code;?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
				<label class="right inline">City</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="city" type="text" class="three" placeholder="City" value="<?php echo $row->user_city;?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
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
			<div class="row-fluid">
				<div class="span3">
				<label class="right inline">Group</label>
				</div>
				<div class="ten mobile-three columns">
					<select name="group" class="three">
						<?php
							foreach($group as $item)
							{
						?>
						<option value="<?php echo $item->group_id;?>"><?php echo $item->group_name;?></option>
						<?php
							}
						?>
					</select>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
				<label class="right inline">Phone</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="phone" type="text" class="three" placeholder="Phone Number" value="<?php echo $row->user_phone;?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
				<label class="right inline">Email</label>
				</div>
				<div class="ten mobile-three columns">
				<input name="email" type="text" placeholder="e.g. admin@stylobag.com" class="three"  value="<?php echo $row->user_email;?>"/>
				</div>
			</div>
		</fieldset>
		<input class="btn btn-primary" value="Save" type="submit">
		<?php
				}
		?>
		</form>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
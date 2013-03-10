<?php echo $this->load->view('include/header_page'); ?>
    <div class="row twelve columns">
	<fieldset>
		<legend>Add New Group</legend>
	<div class="twelve columns">
			<?php echo form_open_multipart('admin/group/add'); ?>
				<?php echo validation_errors('<p><label class="error">','</label></p>'); ?>
					<div class="row">
						<div class="two mobile-one columns">
							<label class="right inline">Name</label>
						</div>
						<div class="ten mobile-three columns">
							<input type="text" name="groupName" placeholder="Group Name" class="four" value="<?php echo set_value('groupName')?>"/>
						</div>
					</div>
					<div class="row">
						<div class="two mobile-one columns">
							<label class="right inline">Permission</label>
						</div>
						<div class="ten mobile-three columns">
							<input type="text" name="groupPermission" placeholder="Group Permission" class="four" value="<?php echo set_value('groupPermission')?>"/>
						</div>
					</div>
					<div class="row">
						<div class="two mobile-one columns">
							<label class="right inline">Discount</label>
						</div>
						<div class="ten mobile-three columns">
							<input type="text" name="groupDiscount" placeholder="Group Discount" class="three" value="<?php echo set_value('groupDiscount')?>">
						</div>
					</div>
	</div>
				<input type="submit" class="button">
			</form>
		<p></p>
	</div>
	</fieldset>
    </div>
<?php echo $this->load->view('include/footer_page');?>
</div>
</body>
</html>

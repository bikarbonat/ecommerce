<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
			<h3>Add New Category</h3>
			<hr>
			<?php
				foreach($category as $row)
				{
			?>
			<?php echo form_open_multipart("admin/category/edit/$row->category_id"); ?>
			<?php echo validation_errors('<p><label class="error">','</label></p>'); ?>
				<div class="row-fluid">
					<div class="span3">
						<label class="right inline">Name</label>
					</div>
					<div class="span6">
						<input type="text" name="categoryName" placeholder="Category Name" class="eight" value="<?php echo $row->category_name?>"/>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span3">
						<label class="right inline">Url</label>
					</div>
					<div class="span6">
						<input type="text" name="categorySlug" placeholder="Url" class="eight" value="<?php echo $row->category_slug?>"/>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span3">
						<label>Parent</label>
					</div>
					<div class="span6">
						<select name="categoryParent">
							<option value="0">Top Level Category</option>
							<?php
							$parent = $row->category_parent_id;
								if(isset($category_all))
								{
									foreach($category_all as $row2)
									{
							?>
							<option <?php if($row2->category_id == $parent) echo "selected='selected'";?> value="<?php echo $row2->category_id;?>"><?php echo $row2->category_name;?></option>
							<?php }} ?>
						</select>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span3">
						<label class="right inline">Sequence</label>
					</div>
					<div class="span6">
						<input type="text" name="categorySequence" placeholder="Sequance" class="three" value="<?php echo $row->category_sequence;?>">
					</div>
				</div>
				<div class="row-fluid">
					<div class="span3">
						<label class="right inline">Description</label>
					</div>
					<div class="span9">	
						<textarea name="categoryDescription" id="content" placeholder="On sale price"><?php echo $row->category_description;?></textarea>
						<script type="text/javascript">
							CKEDITOR.replace( 'content' );
						</script>
					</div>
				</div>
				<input type="submit" class="btn btn-primary" value="Save">
				<a href="<?php echo site_url('admin/category');?>" class="btn">Back</a>
			</form>
			<?php } ?>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
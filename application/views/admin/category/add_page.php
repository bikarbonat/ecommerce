<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
			<h3>Add New Category</h3>
			<hr>
			<?php echo form_open_multipart('admin/category/add'); ?>
			<?php echo validation_errors(); ?>
			<div class="row-fluid">
				<div class="span3">
					<label>Name</label>
				</div>
				<div class="span6">
					<input type="text" name="categoryName" placeholder="Category Name">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Url</label>
				</div>
				<div class="span6">
					<input type="text" name="categorySlug" placeholder="Category Url">
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
							if(isset($category))
							{
								foreach($category as $row)
								{
						?>
						<option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
						<?php }} ?>
					</select>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Sequence</label>
				</div>
				<div class="span6">
					<input type="text" name="categorySequence" placeholder="Sequence" >
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Description</label>
				</div>
				<div class="span9">	
					<textarea name="productDescription" id="content"></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'content' );
					</script>
				</div>
			</div>
			<input type="submit" class="btn btn-primary" value="Save">
			<a href="<?php echo site_url('admin/category')?>" class="btn">Back</a>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
			<h3>Add New Product</h3>
			<hr>
			<?php echo form_open_multipart('admin/product/add'); ?>
			<?php echo validation_errors('<div class="alert">' , '</div>'); ?>
			<div class="row-fluid">
				<div class="span3">
					<label>Name</label>
				</div>
				<div class="span6">
					<input type="text" name="productName" id = "string" placeholder="Product Name" class="eight" value="<?php echo set_value('productName')?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Url</label>
				</div>
				<div class="span6">
					<input type="text" name="productSlug" id="permalink" placeholder="Product Url" class="eight" value="<?php echo set_value('productSlug')?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Code</label>
				</div>
				<div class="span6">
					<input type="text" name="productCode" placeholder="Product Code" class="three" value="<?php echo set_value('productCode')?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Image</label>
				</div>
				<div class="span6">
					<input type="file" name="files[]" multiple />
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Category</label>
				</div>
				<div class="span6">
					<select class="three" name="productCategory">
						<?php 
							foreach($category as $item)
							{
						?>
						<option value="<?php echo $item->category_id;?>"><?php echo $item->category_name;?></option>
						<?php
							}
						?>
					</select>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Quantity</label>
				</div>
				<div class="span6">
					<input type="text" name="productQuantity" placeholder="Product Quantity" class="three" value="<?php echo set_value('productQuantity')?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Weight</label>
				</div>
				<div class="span6">
					<input type="text" name="productWeight" placeholder="Product Weight in gram" class="three" value="<?php echo set_value('productWeight')?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Normal Price</label>
				</div>
				<div class="span6">
					<input type="text" name="productPrice" placeholder="No sale price" class="three" value="<?php echo set_value('productPrice')?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Sale Price</label>
				</div>
				<div class="span6">
					<input type="text" name="productSaleprice" placeholder="On sale price" class="three" value="<?php echo set_value('productSaleprice')?>">
				</div>
			</div>
			<div class="row-fluid">
			<div class="span3">
				<label>Featured</label>
			</div>
			<div class="span6">
				<select class="three" name="productFeatured">
					<option value="1">Yes</option>
					<option value="0">No</option>
				</select>
			</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label>Description</label>
				</div>
				<div class="span9">	
					<textarea name="productDescription" id="content"><?php echo set_value('productDescription')?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'content' );
					</script>
				</div>
			</div>
			<input type="submit" class="btn btn-primary" value="Save">
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
			<h2>Update Product</h2>
			<hr>
			<?php
				if(isset($product))
				{
					foreach($product as $row)
					{
			?>
			<?php echo form_open_multipart('admin/product/edit/'/$row->product_id); ?>
			<?php echo validation_errors('<div class="alert">' , '</div>'); ?>
			<div class="row-fluid">
				<div class="span3">
					<label class="right inline">Name</label>
				</div>
				<div class="span6">
					<input type="text" name="productName" placeholder="Product Name" class="eight" value="<?php echo $row->product_name;?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label class="right inline">Url</label>
				</div>
				<div class="span6">
					<input type="text" name="productSlug" placeholder="Product Url" class="eight" value="<?php echo $row->product_slug;?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label class="right inline">Code</label>
				</div>
				<div class="span6">
					<input type="text" name="productCode" placeholder="Product Code" class="three" value="<?php echo $row->product_code;?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label class="right inline">Image</label>
				</div>
				<div class="span6">
					<input type="file" name="userfile">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label class="right inline">Category</label>
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
					<label class="right inline">Quantity</label>
				</div>
				<div class="span6">
					<input type="text" name="productQuantity" placeholder="Product Quantity" class="three" value="<?php echo $row->product_quantity;?>"/>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label class="right inline">Weight</label>
				</div>
				<div class="span6">
					<input type="text" name="productWeight" placeholder="Product Weight in gram" class="three" value="<?php echo $row->product_weight;?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label class="right inline">Normal Price</label>
				</div>
				<div class="span6">
					<input type="text" name="productPrice" placeholder="No sale price" class="three" value="<?php echo $row->product_price;?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<label class="right inline">Sale Price</label>
				</div>
				<div class="span6">
					<input type="text" name="productSaleprice" placeholder="On sale price" class="three" value="<?php echo $row->product_saleprice;?>">
				</div>
			</div>
			<div class="row-fluid">
			<div class="span3">
				<label class="right inline">Featured</label>
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
					<label class="right inline">Description</label>
				</div>
				<div class="span9">	
					<textarea name="productDescription" id="content" placeholder="On sale price"><?php echo $row->product_description;?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'content' );
					</script>
				</div>
			</div>
			<input type="submit" value="Save" class="btn btn-primary">
			<?php }} ?>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<h3>Manage Product</h3>
		<hr>
		<p>
		<a href="<?php echo site_url('admin/product/add');?>" class="btn btn-primary">Add Product</a>
		<a href="<?php echo site_url('admin/category');?>" class="btn">Manage Category</a>
		</p>
		<table class="table table-bordered table-striped">
		  <thead>
			<tr>
			  <th>Name</th>
			  <th>Price</th>
			  <th>Sale Price</th>
			  <th>Quantity</th>
			  <th>Code</th>
			  <th>Action</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				foreach($product as $row)
				{
			?>
			<tr>
			<td>
				<input type="hidden" name="id[]" value="<?php echo $row->product_id;?>">
				<input name="name[]" type="text" value="<?php echo $row->product_name;?>">
			</td>
			<td>
				<input name="price[]" type="text" value="<?php echo $row->product_price;?>">
			</td>
			<td>
				<input name="saleprice[]" type="text" value="<?php echo $row->product_saleprice;?>">
			</td>
			<td><?php echo $row->product_quantity;?></td>
			<td><?php echo $row->product_code;?></td>
			<td>
			<a href="<?php echo site_url("admin/product/edit/$row->product_id");?>" rel="tooltip" data-placement="top" title="Update Product"><i class="icon-edit"></i></a>
			<a href="<?php echo site_url("product/$row->product_slug");?>" rel="tooltip" data-placement="top" title="View Product"><i class="icon-eye-open"></i></a>
			<a href="<?php echo site_url("admin/product/delete/$row->product_id");?>" rel="tooltip" data-placement="top" title="Remove Product"><i class="icon-remove"></i></a>
			</td>
			</tr>
			<?php
				}
			?>
		  </tbody>
		</table>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<h3>Manage Category</h3>
		<hr>
		<p>
		<a href="<?php echo site_url('admin/category/add')?>" class="btn">Add Category</a>
		</p>
		<?php
			$message = $this->session->flashdata('message');
			if(isset($message))
			{
				echo $message;
			}
		?>	
		<table class="twelve table table-bordered" id="example">
		  <thead>
			<tr>
			  <th>Name</th>
			  <th>Url</th>
			  <th></th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				foreach($category as $row)
				{
			?>
			<tr>
			<td><?php echo $row->category_name;?></td>
			<td><?php echo $row->category_slug;?></td>
			<td>
			<a href="<?php echo site_url("admin/category/edit/$row->category_id");?>" rel="tooltip" data-placement="top" title="Update Category"><i class="icon-edit"></i></a>
			<a href="<?php echo site_url("admin/category/delete/$row->category_id");?>" rel="tooltip" data-placement="top" title="Remove Category"><i class="icon-remove"></i></a>
			</tr>
			<?php
				}
			?>
		  </tbody>
		</table>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
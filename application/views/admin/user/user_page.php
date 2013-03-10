<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<h3>Manage User</h3>
		<hr>
		<table class="table table-bordered table-striped" id="example">
		  <thead>
			<tr>
			  <th>Name</th>
			  <th>Email</th>
			  <th>Phone</th>
			  <th>Account</th>
			  <th></th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				foreach($user as $row)
				{
			?>
			<tr>
			<td><?php echo $row->user_name;?></td>
			<td><?php echo $row->user_email;?></td>
			<td><?php echo $row->user_phone;?></td>
			<td>
			<?php
				echo $this->Group_Model->getName($row->group_id);
			?>
			</td>
			<td>
			<a href="<?php echo site_url("admin/user/edit/$row->user_id");?>" rel="tooltip" data-placement="top" title="Update User"><i class="icon-edit"></i></a>
			<a href="<?php echo site_url("admin/user/delete/$row->user_id");?>" rel="tooltip" data-placement="top" title="Remove User"><i class="icon-remove"></i></a>
			<a href="<?php echo site_url("admin/user/delete/$row->user_id");?>" rel="tooltip" data-placement="top" title="Reset Password"><i class="icon-exclamation-sign"></i></a>
			</tr>
			<?php
				}
			?>
		  </tbody>
		</table>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
<?php echo $this->load->view('include/header_page'); ?>
    <div class="row twelve columns">
		<a href="<?php echo base_url()?>admin/group/add" class="radius tiny button" >Add New Group</a>
		<hr>
		<h4>Manage Group</h4>
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
			  <th>Permission</th>
			  <th>Discount</th>
			  <th>Action</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				foreach($group as $row)
				{
			?>
			<tr>
			<td><?php echo $row->group_name;?></td>
			<td><?php echo $row->group_permission;?></td>
			<td><?php echo $row->group_discount;?></td>
			<td>
			<?php echo anchor('admin/group/edit/'.$row->group_id,'Edit');?>
			<?php echo anchor('admin/group/delete/'.$row->group_id,'Delete');?>
			</td>
			</tr>
			<?php
				}
			?>
		  </tbody>
		</table>
    </div>
<?php echo $this->load->view('include/footer_page');?>
</div>
</body>
</html>

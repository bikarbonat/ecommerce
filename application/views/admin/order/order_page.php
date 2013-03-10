<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
			<div class="span12">
				<h3>Manage Order</h3>
				<hr>
				<ul id="myTab" class="nav nav-tabs">
				  <li class="active"><a href="#pending" data-toggle="tab">Pending</a></li>
				  <li><a href="#processing" data-toggle="tab">Processing</a></li>
				  <li><a href="#delivering" data-toggle="tab">Delivering</a></li>
				  <li><a href="#delivered" data-toggle="tab">Delivered</a></li>
				  <li><a href="#cancelled" data-toggle="tab">Cancelled</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
				  <div class="tab-pane fade in active" id="pending">
					<form method="post" action ="<?php echo site_url('admin/order/update');?>">
					<table class="twelve table table-bordered" id="example">
					  <thead>
						<tr>
						  <th>Order</th>
						  <th>Customer</th>
						  <th>Ordered On</th>
						  <th>Status</th>
						  <th>Total</th>
						  <th></th>
						</tr>
					  </thead>
					  <tbody>
						<?php
							foreach($pending as $row)
							{
						?>
						<tr>
						<td><?php echo $row->order_number;?></td>
						<td><?php echo $row->user_name;?></td>
						<td><?php echo $row->order_date;?></td>
						<td>
						<select name = "status[]" class="span9">
							<option selected = "selected" value="1">Pending</option>
							<option value="2">Processing</option>
							<option value="3">Delivering</option>
							<option value="4">Delivered</option>
							<option value="5">Cancelled</option>
						</select>
						<input type="hidden" name="id[]" value="<?php echo $row->order_id;?>">
						</td>
						<td>RM <?php echo $row->order_total;?></td>
						<td>
						<a href="" class="btn" rel="tooltip" data-placement="top" title="Email Invoice to Customer"><i class="icon-envelope-alt"></i> Email Invoice</a>
						<a href="<?php echo site_url('invoice/'.$row->order_number);?>" rel="tooltip" data-placement="top" title="View Invoice"><i class="icon-eye-open"></i></a>
						</td>
						</tr>
						<?php
							}
						?>
					  </tbody>
					</table>
					<input type="submit" class="btn" value="Update">
					</form>
				  </div>
				  <div class="tab-pane fade" id="processing">
					<form method="post" action ="<?php echo site_url('admin/order/update');?>">
					<table class="twelve table table-bordered" id="example">
					  <thead>
						<tr>
						  <th>Order</th>
						  <th>Customer</th>
						  <th>Ordered On</th>
						  <th>Status</th>
						  <th>Total</th>
						  <th></th>
						</tr>
					  </thead>
					  <tbody>
						<?php
							foreach($processing as $row)
							{
						?>
						<tr>
						<td><?php echo $row->order_number;?></td>
						<td><?php echo $row->user_name;?></td>
						<td><?php echo $row->order_date;?></td>
						<td>
						<select name = "status[]" class="span9">
							<option value="1">Pending</option>
							<option selected = "selected" value="2">Processing</option>
							<option value="3">Delivering</option>
							<option value="4">Delivered</option>
							<option value="5">Cancelled</option>
						</select>
						<input type="hidden" name="id[]" value="<?php echo $row->order_id;?>">
						</td>
						<td>RM <?php echo $row->order_total;?></td>
						<td>
						<a href="<?php echo site_url('invoice/'.$row->order_number);?>" rel="tooltip" data-placement="top" title="View Invoice"><i class="icon-eye-open"></i></a>
						</td>
						</tr>
						<?php
							}
						?>
					  </tbody>
					</table>
					<input type="submit" class="btn" value="Update">
					</form>
				  </div>
				  <div class="tab-pane fade" id="delivering">
					<form method="post" action ="<?php echo site_url('admin/order/update');?>">
					<table class="twelve table table-bordered" id="example">
					  <thead>
						<tr>
						  <th>Order</th>
						  <th>Customer</th>
						  <th>Ordered On</th>
						  <th>Status</th>
						  <th>Total</th>
						  <th></th>
						</tr>
					  </thead>
					  <tbody>
						<?php
							foreach($delivering as $row)
							{
						?>
						<tr>
						<td><?php echo $row->order_number;?></td>
						<td><?php echo $row->user_name;?></td>
						<td><?php echo $row->order_date;?></td>
						<td>
						<select name = "status[]" class="span9">
							<option value="1">Pending</option>
							<option value="2">Processing</option>
							<option selected = "selected" value="3">Delivering</option>
							<option value="4">Delivered</option>
							<option value="5">Cancelled</option>
						</select>
						<input type="hidden" name="id[]" value="<?php echo $row->order_id;?>">
						</td>
						<td>RM <?php echo $row->order_total;?></td>
						<td>
						<a href="<?php echo site_url('invoice/'.$row->order_number);?>" rel="tooltip" data-placement="top" title="View Invoice"><i class="icon-eye-open"></i></a>
						</td>
						</tr>
						<?php
							}
						?>
					  </tbody>
					</table>
					<input type="submit" class="btn" value="Update">
					</form>
				  </div>
				  <div class="tab-pane fade" id="delivered">
					<form method="post" action ="<?php echo site_url('admin/order/update');?>">
					<table class="twelve table table-bordered" id="example">
					  <thead>
						<tr>
						  <th>Order</th>
						  <th>Customer</th>
						  <th>Ordered On</th>
						  <th>Status</th>
						  <th>Total</th>
						  <th></th>
						</tr>
					  </thead>
					  <tbody>
						<?php
							foreach($delivered as $row)
							{
						?>
						<tr>
						<td><?php echo $row->order_number;?></td>
						<td><?php echo $row->user_name;?></td>
						<td><?php echo $row->order_date;?></td>
						<td>
						<select name = "status[]" class="span9">
							<option value="1">Pending</option>
							<option value="2">Processing</option>
							<option value="3">Delivering</option>
							<option selected = "selected" value="4">Delivered</option>
							<option value="5">Cancelled</option>
						</select>
						<input type="hidden" name="id[]" value="<?php echo $row->order_id;?>">
						</td>
						<td>RM <?php echo $row->order_total;?></td>
						<td>
						<a href="<?php echo site_url('invoice/'.$row->order_number);?>" rel="tooltip" data-placement="top" title="View Invoice"><i class="icon-eye-open"></i></a>
						</td>
						</tr>
						<?php
							}
						?>
					  </tbody>
					</table>
					<input type="submit" class="btn" value="Update">
					</form>
				  </div>
				  <div class="tab-pane fade" id="cancelled">
					<form method="post" action ="<?php echo site_url('admin/order/update');?>">
					<table class="twelve table table-bordered" id="example">
					  <thead>
						<tr>
						  <th>Order</th>
						  <th>Customer</th>
						  <th>Ordered On</th>
						  <th>Status</th>
						  <th>Total</th>
						  <th></th>
						</tr>
					  </thead>
					  <tbody>
						<?php
							foreach($cancelled as $row)
							{
						?>
						<tr>
						<td><?php echo $row->order_number;?></td>
						<td><?php echo $row->user_name;?></td>
						<td><?php echo $row->order_date;?></td>
						<td>
						<select name = "status[]" class="span9">
							<option value="1">Pending</option>
							<option value="2">Processing</option>
							<option value="3">Delivering</option>
							<option value="4">Delivered</option>
							<option selected = "selected" value="5">Cancelled</option>
						</select>
						<input type="hidden" name="id[]" value="<?php echo $row->order_id;?>">
						</td>
						<td>RM <?php echo $row->order_total;?></td>
						<td>
						<a href="<?php echo site_url('invoice/'.$row->order_number);?>" rel="tooltip" data-placement="top" title="View Invoice"><i class="icon-eye-open"></i></a>
						</td>
						</tr>
						<?php
							}
						?>
					  </tbody>
					</table>
					<input type="submit" class="btn" value="Update">
					</form>
				  </div>
				</div>
			</div>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>

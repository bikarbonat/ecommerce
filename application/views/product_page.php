<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<?php echo $this->load->view('include/sidebar_right');?>
			<div class="span9">
			  <div class="row-fluid">
			  <?php
				if(isset($product))
				{
					foreach($product as $row)
					{
			  ?>
			<ul class="breadcrumb">
				<li><a href="<?php echo site_url();?>">Home</a> <span class="divider">/</span></li>
				<li><a href="<?php echo site_url('category/'.$row->category_slug);?>"><?php echo $row->category_name;?></a> <span class="divider">/</span></li>
				<li class="active"><?php echo $row->product_name;?></li>
			</ul>
			  <h3 align="center"><?php echo $row->product_name;?></h3>
			  <legend></legend>
			  <div class="row-fluid">
			  <div class="span6 gallery">
				<a href="<?php echo base_url('images/'.$row->product_image)?>" rel="prettyPhoto"><img src="<?php echo base_url('images/'.$row->product_image)?>"></a>
			  </div>
			  <div class="span6">
				<h3>RM <?php echo $row->product_price;?></h3>
				<a class="btn btn-success" href="<?php echo site_url('cart/add/'.$row->product_slug);?>">Add To Cart</a>
			  </div>
			  </div>
			  <?php } } ?>
			  </div>
			  <hr>
			  <div class="row-fluid">
			  <div class="well">
				<ul id="myTab" class="nav nav-tabs">
				  <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
				  <li><a href="#comment" data-toggle="tab">Comment</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
				  <div class="tab-pane fade in active" id="description">
					<h3>Product Description</h3>
					<?php echo $row->product_description;?>
					<a href="<?php echo site_url('category/'.$row->category_slug);?>"><span class="label label-warning"><?php echo $row->category_name; ?></span></a>
				  </div>
				  <div class="tab-pane fade" id="comment">
					Facebook Comment
				  </div>
				</div>
			  </div>
			  </div>
			  <div class="row-fluid">
			  Related Product
			  </div>
			</div>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>

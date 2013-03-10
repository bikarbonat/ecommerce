<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<?php echo $this->load->view('include/sidebar_right');?>
			<div class="span9">
			<div class="row-fluid">
			<div class="well well-small">
			Recent Products
				<div class="pull-right">
				View Format <a href="" title="list view"><img class="block-view" style="background-position: -0px -34px; min-width: 24px; height: 24px"></a> <a href="" title="grid view"><img class="block-view" style="background-position: -0px -0px; min-width: 24px; height: 24px"></a>
				</div>
			</div>
			</div>
			<div class="row-fluid">
				<?php
				if(isset($product))
				{
					$num = 1;
					foreach($product as $row)
					{
				?>
              <div class="span4 product">
                <div class="row-fluid">
					<h2><?php echo character_limiter($row->product_name, 15);;?></h2>
				</div>
				<div class="row-fluid">
				  <!-- <span class="badge badge-success onsale">Sale!</span> -->
                  <a href="<?php echo site_url('product/'.$row->product_slug);?>"><img src="<?php echo base_url('images/thumb/'.$row->product_image)?>" title = "<?php echo $row->product_name;?>" alt="<?php echo $row->product_name;?>"></a>
                  <div align="center">
				  <span class="label label-info">RM <?php echo $row->product_price;?></span>
				  <!-- <a class="btn btn-success" href="<?php echo site_url('cart/add/'.$row->product_slug);?>">Add To Cart</a> -->
				  </div>
                </div>
              </div>
			  <?php 
			  if($num == 3)
			  {
			  $num = 0;
			  ?>
			  </div>
			  <hr>
			  <div class="row-fluid">
			  <?php
			  }
			  $num++;
			  } 
			  } 
			  ?>
			  </div>
			</div>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>

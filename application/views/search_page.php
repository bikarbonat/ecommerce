<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<?php echo $this->load->view('include/sidebar_right');?>
			<div class="span9">
			<div class="row-fluid">
				<p>
				<ul class="breadcrumb">
				  <li>Search Keyword <span class="divider">/</span></li>
				  <li class="active">
				<?php 
				$search = $this->input->get('s');
				if(isset($search)) echo $search;?></li></ul>
				</p>
				<?php
				if(isset($product))
				{
					$num = 0;
					foreach($product as $row)
					{
			  ?>
              <div class="span3 boxed">
                <div class="">
				  <!-- <span class="badge badge-success onsale">Sale!</span> -->
                  <a href="<?php echo site_url('product/'.$row->product_slug);?>"><img class="img-polaroid" src="<?php echo base_url('images/thumb/'.$row->product_image)?>" title = "<?php echo $row->product_name;?>" alt="<?php echo $row->product_name;?>"></a>
                  <div align="center">
				  <span class="label label-large label-important"><?php echo $row->product_name;?></span><br/>
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

<div class="span3 hidden-phone">
	<form method="get" action="<?php echo site_url('search')?>">
		<input type="text" name="s" placeholder="Type and Hit Enter to Search">
	</form>
	<p>
	<?php if($this->cart->total_items() > 0)
	{
	?>
	<a href="<?php echo site_url('cart')?>"><span class="label label-important"><i class="icon-shopping-cart"></i> <?php echo $this->cart->total_items();?>&nbsp; items in your cart</span></a>
	<?php
	}
	?>
	</p>
	<div class="row-fluid">
	<h4>Categories</h4>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="border : none; display: block; position: static; margin-bottom: 5px;">
	<?php
		$category = $this->Category_Model->getAll();
		foreach($category as $row)
		{
	?>
	  <li><a href="<?php echo site_url('category/'.$row->category_slug);?>"><?php echo $row->category_name;?></a></li>
	<?php } ?>
	</ul>
	</div>
	<hr>
	<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Ffacebook.com%2Fstylobag&amp;width=230&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:230px; height:290px;" allowTransparency="true"></iframe>
</div>
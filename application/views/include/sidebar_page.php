	<div class="three mobile-three columns">
		<h4>Search</h4>
		<form action="<?php echo base_url()?>search" method="post">
			<input type="text" name="search">
		</form>
		<?php if($this->cart->total_items() > 0)
		{
		?>
		<h4>Cart</h4>
		<div class="panel callout radius" align="center">
		<a href="<?php echo base_url()?>cart"><h6><?php echo $this->cart->total_items();?>&nbsp; items in your cart</h6></a>
		</div>
		<?php
		}
		?>
		<h4>Categories</h4>
		<ul class="nav-bar vertical">
			<?php
				$query = $this->db->get('category');
				foreach($query->result() as $row)
				{
			?>
			<li><?php echo anchor("category/$row->category_slug",$row->category_name);?></li>
			<?php
				}
			?>
		</ul>
		<div class="fb-like-box" data-href="http://www.facebook.com/stylobag" data-width="200" data-show-faces="true" data-stream="false" data-header="true"></div>
		<a href="#">
		</a>
	</div>
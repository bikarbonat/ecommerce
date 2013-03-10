<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<?php echo $this->load->view('include/sidebar_right');?>
			<div class="span9">
				<div class="row-fluid">
					<?php
					if(isset($message))
					{
					echo $message;
					}
					?>
				</div>
			</div>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>

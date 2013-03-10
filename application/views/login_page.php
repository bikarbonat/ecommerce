<?php echo $this->load->view('include/header_page');?>
		<div class="row-fluid">
		<?php echo $this->load->view('include/sidebar_right');?>
			<div class="span9">
				<form class="form-signin" method="post" action="<?php echo site_url('login/validate_user');?>">
					<h2 class="">Login Page</h2>
					<p>Not a member ? <a href="<?php echo site_url('register');?>">Register Now</a></p>
					<hr>
					<input type="text" name="email" class="span4 input-block-level" placeholder="Email address">
					<input type="password" name="password" class="span4 input-block-level" placeholder="Password">
					<br/>
					<input class="btn btn-primary" type="submit" value="Sign In">
				  </form>
			</div>
		</div>
		<hr>
<?php echo $this->load->view('include/footer_page');?>
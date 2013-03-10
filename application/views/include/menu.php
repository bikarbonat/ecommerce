<?php
	if($this->login_lib->is_logged_in())
	{
	if($this->login_lib->user_level() == 1)
	{
?>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="<?php echo site_url();?>">Stylobag</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo site_url()?>"><i class="icon-home"></i>Home</a></li>
              <li><a href="<?php echo site_url('admin')?>"><i class="icon-dashboard"></i>Dashboard</a></li>
              <li><a href="<?php echo site_url('admin/order')?>">Order</a></li>
              <li><a href="<?php echo site_url('admin/user')?>"><i class="icon-user"></i>User</a></li>
              <li><a href="<?php echo site_url('admin/product')?>">Product</a></li>
              <li><a href="<?php echo site_url('logout')?>"><i class="icon-signout"></i>Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<?php
	}
	else
	{
		if($this->login_lib->user_level() == 2)
		{
?>
<?php
		}
		else
		{
?>
<?php
		}
	}
	}
	else
	{
?>
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="<?php echo site_url();?>">Stylobag</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo site_url()?>"><i class="icon-home"></i>Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
		  <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li><a href="<?php echo site_url('login')?>"><i class="icon-signin"></i>Login</a></li>
              <li><a href="<?php echo site_url('register')?>"><i class="icon-plus-sign"></i>Register</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<?php
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Stylo Men And Women Bag</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<script type="text/javascript" src="<?php echo base_url() ?>/ckeditor/ckeditor.js"></script>
	
    <style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			background: url(<?php echo base_url('assets/img/pattern.png');?>) whitesmoke;
		}
		
		.thumbnail
		{
				text-align:center;
				background-color:#f4f4f4;
				border:1px solid #ccc;
				float:left;
				margin:5px 1%;
				padding:10px 2% 15px;
				position:relative;
				z-index:5;
				box-sizing:border-box;
				-moz-box-sizing:border-box;
				-webkit-box-sizing:border-box;
				
				box-shadow:0 0 3px #ccc;
				-moz-box-shadow:0 0 3px #ccc;
				-webkit-box-shadow:0 0 3px #ccc;
				
				transform: scale(1);
				-moz-transform: scale(1);
				-webkit-transform: scale(1);
				
				transition: background-color 1s, box-shadow 1s, transform 0.5s;
				-moz-transition: background-color 1s, -moz-box-shadow 1s, -moz-transform 0.5s;
				-webkit-transition: background-color 1s, -webkit-box-shadow 1s, -webkit-transform 0.5s;
				-o-transition: background-color 1s, -o-box-shadow 1s, -o-transform 0.5s;
			}
			.thumbnail:hover{
				background-color:#fff;
				z-index:10;
				
				box-shadow:0 0 15px #333;
				-moz-box-shadow:0 0 15px #333;
				-webkit-box-shadow:0 0 15px #333;
				
				transform: scale(1.1);
				-moz-transform: scale(1.1);
				-webkit-transform: scale(1.1);
			}
			th
			{
				background : #D8D8D8;
			}
			.wrapper
			{
				margin : 0 auto;
				background : white;
				padding: 10px;
				width:990px;
			}
			.title
			{
				background : blue;
				color : white;
				text-align : center;
				padding-top : 2px;
				padding-bottom : 2px;
			}
			.product
			{
				border : 1px solid gray;
				text-align : center;
				padding : 2px;
			}
			.product h2 
			{ 
				font:bold 11px Verdana, Arial, Helvetica, sans-serif; 
				text-transform:uppercase; 
				line-height:24px; 
				display:block; 
				background:#f7f7f7; 
				padding:5px 0 5px 0; 
				margin-bottom:15px; 
				border-bottom:1px solid #ececec; 
				margin-top:1px;
			}
			.block-view
			{
				background:url(<?php echo base_url('assets/img/view-type.png') ?>);
			}
			.navbar
			{
				border-top: 5px solid #268df3;
				background: #fff;
				-moz-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16);
				-webkit-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16);
				box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16);
				z-index: 999999;
			}
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
    <body>
	<?php echo $this->load->view('include/menu');?>
    <div class="container wrapper">
		<div class="row-fluid header" align="center">
		<img src="<?php echo base_url('assets/img/header.jpg');?>">
		</div>
		<!--
		<div class="row-fluid">
			<div class="navbar">
			  <div class="navbar-inner">
				<ul class="nav">
				  <li class="active"><a href="#">Category A</a></li>
				  <li><a href="#">Category B</a></li>
				  <li><a href="#">Category C</a></li>
				</ul>
			  </div>
			</div>
		</div>
		-->
<!DOCTYPE html>
<html lang="en">   

<head>
	<?php echo $this->Html->charset(); ?>		
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">	
	<title><?php echo $this->fetch('title'); ?></title>

	<?php
	// echo $this->Html->meta('icon'); favicon
	/* Bootstrap core CSS */
	/* echo $this->Html->css('../plugins/bootstrap/css/bootstrap.min');				
	echo $this->Html->css('bootstrap-theme');
	echo $this->Html->css('../plugins/bootstrap/css/font-awesome.min');				
	echo $this->Html->css('animations');		
	echo $this->Html->css('superfish');		
	echo $this->Html->css('revolution-slider/css/settings');				
	echo $this->Html->css('revolution-slider/css/extralayers');				
	echo $this->Html->css('prettyPhoto');		
	echo $this->Html->css('style');
	echo $this->Html->css('global');		
	echo $this->Html->css('colors/blue');		
	echo $this->Html->css('theme-responsive');				
	echo $this->Html->css('switcher');		
	echo $this->Html->css('spectrum');		
	echo $this->Html->css('custom');		
	
	
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('../plugins/bootstrap/js/bootstrap.min');
	echo $this->Html->script('../plugins/validations/jquery.validate.min');
	echo $this->Html->script('../plugins/validations/additional-methods.min');*/
	echo $this->fetch('meta');
	echo $this->fetch('css');	
	?>       
</head>
<body>
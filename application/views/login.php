<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WeCue Admin Login</title>
	
    <!-- Reset -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/reset.css" /> 
    <!-- Main Style File -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/root.css" /> 
    <!-- Grid Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/grid.css" /> 
    <!-- Typography Elements -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/typography.css" /> 
    <!-- Jquery UI -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/jquery-ui.css" />
    <!-- Jquery Plugin Css Files Base -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/jquery-plugin-base.css" />
    
    <!--[if IE 7]>	  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/ie7-style.css" />	<![endif]-->
    
    <!-- jquery base -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.11.custom.min.js"></script>
    <!-- jquery plugins settings -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-settings.js"></script>
    <!-- toggle -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/toogle.js"></script>
    <!-- tipsy -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.tipsy.js"></script>
    <!-- uniform -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.uniform.min.js"></script>
    <!-- Jwysiwyg editor -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.wysiwyg.js"></script>
    <!-- table shorter -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.min.js"></script>
    <!-- raphael base and raphael charts -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/raphael.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/analytics.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popup.js"></script>
    <!-- fullcalendar -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script>
    <!-- prettyPhoto -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
    <!-- Jquery.UI Base -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.widget.js"></script>
    <!-- Slider -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.slider.js"></script>
    <!-- Date Picker -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.datepicker.js"></script>
    <!-- Tabs -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.tabs.js"></script>
    <!-- Accordion -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.accordion.js"></script>
    <!-- Google Js Api / Chart and others -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/https://www.google.com/jsapi"></script>
    <!-- Date Tables -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
	
        
    
</head>
<body>


	
    <div class="loginform">
    	<div class="title"> <img src="<?php echo base_url(); ?>assets/img/logo.png" width="112" height="35" /></div>
        <div class="body">
       	  <form id="form1" name="form1" method="post" action="<?php echo base_url(); ?>admin/login/send">
          	<label class="log-lab">Username</label>
            <input name="email" type="text" class="login-input-user" id="textfield" value="Admin"/>
          	<label class="log-lab">Password</label>
            <input name="password" type="password" class="login-input-pass" id="textfield" value="Password"/>
            <input type="submit" name="button" id="button" value="Login" class="button"/>
       	  </form>
        </div>
    </div>
    
    
    
    





</div>
</body>
</html>

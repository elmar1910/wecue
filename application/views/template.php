<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cupcake Premium Admin Template</title>
	
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
<div class="wrapper">




	<!-- START HEADER -->
    <div id="header">
    
    
    	<!-- logo -->
    	<div class="logo">	<a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/img/logo.png" width="112" height="35" alt="logo"/></a>	</div>
        
        
        <!-- notifications -->
        <div id="notifications">
        	<a href="<?php echo base_url(); ?>home" class="qbutton-left"><img src="<?php echo base_url(); ?>assets/img/icons/header/dashboard.png" width="16" height="15" alt="dashboard" /></a>
        	<a href="<?php echo base_url(); ?>#" class="qbutton-normal tips"><img src="<?php echo base_url(); ?>assets/img/icons/header/message.png" width="19" height="13" alt="message" /> <span class="qballon">23</span> </a>
        	<a href="<?php echo base_url(); ?>#" class="qbutton-right"><img src="<?php echo base_url(); ?>assets/img/icons/header/support.png" width="19" height="13" alt="support" /> <span class="qballon">8</span> </a>
          <div class="clear"></div>
        </div>
        
        
        <!-- quick menu -->
        <div id="quickmenu">
        	<a href="<?php echo base_url(); ?>#" class="qbutton-left tips" title="Add a new post"><img src="<?php echo base_url(); ?>assets/img/icons/header/newpost.png" width="18" height="14" alt="new post" /></a>
        	<a id="open-stats" href="<?php echo base_url(); ?>#" class="qbutton-right tips" title="Statistics"><img src="<?php echo base_url(); ?>assets/img/icons/header/graph.png" width="17" height="15" alt="graph" /></a>
            <div class="clear"></div>
        </div>
        
        
        <!-- profile box -->
        <div id="profilebox">
        	<a href="<?php echo base_url(); ?>#" class="display">
            	<img src="<?php echo base_url(); ?>assets/img/simple-profile-img.jpg" width="33" height="33" alt="profile"/>	<b>Logged in as</b>	<span><?php $result = $this -> user -> get_login_data(); echo $result['name']; ?></span>
            </a>
            
            <div class="profilemenu">
            	<ul>
                	<li><a href="<?php echo base_url(); ?>#">Account Settings</a></li>
                	<li><a href="<?php echo base_url(); ?>admin/logout/send">Logout</a></li>
                </ul>
            </div>
            
        </div>
        
        
        <div class="clear"></div>
    </div>
    <!-- END HEADER -->
    
    
    
    
    
    
    
    
    
    <!-- START MAIN -->
    <div id="main">
    
		
        
        
        
        <!-- START SIDEBAR -->
        <div id="sidebar">
        	
            <!-- start searchbox -->
            <div id="searchbox">
            	<div class="in">
               	  <form id="form1" name="form1" method="post" action="">
                  	<input name="textfield" type="text" class="input" id="textfield" onfocus="$(this).attr('class','input-hover')" onblur="$(this).attr('class','input')"  />
               	  </form>
            	</div>
            </div>
            <!-- end searchbox -->
            
            <!-- start sidemenu -->
            <div id="sidemenu">
            	<ul>
		    <li <?php echo ($active == 'dashboard' ? 'class="active"' : ''); ?>><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/icons/sidemenu/laptop.png" width="16" height="16" alt="icon"/>Dashboard</a></li>
		    <li <?php echo ($active == 'trainers'  ? 'class="active"' : ''); ?>><a href="<?php echo base_url(); ?>trainers"><img src="<?php echo base_url(); ?>assets/img/icons/sidemenu/user.png" width="16" height="16" alt="icon"/>Trainers</a></li>
                </ul>
            </div>
            <!-- end sidemenu -->
            
        </div>
        <!-- END SIDEBAR -->
        
        
        
        
        
        
        
        <!-- START PAGE -->
        <div id="page">
        	
            	<!-- start stats -->
                <div id="stats">
                    <!-- use it up/down on <b> tag for different colors -->
                	<div class="column">	<b>$326.45</b>	Earnings of today</div>
                	<div class="column">	<b>$96.25</b>	Earnings of last hour</div>
                	<div class="column">	<b>23.695</b>	Total Sales</div>
                	<div class="column">	<b class="down">46.230</b>	Active Comments</div>
                    <!-- this is last column -->
                	<div class="column last">	<b class="up">$3.928</b>	every per hours</div>
                    <a href="#" title="Close Stats" class="close tips">close</a>
                    <img src="<?php echo base_url(); ?>assets/img/icons/mini/stats-arrow-top.png" width="17" height="9" alt="arrow" class="arrow" />
                </div>
                <!-- end stats -->
            	
                
                <!-- start page title -->
                <div class="page-title">
                	<div class="in">
                    		<div class="titlebar">	<h2>DASHBOARD</h2>	<p>This is a quick overview of some features</p></div>
                            
                            <div class="shortcuts-icons">
                            	<a class="shortcut tips" href="#" title="Refresh"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/refresh.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Dashboard"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/dashboard.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Add New Item"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Search on This Page"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/search.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Dashboard is a quick overview of some features"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>
                            </div>
                            
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                
                
                
                
                
                
                
                	<!-- START CONTENT -->
                    <div class="content">
                    <?php echo $contents; ?>
                    
                    
                    
                    
                    
                    	
                    </div>
                    <!-- END CONTENT -->
                
            
            
            
            
            
            
        </div>
        <!-- END PAGE -->











    <div class="clear"></div>
    </div>
    <!-- END MAIN -->
    
    
    
    
    
    
    <!-- START FOOTER -->
    <div id="footer">
    	<div class="left-column">© Copyright 2012 - All rights reserved.</div>
        <div class="right-column">Cupcake theme by <a href="http://themeforest.net/user/egemem" target="_blank">egemem</a></div>
    </div>
    <!-- END FOOTER -->
    
    
    
    
    





</div>
</body>
</html>

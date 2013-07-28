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
		    <li class="active"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/icons/sidemenu/laptop.png" width="16" height="16" alt="icon"/>Dashboard</a></li>
		    <li><a href="<?php echo base_url(); ?>trainers"><img src="<?php echo base_url(); ?>assets/img/icons/sidemenu/user.png" width="16" height="16" alt="icon"/>Trainers</a></li>
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
                    
                    
                    
                    
                    
                    	<!-- start simple tips -->
                		<div class="simple-tips">
                        	<h2>Quick Help for New Member</h2>
                        	<ul>
                        		<li>1. Lorem ipsum dolor sit amet</li>
                        		<li>2. Watch the tutorial video</li>
                        		<li>3. Like it ? You can buy it <a href="#">here</a></li>
                        	</ul>
                            <a href="#" class="close tips" title="Close">close</a>
                        </div>
                        
                        
                            
                            	
                                <div class="albox dialogbox">
                                	<div class="icon"><img src="<?php echo base_url(); ?>assets/img/icons/16x16/note.png" width="16" height="16" alt="icon"/></div>
                                	<b>Hey there</b>, You have <b>3</b> new notes.  <a href="#">click here</a>
                                	<a href="#" class="close tips" title="close">close</a>
                                </div>
                            	
                        
                        
                        <!-- start dashbutton -->
                        <div class="grid740">
                        	<a href="#" class="dashbutton tips" title="Dashbutton with tipbox">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/bubbles.png" width="44" height="32" alt="icon" />	<b>Support Center</b>	contact with support</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/graph.png" width="44" height="32" alt="icon" />	<b>Daily Statistics</b>	see whats happened</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/image.png" width="44" height="32" alt="icon" />	<b>Upload A Photo</b>	add a new photo</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/map.png" width="44" height="32" alt="icon" />	<b>Google Maps</b>	check your location</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/personal-folder.png" width="44" height="32" alt="icon" />	<b>User Profiles</b>	user profiles details</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/creadit-card.png" width="47" height="32" alt="icon" />	<b>Creadit Card</b>	my credit cards</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/settings.png" width="39" height="32" alt="icon" />	<b>Settings</b>	theme settings</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/users.png" width="41" height="32" alt="icon" />	<b>Users</b>	new Members</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/frames.png" width="41" height="32" alt="icon" />	<b>Widgets</b>	manage your widgets</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url(); ?>assets/img/icons/dashbutton/applications.png" width="32" height="32" alt="icon" />	<b>Applications</b>	manage your application</a>
                           	<div class="clear"></div>
                        </div>
                        
                        
                        
                        
                        
                        
                        <!-- START CHART -->
                        <div class="simplebox grid740">
                        
                        	<div class="titleh"><h3>Chart</h3>
                            <div class="shortcuts-icons">
                            	<a class="shortcut tips" href="#" title="Info About This Widget"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Add New Item"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Search"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/search.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Refresh Data"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/refresh.png" width="25" height="25" alt="icon" /></a>
                            </div>
                            </div>
                            
                            <div class="body">
                            	
                                
                                
                                <!-- start chart -->
                                
        						<div class="chart">
                                <table id="data">
                                	<tfoot>
                                    	<tr>
                                        	<th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>13</th>
                                            <th>14</th>
                                            <th>15</th>
                                            <th>16</th>
                                            <th>17</th>
                                            <th>18</th>
                                            <th>19</th>
                                            <th>19</th>
                                            <th>20</th>
                                            <th>22</th>
                                            <th>23</th>
                                            <th>24</th>
                                            <th>25</th>
                                            <th>26</th>
                                            <th>27</th>
                                            <th>28</th>
                                            <th>29</th>
                                            <th>30</th>
                                            <th>31</th>
                                    	</tr>
                                	</tfoot>
                                    
                                    <tbody>
                                    	<tr>
                                        	<td>8</td>
                                            <td>25</td>
                                            <td>27</td>
                                            <td>25</td>
                                            <td>54</td>
                                            <td>59</td>
                                            <td>79</td>
                                            <td>47</td>
                                            <td>27</td>
                                            <td>44</td>
                                            <td>44</td>
                                            <td>51</td>
                                            <td>56</td>
                                            <td>83</td>
                                            <td>12</td>
                                            <td>91</td>
                                            <td>52</td>
                                            <td>12</td>
                                            <td>40</td>
                                            <td>8</td>
                                            <td>60</td>
                                            <td>29</td>
                                            <td>7</td>
                                            <td>33</td>
                                            <td>56</td>
                                            <td>25</td>
                                            <td>1</td>
                                            <td>78</td>
                                            <td>70</td>
                                            <td>68</td>
                                            <td>2</td>
                                    	</tr>
                                    </tbody>
                                </table>
                                <div id="holder"></div>
                                </div>
                                
                                <!-- end chart -->
                            
                            
                            </div>
                            
                        </div>
                        <!-- END CHART -->
                        
                        
                        
                        
                        
                        
                        <!-- START PIE CHART -->
                        <div class="simplebox grid360-right">
                        
                        	<div class="titleh"><h3>Pie Chart</h3>
                            <div class="shortcuts-icons">
                            	<a class="shortcut tips" href="#" title="Info About This Widget"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Add New Item"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Search"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/search.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Refresh Data"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/refresh.png" width="25" height="25" alt="icon" /></a>
                            </div>
                            </div>
                            
                            <div class="body">
                            	
   
   <!-- start pie chart javascript codes -->                             
    <script type="text/javascript">
    
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});
      
      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);
      
      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
        ['Mushrooms', 3],
        ['Onions', 1],
        ['Olives', 1], 
        ['Zucchini', 1],
        ['Pepperoni', 2]
      ]);

      // Set chart options
      var options = {'title':'How Much Pizza I Ate Last Night',
                     'width':350,
                     'height':300};

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));
      chart.draw(data, options);
    }
    </script>
   <!-- end pie chart javascript codes -->   

                             
                             
                                <!-- start chart div -->
                                <div id="piechart_div"></div>
                                <!-- end chart div -->
                            
                            
                            
                            </div>
                            
                        </div>
                        <!-- END PIE CHART -->
                        
                        
                        
                        
                        
                        
                        <!-- START COMBO CHART -->
                        <div class="simplebox grid360-left">
                        
                        	<div class="titleh"><h3>Combo Chart</h3>
                            <div class="shortcuts-icons">
                            	<a class="shortcut tips" href="#" title="Info About This Widget"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Add New Item"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Search"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/search.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Refresh Data"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/refresh.png" width="25" height="25" alt="icon" /></a>
                            </div>
                            </div>
                            
                            <div class="body">
                            	
   
<!-- start combo chart javascript codes -->                             
    <script type="text/javascript">
      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var rowData = [['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua  Guinea',
                        'Rwanda', 'Average'],
                       ['2004/05', 165, 938, 522, 998, 450, 614.6],
                       ['2005/06', 135, 1120, 599, 1268, 288, 682],
                       ['2006/07', 157, 1167, 587, 807, 397, 623],
                       ['2007/08', 139, 1110, 615, 968, 215, 609.4],
                       ['2008/09', 136, 691, 629, 1026, 366, 569.6]];
      
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable(rowData);
      
        // Create and draw the visualization.
        var ac = new google.visualization.ComboChart(document.getElementById('combochart'));
        ac.draw(data, {
          title : 'Monthly Coffee Production by Country',
          width: 330,
          height: 300,
          vAxis: {title: "Cups"},
          hAxis: {title: "Month"},
          seriesType: "bars",
          series: {2: {type: "line"}}
        });
      }

      google.setOnLoadCallback(drawVisualization);
    </script>
<!-- end combo chart javascript codes -->   

                             
                             
                                <!-- start chart div -->
                                <div id="combochart"></div>
                                <!-- end chart div -->
                            
                            
                            
                            </div>
                            
                        </div>
                        <!-- END COMBO CHART -->
                        
                        
                        
                        
                        
                        
                        <div class="clear"></div>
                        
                        
                        
                        
                        
                        
                        
                        <!-- START CALENDAR -->
                        <div id='calendar' class="grid740"></div>
                        <!-- END CALENDAR -->







                        <!-- start simplebox with shortcuts -->
                        <div class="simplebox grid740">
                        
                        	<div class="titleh">
                        	  <h3>Simple Box With All Shortcuts</h3>
                            <div class="shortcuts-icons">	
                            	<a class="shortcut tips" href="#" title="Refresh"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/refresh.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Dashboard"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/dashboard.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Add New Item"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Search on This Page"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/search.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Information for this page"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Ballon"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/ballon.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Clock"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/clock.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Copy"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/copy.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="New File"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/file.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Folder"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/folder.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Message"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/message.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Print This Page"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/print.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Rss"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/rss.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Tags"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/tags.png" width="25" height="25" alt="icon" /></a>
                            </div>
                          </div>
                            
                            <div class="body">
                            
                            	<p class="padding-in">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit 
                                in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
                                delenit augue duis dolore te feugait nulla facilisi.</p>

                            </div>
                            
                        </div>
                        <!-- end simplebox with shortcuts -->



                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <!-- start statistics -->
                        <div class="grid360-left">
                        
                            		<!-- start statistics codes -->
                                    <div class="simplebox">
                                    	<div class="titleh"><h3>Statistics</h3></div>
                                        <div class="body">
                                        	
                                            <ul class="statistics">
                                            	<li>Total Posts	<p>	<span class="green"><b>6</b> unapproved</span> - <span class="blue"><b>652</b> approved</span>	</p>	</li>
                                            	<li>Tags	<p>	<span class="red"><b>965</b> active tags</span></p>	</li>
                                            	<li>Comments	<p>	<span class="green">5 unapproved</span> - <span class="blue">265 approved</span> - <span class="red">6 spam</span>	</p>	</li>
                                            	<li>Plugins	<p>	<span class="blue"><b>9</b> active</span> - <span class="red"><b>2</b> inactive</span></p>	</li>
                                            	<li>Last Updates	<p>	9 Sep 2011	</p>	</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                            		<!-- end statistics codes -->
                                    
                            
                        </div>
                        <!-- end statistics -->
                    		
                            
                        

                        
                        <!-- start tabs -->
                        <div class="grid360-right">
                        
                            <!-- start tabs codes -->
                            <script type="text/javascript">
								$(function() {
										   $( "#tabs" ).tabs();
								});
							</script>
                            
                            
                            <div id="tabs">
                            
                            	<ul>
                                	<li><a href="#tabs-1">Tab 1</a></li>
                                	<li><a href="#tabs-2">Tab 2</a></li>
                                	<li><a href="#tabs-3">Tab 3</a></li>
                                    
                                </ul>
                                
                                <div id="tabs-1">
                                	<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. 
                                    Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales 
                                    tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin.</p>
                                </div>
                                
                                <div id="tabs-2">
                                	<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. 
                                    Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.</p>
                                </div>
                                
                                <div id="tabs-3">
                                	<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. 
                                    Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Ut et mauris vel pede varius sollicitudin.Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus</p>
                                </div>
                                
                           	</div>
                            <!-- end tabs codes -->

                        
                        </div>
                        <!-- end tabs -->
                           
                        
                        
                        
                        
                        
                        
                            		<!-- start alert boxes codes -->
                                    <div class="simplebox grid360-left">
                                    	<div class="titleh"><h3>Alert Boxes</h3></div>
                                        <div class="body padding10">
                                        	
                            
                                <div class="albox warningbox">
                                	<b>Warning :</b> This is a warning placed text message.
                                	<a href="#" class="close tips" title="close">close</a>
                                </div>
                            
                            	
                                <div class="albox succesbox">
                                	<b>Succes :</b> This is a succes  placed text message. 
                                	<a href="#" class="close tips" title="close">close</a>
                                </div>
                            
                            	
                                <div class="albox informationbox">
                                	<b>Information :</b> This is an information  placed text message. 
                                	<a href="#" class="close tips" title="close">close</a>
                                </div>
                            	
                                <div class="albox errorbox">
                                	<b>Error :</b> This is an error  placed text message. 
                                	<a href="#" class="close tips" title="close">close</a>
                                </div>
                                            
                                            
                                        </div>
                                    </div>
                            		<!-- end alert boxes codes -->
                        
                        
                        
                        
                            		<!-- start alert boxes codes -->
                                    <div class="simplebox grid360-right">
                                    	<div class="titleh"><h3>Unlimited Dialog Boxes</h3></div>
                                        <div class="body padding10">
                                        	
                            
                            
                                
                                <div class="albox dialogbox">
                                	<div class="icon"><img src="<?php echo base_url(); ?>assets/img/icons/16x16/printer.png" width="16" height="16" alt="icon"/></div>
                                	Wait a second... Files not ready yet
                                	<a href="#" class="close tips" title="close">close</a>
                                </div>
                            	
                                
                                <div class="albox dialogbox">
                                	<div class="icon"><img src="<?php echo base_url(); ?>assets/img/icons/16x16/bin_closed.png" width="16" height="16" alt="icon"/></div>
                                	Files has been <b>deleted....</b>
                                	<a href="#" class="close tips" title="close">close</a>
                                </div>
                            	
                                
                                <div class="albox dialogbox">
                                	<div class="icon"><img src="<?php echo base_url(); ?>assets/img/icons/16x16/page_copy.png" width="16" height="16" alt="icon"/></div>
                                	You can copy this file if you wish... <a href="#">copy that</a>
                                	<a href="#" class="close tips" title="close">close</a>
                                </div>
                            	
                                
                                <div class="albox dialogbox">
                                	<div class="icon"><img src="<?php echo base_url(); ?>assets/img/icons/16x16/chart_bar.png" width="16" height="16" alt="icon"/></div>
                                	<b>Total Visitors :</b> 23.192.329
                                	<a href="#" class="close tips" title="close">close</a>
                                </div>
                                            
                                            
                                        </div>
                                    </div>
                            		<!-- end alert boxes codes -->
                            
                        

                           
                        
                        <div class="clear"></div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <!-- start simplebox -->
                        <div class="simplebox grid740">
                        
                        	<div class="titleh"><h3>Simple Box</h3>
                            <div class="shortcuts-icons">	<a class="shortcut tips" href="#" title="This is simple box"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>	</div>
                            </div>
                            
                            <div class="body">
                            	<br /><br /><br /><br />
                            <div class="button-box"> <br /> </div> 	
                            </div>
                            
                        </div>
                        <!-- end simplebox -->
                        
                        
                        <!-- start simpletitle -->
                        <div class="simpletitle">
                        	<h3>Simple Title</h3>
                            <div class="shortcuts-icons">	<a class="shortcut tips" href="#" title="This is simple title"><img src="<?php echo base_url(); ?>assets/img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>	</div>
                        </div>
                        <!-- end simpletitle -->
                        
                    
                    
                    
                    
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

<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$page_name="Controller";
	include('../includes/head.php');
	?>
 
    <!-- <meta http-equiv="refresh" content="30"> -->
</head>

<body>
	<?php include('../includes/menu.php'); ?>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<!--<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="control/shapes.php"><i class="icon-star"></i><span class="hidden-tablet"> Shapes</span></a></li>
						<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
						
					</ul>
				</div>
			</div> -->
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span12">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span12 blueDark" style="width:100% !important; margin-left:0 !important;">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo $url_home; ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="<?php echo $url_controller; ?>">Controller</a></li>
			</ul>
			<ul class="nav tab-menu nav-tabs top-nav-hack" id="myTab">
							<!-- class="active" -->
							
							
							
							<li class="active" ><a href="#colours" onclick="currentSelectionPage = 'Col';update_Screen();">Colours</a></li>
							<li><a href="#shapes" onclick="currentSelectionPage = 'Shp';update_Screen();">Shapes</a></li>
							
							<li><a href="#preview">Preview</a></li>
							<li><a href="#system">System</a></li>
						</ul>
		

			<div class="row-fluid">
				<div class=" span12 clear">
					<div class="box-content clear">
						
						 
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane active" id="colours">
								

												<div class="box black span8">
													 <div class="box-header">
														 <h2><i class="halflings-icon white user"></i><span class="break"></span>Colour Palette</h2>
														 <div class="box-icon">
															 <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
															 <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
														 </div>
													 </div>
					
													 <div class="content" id="colour-palette">
														 <div class="row-fluid">	
															 <div id="btnColRed" class="span2 btnCol" onclick="changeCol('#ff0000',this.id);">
																 <span>Red</span>
															 </div>
															 <div id="btnColGreen" class="span2 btnCol" onclick="changeCol('#00ff00',this.id);">
																 <span>Green</span>
															 </div>
															 <div id="btnColBlue" class="span2 btnCol" onclick="changeCol('#0000ff',this.id);">
																 <span>Blue</span>
															 </div>
															 <div id="btnColYellow" class="span2 btnCol" onclick="changeCol('#ffff00',this.id);">
																 <span>Yellow</span>
															 </div>
															 <div id="btnColPink" class="span2 btnCol" onclick="changeCol('#FF69B4',this.id);">
																 <span>Pink</span>
															 </div>
															 <div id="btnColWhite" class="span2 btnCol" onclick="changeCol('#ffffff',this.id);">
																 <span>White</span>
															 </div>
														 </div>
														 <br>
														 <div class="row-fluid">	
															 <div id="btnColMaroon" class="span2 btnCol" onclick="changeCol('#800000',this.id);">
																 <span>Maroon</span>
															 </div>
															 <div id="btnColDkGreen" class="span2 btnCol" onclick="changeCol('#008000',this.id);">
																 <span>Dk Green</span>
															 </div>
															 <div id="btnColTeal" class="span2 btnCol" onclick="changeCol('#008080',this.id);">
																 <span>Teal</span>
															 </div>
															 <div id="btnColOrange" class="span2 btnCol" onclick="changeCol('#FFA500',this.id);">
																 <span>Orange</span>
															 </div>
															 <div id="btnColFuchsia" class="span2 btnCol" onclick="changeCol('#FF00FF',this.id);">
																 <span>Fuchsia</span>
															 </div>
															 <div id="btnColSilver" class="span2 btnCol" onclick="changeCol('#c0c0c0',this.id);">
																 <span>Silver</span>
															 </div>
														 </div>
														 <br>
														 <div class="row-fluid">	
															 <div id="btnColCustom1" class="span2 btnCol" onclick="changeCol('',this.id);">
																 <span>Custom 1</span>
															 </div>
															 <div id="btnColCustom2" class="span2 btnCol" onclick="changeCol('',this.id);">
																 <span>Custom 2</span>
															 </div>
															 <div id="btnColCustom3" class="span2 btnCol" onclick="changeCol('',this.id);">
																 <span>Custom 3</span>
															 </div>
															 <div id="btnColCustom4" class="span2 btnCol" onclick="changeCol('',this.id);">
																 <span>Custom 4</span>
															 </div>
															 <div id="btnColPurple" class="span2 btnCol" onclick="changeCol('#7F00FF',this.id);">
																 <span>Purple</span>
															 </div>
															 <div id="btnColGrey" class="span2 btnCol" onclick="changeCol('#808080',this.id);">
																 <span>Grey</span>
															 </div>
														 </div>
														 <br>
														 <div class="row-fluid">	
															 <div id="btnColCustom5" class="span2 btnCol" onclick="changeCol('',this.id);">
																 <span>Custom 5</span>
															 </div>
															 <div id="btnColCustom6" class="span2 btnCol" onclick="changeCol('',this.id);">
																 <span>Custom 6</span>
															 </div>
															 <div id="btnColCustom7" class="span2 btnCol" onclick="changeCol('',this.id);">
																 <span>Custom 7</span>
															 </div>
															 <div id="btnColCustom8" class="span2 btnCol" onclick="changeCol('',this.id);">
																 <span>Custom 8</span>
															 </div>
															 <div id="btnColPurple1" class="span2 btnCol" onclick="changeCol('#7F00FF',this.id);">
																 <span>Purple</span>
															 </div>
															 <div id="btnColBlack" class="span2 btnCol" onclick="changeCol('#000000',this.id);">
																 <span>Black</span>
															 </div>
														 </div>
													 </div>
												 </div>
												 
												 
												 
												 <div class="box black span4">
													 <div class="box-header">
														 <h2><i class="halflings-icon white user"></i><span class="break"></span>Colour Effects</h2>
														 <div class="box-icon">
															 <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
															 <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
														 </div>
													 </div>
													 <div class="box-content">
														 <ul class="dashboard-list metro black">
															 <li class="">
																 <div class="row-fluid">
																	 <div id="IndicatorColFade" class="span1">
																	 </div>
																	 <div class="span4"  onclick="selectColFX('Fade');">
																		 <strong>Effect:</strong>
																		 <h3>Fade</h3>
										
																	 </div>
																	 <div class="span3">
																		 <strong>Duration:</strong><br><span id="DurationColFade"></span><br>
																	 </div>
																	 <div class="span4" onclick="toggleColFX('Fade');">
																		 <strong>Toggle<br>On/Off</strong>
																	 </div>
																 </div>      
															 </li>
															 <li class="">
																 <div class="row-fluid">
																	 <div id="IndicatorColRainbow" class="span1">
																		 <br>
																	 </div>
																	 <div class="span4" onclick="selectColFX('Rainbow');">
																		 <strong>Effect:</strong>
																		 <h3>Rainbow</h3>
										
																	 </div>
																	 <div class="span3">
																		 <strong>Duration:</strong><br><span id="DurationColRainbow"></span>
																	 </div>
																	  <div class="span4" onclick="toggleColFX('Rainbow');">
																		 <strong>Toggle<br>On/Off</strong>
																	 </div>
																 </div>      
															 </li>
															 <li class="">
																 <div class="row-fluid">
																	 <div id="IndicatorColStrobe" class="span1">
																		 <br>
																	 </div>
																	 <div class="span4" onclick="selectColFX('Strobe');">
																		 <strong>Effect:</strong>
																		 <h3>Strobe</h3>
										
																	 </div>
																	 <div class="span3">
																		 <strong>Rate:</strong><br><span id="DurationColStrobe"></span>
																	 </div>
																	  <div class="span4" onclick="toggleColFX('Strobe');">
																		 <strong>Toggle<br>On/Off</strong>
																	 </div>
																 </div>      
															 </li>
															 <li class="">
																 <div class="row-fluid">
																	 <div id="IndicatorColcolPulse" class="span1">
																		 <br>
																	 </div>
																	 <div class="span4" onclick="selectColFX('colPulse');">
																		 <strong>Effect:</strong>
																		 <h3>Pulse</h3>
										
																	 </div>
																	 <div class="span3">
																		 <strong>Duration:</strong><br><span id="DurationColcolPulse"></span>
																	 </div>
																	  <div class="span4" onclick="toggleColFX('colPulse');">
																		 <strong>Toggle<br>On/Off</strong>
																	 </div>
																 </div>      
															 </li>
														 </ul>
													 </div>
												 </div><!--/span-->
				

							</div>
							<div class="tab-pane" id="shapes">
								
												<div class="box black span8">
													 <div class="box-header">
														 <h2><i class="halflings-icon white user"></i><span class="break"></span>Shape Palette</h2>
														 <div class="box-icon">
															 <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
															 <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
														 </div>
													 </div>
					
													 <div class="content" id="colour-palette">
														 <div class="row-fluid">	
															 <div id="btnShpOpen" class="btnShp span2" onclick="changeShape('Open');">
																 <span>Open</span>
															 </div>
															 <div id="btnShpStar" class="btnShp span2" onclick="changeShape('Star');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapes/star-icon.png" /></span>
															 </div>
															 <div id="btnShpStarFilled" class="btnShp span2" onclick="changeShape('StarFilled');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapes/star-filled-icon.png" /></span>
															 </div>
															 <div id="btnShpHeart" class="btnShp span2" onclick="changeShape('Heart');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapes/heart-icon.png" /></span>
															 </div>
															 <div id="btnShpHeartFilled" class="btnShp span2" onclick="changeShape('HeartFilled');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapes/heart-filled-icon.png" /></span>
															 </div>
															 <div id="btnShpSun" class="btnShp span2" onclick="changeShape('Sun');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapes/sun-icon.png" /></span>
															 </div>
														 </div>
														 <br>
														 <div class="row-fluid">	
															 <div id="btnShpTriangle" class="btnShp span2" onclick="changeShape('Triangle');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapes/triangle-icon.png" /></span>
															 </div>
															 <div id="btnShpTriangleFilled" class="btnShp span2" onclick="changeShape('TriangleFilled');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapes/triangle-filled-icon.png" /></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
														 </div>
														 <br>
														 <div class="row-fluid">	
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
														 </div>
													 </div>
												 </div>
												 <div class="box black span4">
													 <div class="box-header">
														 <h2><i class="halflings-icon white user"></i><span class="break"></span>Shape Effects</h2>
														 <div class="box-icon">
															 <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
															 <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
														 </div>
													 </div>
					
													 <div class="content" id="colour-palette">
														 <div class="row-fluid">	
															 <div id="IndicatorShapeNone" class="btnShp span3" onclick="changeShapeFX('None');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapeFX/none.png" /></span>
															 </div>
															 <div id="IndicatorShapeRotateCW"class="btnShp span3" onclick="changeShapeFX('RotateCW');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapeFX/rotateCW.png" /></span>
															 </div>
															 <div id="IndicatorShapeRotateCCW" class="btnShp span3" onclick="changeShapeFX('RotateCCW');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapeFX/rotateCCW.png" /></span>
															 </div>
															 <div id="IndicatorShapePulse" class="btnShp span3" onclick="changeShapeFX('Pulse');">
																 <span><img style="width:100%;" src="<?php echo $url_basepublic?>/src/shapeFX/pulse.png" /></span>
															 </div>
														 </div>
														 <br>
														 <div class="row-fluid">	
															 <div id="IndicatorShapeBreath" class="btnShp span3" onclick="changeShapeFX('Breath');">
																 <span><img style="width:100%;" alt="Star" src="<?php echo $url_basepublic?>/src/shapeFX/breath.png" /></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
														 </div>
														 <br>
														 <div class="row-fluid">	
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
															 <div class="span2">
																 <span></span>
															 </div>
														 </div>
													 </div>
												 </div>
							</div>
							<div class="tab-pane" id="preview">
								<div class="row-fluid">
				
									  <div class="widget blue span4">
				   
										  <h2><span class="glyphicons globe"><i></i></span>Output - <b>Preview</b></h2>
				   
										  <hr>
				   
										  <div class="content">
					   
											  <div id="output-preview" class="span 12" style="text-align:center;">
											  	<iframe src="control/output-preview.html" width="60%" height="100%" style="min-height: 190px;"></iframe>
											  </div>
											  
				   
										  </div>
				   
									  </div><!--/span-->
									  <div class="widget blue span8">
				   
										  <h2><span class="glyphicons globe"><i></i></span>Output - <b>Logs</b></h2>
				   
										  <hr>
				   
										  <div class="content">
					   
											  <div id="output-logs" class="span 12 black" style="height: 200px; overflow:scroll;">
											  </div>
				   
										  </div>
				   
									  </div><!--/span-->
			   
			   
		   
		   
								  </div>
							</div>
							<div class="tab-pane" id="system">
								<div class="row-fluid">
				
									  <div class="widget blue span4">
				   
										  <h2><span class="glyphicons globe"><i></i></span>System - <b>Preview</b></h2>
				   
										  <hr>
				   
										  <div class="content">
					   
											  <div id="output-preview" class="span 12" style="min-height: 200px;">
											  </div>
				   
										  </div>
				   
									  </div><!--/span-->
									  <div class="widget blue span8">
				   
										  <h2><span class="glyphicons globe"><i></i></span>Output - <b>Logs</b></h2>
				   
										  <hr>
				   
										  <div class="content">
					   
											  <div id="output-logs" class="span 12 black" style="height: 200px; overflow:scroll;">
											  </div>
				   
										  </div>
				   
									  </div><!--/span-->
			   
			   
		   
		   
								  </div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
						
			
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	<div class="clearfix"></div>
	
	<footer class="fixed black">
				
		
		 <div class="row-fluid">	
			 <div  class="footerDisplayLabel span4">
				 <span id="wheel1Label"></span>
			 </div>
			 <div class="footerDisplayLabel span4">
				 <span id="wheel2Label"></span>
			 </div>
			 <div class="footerDisplayLabel span4">
				 <span id="wheel3Label"></span>
			 </div>
		 </div>
		 <div class="row-fluid">	
			 <div class="footerDisplayLabel span2">
				 <span>Colours</span>
			 </div>
			 <div class="footerDisplayLabel span2">
				 <span>Col FX</span>
			 </div>
			 <div class="footerDisplayLabel span2">
				 <span>Shapes</span>
			 </div>
			 <div class="footerDisplayLabel span2">
				 <span>Shape FX</span>
			 </div>
			 <div class="footerDisplayLabel span2">
				 <span>Preview</span>
			 </div>
			 <div class="footerDisplayLabel span2">
				 <span>System</span>
			 </div>
		 </div>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
			<!-- From: http://cdn.sockjs.org/ --> 
    <script src="control/assets/communication/sockjs-0.3.js"></script>

    <!-- From RabbitMQ-Web-Stomp examples -->
    <script src="control/assets/communication/stomp.js"></script>

    <!-- Our example app -->
    <script src="control/assets/communication/listener-app.js"></script>
		
	<script>
	$.get('<?php echo $url_RotaryStart ?>');
	</script>
	<!-- end: JavaScript-->
	
</body>
</html>

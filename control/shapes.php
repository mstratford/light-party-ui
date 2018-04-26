<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$page_name="Controller";
	include('../includes/head.php');
	?>	
</head>

<body>
	<?php include('../includes/menu.php'); ?>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
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
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10 theme-bg">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo $url_home; ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Controller</a></li>
			</ul>

			<div class="row-fluid">
				
				<div class="span3 statbox black" onTablet="span6" onDesktop="span3" onclick="alert('Blackout!')">
					<div class="number">Blackout</div>
					<div class="footer">
						Enabled
					</div>	
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="number">Clear</div>
					<div class="title">Clear State</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="number">Undo</div>
					<div class="title">Previous State</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3" onclick="alert('Go!')">
					<div class="number">Go</div>
					<div class="title">Next State</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>	
			</div>		

			<div class="row-fluid">
				
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
							<div class="span2" style="min-height:80px;">
								<span>Full</span>
							</div>
							<div class="white span2" style="min-height:80px;">
								<span>Heart</span>
								<img alt="Heart" src="<?php echo $url_basepublic?>/src/shapes/heart-filled.png">
							</div>
							<div class="white span2 option-current" style="min-height:80px;">
								<span>Star</span>
								<img alt="Star" src="<?php echo $url_basepublic?>/src/shapes/star-filled.png">
							</div>
							<div class="span2" style="min-height:80px;">
								<span>Rotate</span>
							</div>
							<div class="span2" style="min-height:80px;">
								<span>Rotate</span>
							</div>
							<div class="span2" style="min-height:80px;">
								<span>Rotate</span>
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
					<div class="box-content">
						<ul class="dashboard-list metro black">
							<li class="option-selected">
								<div class="row-fluid">
									<div class="span1">
									</div>
									<div class="span4">
										<strong>Effect:</strong>
										<h3>None</h3>
										
									</div>
									<div class="span3">
										<strong>Duration:</strong> n/a<br>
									</div>
								</div>      
							</li>
							<li class="option-current">
								<div class="row-fluid">
									<div class="span1">
										<br>
									</div>
									<div class="span4">
										<strong>Effect:</strong>
										<h3>Fade</h3>
										
									</div>
									<div class="span3">
										<strong>Duration:</strong><br>5 seconds
									</div>
								</div>      
							</li>
							<li class="">
								<div class="row-fluid">
									<div class="span1">
										<br>
									</div>
									<div class="span4">
										<strong>Effect:</strong>
										<h3>Strobe</h3>
										
									</div>
									<div class="span3">
										<strong>Rate:</strong><br>0.3 seconds
									</div>
								</div>      
							</li>
							<li class="">
								<div class="row-fluid">
									<div class="span1">
										<br>
									</div>
									<div class="span4">
										<strong>Effect:</strong>
										<h3>Pulse</h3>
										
									</div>
									<div class="span3">
										<strong>Duration:</strong><br>0.3 seconds
									</div>
								</div>      
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
			</div>
			
						
			<div class="row-fluid">
				
				<div class="box black span3">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Output Preview</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="shape-star shape-rotate white" id="output-preview">
						<p style="text-align: center;"><iframe src="control/output-preview.html" width="50%" height="100%"></iframe></p>
					</div>

					
				</div><!--/span-->
				
				<div class="box black span9">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Shape Parameters</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro black">
							<div class="row-fluid hideInIE8 circleStats">
				
								<div class="span4">
				                	<div class="circleStatsItemBox purple">
										<div class="header">Fill Intensity</div>
										<span class="percent">percent</span>
										<div class="circleStat">
				                    		<input type="text" value="50" class="whiteCircle" />
										</div>		
										<div class="footer">
											<span class="count">
												<span class="number">100</span>
												<span class="unit">%</span>
											</span>
											<span class="sep"> / </span>
											<span class="value">
												<span class="number">100</span>
												<span class="unit">%</span>
											</span>	
										</div>
				                	</div>
								</div>

								<div class="span4">
				                	<div class="circleStatsItemBox purple">
										<div class="header">Effect</div>
										<span class="percent">percent</span>
										<div class="circleStat">
				                    		<input type="text" value="78" class="whiteCircle" />
										</div>
										<div class="footer">
											<span class="count">
												<span class="number">10</span>
												<span class="unit">secs</span>
											</span>
											<span class="sep"> / </span>
											<span class="value">
												<span class="number">10</span>
												<span class="unit">secs</span>
											</span>	
										</div>
				                	</div>
								</div>
								<div class="span4">
				                	<div class="circleStatsItemBox purple">
										<div class="header">Effect</div>
										<span class="percent">percent</span>
										<div class="circleStat">
				                    		<input type="text" value="78" class="whiteCircle" />
										</div>
										<div class="footer">
											<span class="count">
												<span class="number">10</span>
												<span class="unit">secs</span>
											</span>
											<span class="sep"> / </span>
											<span class="value">
												<span class="number">10</span>
												<span class="unit">secs</span>
											</span>	
										</div>
				                	</div>
								</div>


						
							</div>
						</ul>
					</div>
				</div><!--/span-->
			
			</div>
			
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>
			
		</p>

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
	


		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>

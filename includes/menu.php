		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo $url_home; ?>"><span><?php echo $software_name; ?></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white cog"></i>&nbsp;&nbsp;Settings
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Power Management</span>
								</li>
								<li><a href="<?php echo $url_restart; ?>"><i class="halflings-icon repeat"></i> Restart</a></li>
								<li><a href="<?php echo $url_shutdown; ?>"><i class="halflings-icon off"></i> Shutdown</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
						<a class="btn" href="<?php echo $_SERVER['PHP_SELF'] ?>">
								<i class="halflings-icon white refresh"></i>&nbsp;&nbsp;Refresh Page
						</a>
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
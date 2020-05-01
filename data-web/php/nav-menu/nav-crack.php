<header id="masthead" class="site-header" role="banner">
	<section id="top-header" class="site-top-header">
		<div class="container">
				<button data-target=".navbar-nav > ul" data-toggle="collapse" type="button" class="top-nav-toggle button-toggle visible-xs collapsed pull-left">
					<font color="white"><i class="fa fa-reorder"></i></font>
				</button>
				<button data-target=".top-shares" data-toggle="collapse" type="button" class="top-shares-toggle button-toggle visible-xs collapsed pull-left">
					<font color="white"><i class="fa fa-share-alt"></i></font>
				</button>
				<button data-target=".site-branding .search_form" data-toggle="collapse" type="button" class="search-form-toggle button-toggle visible-xs collapsed pull-right">
					<font color="white"><i class="fa fa-search"></i></font>
				</button>
				<button data-target=".top-nav" data-toggle="collapse" type="button" class="top-shares-toggle button-toggle visible-xs collapsed pull-right">
					<font color="white"><i class="fa fa-link"></i></font>
				</button>
				
				
			<ul id="menu-top-header-menu" class="top-nav nav pull-left">
			<?php
					$qry = mysqli_query($conn, "SELECT * from kategori");
					while ($data = mysqli_fetch_array($qry)) {
					?>
				<li id="menu-item-229" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-229">
					<a href="posting-web.php?id=<?php echo $data['kategori']; ?>"><font color="00bfff"><b><?php echo $data['kategori']; ?></b></font></a>
				</li>
								<?php    
					}
				?>
			</ul>
				
				
			<ul class="top-shares nav pull-right list-unstyled">
				<li class="social facebook"><a href="http://facebook.com/wp.designwall"><font color="white"><i class="fa fa-facebook"></i></font></a></li>
				<li class="social twitter"><a href="http://twitter.com/designwall_com"><font color="white"><i class="fa fa-twitter"></i></font></a></li>
				<li class="social google_plus"><a href="https://plus.google.com/111081614492699228740"><font color="white"><i class="fa fa-google-plus"></i></font></a></li>							
				<li class="social youtube"><a href="http://www.youtube.com/user/wpDesignWall"><font color="white"><i class="fa fa-youtube"></i></font></a></li>
			</ul>
			<!--<div class="login_register_ajax">
				<div class="dw_login">
				<button type="button" class="btn btn-info btn-lg dw-gamez-login-register-show jump-regis" data-id="dw-gamez-login-modal-form" data-toggle="modal" data-target="#dw-gamez-login-register-modal" title="Login">Login</button>
				</div>
			</div>-->
		</div>
	</section>
	
	<section id="site-branding" class="site-branding">
		<div class="container">
			<div class="brand">
				<h2 class="site-title display-logo"><a href="index.php" title="DW Gamez" rel="home"><img alt="DW Gamez" src="data-web/images/logo.png" /></a></h2>
				</div>
				<div class="search_form">
					<form role="search" method="get" class="search-form" action="search.php">
						<label>
							<span class="screen-reader-text sr-only">Search for:</span>
							<input type="search" class="search-field form-control" placeholder="Search &hellip;" value="" name="search" title="Search for:">
						</label>
						<input type="submit" class="search-submit" value="Search">
					</form>
				</div>
			</div>
	</section>
</header>

	<nav id="site-navigation" class="main-navigation navbar" role="navigation">
		<div class="container">
			<div class="menu nav navbar-nav">
				<ul id="menu-main-menu" class="">
					<li id="menu-item-212" class="menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-212">
					<a href="index.php">Home</a></li>
					<li id="menu-item-221" class="current-menu-item menu-item menu-item-type-taxonomy menu-item-object-category menu-item-221"><a href="crack.php">Crack Games</a></li>
					<li id="menu-item-223" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-223"><a href="rating.php">Rating Games</a></li>
					<li id="menu-item-216" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-216"><a href="#">Emulator Games</a>
						<ul class="sub-menu">
							<li id="menu-item-255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255"><a href="ppsspp.php">PPSSPP</a></li>
							<li id="menu-item-256" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-256"><a href="epsxe.php">EPSXE</a></li>
							<li id="menu-item-257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-257"><a href="ps2.php">PS2</a></li>
							<li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-257"><a href="nintendo.php">NINTENDO</a></li>
						</ul>
					</li>
					<li id="menu-item-433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433"><a href="upcoming.php">Upcoming Games</a></li>
					<li id="menu-item-356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-356"><a href="forum.php">Forum</a>
						<ul class="sub-menu">
							<li id="menu-item-355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-355"><a href="question.php">QUESTION</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>		
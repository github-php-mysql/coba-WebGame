<!DOCTYPE html>

<?php
include'head.php';
?>

<body class="page-template page-template-template-typography page-template-template-typography-php page page-id-245">
<div id="page" class="hfeed site">

<?php
include 'data-web/php/navigasi.php';
?>

	<main id="site-main" class="site-main">
		<div class="container">

	<section id="content" class="site-content">
		<div id="main-content">
		<article class="page type-page status-publish hentry">
			<header class="page-header">
				<h1 class="page-title">Typography</h1>
			</header>
			
			<div class="page-content">
				DW Gamez includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.
				<div class="demo-grid">
					<div class="row">
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
						<div class="col-sm-1">1</div>
					</div>
					<div class="row">
						<div class="col-sm-8">8</div>
						<div class="col-sm-4">4</div>
					</div>
					<div class="row">
						<div class="col-sm-4">4</div>
						<div class="col-sm-4">4</div>
						<div class="col-sm-4">4</div>
					</div>
					<div class="row">
						<div class="col-sm-6">6</div>
						<div class="col-sm-6">6</div>
					</div>
				</div>
				<div class="table-grid">
					<div class="row">
						<div class="col-sm-6 left">
							<h2 class="demo-title">Heading</h2>
							<div class="demo-content">
								<h1>h1. Heading 1</h1>
								<h2>h2. Heading 2</h2>
								<h3>h3. Heading 3</h3>
								<h4>h4. Heading 4</h4>
								<h5>h5. Heading 5</h5>
								<h6>h6. Heading 6</h6>
							</div>
						</div>
						<div class="col-sm-6 right">
							<h2 class="demo-title">alerts</h2>
							<div class="demo-content">
								<div class="alert alert-success">
							        <strong>Well done!</strong> You successfully read this important alert message.
						      	</div>
						      	<div class="alert alert-info">
							        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
						      	</div>
						      	<div class="alert alert-warning">
							        <strong>Warning!</strong> Best check yo self, you're not looking too good.
						      	</div>
						      	<div class="alert alert-danger">
							        <strong>Oh snap!</strong> Change a few things up and try submitting again.
						      	</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6 left">
							<h2 class="demo-title">tabs</h2>
							<div class="demo-content">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
									<li><a data-toggle="tab" href="#profile">Profile</a></li>
								</ul>
								<div class="tab-content">
							        <div id="home" class="tab-pane fade in active">
							          <p>Nullam urna lorem, tristique in vulputate nec, lacinia ac eros. Vestibulum volutpat ornare augue. Duis ipsum odio, congue id interdum vel, placerat quis elit. Aenean diam neque, consequat non pellentesque ullamcorper, cursus dapibus dolor. Curabitur facilisis risus vestibulum accumsan dapibus. Nam dignissim ligula quis libero auctor fermentum. Donec in molestie enim, sed dictum orci. Morbi quis dictum neque. Sed posuere pharetra magna vel molestie. Duis ullamcorper placerat libero sit amet lobortis. Aenean et neque in magna suscipit ullamcorper. Donec in molestie enim, sed dictum orci. Morbi quis dictum neque. Sed posuere pharetra magna vel molestie. Duis ullamcorper placerat libero sit amet lobortis.</p>
							        </div>
							        <div id="profile" class="tab-pane fade">
							          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
							        </div>
							      </div>
							</div>
						</div>
						<div class="col-sm-6 right">
							<h2 class="demo-title">accordion</h2>
							<div class="demo-content">
								<div id="accordion" class="accordion">
									<div class="accordion-group">
										<div class="accordion-heading">
											<a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
												Collapsible Group Item #1
											</a>
										</div>

										<div class="accordion-body collapse in" id="collapseOne">
											<div class="accordion-inner">
											Nullam urna lorem, tristique in vulputate nec, lacinia ac eros. Vestibulum volutpat ornare augue. Duis ipsum odio, congue id interdum vel, placerat quis elit. Aenean diam neque, consequat non pellentesque ullamcorper, cursus dapibus dolor. Curabitur facilisis risus vestibulum accumsan dapibus. Nam dignissim ligula quis libero auctor fermentum. Donec in molestie enim, sed dictum orci. Morbi quis dictum neque. Sed posuere pharetra magna vel molestie. Duis ullamcorper placerat libero sit amet lobortis.
											</div>
										</div>
									</div>

									<div class="accordion-group">
										<div class="accordion-heading">
											<a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="collapsed">
												Collapsible Group Item #2
											</a>
										</div>
										<div class="accordion-body collapse" id="collapseTwo">
											<div class="accordion-inner">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>

									<div class="accordion-group">
										<div class="accordion-heading">
											<a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="collapsed">
												Collapsible Group Item #3
											</a>
										</div>
										<div class="accordion-body collapse" id="collapseThree">
											<div class="accordion-inner">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6 left">
							<h2 class="demo-title">form</h2>
							<form class="demo-content">
								<div class="form-group">
						        	<label for="demo-textField">Text field</label>
						        	<input type="text" placeholder="Text field" id="demo-textField" class="form-control">
						      	</div>

						      	<div class="form-group">
						        	<label>Select</label>
						        	<select class="form-control">
						        		<option value="value 1">value 1</option>
						        		<option value="value 2">value 2</option>
						        	</select>
						      	</div>

						      	<div class="form-group">
						        	<label>Text area</label>
						        	<textarea class="form-control" rows="5"></textarea>
						      	</div>

						      	<diw class="row">
						      		<div class="col-sm-6 left">
						      			<div class="radio">
									        <label>
												<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
										         Sed turpis odio, mattis ut
									        </label>
									     </div>

									     <div class="radio">
									        <label>
												<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
										         Sed turpis odio, mattis ut
									        </label>
									     </div>

									     <div class="radio">
									        <label>
												<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
										         Sed turpis odio, mattis ut
									        </label>
									     </div>
						      		</div>

						      		<div class="col-sm-6 right">
						      			<div class="checkbox">
									        <label>
									          	<input type="checkbox" value="">
									          	Sed turpis odio, mattis ut
									        </label>
								      	</div>

								      	<div class="checkbox">
									        <label>
									          	<input type="checkbox" value="">
									          	Sed turpis odio, mattis ut
									        </label>
								      	</div>

								      	<div class="checkbox">
									        <label>
									          	<input type="checkbox" value="">
									          	Sed turpis odio, mattis ut
									        </label>
								      	</div>
						      		</div>
						      	</diw>
							</form>
						</div>
						<div class="col-sm-6 right">
							<h2 class="demo-title">buttons</h2>
							<div class="demo-content">
								<span class="demo-content-title">Button colors</span>

								<button type="button" class="btn btn-default">Default</button>

								<button type="button" class="btn btn-primary">Primary</button>

								<button type="button" class="btn btn-success">Success</button>

								<button type="button" class="btn btn-info">Info</button>

								<button type="button" class="btn btn-warning">Warning</button>

								<button type="button" class="btn btn-danger">Danger</button>

								<button type="button" class="btn btn-link">Link</button>

								<span class="demo-content-title">Button colors</span>

								<button type="button" class="btn btn-primary btn-lg">Large</button>

								<button type="button" class="btn btn-primary">Default</button>

								<button type="button" class="btn btn-primary btn-sm">Small</button>

								<button type="button" class="btn btn-primary btn-xs">Extra small</button>

							</div>

							<h2 class="demo-title">Process bar</h2>
							<div class="demo-content">
								<div class="progress">
								    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								        <span class="sr-only">40% Complete (success)</span>
								    </div>
								</div>
								<div class="progress">
								    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								        <span class="sr-only">20% Complete</span>
								    </div>
								</div>
								<div class="progress">
								    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								        <span class="sr-only">60% Complete (warning)</span>
								    </div>
								</div>
								<div class="progress">
								    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								        <span class="sr-only">80% Complete</span>
								    </div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6 left">
							<h2 class="demo-title">carousel</h2>
							<div class="demo-content">
								<div class="carousel carousel-1 slide carousel-87" id="carousel-1">
								    <ol class="carousel-indicators">
								        <li class="active" data-slide-to="0" data-target="#carousel-1"></li>

								        <li class="" data-slide-to="1" data-target="#carousel-1"></li>

								        <li class="" data-slide-to="2" data-target="#carousel-1"></li>

								        <li class="" data-slide-to="3" data-target="#carousel-1"></li>

								        <li class="" data-slide-to="4" data-target="#carousel-1"></li>
								    </ol>

								    <div class="carousel-inner">
								        <div class="item active">
								            <div class="carousel-icon">
								                <a href="#" title=""><img alt="" src="http://placehold.it/490x300"></a>
								            </div>
								        </div>

								        <div class="item">
								            <div class="carousel-icon">
								                <a href="#" title=""><img alt=""src="http://placehold.it/490x300"></a>
								            </div>
								        </div>

								        <div class="item">
								            <div class="carousel-icon">
								                <a href="#" title=""><img alt="" src="http://placehold.it/490x300"></a>
								            </div>
								        </div>

								        <div class="item">
								            <div class="carousel-icon">
								                <a href="#" title=""><img alt="" src="http://placehold.it/490x300"></a>
								            </div>
								        </div>

								        <div class="item">
								            <div class="carousel-icon">
								                <a href="#" title=""><img alt="" src="http://placehold.it/490x300"></a>
								            </div>
								        </div>
								    </div>
								    <a class="carousel-control left" data-slide="prev" href="#carousel-1">
								        <em class="icon-chevron-left"></em>
								    </a>
								    <a class="carousel-control right" data-slide="next" href="#carousel-1">
								        <em class="icon-chevron-right"></em>
								    </a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 right">
							<h2 class="demo-title">icons font</h2>
							<div class="demo-content icon">
                <i class="icon-adjust"></i>
                <i class="icon-anchor"></i>
                <i class="icon-archive"></i>
                <i class="icon-asterisk"></i>
                <i class="icon-ban-circle"></i>
                <i class="icon-bar-chart"></i>
                <i class="icon-barcode"></i>
                <i class="icon-beaker"></i>
                <i class="icon-building"></i>
                <i class="icon-bullhorn"></i>
                <i class="icon-bullseye"></i>
                <i class="icon-calendar"></i>
                <i class="icon-calendar-empty"></i>
                <i class="icon-camera"></i>
                <i class="icon-camera-retro"></i>
                <i class="icon-code"></i>
                <i class="icon-code-fork"></i>
                <i class="icon-coffee"></i>
                <i class="icon-cog"></i>
                <i class="icon-cogs"></i>
                <i class="icon-collapse"></i>
                <i class="icon-collapse-alt"></i>
                <i class="icon-download"></i>
                <i class="icon-download-alt"></i>
                <i class="icon-edit"></i>
                <i class="icon-edit-sign"></i>
                <i class="icon-ellipsis-horizontal"></i>
                <i class="icon-eye-close"></i>
                <i class="icon-eye-open"></i>
                <i class="icon-facetime-video"></i>
                <i class="icon-female"></i>
                <i class="icon-fighter-jet"></i>
                <i class="icon-film"></i>
                <i class="icon-filter"></i>
                <i class="icon-fire"></i>
                <i class="icon-fire-extinguisher"></i>
                <i class="icon-flag"></i>
                <i class="icon-flag-alt"></i>
                <i class="icon-flag-checkered"></i>
                <i class="icon-food"></i>
                <i class="icon-frown"></i>
                <i class="icon-gamepad"></i>
                <i class="icon-cog"></i>
                <i class="icon-cogs"></i>
                <i class="icon-gift"></i>
                <i class="icon-glass"></i>
                <i class="icon-globe"></i>
                <i class="icon-lemon"></i>
                <i class="icon-level-down"></i>
                <i class="icon-level-up"></i>
                <i class="icon-lightbulb"></i>
                <i class="icon-pushpin"></i>
                <i class="icon-puzzle-piece"></i>
                <i class="icon-qrcode"></i>
                <i class="icon-question"></i>
                <i class="icon-question-sign"></i>
                <i class="icon-quote-left"></i>
                <i class="icon-rss"></i>
                <i class="icon-star-empty"></i>
                <i class="icon-star-half"></i>
                <i class="icon-star-half-empty"></i>
                <i class="icon-star-half-empty"></i>
                <i class="icon-subscript"></i>
                <i class="icon-suitcase"></i>
                <i class="icon-sun"></i>
                <i class="icon-superscript"></i>
                <i class="icon-tablet"></i>
                <i class="icon-wrench"></i>
                <i class="icon-zoom-in"></i>
                <i class="icon-zoom-out"></i>

								<i class="icon-bitcoin"></i>
								<i class="icon-cny"></i>
								<i class="icon-dollar"></i>
								<i class="icon-eur"></i>
								<i class="icon-gbp"></i>
								<i class="icon-inr"></i>
								<i class="icon-jpy"></i>
								<i class="icon-krw"></i>
								<i class="icon-renminbi"></i>
								<i class="icon-usd"></i>
								<i class="icon-btc"></i>
								<i class="icon-rupee"></i>
								<i class="icon-won"></i>
								<i class="icon-euro"></i>

								<i class="icon-align-center"></i>
								<i class="icon-align-justify"></i>
								<i class="icon-align-left"></i>
								<i class="icon-align-right"></i>
								<i class="icon-copy"></i>
								<i class="icon-cut"></i>
								<i class="icon-eraser"></i>
								<i class="icon-file"></i>
								<i class="icon-font"></i>
								<i class="icon-indent-left"></i>
								<i class="icon-indent-right"></i>
								<i class="icon-paper-clip"></i>
								<i class="icon-repeat"></i>
								<i class="icon-th-list"></i>

								<i class="icon-arrow-down"></i>
								<i class="icon-arrow-left"></i>
								<i class="icon-arrow-right"></i>
								<i class="icon-arrow-up"></i>
								<i class="icon-chevron-down"></i>
								<i class="icon-chevron-left"></i>
								<i class="icon-chevron-right"></i>
								<i class="icon-chevron-up"></i>
								<i class="icon-hand-down"></i>
								<i class="icon-hand-left"></i>
								<i class="icon-hand-right"></i>
								<i class="icon-hand-up"></i>
								<i class="icon-chevron-sign-left"></i>
								<i class="icon-chevron-sign-right"></i>

								<i class="icon-backward"></i>
								<i class="icon-eject"></i>
								<i class="icon-fast-backward"></i>
								<i class="icon-fast-forward"></i>
								<i class="icon-forward"></i>
								<i class="icon-fullscreen"></i>
								<i class="icon-pause"></i>
								<i class="icon-play"></i>
								<i class="icon-resize-full"></i>
								<i class="icon-resize-small"></i>
								<i class="icon-step-backward"></i>
								<i class="icon-step-forward"></i>
								<i class="icon-stop"></i>
								<i class="icon-youtube-play"></i>

								<i class="icon-facebook"></i>
								<i class="icon-twitter"></i>
								<i class="icon-google-plus"></i>
								<i class="icon-pinterest"></i>
								<i class="icon-apple"></i>
								<i class="icon-android"></i>
								<i class="icon-dribbble"></i>
								<i class="icon-dropbox"></i>
								<i class="icon-flickr"></i>
								<i class="icon-foursquare"></i>
								<i class="icon-github"></i>
								<i class="icon-instagram"></i>
								<i class="icon-linkedin"></i>
								<i class="icon-windows"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
		</div>
	</section>

		</div>
	</main>

<?php
include 'data-web/php/footer.php';
include 'js.php';
?>

<!-- Mirrored from demo.designwall.com/dw-gamez/?page_id=245 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jul 2018 04:41:28 GMT -->
</html>

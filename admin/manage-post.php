<!DOCTYPE html>
<?php
include "../koneksi.php";
include 'head.php';
?>
<body class="page-template page-template-template-full-width page-template-template-full-width-php page page-id-252">
  <div id="page" class="hfeed site">
<?php
include 'data-admin/php/nav1.php';
?>
    <main id="site-main" class="site-main">
      <div class="container">
        <section id="content" class="site-content">
          <div id="main-content">
            <article id="post-252" class="post-252 page type-page status-publish hentry">
              <header class="page-header">
                <h2 class="page-title">Manage Posting
                </h2>
              </header>
              <div class="page-content">
                <p>
                <div class="row gallery-page">
                  <div class="col-sm-12">
                    <label for="author">
                      <font color="blue">All post *
                      </font>
                    </label>
                    <div class="main-box-body clearfix">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>
                                <span>Title
                                </span>
                              </th>
                              <th class="text-center">
                                <span>Category
                                </span>
                              </th>
							  <th class="text-center">
                                <span>Type
                                </span>
                              </th>
							  <th class="text-center">
                                <span>Date Release
                                </span>
                              </th>
							  <th class="text-center">
                                <span>Status
                                </span>
                              </th>
                              <th class="text-center">
                                <span>Options
                                </span>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
								$qry = mysqli_query($conn, "SELECT * from games");
								while ($data = mysqli_fetch_array($qry)) {
								?>
								<tr>
								  <td>
									<?php echo $data['judul']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['kategori']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['type']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['tgl_release']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['keadaan']; ?>
								  </td>
								  <td class="text-center">
									<span class="label label-danger text-center">
									</span>
								  </td>
								</tr>
								<?php    
								}
							?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                </p>
				
				<p>
                <div class="row gallery-page">
                  <div class="col-sm-6">
                    <label for="author">
                      <font color="blue">Hot Games *
                      </font>
                    </label>
                    <div class="main-box-body clearfix">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>
                                <span>Title
                                </span>
                              </th>
                              <th class="text-center">
                                <span>Category
                                </span>
                              </th>
							  
							  <th class="text-center">
                                <span>Type
                                </span>
                              </th>
                              <th class="text-center">
                                <span>Options
                                </span>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
								$qry = mysqli_query($conn, "SELECT * from games");
								while ($data = mysqli_fetch_array($qry)) {
								?>
								<tr>
								  <td>
									<?php echo $data['judul']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['kategori']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['type']; ?>
								  </td>
								  <td class="text-center">
									<span class="label label-danger text-center">
									</span>
								  </td>
								</tr>
								<?php    
								}
							?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
				  <div class="col-sm-6">
                    <label for="author">
                      <font color="blue">Rating Games *
                      </font>
                    </label>
                    <div class="main-box-body clearfix">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>
                                <span>Title
                                </span>
                              </th>
                              <th class="text-center">
                                <span>Category
                                </span>
                              </th>
							  <th class="text-center">
                                <span>Type
                                </span>
                              </th>
                              <th class="text-center">
                                <span>Options
                                </span>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
								$qry = mysqli_query($conn, "SELECT * from games");
								while ($data = mysqli_fetch_array($qry)) {
								?>
								<tr>
								  <td>
									<?php echo $data['judul']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['kategori']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['type']; ?>
								  </td>
								  <td class="text-center">
									<span class="label label-danger text-center">
									</span>
								  </td>
								</tr>
								<?php    
								}
							?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                </p>
				<p>
                <div class="row gallery-page">
                  <div class="col-sm-12">
                    <label for="author">
                      <font color="blue">Emulator Games *
                      </font>
                    </label>
                    <div class="main-box-body clearfix">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>
                                <span>Title
                                </span>
                              </th>
                              <th class="text-center">
                                <span>Category
                                </span>
                              </th>
							  <th class="text-center">
                                <span>Type
                                </span>
                              </th>
                              <th class="text-center">
                                <span>Domain games
                                </span>
                              </th>
							  <th class="text-center">
                                <span>Options
                                </span>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
								$qry = mysqli_query($conn, "SELECT * from games inner join type_1 on games.type=type_1.type");
								while ($data = mysqli_fetch_array($qry)) {
								?>
								<tr>
								  <td>
									<?php echo $data['judul']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['kategori']; ?>
								  <td class="text-center">
									<?php echo $data['type']; ?>
								  </td>
								  <td class="text-center">
									<?php echo $data['domain_game']; ?>
								  <td class="text-center">
									<span class="label label-danger text-center">
									</span>
								  </td>
								</tr>
								<?php    
								}
							?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                </p>
              </div>
            </article>
          </div>
        </section>
      </div>
    </main>
  <?php
include 'data-admin/php/footer.php';
include 'js.php';
?>
  <!-- Mirrored from demo.designwall.com/dw-gamez/?page_id=252 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jul 2018 04:41:19 GMT -->
  </html>

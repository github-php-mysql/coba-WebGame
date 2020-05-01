<!DOCTYPE html>
<?php
include "../koneksi.php";
include 'head.php';
?>
<body class="archive page-template-default page page-id-307 list-dwqa-question">
  <div id="page" class="hfeed site">
    <?php
include 'data-admin/php/navigasi.php';
?>
    <main id="site-main" class="site-main">
      <div class="container">
        <section id="content" class="site-content">
          <div id="primary">
            <div id="primary-inner">
              <div id="main-content">
                <article id="post-250" class="post-250 page type-page status-publish hentry">
                  <header class="page-header">
                    <h1 class="page-title">Draft
                    </h1>
                  </header>
				  
                  <!--ARTIKEL DISINI-->
				   <div class="page-content">
				<div class="dwqa-container" >
				  <form method="post" class="dwqa-content-ask-form" enctype="multipart/form-data">
					<p>
					<div class="row gallery-page">
					<div class="col-sm-12">
							 <label for="author">
								<font color="blue">List draft *
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
									$qry = mysqli_query($conn, "SELECT * from keadaan inner join games on keadaan.draft=games.keadaan");
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
										<?php echo $data['keadaan']; ?>
									  </td>
									  <td class="status text-center">
                                            <span data-toggle="tooltip" title="lihat Posting"><a href="../posting.php?id=<?php echo $data['id']; ?>"><font color="green"><i class="fa fa-eye"></i></font></a> | 
                                            <a href="edit-artikel-draft.php?id=<?php echo $data['id']; ?>"><span data-toggle="tooltip" title="Edit Posting"><font color="#f2780a"><i class="fa fa-edit"></i></font></a> | 
                                            <a href="hapus post/hapus post.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin menghapus data Posting ini?')">
										<span data-toggle="tooltip" title="Hapus Posting PC"><font color="red"><i class="fa fa-trash"></i></font></a>
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
                </form>
            </div>
          </div>
          </article>
      </div>
      </div>
  </div>
  <div id="secondary" class="widget-area" role="complementary">
    <div class="secondary-inner">
      <aside id="dw_accordions-2" class="widget dw_accordion news-accordion">
        <div class="accordion" id="accordion-dw_accordions-2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-meta-dw-widget-1">VISITORS
              </a>
            </div>
            <div id="dw_accordions-2-meta-dw-widget-1" class="widget_meta-dw-widget-1  accordion-body collapse widget_meta">
              <div class="accordion-inner">
                <h3 class="widget-title">VISITORS
                </h3>
                <ul>
                  <li>
                    <a href="visitors.php">A total of visitors
                    </a>
                  </li>
                  <li>
                    <a href="graph-visitor.php">The Graph visitor
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-meta-dw-widget-4">POSTING
              </a>
            </div>
            <div id="dw_accordions-2-meta-dw-widget-4" class="widget_meta-dw-widget-4  accordion-body collapse in widget_meta">
              <div class="accordion-inner">
                <h3 class="widget-title">POSTING
                </h3>
                <ul>
                  <li>
                    <a href="buat-posting.php">Creat a post
                    </a>
                  </li>
                  <li>
                    <a href="draft.php">Draft
                    </a>
                  </li>
                  <li>
                    <a href="kategori.php">Creat a category
                    </a>
                  </li>
                  <li>
                    <a href="list-images.php">List Images
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-meta-dw-widget-2">EDITING
              </a>
            </div>
            <div id="dw_accordions-2-meta-dw-widget-2" class="widget_meta-dw-widget-2  accordion-body collapse widget_meta">
              <div class="accordion-inner">
                <h3 class="widget-title">EDITING
                </h3>
                <ul>
                  <li>
                    <a href="edit-post.php">Edit post
                    </a>
                  </li>
                  <li>
                    <a href="edit-header.php">Edit Header
                    </a>
                  </li>
                  <li>
                    <a href="edit-footer.php">Edit Footer
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-meta-dw-widget-3">SOCIAL
              </a>
            </div>
            <div id="dw_accordions-2-meta-dw-widget-3" class="widget_meta-dw-widget-3  accordion-body collapse widget_meta">
              <div class="accordion-inner">
                <h3 class="widget-title">USER/SOCIAL
                </h3>
                <ul>
                  <li>
                    <a href="wp-login.html">List User
                    </a>
                  </li>
                  <li>
                    <a href="indexd784.html?feed=rss2">Comments
                    </a>
                  </li>
                  <li>
                    <a href="indexd784.html?feed=rss2">Messages
                    </a>
                  </li>
                  <li>
                    <a href="indexd784.html?feed=rss2">A total of visitor
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-calendar-dw-widget-1">Calendar
              </a>
            </div>
            <div id="dw_accordions-2-calendar-dw-widget-1" class="widget_calendar-dw-widget-1  accordion-body collapse in widget_calendar">
              <div class="accordion-inner">
                <h3 class="widget-title">Calendar
                </h3>
                <div id="calendar_wrap" class="calendar_wrap">
                  <table id="wp-calendar">
                    <caption>July 2018
                    </caption>
                    <thead>
                      <tr>
                        <th scope="col" title="Monday">M
                        </th>
                        <th scope="col" title="Tuesday">T
                        </th>
                        <th scope="col" title="Wednesday">W
                        </th>
                        <th scope="col" title="Thursday">T
                        </th>
                        <th scope="col" title="Friday">F
                        </th>
                        <th scope="col" title="Saturday">S
                        </th>
                        <th scope="col" title="Sunday">S
                        </th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <td colspan="3" id="prev">
                          <a href="index3642.html?m=201212">&laquo; Dec
                          </a>
                        </td>
                        <td class="pad">&nbsp;
                        </td>
                        <td colspan="3" id="next" class="pad">&nbsp;
                        </td>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td colspan="6" class="pad">&nbsp;
                        </td>
                        <td>1
                        </td>
                      </tr>
                      <tr>
                        <td>2
                        </td>
                        <td>3
                        </td>
                        <td>4
                        </td>
                        <td>5
                        </td>
                        <td>6
                        </td>
                        <td>7
                        </td>
                        <td>8
                        </td>
                      </tr>
                      <tr>
                        <td>9
                        </td>
                        <td>10
                        </td>
                        <td>11
                        </td>
                        <td>12
                        </td>
                        <td id="today">13
                        </td>
                        <td>14
                        </td>
                        <td>15
                        </td>
                      </tr>
                      <tr>
                        <td>16
                        </td>
                        <td>17
                        </td>
                        <td>18
                        </td>
                        <td>19
                        </td>
                        <td>20
                        </td>
                        <td>21
                        </td>
                        <td>22
                        </td>
                      </tr>
                      <tr>
                        <td>23
                        </td>
                        <td>24
                        </td>
                        <td>25
                        </td>
                        <td>26
                        </td>
                        <td>27
                        </td>
                        <td>28
                        </td>
                        <td>29
                        </td>
                      </tr>
                      <tr>
                        <td>30
                        </td>
                        <td>31
                        </td>
                        <td class="pad" colspan="5">&nbsp;
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
  </section>
</div>
</main>
<?php
include 'data-admin/php/footer.php';
include 'js.php';
?>
<!-- Mirrored from demo.designwall.com/dw-gamez/?page_id=308 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jul 2018 04:42:19 GMT -->
</html>

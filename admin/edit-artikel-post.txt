<!DOCTYPE html>
<?php
include "../koneksi.php";
$id = $_GET['id'];
$qry = mysqli_query($conn, "SELECT * FROM games where id='$id'");
$data = mysqli_fetch_array($qry);
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
                    <h1 class="page-title">Create a post
                    </h1>
                  </header>
                  <div class="page-content">
                    <div class="dwqa-container" >
                      <form method="post" class="dwqa-content-ask-form" enctype="multipart/form-data">
                        <p>
                          <label for="question_title">
                            <font color="blue">Title *
                            </font>
                          </label>
                          <input type="text" class="form-control" name="title" value="<?php echo $data['judul']; ?>" tabindex="1">
                        </p>
                        <p>
                          <label for="question_title">
                            <font color="blue">Description *
                            </font>
                          </label>
                        <div id="wp-question-content-wrap" class="wp-core-ui wp-editor-wrap html-active">
                          <link rel='stylesheet' id='dashicons-css' href='wp-includes/css/dashicons.min4f4a.css?ver=4.7.11' type='text/css' media='all' />
                          <link rel='stylesheet' id='editor-buttons-css' href='wp-includes/css/editor.min4f4a.css?ver=4.7.11' type='text/css' media='all' />
                          <div id="wp-question-content-editor-container" class="wp-editor-container">
                            <div id="qt_question-content_toolbar" class="quicktags-toolbar">
                            </div>
                            <textarea class="wp-editor-area" rows="5" cols="40" name="description" id="question-content">
                              <?php echo $data['keterangan']; ?>
                            </textarea>
                          </div>
                        </div>
                        </p>
                      <p>
                      <div class="row gallery-page">
                        <div class="col-sm-12">
                          <label for="author">
                            <font color="blue">Main game files *
                            </font>
                          </label>
                        </div>
                        <div class="col-md-4 col-xs-8">
                          Category
                          <select name='category' class='form-control col-sm-12' >
                            <option class='level-0 value='
                                    <?php echo $data["kategori"]; ?>'>
                            <?php echo $data['kategori']; ?>
                            </option>
                          <option class='level-0'>------------------
                          </option>
                          <?php
$qry = mysqli_query($conn, "select kategori, kategori from kategori");
while ($row = mysqli_fetch_row($qry))
{
echo "<option class='level-0' value=$row[0]>$row[1]";
}
?>    
                          </select>
                      </div>
                      <div class="col-md-4 col-xs-8">
                        Type Games
                        <select name='type_games' class='form-control col-sm-12' >
                          <option class='level-0' value='<?php echo $data["type"]; ?>'>
                            <?php echo $data['type']; ?>
                          </option>
                          <option class='level-0'>------------------
                          </option>
                          <option class='level-0' value='Pc'>Pc
                          </option>
                          <option class='level-0' value='Ppsspp'>Ppsspp
                          </option>
                          <option class='level-0' value='Epsxe'>Epsxe
                          </option>
                          <option class='level-0' value='Ps2'>Ps2
                          </option>
                          <option class='level-0' value='Nintendo'>Nintendo
                          </option>
                        </select>
                      </div>
                      <div class="col-md-4 col-xs-8">
                        Domain games
                        <select name='domain_games' class='form-control col-sm-12' >
                          <option class='level-0' value='.Exe'>
                            <?php echo $data['domain_game']; ?>
                          </option>
                          <option class='level-0'>------------------
                          </option>
                          <option class='level-0' value='.Exe'>.Exe (PC)
                          </option>
                          <option class='level-0' value='.Iso/Cso'>.Iso/Cso (Ppsspp, Epsxe, Ps2, Nintendo)
                          </option>
                        </select>
                      </div>
                    </div>
                    </p>
                  <p>
                  <div class="row gallery-page">
                    <div class="col-sm-12">
                      <label for="author">
                        <font color="blue">Requiment *
                        </font>
                      </label>
                    </div>
                    <div class="col-md-4 col-xs-6">
                      Ram 
                      <input class="form-control" type="text" name="ram" value="<?php echo $data['ram']; ?>" placeholder="Byte">
                    </div>
                    <div class="col-md-4 col-xs-6">
                      Processor 
                      <input class="form-control" type="text" name="processor" value="<?php echo $data['processor']; ?>" placeholder="Ghz">
                    </div>
                    <div class="col-md-4 col-xs-6">
                      Memory 
                      <input class="form-control" type="text" name="memory" value="<?php echo $data['memory']; ?>" placeholder="Byte">
                    </div>
                  </div>
                  </p>
                <p>
                  <label for="_dwqa_anonymous_email">
                    <font color="blue">Single Link *
                    </font>
                  </label>
                  <input type="url" class="form-control" name="link" value="<?php echo $data['link']; ?>" placeholder="Https:\\">
                </p>
                <p>
                <div class="row gallery-page">
                  <div class="col-sm-12">
                    <label for="author">
                      <font color="blue">Part Link *
                      </font>
                    </label>
                  </div>
                  <div class="col-md-4 col-xs-6">
                    Part 1 
                    <input class="form-control" type="url" name="link1" value="<?php echo $data['link1']; ?>" placeholder="Https:\\">
                  </div>
                  <div class="col-md-4 col-xs-6">
                    Part 2 
                    <input class="form-control" type="url" name="link2" value="<?php echo $data['link2']; ?>" placeholder="Https:\\">
                  </div>
                  <div class="col-md-4 col-xs-6">
                    Part 3 
                    <input class="form-control" type="url" name="link3" value="<?php echo $data['link3']; ?>" placeholder="Https:\\">
                  </div>
                  <div class="col-md-4 col-xs-6">
                    Part 4 
                    <input class="form-control" type="url" name="link4" value="<?php echo $data['link4']; ?>" placeholder="Https:\\">
                  </div>
                  <div class="col-md-4 col-xs-6">
                    Part 5 
                    <input class="form-control" type="url" name="link5" value="<?php echo $data['link5']; ?>" placeholder="Https:\\">
                  </div>
                  <input type="hidden" name="update" value="update">
                </div>
                </p>
              <br>
              <button class="btn btn-success btn-sm" type="submit" name="simpan">Simpan
              </button>
              <a id="accordion-dw_accordions-2" class="btn btn-warning btn-sm" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-meta-dw-widget-10">Edit Images
              </a>
			  <p>
              </form>
          </div>
          </div>
        <?php
			if(isset($_POST['simpan'])){
				
			$title = $_POST['title'];
			$date_post = date("d-m-Y");
			$description = $_POST['description'];
			$type_games = $_POST['type_games'];
			$domain_games = $_POST['domain_games'];
			$category = $_POST['category'];
			$ram = $_POST['ram'];
			$processor = $_POST['processor'];
			$memory = $_POST['memory'];
			$link = $_POST['link'];
			$link1 = $_POST['link1'];
			$link2 = $_POST['link2'];
			$link3 = $_POST['link3'];
			$link4 = $_POST['link4'];
			$link5 = $_POST['link5'];
			
			$terupdate = $_POST['update'];
			
			$sql_data = "update games set judul='".$title."', tgl_post='".$date_post."', keterangan='".$description."', kategori='".$category."', type='".$type_games."', domain_game='".$domain_games."', ram='".$ram."', processor='".$processor."', memory='".$memory."',
			link='".$link."', link1='".$link1."', link2='".$link2."', link3='".$link3."', link4='".$link4."', link5='".$link5."', posting='".$terupdate."' where id='".$id."'";
			if(mysqli_query($conn,$sql_data))
			{
			echo "<script>alert('Data di simpan');document.location='edit-post.php'</script>";
			}else{
			echo "<script>alert('Error');document.location='edit-artikel-post.php'</script>";
			}
			mysqli_close($conn);
			}
		?>
        <div id="dw_accordions-2-meta-dw-widget-10" class="widget_meta-dw-widget-10  box registration-form collapse widget_meta">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="row gallery-page">
                <p>
				<label for="_dwqa_anonymous_email">
                    <font color="blue">(*max 4 upload*) 
                    </font>
                  </label>
                <div class="col-md-4 col-xs-6">
                  Screen shot 1
                  <input class="form-control" type="file" name="foto1" >
				  <?php echo "<img class='img-responsive' src='../data-web/images/".$data['gambar']."' width='210px' height='225px'/>"; ?>
                </div>
				<div class="col-md-4 col-xs-6">
                  Screen shot 2
                  <input class="form-control" type="file" name="foto2"><p>
				  <?php echo "<img class='img-responsive' src='../data-web/images/".$data['gambar1']."' width='210px' height='225px'/>"; ?>
                </div>
				<div class="col-md-4 col-xs-6">
                  Screen shot 3
                  <input class="form-control" type="file" name="foto3"><p>
				  <?php echo "<img class='img-responsive' src='../data-web/images/".$data['gambar2']."' width='210px' height='225px'/>"; ?>
                </div>
				<div class="col-md-4 col-xs-6">
                  Screen shot 4
                  <input class="form-control" type="file" name="foto4"><p>
				  <?php echo "<img class='img-responsive' src='../data-web/images/".$data['gambar3']."' width='210px' height='225px'/>"; ?>
                </div>
              <input type="hidden" name="update" value="update">
            </div>
            </div>
          <button class="btn btn-warning btn-sm" type="submit" name="change_photo">Change Photo
          </button>
          </form>
        <?php
			if(isset($_POST['change_photo'])){
			
			$nama_file = $_FILES['foto1']['name'];
			$ukuran_file = $_FILES['foto1']['size'];
			$tipe_file = $_FILES['foto1']['type'];
			$tmp_file = $_FILES['foto1']['tmp_name'];
			$gambar1 = $nama_file;
			$path = "../data-web/images/".$gambar1;
				if($tipe_file == "image/jpeg" || $tipe_file == "image/png")
					{
						if($ukuran_file <= 2000000)
						{
							move_uploaded_file($tmp_file, $path);

							$sql_data = "update games set gambar='".$gambar1."' where id='".$id."'";
							if(mysqli_query($conn,$sql_data))
							{
								echo "<script>alert('Managed to change the screenshot 1');</script>";
							}
							else 
							{
								echo "<font color='red'>Gagal ganti foto!</font>";
							}
						}
						else
						{
							echo "<font color='red'>Maaf, ukuran filenya terlalu besar.</font>";
						}
					}
			
			$nama_file2 = $_FILES['foto2']['name'];
			$ukuran_file2 = $_FILES['foto2']['size'];
			$tipe_file2 = $_FILES['foto2']['type'];
			$tmp_file2 = $_FILES['foto2']['tmp_name'];
			$gambar2 = $nama_file2;
			$path2 = "../data-web/images/".$gambar2;
				if($tipe_file2 == "image/jpeg" || $tipe_file2 == "image/png")
				{
					if($ukuran_file2 <= 2000000)
					{
						move_uploaded_file($tmp_file2, $path2);

						$sql_data2 = "update games set gambar1='".$gambar2."' where id='".$id."'";
						if(mysqli_query($conn,$sql_data2))
						{
							echo "<script>alert('Managed to change the screenshot 2');</script>";
						}
						else 
						{
							echo "<font color='red'>Gagal ganti foto!</font>";
						}
					}
					else
					{
						echo "<font color='red'>Maaf, ukuran filenya terlalu besar.</font>";
					}
				}
			$nama_file3 = $_FILES['foto3']['name'];
			$ukuran_file3 = $_FILES['foto3']['size'];
			$tipe_file3 = $_FILES['foto3']['type'];
			$tmp_file3 = $_FILES['foto3']['tmp_name'];
			$gambar3 = $nama_file3;
			$path3 = "../data-web/images/".$gambar3;
				if($tipe_file3 == "image/jpeg" || $tipe_file3 == "image/png")
				{
					if($ukuran_file3 <= 2000000)
					{
						move_uploaded_file($tmp_file3, $path3);

						$sql_data3 = "update games set gambar2='".$gambar3."' where id='".$id."'";
						if(mysqli_query($conn,$sql_data3))
						{
							echo "<script>alert('Managed to change the screenshot 3');</script>";
						}
						else 
						{
							echo "<font color='red'>Gagal ganti foto!</font>";
						}
					}
					else
					{
						echo "<font color='red'>Maaf, ukuran filenya terlalu besar.</font>";
					}
				}
			
			$nama_file4 = $_FILES['foto4']['name'];
			$ukuran_file4 = $_FILES['foto4']['size'];
			$tipe_file4 = $_FILES['foto4']['type'];
			$tmp_file4 = $_FILES['foto4']['tmp_name'];
			$gambar4 = $nama_file4;
			$path4 = "../data-web/images/".$gambar4;
			if($tipe_file4 == "image/jpeg" || $tipe_file4 == "image/png")
				{
					if($ukuran_file4 <= 2000000)
					{
						move_uploaded_file($tmp_file4, $path4);

						$sql_data4 = "update games set gambar3='".$gambar4."' where id='".$id."'";
						if(mysqli_query($conn,$sql_data4))
						{
							echo "<script>alert('Managed to change the screenshot 4');</script>";
						}
						else 
						{
							echo "<font color='red'>Gagal ganti foto!</font>";
						}
					}
					else
					{
						echo "<font color='red'>Maaf, ukuran filenya terlalu besar.</font>";
					}
				}
			}
		?>
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
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-meta-dw-widget-4">POSTING
            </a>
          </div>
          <div id="dw_accordions-2-meta-dw-widget-4" class="widget_meta-dw-widget-4  accordion-body collapse widget_meta">
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
            <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-meta-dw-widget-2">EDITING
            </a>
          </div>
          <div id="dw_accordions-2-meta-dw-widget-2" class="widget_meta-dw-widget-2  accordion-body collapse in widget_meta">
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
?>
<?php
include 'js.php';
?>
<!-- Mirrored from demo.designwall.com/dw-gamez/?page_id=308 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jul 2018 04:42:19 GMT -->
</html>

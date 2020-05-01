<div id="primary">
  <div id="primary-inner">
    <div id="sidebar-content-top">
      <aside id="text-4" class="widget widget_text">			
        <div class="textwidget">
          <a href="http://bit.ly/tf-wallclassic">
            <img src="data-web/images/ad-2.jpg" alt="" />
          </a>
        </div>
      </aside>
    </div>
    <div id="main-content">
      <div class="main-content-header">
        <h2 class="main-content-title">Recent 
          <span>
			Posts
		</span>
        </h2>
        <div class="main-content-actions">
        </div>
      </div>
      <div class="layout-narrow">
	
        <?php
			$page = (isset($_GET['page']))? $_GET['page'] : 1;
			$limit = 5;
			$limit_start = ($page - 1) * $limit;
		
			$qry = mysqli_query($conn, "SELECT * FROM keadaan inner join games on keadaan.publish=games.keadaan ORDER BY games.id DESC LIMIT ".$limit_start.",".$limit);
			while ($data = mysqli_fetch_array($qry)) {
		?>									
        <article id="post-107" class="post-107 post type-post status-publish format-standard has-post-thumbnail hentry category-reviews tag-fighting tag-sports tag-super-mario">
          <div class="entry-thumbnail col-lg-4 col-md-6 col-xs-6">
            <a href="index5a24.html?p=107" rel="bookmark">
                <?php echo "<img class='img-responsive' src='data-web/images/".$data['gambar']."' width='210px' height='210px'/>"; ?>
            </a>
          </div>
          <header class="entry-header">
            <h2 class="entry-title">
             <a href="artikel.php?id=<?php echo $data['id']; ?>" rel="bookmark">
                <?php echo $data['judul']; ?>
              </a>
            </h2>
            <div class="entry-meta meta-top">
              <span class="posted-on">
                <i class="fa fa-clock-o">
                </i> 
                <a href="index5a24.html?p=107" title="12:00 am" rel="bookmark">
                  <time class="entry-date" datetime="2012-12-15T00:00:00+00:00"><?php echo $data['tgl_post']; ?>
                  </time>
                </a>
              </span>
              <span class="byline">
                <i class="fa fa-user">
                </i> 
                <span class="author vcard">
                  <a class="url fn n" href="indexcd64.html?author=1" title="View all posts by admin">admin
                  </a>
                </span>
              </span>		
              <span class="comments-link">
                <a href="index5a24.html?p=107#comments">2
                </a>
              </span>
              <span class="cat-links">
                <i class="fa fa-folder-open">
                </i> 
                <a href="review.html?cat=3" rel="category">Reviews
                </a>		
              </span>
            </div>
          </header>
          <div class="entry-content">
            <p>
              <?php echo $data['keterangan']; ?>. 
              <a href="artikel.php?id=<?php echo $data['id']; ?>" class="more-link">Read more &#8230;
              </a>
            </p>
          </div>
        </article>
        <?php
			}
			?>
			<nav class="navigation pagination" role="navigation">
          <ul class="nav-links">
		  <?php
				if($page == 1){
				?>
					<li class="left disabled page-numbers"><i class="fa fa-backward"></i></li>
					<li class="disabled page-numbers"><i class="fa fa-caret-left"></i></li>
				<?php
				}else{
					$link_prev = ($page > 1)? $page - 1 : 1;
				?>
					<li class="left page-numbers"><a href="index.php?page=1"><i class="fa fa-backward"></i></a></li>
					<li class="page-numbers"><a href="index.php?page=<?php echo $link_prev; ?>"><i class="fa fa-caret-left"></i></a></li>
				<?php
				}
				?>
				
				<?php
				$sql2 = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM keadaan inner join games on keadaan.publish=games.keadaan");
				$get_jumlah = mysqli_fetch_array($sql2);
				
				$jumlah_page = ceil($get_jumlah['jumlah'] / $limit);
				$jumlah_number = 3;
				$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
				$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
				
				for($i = $start_number; $i <= $end_number; $i++){
					$link_active = ($page == $i)? 'current' : '';
				?>
					<li class="page-numbers <?php echo $link_active; ?>"><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php
				}
				?>
				
				<?php
				if($page == $jumlah_page){
				?>
					<li class="page-numbers disabled"><i class="fa fa-caret-right"></i></li>
					<li class="page-numbers disabled"><i class="fa fa-forward"></i></li>
				<?php
				}else{
					$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
				?>
					<li class="page-numbers"><a href="index.php?page=<?php echo $link_next; ?>"><i class="fa fa-caret-right"></i></a></li>
					<li class="page-numbers"><a href="index.php?page=<?php echo $jumlah_page; ?>"><i class="fa fa-forward"></i></a></li>
				<?php
				}
				?>
			  </ul>
			</nav>
      </div>
    </div>

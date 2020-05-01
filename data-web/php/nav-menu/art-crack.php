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
        <h2 class="main-content-title">Crack 
          <span>
			Games
		</span>
        </h2>
        <div class="main-content-actions">
        </div>
      </div>
      <div class="layout-narrow">
	  
        <?php
			$qry = mysqli_query($conn, "SELECT * FROM keadaan inner join games on keadaan.publish=games.keadaan ORDER BY games.id DESC");
			while ($data = mysqli_fetch_array($qry)) {
		?>									
        <article id="post-107" class="post-107 post type-post status-publish format-standard has-post-thumbnail hentry category-reviews tag-fighting tag-sports tag-super-mario">
          <div class="entry-thumbnail col-lg-4 col-md-6 col-xs-6">
            <a href="index5a24.html?p=107" rel="bookmark">
              <img width="210" height="210" src="data-web/images/mario-luigi-dream-team-210x210.jpg" class="attachment-homepage-narrow size-homepage-narrow wp-post-image" alt=""/>
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
          <h2 class="screen-reader-text">Posts navigation
          </h2>
          <div class="nav-links">
            <span class='page-numbers current'>1
            </span>
            <a class='page-numbers' href='index6146.html?paged=2'>2
            </a>
            <a class='page-numbers' href='index8a68.html?paged=3'>3
            </a>
            <a class='page-numbers' href='indexe377.html?paged=4'>4
            </a>
            <a class='page-numbers' href='index880d.html?paged=5'>5
            </a>
            <span class="page-numbers dots">&hellip;
            </span>
            <a class='page-numbers' href='indexe43e.html?paged=10'>10
            </a>
            <a class="next page-numbers" href="index6146.html?paged=2">
              <i class="fa fa-angle-right">
              </i>
            </a>
          </div>
        </nav>
      </div>
    </div>

<div class="feature-3 feature widgeR-area hidden-xs hidden-sm">
  <aside id="posts-carousel-4" class="widget widget_posts_carousel">    
    <div id="carousel-posts-carousel-4" class="carousel carousel-4 slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
		  <?php
			$qry = mysqli_query($conn, "SELECT * from games inner join keadaan on games.keadaan=keadaan.publish inner join rating on rating.nilai=games.rating ORDER BY games.tgl_post DESC LIMIT 4");
			if(mysqli_num_rows($qry)){
			while ($data = mysqli_fetch_array($qry)) {
			?>
            <div class="col-sm-3">
              <a href="artikel.php?id=<?php echo $data['id']; ?>">
                <?php echo "<img width='300' height='157' class='attachment-medium size-medium wp-post-image' src='data-web/images/".$data['gambar']."' sizes='(max-width: 300px) 100vw, 300px'/>"; ?>
				</a>
              <div class="carousel-caption">
                <h4 class="carousel-title">
                  <a href="artikel.php?id=<?php echo $data['id']; ?>" class="post-title" title="<?php echo $data['judul']; ?>"><?php echo $data['judul']; ?>
                  </a>
                </h4>            
                <div class="rating-star">
                  <?php echo $data['fa']; ?>          
                </div>
                <div class="carousel-meta">
                  <time>
                    <a href="artikel.php?id=<?php echo $data['id']; ?>">
                      <i class="icon-time">
                      </i>Date Post : <?php echo $data['tgl_post']; ?>
                    </a>
                  </time>
                </div>          
              </div>
            </div>
			<?php
			}
			}
			?>
            
          </div>
        </div>                  
        <div class="item">
          <div class="row">
		  <?php
			$qry = mysqli_query($conn, "SELECT * from keadaan inner join games on keadaan.publish=games.keadaan ORDER BY games.tgl_post DESC LIMIT 4");
			if(mysqli_num_rows($qry)){
			while ($data = mysqli_fetch_array($qry)) {
			?>
            <div class="col-sm-3">
              <a href="artikel.php?id=<?php echo $data['id']; ?>">
			    <?php echo "<img width='300' height='157' class='attachment-medium size-medium wp-post-image' src='data-web/images/".$data['gambar']."' sizes='(max-width: 300px) 100vw, 300px'/>"; ?>
              </a>
              <div class="carousel-caption">
                <h4 class="carousel-title">
                  <a href="artikel.php?id=<?php echo $data['id']; ?>" class="post-title" title="Mario &#038; Luigi: Dream Team"><?php echo $data['judul']; ?>
                  </a>
                </h4>
                <div class="carousel-meta">
                  <time>
                    <a href="index5a24.html?p=107">
                      <i class="icon-time">
                      </i>Date Post : <?php echo $data['tgl_post']; ?>
                    </a>
                  </time>
                </div>          
              </div>
            </div>
			<?php
			}
			}
			?>
            
          </div>
        </div>                   
        <div class="item">
          <div class="row">
		  <?php
			$qry = mysqli_query($conn, "SELECT * from posting inner join games on posting.hot=games.hot ORDER BY games.tgl_post DESC LIMIT 4");
			if(mysqli_num_rows($qry)){
			while ($data = mysqli_fetch_array($qry)) {
			?>
            <div class="col-sm-3">
              <a href="index5a24.html?p=107">
                <img width="300" height="157" src="data-web/images/mario-luigi-dream-team-300x157.jpg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 300px) 100vw, 300px" />          
              </a>
              <div class="carousel-caption">
                <h4 class="carousel-title">
                  <a href="artikel.php?id=<?php echo $data['id']; ?>" class="post-title" title="Mario &#038; Luigi: Dream Team"><?php echo $data['judul']; ?>
                  </a>
                </h4>            
                <div class="rating-star">
                  <i class="fa fa-star ">
                  </i>
                  <i class="fa fa-star ">
                  </i>
                  <i class="fa fa-star-half-o ">
                  </i>
                  <i class="fa fa-star-o ">
                  </i>
                  <i class="fa fa-star-o ">
                  </i>            
                </div>
                <div class="carousel-meta">
                  <time>
                    <a href="artikel.php?id=<?php echo $data['id']; ?>">
                      <i class="icon-time">
                      </i>Date Post : <?php echo $data['tgl_post']; ?>
                    </a>
                  </time>
                </div>          
              </div>
            </div>
			<?php
			}
			}
			?>
            
          </div>
        </div>
      </div>
      <div class="carousel-control-wrap">
        <a data-slide="prev" href="#carousel-posts-carousel-4" class="left carousel-control">
          <span class="icon-prev">
          </span>
        </a>
        <a data-slide="next" href="#carousel-posts-carousel-4" class="right carousel-control">
          <span class="icon-next">
          </span>
        </a>
      </div>
    </div>
  </aside>
</div>

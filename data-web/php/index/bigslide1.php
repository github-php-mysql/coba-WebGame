<div class="wrap-feature">
  <div class="feature-1 feature widget-area">
    <aside id="posts-carousel-2" class="widget widget_posts_carousel">    
      <div id="carousel-posts-carousel-2" class="carousel carousel-2 slide" data-ride="carousel">
        <div class="carousel-indicators-wrap">
          <ol class="carousel-indicators">
		  <?php
			$qry = mysqli_query($conn, "SELECT * FROM games inner join domain_game on games.domain_game=domain_game.exe ORDER BY games.tgl_release DESC");
			$data = mysqli_fetch_row($qry)
		  ?>
            <li class="active" data-slide-to="0" data-target="#carousel-posts-carousel-2"> 
				<?php echo "<img class='img-responsive attachment-thumbnail size-thumbnail wp-post-image' src='data-web/images/".$data[9]."' width='150px' height='150px'/>"; ?>
            </li>
			
			<?php
			 $qry1 = mysqli_query($conn, "SELECT * FROM games inner join domain_game on games.domain_game=domain_game.iso ORDER BY games.tgl_release DESC");
			 $data1 = mysqli_fetch_row($qry1)
		    ?>
            <li data-slide-to="1" data-target="#carousel-posts-carousel-2">          
              <?php echo "<img class='img-responsive attachment-thumbnail size-thumbnail wp-post-image' src='data-web/images/".$data1[9]."' width='150px' height='150px'/>"; ?>     
            </li>                  
           <?php
			 $qry2 = mysqli_query($conn, "SELECT * FROM games inner join posting on games.hot=posting.hot ORDER BY games.hot DESC");
			 $data2 = mysqli_fetch_row($qry2)
		    ?>
            <li data-slide-to="1" data-target="#carousel-posts-carousel-2">          
              <?php echo "<img class='img-responsive attachment-thumbnail size-thumbnail wp-post-image' src='data-web/images/".$data2[9]."' width='150px' height='150px'/>"; ?>     
            </li>                  
           <?php
			 $qry3 = mysqli_query($conn, "SELECT * FROM games inner join posting on games.rating=posting.rating ORDER BY games.rating DESC");
			 $data3 = mysqli_fetch_row($qry3)
		    ?>
            <li data-slide-to="1" data-target="#carousel-posts-carousel-2">          
              <?php echo "<img class='img-responsive attachment-thumbnail size-thumbnail wp-post-image' src='data-web/images/".$data3[9]."' width='150px' height='150px'/>"; ?>     
            </li>
          </ol>
        </div>
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">          
              <div class="col-sm-12">
			  <a href="artikel.php?id=<?php echo $data[0]; ?>">
                  <?php echo "<img class='img-responsive attachment-thumbnail size-thumbnail wp-post-image' src='data-web/images/".$data[9]."' width='670px' height='350px'/>"; ?>
			 </a>
                <div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="artikel.php?id=<?php echo $data[0]; ?>" class="post-title" title="Take A Closer Look At The Xbox One Controller">New Game, <?php echo $data[1]; ?> <?php echo $data[21]; ?>
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                        <i class="icon-time">
                        </i> Date Release : <?php echo $data['2']; ?>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div>                  
          <div class="item">
            <div class="row">          
              <div class="col-sm-12">
			  <a href="artikel.php?id=<?php echo $data1[0]; ?>">
                  <?php echo "<img class='img-responsive attachment-thumbnail size-thumbnail wp-post-image' src='data-web/images/".$data1[9]."' width='670px' height='350px'/>"; ?>       
                </a>
				<div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="artikel.php?id=<?php echo $data1[0]; ?>" class="post-title" title="Reader Discussion: What Is The Best Day For Game Releases?">New Game, <?php echo $data1['1']; ?> <?php echo $data1[21]; ?>
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                        <i class="icon-time">
                        </i> Date Release : <?php echo $data1['2']; ?>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div>                  
          <div class="item">
            <div class="row">          
              <div class="col-sm-12">
                <a href="artikel.php?id=<?php echo $data2[0]; ?>">
                  <?php echo "<img class='img-responsive attachment-thumbnail size-thumbnail wp-post-image' src='data-web/images/".$data2[9]."' width='670px' height='350px'/>"; ?> 
				  </a>
                <div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="indexba52.html?p=39" class="post-title" title="Shiny Legendary Pokemon Distribution Event At GameStop Starts Today">New Game, <?php echo $data2['1']; ?>
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                        <i class="icon-time">
                        </i> Date Release : <?php echo $data2['2']; ?>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div>                  
          <div class="item">
            <div class="row">          
              <div class="col-sm-12">
                <a href="artikel.php?id=<?php echo $data3[0]; ?>">
                  <?php echo "<img class='img-responsive attachment-thumbnail size-thumbnail wp-post-image' src='data-web/images/".$data3[9]."' width='670px' height='350px'/>"; ?> 
				  </a>
                <div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="index1098.html?p=59" class="post-title" title="Sims 4 will run better on lower-end machines than Sims 3">New Game, <?php echo $data3['1']; ?>
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                        <i class="icon-time">
                       </i> Date Release : <?php echo $data3['2']; ?>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div> 
			<div class="item">
            <div class="row">          
              <div class="col-sm-12">
                <a href="index1098.html?p=59">
                  <img width="670" height="350" src="wp-content/uploads/sites/8/2012/08/maxis-sims-4-will-run-better-on-lower-end-machines-than-sims-3-670x350.jpg" class="attachment-homepage-wide size-homepage-wide wp-post-image" alt="" srcset="http://demo.designwall.com/dw-gamez/wp-content/uploads/sites/8/2012/08/maxis-sims-4-will-run-better-on-lower-end-machines-than-sims-3.jpg 670w, http://demo.designwall.com/dw-gamez/wp-content/uploads/sites/8/2012/08/maxis-sims-4-will-run-better-on-lower-end-machines-than-sims-3-300x157.jpg 300w" sizes="(max-width: 670px) 100vw, 670px" />          
                </a>
                <div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="index1098.html?p=59" class="post-title" title="Sims 4 will run better on lower-end machines than Sims 3">Sims 4 will run better on lower-end machines than Sims 3
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                      <a href="index1098.html?p=59">
                        <i class="icon-time">
                        </i> August 25, 2012
                      </a>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div> 		  
        </div>
        <div class="carousel-control-wrap">
          <a data-slide="prev" href="#carousel-posts-carousel-2" class="left carousel-control">
            <span class="icon-prev">
            </span>
          </a>
          <a data-slide="next" href="#carousel-posts-carousel-2" class="right carousel-control">
            <span class="icon-next">
            </span>
          </a>
        </div>
      </div>
    </aside>            
  </div>
  
  <div class="feature-2 feature widget-area hidden-xs">
    <aside id="posts-carousel-5" class="widget widget_posts_carousel">    
      <div id="carousel-posts-carousel-5" class="carousel carousel-3 slide" data-ride="carousel">
        <h3 class="widget-title">New Updates
        </h3>
<?php
	$qry4 = mysqli_query($conn, "SELECT * FROM games inner join posting on games.posting=posting.terupdate ORDER by games.tgl_post DESC");
	$data4 = mysqli_fetch_row($qry4)
	?>		
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">          
              <div class="col-sm-12">
                <a href="index0012.html?p=49">
				<?php echo "<img class='attachment-medium size-medium wp-post-image' src='data-web/images/".$data4[9]."' width='300' height='157'>"; ?> 
                </a>
                <div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="index0012.html?p=49" class="post-title" title="PSA: Streaming Sonys Gamescom 2013 Press Conference"><?php echo $data4['1']; ?>
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                      <a href="index0012.html?p=49">
                        <i class="icon-time">
                        </i> Date Post : <?php echo $data4['2']; ?>
                      </a>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div>                  
          <div class="item">
            <div class="row">          
              <div class="col-sm-12">
                <a href="index5eda.html?p=95">
				<?php $data4 = mysqli_fetch_row($qry4);
				echo "<img class='attachment-medium size-medium wp-post-image' src='data-web/images/".$data4[9]."' width='300' height='157'>"; ?>
                </a>
                <div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="index5eda.html?p=95" class="post-title" title="Diablo 3 trailer: PC Gamer&#8217;s commentary"><?php echo $data4['1']; ?>
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                      <a href="index5eda.html?p=95">
                        <i class="icon-time">
                        </i> Date Post : <?php echo $data4['2']; ?>
                      </a>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div>                  
          <div class="item">
            <div class="row">          
              <div class="col-sm-12">
                <a href="index5fb3.html?p=53">
				<?php $data4 = mysqli_fetch_row($qry4);
				echo "<img class='attachment-medium size-medium wp-post-image' src='data-web/images/".$data4[9]."' width='300' height='157'>"; ?>
				</a>
                <div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="index5fb3.html?p=53" class="post-title" title="BigFest Is A Music Festival Management Game For Vita"><?php echo $data4['1']; ?>
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                      <a href="index5fb3.html?p=53">
                        <i class="icon-time">
                        </i> Date Post : <?php echo $data4['2']; ?>
                      </a>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div>
		<div class="item">
            <div class="row">          
              <div class="col-sm-12">
                <a href="index5fb3.html?p=53">
				<?php $data4 = mysqli_fetch_row($qry4);
				echo "<img class='attachment-medium size-medium wp-post-image' src='data-web/images/".$data4[9]."' width='300' height='157'>"; ?>
				</a>
                <div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="index5fb3.html?p=53" class="post-title" title="BigFest Is A Music Festival Management Game For Vita"><?php echo $data4['1']; ?>
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                      <a href="index5fb3.html?p=53">
                        <i class="icon-time">
                        </i> Date Post : <?php echo $data4['2']; ?>
                      </a>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div> 
		<div class="item">
            <div class="row">          
              <div class="col-sm-12">
                <a href="index5fb3.html?p=53">
				<?php $data4 = mysqli_fetch_row($qry4);
				echo "<img class='attachment-medium size-medium wp-post-image' src='data-web/images/".$data4[9]."' width='300' height='157'>"; ?>
				</a>
                <div class="carousel-caption">
                  <h4 class="carousel-title">
                    <a href="index5fb3.html?p=53" class="post-title" title="BigFest Is A Music Festival Management Game For Vita"><?php echo $data4['1']; ?>
                    </a>
                  </h4>            
                  <div class="rating-star">
                  </div>
                  <div class="carousel-meta">
                    <time>
                      <a href="index5fb3.html?p=53">
                        <i class="icon-time">
                        </i> Date Post : <?php echo $data4['2']; ?>
                      </a>
                    </time>
                  </div>          
                </div>
              </div>
            </div>
          </div> 		  
        </div>
        <div class="carousel-control-wrap">
          <a data-slide="prev" href="#carousel-posts-carousel-5" class="left carousel-control">
            <span class="icon-prev">
            </span>
          </a>
          <a data-slide="next" href="#carousel-posts-carousel-5" class="right carousel-control">
            <span class="icon-next">
            </span>
          </a>
        </div>
      </div>
    </aside>
    <aside id="text-3" class="widget widget_text">          
      <div class="textwidget">
        <a href="http://bit.ly/tf-wallclassic">
          <img src="data-web/images/ad-3.jpg" alt="" />
        </a>
      </div>
    </aside>            
  </div>
</div>

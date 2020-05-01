<?php
	$id = $_GET['id'];
	$qry2 = mysqli_query($conn, "SELECT * FROM games inner join rating on games.rating=rating.nilai where id='$id'");
	$data = mysqli_fetch_array($qry2);
?>
<article id="post-107" class="post-107 post type-post status-publish format-standard has-post-thumbnail hentry category-reviews tag-fighting tag-sports tag-super-mario">
  <header class="entry-header">
    <h1 class="entry-title"><?php echo $data['judul']; ?>
    </h1>
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
      <span class="cat-links">
        <i class="fa fa-folder-open">
        </i> 
        <a href="index81ea.html?cat=3" rel="category">Reviews
        </a>		
      </span>
    </div>
  </header>
  <div class="entry-thumbnail">
  <?php echo "<img width='670' height='350' class='attachment-homepage-wide size-homepage-wide wp-post-image' src='data-web/images/".$data['gambar']."' sizes='(max-width: 300px) 100vw, 300px'/>"; ?>
  </div>
  <div class="entry-thumbnail">
		<h1 class="entry-title">Screenshot</h1>
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<a href="data-web/images/mario-luigi-dream-team-670x350.jpg"><img src="data-web/images/mario-luigi-dream-team-670x350.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="data-web/images/sites/8/2012/12/mario-luigi-dream-team-670x350.jpg"><img src="data-web/images/mario-luigi-dream-team-670x350.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="data-web/images/sites/8/2012/12/mario-luigi-dream-team-670x350.jpg"><img src="data-web/images/mario-luigi-dream-team-670x350.jpg" class="img-responsive" alt=""></a>
				</div>
			</div>
      </div>
	   <div class="entry-content avg-rating fa-2x col-sm-12 col-xs-12">
	   </div>
  <div class="entry-content">
    <div class="rating-table col-sm-6 col-xs-12 pull-right">
      <div class="avg-rating fa-2x">
		Detail
      </div>
	  <div class="box-rating">
        <div class="name-rating">RAM :
        </div>
        <div class="total-star">
           3GB
        </div>
      </div>
	  <div class="box-rating">
        <div class="name-rating">MEMORY :
        </div>
        <div class="total-star">
		   200 GB
        </div>
      </div>
	  <div class="box-rating">
        <div class="name-rating">PROCESSOR :
        </div>
        <div class="total-star">
		   2.5 Ghz
        </div>
      </div>
	  <div class="box-rating">
        <div class="name-rating">SIZE GAME :
        </div>
        <div class="total-star">
		   11 GB
        </div>
      </div>
	  <div class="avg-rating">
      </div>
	  <div class="box-rating">
        <div class="name-rating">RATING GAME :
        </div>
        <div class="total-star pull-right fa-lg">
          <?php echo $data['fa']; ?>
        </div>
      </div>
	  <div class="box-rating">
        <div class="name-rating">GIVE RATING :
        </div>
        <div class="total-star pull-right">
		<form action="artikel.php?id=<?php echo $data['id']; ?>" method="post">
		<select name="rating" class="col-sm-12" onchange="this.form.submit();">
			<option class="level-0">Select rating</option>
			<option class="level-0" value="1">1</option>
			<option class="level-0" value="2">2</option>
			<option class="level-0" value="3">3</option>
			<option class="level-0" value="4">4</option>
			<option class="level-0" value="5">5</option>
		</select>
		<input type="hidden" name="rating2" value="<?php echo $data['nilai']; ?>">
		</form>
		<?php
			if(isset($_POST['rating'])){
					
			$nilai1= $_POST['rating'];
			$nilai2= $_POST['rating2'];
			
			$rata= ($nilai1+$nilai2);
			$rata1 = $rata/2;
			
			$sql2 = "update games set rating='".$rata1."' where id='".$id."'";
			if(mysqli_query($conn, $sql2)){
			}
				echo "<script>alert('Rating has been send :)');</script>";
			}
		?>
        </div>		
      </div>
	  <div class="avg-rating">
      </div>
	  <div class="box-rating">
        <div class="name-rating">DONWNLOAD :
        </div>
        <a href="#"><div class="total-star pull-right"><b><i>
          GOOGLE DRIVE</b></i>
        </div></a>
      </div>
    </div>
	
    <p>Donec sed leo vel ante mattis molestie id quis lectus. Nulla a erat bibendum, mollis ipsum ullamcorper, pulvinar odio. Integer at elit ipsum. Nullam euismod, arcu vitae luctus tincidunt, enim orci rhoncus nulla, et rutrum dolor diam nec nibh.
      <span id="more-107">
      </span>Suspendisse elementum mauris sit amet ligula mattis molestie. Vivamus venenatis mauris tellus, auctor bibendum nunc pharetra hendrerit. Nullam ornare mi vel ligula hendrerit auctor. Vivamus in mi rutrum, volutpat risus in, tristique nisi. Etiam dignissim pulvinar eros. Aenean sit amet laoreet nisl, nec scelerisque turpis. Etiam ornare, justo non feugiat suscipit, tortor risus tempor arcu, id ullamcorper ipsum nibh et elit. Ut tincidunt, tellus vitae condimentum interdum, velit nulla interdum nisl, nec vulputate libero enim sit amet quam.
    </p>
    <p>Donec tristique, enim id auctor tincidunt, urna ligula tristique enim, eget semper tortor nisl ut libero. Fusce et tempor ipsum. Vivamus sed tortor at turpis laoreet fermentum. Cras nec iaculis purus. Mauris varius purus sed diam interdum, eget pulvinar mi consectetur. Cras porttitor turpis vitae erat pulvinar, a feugiat dui feugiat. Sed lacus ipsum, accumsan at aliquam a, ultrices et leo. Donec eros arcu, posuere at libero in, vestibulum vehicula sem. Nam quis lacus diam. Aenean tincidunt leo id pellentesque mollis. Vestibulum justo erat, feugiat at rutrum sit amet, sagittis auctor quam. Aenean blandit sollicitudin est non euismod. In hac habitasse platea dictumst.
    </p>
    <p>Aliquam aliquet, mi eu consectetur molestie, lectus est aliquet diam, eu suscipit massa massa ut sapien. Duis accumsan mollis velit. Integer venenatis eros orci, id imperdiet lectus lobortis non. Aliquam in malesuada tortor, et gravida nunc. In nisl nulla, convallis vel odio consequat, aliquet hendrerit lacus. Donec eu leo pellentesque, lobortis libero et, convallis nunc. Sed at lorem molestie, aliquet odio in, laoreet tortor. Praesent sit amet leo lacinia tellus imperdiet blandit sit amet malesuada urna. In hac habitasse platea dictumst.
    </p>
  </div>
  <div class="entry-bottom">
    <ul class="dw-social-share dwss-style-7">
      <li class="dwss-facebook">
        <a href="javascript.void(0)%3b/index.html" rel="nofollow">
          <i class="fa fa-facebook">
          </i> 
          <span>Facebook
          </span>
        </a>
      </li>
      <li class="dwss-twitter">
        <a href="javascript.void(0)%3b/index.html" rel="nofollow">
          <i class="fa fa-twitter">
          </i> 
          <span>Twitter
          </span>
        </a>
      </li>
      <li class="dwss-google-plus">
        <a href="javascript.void(0)%3b/index.html" rel="nofollow">
          <i class="fa fa-google-plus">
          </i> 
          <span>Google+
          </span>
        </a>
      </li>
      <li class="dwss-linkedin">
        <a href="javascript.void(0)%3b/index.html" rel="nofollow">
          <i class="fa fa-linkedin">
          </i> 
          <span>LinkedIn
          </span>
        </a>
      </li>
      <li class="dwss-pinterest">
        <a href="javascript.void(0)%3b/index.html" rel="nofollow">
          <i class="fa fa-pinterest">
          </i> 
          <span>Pinterest
          </span>
        </a>
      </li>
    </ul>		
  </div>
  <footer class="entry-footer">
    <div class="entry-tags">
      <span class="tags-title">Tags
      </span>
      <span class="tags-links">
        <a href="indexa7d4.html?tag=fighting" rel="tag">Fighting
        </a>
        <a href="indexc48c.html?tag=sports" rel="tag">Sports
        </a>
        <a href="indexaf4f.html?tag=super-mario" rel="tag">Super Mario
        </a>			
      </span>
    </div>
  </footer>
</article>


<div id="secondary" class="widget-area" role="complementary">
  <div class="secondary-inner">
    <aside id="up-coming-2" class="widget widget_up_coming">
      <div class="up_coming_inner hidden-xs">
        <h3 class="widget-title">HOT GAMES
        </h3>		
        <div id="cat-filter" data-number="6">
          <select  name='widget_up_coming' id='widget_up_coming' class='dw-upcoming-game' >
            <option value='0'>All
            </option>
            <option class="level-0" value="83">Action
            </option>
            <option class="level-0" value="84">Adventure
            </option>
            <option class="level-0" value="85">RPG
            </option>
          </select>
        </div>
		
        <ul class="upcoming-list">
			<?php
			$qry = mysqli_query($conn, "SELECT * from keadaan inner join games on keadaan.publish=games.keadaan ORDER BY games.tgl_post DESC LIMIT 3");
			while ($data = mysqli_fetch_array($qry)) {
			?>
          <li class="widget-upcoming-item">
            <a href="artikel.php?id=<?php echo $data['id']; ?>" title="<?php echo $data['judul']; ?>">
              <div class="dw-upcoming-inner">
                <div class="upcoming-thumbnail">
				<?php echo "<img width='300' height='130' class='attachment-dw-upcoming-widget size-dw-upcoming-widget wp-post-image' src='data-web/images/".$data['gambar']."'/>"; ?>
                 <div class="upcoming-countdown">
                    <div class="upcoming-text release">Released
                    </div>
                  </div>
                  <div class="entry-title"><?php echo $data['judul']; ?>
                  </div>
                  <div class="release-date">22nd 
                  </div>
                </div>
              </div>
            </a>
          </li>
		  <?php
			}
			?>
        </ul>
		
        <div class="dw-upcoming-text">
          <a href="upcoming.html?page_id=359">All Hot Games
          </a>
        </div>
      </div>
    </aside>
    <aside id="text-2" class="widget widget_text">			
      <div class="textwidget">
        <div class="ads-300">
          <a href="http://bit.ly/tf-wallclassic">
            <img src="data-web/images/angry_birds-1.jpg" alt="" />
          </a>
        </div>
      </div>
    </aside>    
    <aside id="query-posts-7" class="widget qp_style_1 dw_widget_query_posts">    
      <div class="query_post_inner">
        <h3 class="widget-title">Interview
        </h3>      
        <ul>
          <li class="format-video">
            <div class="query_post_item">
              <div class="entry-thumbnail">
                <a href="index9787.html?p=57" title="Reader Discussion: What Is The Best Day For Game Releases?">
                  <img width="300" height="157" src="data-web/images/reader-discussion-what-is-the-best-day-for-game-releases-300x157.jpg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 300px) 100vw, 300px" />              
                </a>
              </div>
              <a href="index9787.html?p=57" class="entry-title" title="Reader Discussion: What Is The Best Day For Game Releases?">Reader Discussion: What Is The Best Day For Game Releases?
              </a>
              <div class="rating-star">
              </div>
              <div class="entry-content">Cras vel sem vitae lacus faucibus lobortis sit amet vitae elit. Pellentesque posuere tempus ultricies. Quisque suscipit elementum tellus, eu pharetra magna facilisis in. In lorem eros, egestas vel sagittis porttitor, molestie ut mauris.  
                <a href="index9787.html?p=57#more-57" class="more-link">Read more
                </a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </aside>
    <aside id="dw_tabs-3" class="widget dw_tabs news-tab">      
      <ul class="nav nav-tabs" id="nav-tabs-dw_tabs-3">
        <li class="active">
          <a href="#top-rating-dw-widget-2" data-toggle="tab">Top Games
          </a>
        </li>
        <li class="">
          <a href="#top-rating-dw-widget-1" data-toggle="tab">Top Action
          </a>
        </li>      
      </ul>
      <div class="tab-content">
        <div class="tab-pane widget_top-rating-dw-widget-2 widget_top_rating active" id="top-rating-dw-widget-2">
          <div class="top_rating_inner">
            <h3 class="widget-title">Top Games
            </h3>			
            <ul>
              <li class="first-item format-standard">
                <div class="rating_post_item">
                  <img width="300" height="130" src="data-web/images/my-hopes-for-a-peaceful-life-in-final-fantasy-xiv-300x130.jpg" class="attachment-dw-upcoming-widget size-dw-upcoming-widget wp-post-image" alt="" />																
                  <div class="entry-title">
                    <a href="indexe6f0.html?p=103" title="BatMan XIV">BatMan XIV
                    </a>
                  </div>
                  <div class="rating-point">
                    <div class="rating-point-number">4.4
                    </div> 
                    <i class="rating-star fa fa-star fa-2x">
                    </i>					
                  </div>
                </div>
              </li>
              <li class="list-item format-standard">
                <div class="rating_post_item">
                  <div class="entry-title">
                    <a href="indexb135.html?p=77" title="Call of Duty: Fiction">Call of Duty: Fiction
                    </a>
                  </div>
                  <div class="rating-point">
                    <div class="rating-point-number">3.9
                    </div> 
                    <i class="rating-star fa fa-star fa-2x">
                    </i>					
                  </div>
                </div>
              </li>
              <li class="list-item format-standard">
                <div class="rating_post_item">
                  <div class="entry-title">
                    <a href="index5e74.html?p=45" title="Rapture PS4 exclusive">Rapture PS4 exclusive
                    </a>
                  </div>
                  <div class="rating-point">
                    <div class="rating-point-number">3.5
                    </div> 
                    <i class="rating-star fa fa-star fa-2x">
                    </i>					
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-pane widget_top-rating-dw-widget-1 widget_top_rating " id="top-rating-dw-widget-1">
          <div class="top_rating_inner">
            <h3 class="widget-title">Top Actions
            </h3>			
            <ul>
              <li class="first-item format-standard">
                <div class="rating_post_item">
                  <img width="300" height="130" src="data-web/images/plants-vs-zombes-2-review-a-fantastic-sequel-to-the-classic-original-this-time-for-free-300x130.jpg" class="attachment-dw-upcoming-widget size-dw-upcoming-widget wp-post-image" alt="" />																
                  <div class="entry-title">
                    <a href="index86fa.html?p=135" title="World of Tanks 2">World of Tanks 2
                    </a>
                  </div>
                  <div class="rating-point">
                    <div class="rating-point-number">4.5
                    </div> 
                    <i class="rating-star fa fa-star fa-2x">
                    </i>					
                  </div>
                </div>
              </li>
              <li class="list-item format-standard">
                <div class="rating_post_item">
                  <div class="entry-title">
                    <a href="indexe6f0.html?p=103" title="BatMan XIV">BatMan XIV
                    </a>
                  </div>
                  <div class="rating-point">
                    <div class="rating-point-number">4.4
                    </div> 
                    <i class="rating-star fa fa-star fa-2x">
                    </i>					
                  </div>
                </div>
              </li>
              <li class="list-item format-standard">
                <div class="rating_post_item">
                  <div class="entry-title">
                    <a href="index8320.html?p=117" title="Guns War">Guns War
                    </a>
                  </div>
                  <div class="rating-point">
                    <div class="rating-point-number">3.3
                    </div> 
                    <i class="rating-star fa fa-star fa-2x">
                    </i>					
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </aside>
    <aside id="dw_accordions-2" class="widget dw_accordion news-accordion">
      <div class="accordion" id="accordion-dw_accordions-2">                        
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-meta-dw-widget-1">Meta
            </a>
          </div>
          <div id="dw_accordions-2-meta-dw-widget-1" class="widget_meta-dw-widget-1  accordion-body collapse in widget_meta">
            <div class="accordion-inner">
              <h3 class="widget-title">Meta
              </h3>			
              <ul>
                <li>
                  <a href="wp-login.html">Log in
                  </a>
                </li>
                <li>
                  <a href="indexd784.html?feed=rss2">Entries 
                    <abbr title="Really Simple Syndication">RSS
                    </abbr>
                  </a>
                </li>
                <li>
                  <a href="indexa6da.html?feed=comments-rss2">Comments 
                    <abbr title="Really Simple Syndication">RSS
                    </abbr>
                  </a>
                </li>
                <li>
                  <a href="https://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org
                  </a>
                </li>			
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-dw_accordions-2" href="#dw_accordions-2-calendar-dw-widget-1">Calendar
            </a>
          </div>
          <div id="dw_accordions-2-calendar-dw-widget-1" class="widget_calendar-dw-widget-1  accordion-body collapse  widget_calendar">
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
    <aside id="text-6" class="widget widget_text">
      <h3 class="widget-title">We on Facebook
      </h3>
      <div class="textwidget">
        <div class="widget_facebook">
          <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fwp.designwall&amp;width=260&amp;height=230&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=275762139167826" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:230px;" allowTransparency="true">
          </iframe>
        </div>
      </div>
    </aside>		
  </div>
</div>

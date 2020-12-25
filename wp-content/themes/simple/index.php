<?php /* Template name: Index page */ ?>
<!--header -->
  <?php get_header(); ?>
<!-- header -->
    <!-- Main -->
      <main>
        <!-- Section 1 -->
          <section class="sectionForm">
            <div class="container">
              <div class="content-center">
                <div class="mainTitle revealator-slideright revealator-delay">
                  <h1>Are you ready for a</h1>
                  <h2><span>SIMPLE</span> move?</h2>
                </div>
                
                <div class="formMain">
                  <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                </div>

                <!-- <div class="cont">
                  <div class="mouse" id="mouse">
                    <a href="#advantages">
                      <span></span>
                    </a>
                  </div>
                </div> -->
              </div>
            </div>
          </section>
        <!-- Section 1 -->

        <!-- Section advantages -->
          <section class="sections" id="advantages">
            <div class="container">
              <div class="contentSection content-center">
                <div class="titleSection revealator-slideright revealator-delay">
                  <h2>A few advantages why you should choose us</h2>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="advantages-single content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/advantages/team.png">
                      <h6>Professional and friendly moving crews</h6>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="advantages-single content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/advantages/investment.png">
                      <h6>No hidden fees, no extra charges, no surprises</h6>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="advantages-single content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/advantages/agreement.png">
                      <h6>Fully licensed and insured</h6>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="advantages-single content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/advantages/minimallogoss-2.png">
                      <h6>Excellent fleet of trucks</h6>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="advantages-single content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/advantages/box.png">
                      <h6>All types of additional services: packing, storage, crating, unpacking, pianos, delicate items, and more</h6>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="advantages-single content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/advantages/house.png">
                      <h6>FREE in home visual estimates for 3+bdr houses</h6>
                    </div>
                  </div> 
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="advantages-single content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/advantages/mortgage.png">
                      <h6>FREE protecting and packing of furniture, electronics, lamps, pictures, mirrors, wardrobe boxes and more</h6>
                    </div>
                  </div>

				  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				  	<div class="logo-center">
				  		<a href="https://www.yelp.com/biz/simple-moving-company-los-angeles-2" target="_blank"><img src="<?php bloginfo('template_url');?>/img/yelp-people-love-us.png"></a>
				  	</div>
				  </div>

                </div>
              </div>
            </div>
          </section>
        <!-- Section advantages -->

        <!-- Section services -->
          <section class="sections section-white" id="services">
            <div class="container">
              <div class="contentSection content-center">
                <div class="titleSection revealator-slideright revealator-delay">
                  <h2>Services</h2>
                </div>

                <div class="row">
                  <?php 
                        $loop = new WP_Query( array( 
                           'post_type' => 'services',
                           'orderby' => 'id',
                           'order' => 'ASC',
                           'publish' => true,
                           'paged' => get_query_var('paged'),
                      )); 

                      while ( $loop->have_posts() ): $loop->the_post(); 
                     ?>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="services-single content-center image_hover revealator-zoomin">
                      <?php if ( has_post_thumbnail()) : the_post_thumbnail('full'); endif; ?>
                      <h3><?php the_title(); ?></h3>
                      <div class="height-200_block">
                        <?php the_content(); ?>
                      </div>
                      <button class="btn-modal" type="button" data-toggle="modal" data-target="#exampleModal-<?php the_ID(); ?>">GET A QUOTE</button>
                    </div>
                  </div>
                
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content modalForm">
                        <div class="modal-header modaltitle">
                          <h5 class="modal-title" id="exampleModalLabel">Get a quote</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="formModal">
                            <?php echo do_shortcode('[contact-form-7 id="62" title="Forms"]'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <?php endwhile;?>

                </div>
              </div>
            </div>
          </section>
        <!-- Section services -->

        <!-- Section rates -->
          <section class="sections section-rates" id="rates">
            <div class="container">
              <div class="contentSection content-center">
                <div class="titleSection title-white revealator-slideright revealator-delay">
                  <h2>CHECK out OUR ALL-INCLUSIVE RATES</h2>
                  <h6>off-peak days only</h6>
                </div>

                <div class="row">
                  <?php 
                        $loop = new WP_Query( array( 
                           'post_type' => 'rate',
                           'cat' => '4',
                           'orderby' => 'id',
                           'order' => 'DESC',
                           'publish' => true,
                           'paged' => get_query_var('paged'),
                      )); 

                      while ( $loop->have_posts() ): $loop->the_post(); 
                     ?>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="rate-single content-center revealator-zoomin">
                      <?php if ( has_post_thumbnail()) : the_post_thumbnail('full'); endif; ?>
                      <h3><?php the_title(); ?></h3>
                      <?php the_content(); ?>

                      <div class="prices row">
                        <div class="col col-sm-12 col-xs-12">
                          <p><span><?php the_field('hr_cash'); ?></span>/hr cash </p>
                        </div>
                        <div class="col col-xs-12 col-sm-12">
                          <p class="price-small"><span><?php the_field('hr_credit'); ?></span>/hr credit </p>
                        </div>
                      </div>

                      <button class="btn-modal" type="button" data-toggle="modal" data-target="#exampleModal-<?php the_ID(); ?>">GET A QUOTE</button>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content modalForm">
                        <div class="modal-header modaltitle">
                          <h5 class="modal-title" id="exampleModalLabel">Get a quote</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="formModal">
                            <?php echo do_shortcode('[contact-form-7 id="62" title="Forms"]'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <?php endwhile;?>

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="list-service content-center">
                      <?php 
                        $loop = new WP_Query( array( 
                           'post_type' => 'rate',
                           'cat' => '5',
                           'orderby' => 'id',
                           'order' => 'DESC',
                           'publish' => true,
                           'paged' => get_query_var('paged'),
                      )); 

                      while ( $loop->have_posts() ): $loop->the_post(); 
                     ?>
                      <?php the_content(); ?>
                      <?php endwhile;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- Section rates -->

        <!-- Section works -->
          <section class="sections section-white">
            <div class="container">
              <div class="contentSection content-center">
                <div class="titleSection revealator-slideright revealator-delay">
                  <h2>How it works</h2>
                </div>
                
                <div class="subTitle">
                  <h3>Moving should be <span>SIMPLE</span>. We can help</h3>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="advantages-single after-arrow content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/works/support.png">
                      <h6>Get a Quote and discuss your future move with our specialist</h6>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="advantages-single after-arrow content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/works/message.png">
                      <h6>Schedule your move and receive Confirmation via email</h6>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="advantages-single after-arrow content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/works/agreement.png">
                      <h6>On the day of the move sign the contract, sit back, and relax. We’ll do the rest.</h6>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="advantages-single content-center image_hover revealator-zoomin">
                      <img src="<?php bloginfo('template_url');?>/img/works/bill.png">
                      <h6>Pay your bill and enjoy your new place</h6>
                    </div>
                  </div>
                </div>
                
                <div class="btn-position_center">
                  <button class="btn-modal" type="button" data-toggle="modal" data-target="#exampleModal-1">GET A QUOTE</button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content modalForm">
                        <div class="modal-header modaltitle">
                          <h5 class="modal-title" id="exampleModalLabel">Get a quote</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="formModal">
                            <?php echo do_shortcode('[contact-form-7 id="62" title="Forms"]'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                </div>
              </div>
            </div>
          </section>
        <!-- Section works -->

        <!-- Section articles -->
          <section class="sections">
            <div class="container">
              <div class="contentSection content-center">
                <div class="titleSection revealator-slideright revealator-delay">
                  <h2>Recent articles</h2>
                </div>

                <div class="row">
                  <?php 
                        $loop = new WP_Query( array( 
                           'post_type' => 'blog',
                           'showposts' => '3',
                           'orderby' => 'date',
                           'order' => 'DESC',
                           'publish' => true,
                           'paged' => get_query_var('paged'),
                      )); 

                      while ( $loop->have_posts() ): $loop->the_post(); 
                     ?>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 childs">
                    <div class="article-single content-center revealator-zoomin">
                      <a href="<?php the_permalink(); ?>">
                        <div class="image-resize">
                          <?php if ( has_post_thumbnail()) : the_post_thumbnail('full'); endif; ?>
                        </div>
                        <div class="smallDesc_article">
                          <p><?php the_title(); ?></p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <?php endwhile;?>
                </div>
              </div>
            </div>
          </section>
        <!-- Section articles -->

        <!-- Section about -->
          <section class="sections section-white section-about" id="about">
            <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                  <div class="contentSection contentAbout">
                    <div class="titleSection revealator-slideright revealator-delay">
                      <h2>About us</h2>
                    </div>

                    <?php the_field('text_about_us'); ?>

                    <div class="contacts">
                      <?php get_sidebar('contact'); ?>
                    </div>
					  <div class="foooter-logo-flex">
              <div id="yelp-biz-badge-rrc-E5xlSOoD2znVTjANBj10dA" class="logo_footer">
                <a href="http://yelp.com/biz/simple-moving-company-los-angeles-2?utm_medium=badge_star_rating_reviews&amp;utm_source=biz_review_badge" target="_blank">Check out Simple Moving Company on Yelp</a>
              </div>
				<a href="https://www.bbb.org/us/ca/culver-city/profile/moving-services/simple-moving-1216-897480" class="logo_footer" target="_blank">
				  <img src="https://www.simplemoving.us/wp-content/uploads/2019/02/BBB.png">
				</a>
				<a href="https://www.thumbtack.com/-Culver-City-CA/service/3605188" class="logo_footer" target="_blank">
				  <img src="https://www.simplemoving.us/wp-content/uploads/2019/02/2019-top-pro-badge.7b5f26d8960712d40a671e55436692a9.png"></a>
				</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <!-- <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.8465665701547!2d-118.39754958478576!3d34.022149180614164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2ba285242c145%3A0x8f0f7d16c34c945a!2zOTY5NiBDdWx2ZXIgQmx2ZCwgQ3VsdmVyIENpdHksIENBIDkwMjMyLCDQodCo0JA!5e0!3m2!1sru!2spl!4v1527767082984" width="100%" height="725" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div> -->
              <div id="map" class="map"></div>
            </div>
            <?php
              endwhile;
              endif;
              wp_reset_query();                
            ?>
          </section>
        <!-- Section about -->
      </main>
    <!-- Main -->
<!-- footer -->
<?php get_footer(); ?>
<!-- footer -->
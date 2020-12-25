<?php /* Template name: Locations page */ ?>
<!--header -->
  <?php get_header('page'); ?>
<!-- header -->

    <!-- Main -->
      <main>
        <!-- Section articles -->
          <section class="sections section-white section-top">
            <div class="container">
              <div class="contentSection content-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Locations</li>
                  </ol>
                </nav>

                <div class="titleSection revealator-slideright revealator-delay">
                  <h2><span class="color-firts">Locations</span></h2>
                </div>

                <div class="row">
                	<?php 
                        $loop = new WP_Query( array( 
                           'post_type' => 'location',
                           'orderby' => 'id',
                           'order' => 'ASC',
                           'publish' => true,
                           'paged' => get_query_var('paged'),
                      )); 

                      while ( $loop->have_posts() ): $loop->the_post(); 
                     ?>
                  <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6">
                    <div class="article-single revealator-zoomin local">
   						<div id="map" class="map-local">
			                <?php 
								$location = get_field('map');

								if( !empty($location) ):
								?>
								<div class="acf-map">
									<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
								</div>
								<?php endif; ?>
			            </div>
			            <div class="caption-local">
			            	<h4><?php the_title(); ?></h4>
			            	<div class="row">
			            		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            			<p id="fleet"><span>Fleet:</span> <?php the_field('fleet'); ?> <br> <?php the_field('fleet_size'); ?></p>
			            		</div>
			            		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            			<p id="hours"><span>Hours:</span> <br> <?php the_field('hours:'); ?></p>
			            		</div>
			            		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            			<p class="margin-zero" id="empl"><span>Employees:</span> <?php the_field('employees:'); ?></p>
			            		</div>
			            		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            			<p class="margin-zero" id="call-number"><span><?php the_field('number'); ?></span></p>
			            		</div>
			            	</div>
			            </div>
                    </div>
                  </div>
                  <?php endwhile;?>
                </div>
              </div>
            </div>
          </section>
        <!-- Section articles -->
      </main>
    <!-- Main -->

<!-- footer -->
<?php get_footer('locations'); ?>
<!-- footer -->
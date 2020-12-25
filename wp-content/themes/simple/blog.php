<?php /* Template name: Blog page */ ?>
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
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                  </ol>
                </nav>

                <div class="titleSection revealator-slideright revealator-delay">
                  <h2><span class="color-firts">Simple</span> <span class="color-second">moving</span> blog</h2>
                </div>

                <div class="row">
                  <?php $counter = 0; ?>
                  <?php 
                      $temp = $wp_query; 
                        $wp_query = null; 
                        $wp_query = new WP_Query( array( 
                          'post_type' => 'blog',
                         'showposts' => '8',
                         'orderby' => 'date',
                         'order' => 'DESC',
                         'publish' => true,
                          'paged' => $paged,
                        )); 

                        while ($wp_query->have_posts()) : $wp_query->the_post();
                   ?>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 childs" style="margin-bottom: 30px;">
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
                  <?php
                  $postcount++;
                  if($postcount==5){?>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 childs">
                    <div class="article-modal content-center revealator-zoomin">
                      <h4>Are you ready to <span class="color-firts">Simple</span> <span class="color-second">moving</span></h4>
                      <button class="btn-ready" type="button" data-toggle="modal" data-target="#exampleModal">GET A QUOTE</button>
                    </div>
                  </div>
                  <?php } ?>
                  <?php endwhile;?>
                  <div class="pagination-blog content-center">
                  <nav class="pagination-page">
                          <?php
                            // удаляет H2 из шаблона пагинации
                            add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
                            function my_navigation_template( $template, $class ){
                              /*
                              Вид базового шаблона:
                              <nav class="navigation %1$s" role="navigation">
                                <h2 class="screen-reader-text">%2$s</h2>
                                <div class="nav-links">%3$s</div>
                              </nav>
                              */

                              return '
                              <nav class="navigation %1$s" role="navigation">
                                <div class="nav-links">%3$s</div>
                              </nav>    
                              ';
                            }

                            // выводим пагинацию
                            the_posts_pagination( array(
                              'end_size' => 2,
                            ) ); 
                          ?>
                        </nav>
                      </div>

                  <?php 
                    $wp_query = null; 
                    $wp_query = $temp;  // Reset
                  ?>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content modalForm">
                        <div class="modal-header modaltitle">
                          <h5 class="modal-title" id="exampleModalLabel1">Get a quote</h5>
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
                <!-- <div class="btn-position_center">
                  <button class="btn-modal">See more</button>
                </div> -->
              </div>
            </div>
          </section>
        <!-- Section articles -->
      </main>
    <!-- Main -->

<!-- footer -->
<?php get_footer(); ?>
<!-- footer -->
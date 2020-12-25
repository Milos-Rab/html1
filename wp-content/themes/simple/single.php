<!--header -->
  <?php get_header('page'); ?>
<!-- header -->

    <!-- Main -->
      <main>
        <!-- Section articles -->
          <section class="sections section-white section-top">
            <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
            <div class="container">
              <div class="contentSection">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Home</a></li>
                    <?php $page_id2 = 11 ?>
                    <li class="breadcrumb-item"><a href="<?php echo get_page_link( $page_id2 ); ?>">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                  </ol>
                </nav>

                <div class="titleSection revealator-slideright revealator-delay content-center">
                  <h2><?php the_title(); ?></h2>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <article class="contentAbout">
                      <div class="image_article content-center">
                        <?php if ( has_post_thumbnail()) : the_post_thumbnail('full'); endif; ?>
                      </div>

                      <?php the_content(); ?>
                    </article>
                  </div>
                </div>
              </div>
            </div>
            <?php
              endwhile;
              endif;
              wp_reset_query();                
            ?>
          </section>
        <!-- Section articles -->
      </main>
    <!-- Main -->

<!-- footer -->
<?php get_footer(); ?>
<!-- footer -->
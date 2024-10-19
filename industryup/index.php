<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package industryup
 */

get_header(); ?>
<!--==================== ti breadcrumb section ====================-->
<?php get_template_part('index','banner'); ?>
<!--==================== main content section ====================-->
<main id="content" class="index-class">
  <div class="container">
    <div class="row">
      <?php $industryup_content_layout = get_theme_mod('industryup_content_layout','align-content-right');
      if($industryup_content_layout == 'align-content-left'){ ?>
        <aside class="col-md-3">
          <?php get_sidebar(); ?>
        </aside>
      <?php } 
      if(($industryup_content_layout == 'align-content-left') || ($industryup_content_layout == 'align-content-right')){ ?>
        <div class="col-md-9">
      <?php } else { ?>
        <div class="col-md-12">
      <?php }
    		  while(have_posts()){ the_post();
              get_template_part('content','');
    		  } ?>
          <div class="text-center">
      			<?php //Previous / next page navigation
      			the_posts_pagination( array(
      			'prev_text'          => '<i class="fa fa-angle-left"></i>',
      			'next_text'          => '<i class="fa fa-angle-right"></i>',
      			) ); ?>
          </div>
      </div>
      <?php if($industryup_content_layout == 'align-content-right'){ ?>
        <aside class="col-md-3">
          <?php get_sidebar(); ?>
        </aside>
      <?php } ?>
    </div>
  </div>
 </main>
<?php
get_footer();
?>
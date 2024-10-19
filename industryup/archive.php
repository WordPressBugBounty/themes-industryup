<?php
/**
 * The template for displaying archive pages.
 *
 * @package Industryup
 */
get_header(); ?>
<!-- Breadcrumb -->
<div class="bs-breadcrumb-section" style='background-image: linear-gradient(132deg, #f4f7fc 50% ,transparent 50%), url("<?php echo esc_url(( has_header_image() ? esc_url(get_header_image()) : get_theme_support( 'custom-header', 'default-image' ) )); ?>");'>
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="bs-breadcrumb-title">
            <?php echo industryup_archive_page_title(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /End Breadcrumb -->
<main id="content" class="archive-class">
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
<?php get_footer(); ?>
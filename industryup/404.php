<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Industryup
 */
get_header(); ?>
<div class="bs-breadcrumb-section">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="bs-page-breadcrumb">
              <li><a href="<?php echo esc_url(home_url());?>"><i class="fa fa-home"></i></a></li>
              <li class="active"><a href="<?php echo esc_url(home_url());?>"><?php esc_html_e('404','industryup'); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center bs-section">
        <div class="bs-error-404">
          <h1><?php esc_html_e('4','industryup'); ?><i class="fa fa-exclamation-circle"></i><?php esc_html_e('4','industryup'); ?></h1>
          <h4><?php esc_html_e('Oops! Page not found','industryup'); ?></h4>
          <p><?php esc_html_e("We are sorry, but the page you are looking for does not exist.","industryup"); ?></p>
          <a href="<?php echo esc_url(home_url());?>" onClick="history.back();" class="btn btn-theme"><?php esc_html_e('Go Back','industryup'); ?></a> </div>
      </div>
    </div>
  </div>
<?php
get_footer();
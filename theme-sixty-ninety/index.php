<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    
  </head>
  <body>
    <?php get_header(); ?>
    <h3><?php the_title(); ?></h3>

    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    <?php get_footer('desktop'); get_footer('tablet'); get_footer('mobile'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container brandbar">
    <a class="brandlogo" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if (function_exists('the_custom_logo') && has_custom_logo()) {
        the_custom_logo();
      } else { ?>
        <span class="brandtitle"><?php bloginfo('name'); ?></span>
      <?php } ?>
    </a>
    <div class="brandtext">
      <span class="brandtitle"><?php bloginfo('name'); ?></span>
      <span class="brandtag"><?php bloginfo('description'); ?></span>
    </div>
  </div>
</header>

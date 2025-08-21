<?php
// /wp-content/themes/rebootit-child/functions.php
// Enqueue only on the Home V2 template (home-v2.php).
add_action('wp_enqueue_scripts', function () {
  // Parent theme main stylesheet
  wp_enqueue_style(
    'blocksy-parent',
    get_template_directory_uri() . '/style.css',
    [],
    wp_get_theme(get_template())->get('Version')
  );

  // Child theme stylesheet
  wp_enqueue_style(
    'rebootit-child',
    get_stylesheet_uri(),
    ['blocksy-parent'],
    wp_get_theme()->get('Version')
  );

  // Optional: home-v2 JS only when the page template is used
  if (is_page_template('home-v2.php') || is_page_template('page-home-v2.php')) {
    wp_enqueue_script(
      'home-v2',
      get_stylesheet_directory_uri() . '/js/home-v2.js',
      [],
      wp_get_theme()->get('Version'),
      true
    );
  }
});
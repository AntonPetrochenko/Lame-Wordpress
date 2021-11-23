<?php

/** namespace nnnq */

function nnnq_setup() {
  register_nav_menus([
    'primary' => __('Primary Menu', 'sixtyninety'),
    'footer_left' => __('Left footer menu','sixtyninety'),
    'footer_right' => __('Right footer menu','sixtyninety')
  ]);
}

function nnnq_customize_register($wp_customize) {
  $fields = [
    ['phone_number','Phone number'],
    ['phone_caption','Phone number caption'],
    ['ok_url','OK.ru URL'],
    ['instagram_url', 'Instagram profile URL'],
    ['vk_url','VK.com page url'],
    ['facebook_url','Facebook page URL'],
  ];

  foreach ($fields as $key => $field) {
    $wp_customize->add_setting('nnnq_' . $field[0],[
      'default' => '',
      'type' => 'option',
      'capability' => 'edit_theme_options'
    ]);
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'nnnq_' . $field[0],
        [
          'label'      => __( $field[1], 'textdomain' ),
          'settings'   => 'nnnq_' . $field[0],
          'priority'   => 10 + $key,
          'section'    => 'title_tagline',
          'type'       => 'text',
        ]
      ));
  }
}

add_action('init', 'nnnq_setup');
add_action('customize_register', 'nnnq_customize_register');
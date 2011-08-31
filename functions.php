<?php

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Banner',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3> ',
'after_title' => '</h3>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Footer',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3> ',
'after_title' => '</h3>',
));
register_post_type('Slider', array(
  'label' => __('Slider'),
  'singular_label' => __('Slider'),
  'public' => true,
  'show_ui' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'rewrite' => false,
  'query_var' => false,
  'supports' => array('title', 'editor', 'author', 'custom-fields', 'thumbnail','search_items','comments','editor' )
));
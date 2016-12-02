<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'post_title'    => array(
        'type'  => 'text',
        'label' => esc_html__( 'Title', 'my-theme' ),
        'desc'  => esc_html__( 'Please provide shortcode title as well.', 'my-theme' ),
        'value' => 'Latest Posts'
    ),
    'post_limit'    => array(
        'type'  => 'text',
        'label' => esc_html__( 'Post Limit', 'my-theme' ),
        'desc'  => esc_html__( 'Please choose how many posts to display.', 'my-theme' ),
        'value' => 5
    ),
    'post_word_limit'    => array(
        'type'  => 'text',
        'label' => esc_html__( 'Post Content Limit', 'my-theme' ),
        'desc'  => esc_html__( 'Please provide the word count limit.', 'my-theme' ),
        'value' => 43
    ),
    'post_categories' => array(
        'type'       => 'multi-select',
        'label'      => esc_html__( 'Select Category', 'my-theme' ),
        'population' => 'taxonomy',
        'source'     => 'category',
    ),
);

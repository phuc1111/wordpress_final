<?php
#####--------------------------- #####
#####---=== Homepage section ===--- #####
#####--------------------------- #####
$wp_customize->add_section('real_estate_salient_homepage', array(
    'title' => __('Homepage','real-estate-salient'),
    'description' => '',
    'panel'  => 'real_estate_salient_customize',
    'priority' => 2
));

#####---=== Enable banner ===--- #####
$wp_customize->add_setting('real_estate_salient_slide_enable', array(
    'capability'     => 'edit_theme_options',
    'sanitize_callback' => 'real_estate_salient_sanitize_checkbox',
    'default' => true,
));

$wp_customize->add_control('real_estate_salient_slide_enable', array(
    'label'   => __('Enable Slider','real-estate-salient'),
    'section' => 'real_estate_salient_homepage',
    'type' => 'checkbox',
    'priority'   => 1
));

#####---=== Slide type / Properties or posts ===--- #####
$wp_customize->add_setting('real_estate_salient_slide_type', array(
    'capability'     => 'edit_theme_options',
    'sanitize_callback' => 'real_estate_salient_sanitize_radio',
    'default' => 'post'
));

$wp_customize->add_control('real_estate_salient_slide_type', array(
    'label'   => __('Slider content, what to show in slider?','real-estate-salient'),
    'section' => 'real_estate_salient_homepage',
    'type' => 'radio',
    'priority'   => 2,
    'choices' => array(
        'property' => esc_html__('Recent Properties','real-estate-salient'),
        'post' => esc_html__('Recent Posts','real-estate-salient')
    )
));

#####---=== Enable Recent properties ===--- #####
$wp_customize->add_setting('real_estate_salient_home_properties_enable', array(
    'capability'     => 'edit_theme_options',
    'sanitize_callback' => 'real_estate_salient_sanitize_checkbox',
    'default' => true,
));

$wp_customize->add_control('real_estate_salient_home_properties_enable', array(
    'label'   => __('Enable recent properties on homepage','real-estate-salient'),
    'section' => 'real_estate_salient_homepage',
    'type' => 'checkbox',
    'priority'   => 3
));

#####---=== Recent Properties titles ===--- #####
$wp_customize->add_setting('real_estate_salient_home_properties_title', array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => __('Recent Properties','real-estate-salient')
));

$wp_customize->add_control('real_estate_salient_home_properties_title', array(
    'label'   => __('Title for Recent Properties','real-estate-salient'),
    'section' => 'real_estate_salient_homepage',
    'type' => 'text',
    'priority'   => 4
));

#####---=== Recent Properties Description ===--- #####
$wp_customize->add_setting('real_estate_salient_home_properties_desc', array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => __('You are seeing recently added properties','real-estate-salient')
));

$wp_customize->add_control('real_estate_salient_home_properties_desc', array(
    'label'   => __('Description text for recent properties','real-estate-salient'),
    'section' => 'real_estate_salient_homepage',
    'type' => 'text',
    'priority'   => 5
));

#####---=== Url for browse all properties ===--- #####
$wp_customize->add_setting('real_estate_salient_latestproperties_link', array(
    'sanitize_callback' => 'esc_url_raw',
    'default' => home_url().'/property',
));

$wp_customize->add_control('real_estate_salient_latestproperties_link', array(
    'label'   => __('url link for Browse all properties','real-estate-salient'),
    'section' => 'real_estate_salient_homepage',
    'type' => 'text',
    'description' => 'Default url is <a href="'.home_url().'/property">'.home_url().'/property</a>',
    'priority'   => 6
));
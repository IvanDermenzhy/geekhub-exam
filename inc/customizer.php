<?php
/**
 * Geekhub6-geekhub-exam-ivan Theme Customizer
 *
 * @package Geekhub6-geekhub-exam-ivan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function geekhub_exam_customize_register( $wp_customize )
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    // Main settings theme //
    $wp_customize->add_panel('general_settings', array(
        'priority' => 10,
        'theme_supports' => '',
        'title' => __(' 👉 General Settings', 'geekhub-exam'),
        'description' => __('Controls the basic setting', 'geekhub-exam')
    ));

    $wp_customize->add_section('address', array(
        'title' => __('address', 'geekhub-exam'),
        'panel' => 'general_settings',
        'priority' => 10
    ));
    $wp_customize->add_setting('address_phone')->transport = 'postMessage';
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address_phone', array(
        'label' => __('Your phone number', 'geekhub-exam'),
        'description' => __('like this 8877-8564-222', 'geekhub-exam'),
        'section' => 'address',
        'settings' => 'address_phone'
    )));
    $wp_customize->add_setting('address_phone_icon')->default = 'f10b';
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address_phone_icon', array(
        'label' => __('Phone icon', 'geekhub-exam'),
        'description' => __('Paste unicode font-awesome. Default - f10b', 'geekhub-exam'),
        'section' => 'address',
        'settings' => 'address_phone_icon'
    )));
    $wp_customize->add_setting('address_email')->transport = 'postMessage';
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address_email', array(
        'label' => __('Your email', 'geekhub-exam'),
        'description' => __('like this *info@business.com*', 'geekhub-exam'),
        'type' => 'email',
        'section' => 'address',
        'settings' => 'address_email'
    )));
    $wp_customize->add_setting('address_email_icon')->default = 'f003';
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address_email_icon', array(
        'label' => __('address icon', 'geekhub-exam'),
        'description' => __('Paste unicode font-awesome. Default - f003', 'geekhub-exam'),
        'section' => 'address',
        'settings' => 'address_email_icon'
    )));
    $wp_customize->add_panel('settings_home', array(
        'priority' => 20,
        'theme_supports' => '',
        'title' => __(' 👉 Home Settings', 'geekhub-exam'),
        'description' => __('Controls the basic setting', 'geekhub-exam')
    ));
    $wp_customize->add_section('address', array(
        'title' => __('sections', 'geekhub-exam'),
        'panel' => 'settings_home',
        'priority' => 10
    ));
    $wp_customize->add_setting('section1')->transport = 'refresh';
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address_phone', array(
        'label' => __('Your phone number', 'geekhub-exam'),
        'description' => __('like this 8877-8564-222', 'geekhub-exam'),
        'section' => 'section1',
        'settings' => 'address_phone'
    )));
    $wp_customize->add_setting('address_phone_icon')->default = 'f10b';
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address_phone_icon', array(
        'label' => __('Phone icon', 'geekhub-exam'),
        'description' => __('Paste unicode font-awesome. Default - f10b', 'geekhub-exam'),
        'section' => 'address',
        'settings' => 'address_phone_icon'
    )));
    $wp_customize->add_setting('address_email')->transport = 'postMessage';
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address_email', array(
        'label' => __('Your email', 'geekhub-exam'),
        'description' => __('like this *info@business.com*', 'geekhub-exam'),
        'type' => 'email',
        'section' => 'address',
        'settings' => 'address_email'
    )));
    $wp_customize->add_setting('address_email_icon')->default = 'f003';
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address_email_icon', array(
        'label' => __('address icon', 'geekhub-exam'),
        'description' => __('Paste unicode font-awesome. Default - f003', 'geekhub-exam'),
        'section' => 'address',
        'settings' => 'address_email_icon'
    )));
}
add_action( 'customize_register', 'geekhub_exam_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function geekhub_exam_customize_preview_js() {
	wp_enqueue_script( 'geekhub_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array('jq','customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'geekhub_exam_customize_preview_js' );
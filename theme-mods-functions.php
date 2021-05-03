<?php
function bluegymn_main_callout($wp_customize){
    /* Controls for the main heading in this section */
    $wp_customize->add_section('bluegymn-main-callout-section',array(
        'title'=>'Welcome Text',
    ));
    $wp_customize->add_setting('bluegymn-main-callout-headline',array(
        'default'=>'Stay Healthy In all Seasons'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'
    bluegymn-main-callout-headline-control',array(
        'label'=>'Main Heading',
        'section'=>'bluegymn-main-callout-section',
        'settings'=>'bluegymn-main-callout-headline'
    )));
    /* settings and controls for the main welcome section */
    $wp_customize->add_setting('bluegymn-main-callout-message',array(
        'default'=>'Get your ideal body with our programms that will help you stay motivated and stay fit in all seasons'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'
    bluegymn-main-callout-message-control',array(
        'label'=>'Welcome Message',
        'section'=>'bluegymn-main-callout-section',
        'settings'=>'bluegymn-main-callout-message',
        'type'=>'textarea'
    )));
    $wp_customize->add_setting('bluegymn-cta-button-text',array(
        'default'=>"Start Now"
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'
    bluegymn-cta-button-text-control',array(
        'label'=>'Button Text',
        'section'=>'bluegymn-main-callout-section',
        'settings'=>'bluegymn-cta-button-text',
        'type'=>'textarea'
    )));
}

add_action('customize_register','bluegymn_main_callout');
?>
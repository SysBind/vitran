<?php
function vitran_customize_register( $wp_customize ) {
    $wp_customize->add_setting('site_description',array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('');
}
add_action( 'customize_register', 'vitran_customize_register' );
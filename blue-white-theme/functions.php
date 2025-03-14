<?php
function custom_theme_customizer($wp_customize) {
    $wp_customize->add_setting('custom_theme_primary_color', array(
        'default' => '#333',
        'transport' => 'refresh',
    ));
    $wp_customize->add_section('custom_theme_colors', array(
        'title' => __('Colors', 'custom-wp-theme'),
        'priority' => 30,
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_theme_primary_color', array(
        'label' => __('Primary Color', 'custom-wp-theme'),
        'section' => 'custom_theme_colors',
        'settings' => 'custom_theme_primary_color',
    )));
}
add_action('customize_register', 'custom_theme_customizer');
?>

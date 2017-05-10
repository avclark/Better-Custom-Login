<?php

// Output styles
echo '<style>';

// Background Styles
$background_color = get_field( 'background_color', 'option' );
$background_image = get_field( 'background_image', 'option' );
$background_position = get_field( 'background_position', 'option' );
$background_repeat = get_field( 'background_repeat', 'option' );
$background_size = get_field( 'background_size', 'option' );

if ( ! empty( $background_color ) ) { ?>
  body.login {
    background: <?php echo sanitize_hex_color( $background_color ); ?>;
  } <?php
}

if ( ! empty( $background_image ) ) { ?>
  body.login {
    background-image: url(<?php echo esc_url( $background_image ); ?>);
  } <?php
}

if ( ! empty( $background_position ) ) { ?>
  body.login {
    background-position: <?php echo esc_attr( $background_position ); ?>;
  } <?php
}

if ( ! empty( $background_repeat ) ) { ?>
  body.login {
    background-repeat: <?php echo esc_attr( $background_repeat ); ?>;
  } <?php
}

if ( ! empty( $background_size ) ) { ?>
  body.login {
    background-size: <?php echo esc_attr( $background_size ); ?>;
  } <?php
}

// Logo Styles
$logo_image = get_field( 'logo_image', 'option' );
$logo_background_size = get_field( 'logo_background_size', 'option' );
$logo_width = get_field( 'logo_width', 'option' );
$logo_height = get_field( 'logo_height', 'option' );
$logo_position = get_field( 'logo_position', 'option' );
$logo_repeat = get_field( 'logo_repeat', 'option' );

if ( ! empty( $logo_image ) ) { ?>
  .login h1 a {
    background-image: url(<?php echo esc_url( $logo_image ); ?>);
  } <?php
}

if ( ! empty( $logo_background_size ) ) { ?>
  .login h1 a {
    -webkit-background-size: <?php echo esc_attr( $logo_background_size ); ?>px;
    background-size: <?php echo esc_attr( $logo_background_size ); ?>px;
  } <?php
}

if ( ! empty( $logo_width ) ) { ?>
  .login h1 a {
    width: <?php echo esc_attr( $logo_width ); ?>px;
  } <?php
}

if ( ! empty( $logo_height ) ) { ?>
  .login h1 a {
    height: <?php echo esc_attr( $logo_height ); ?>px;
  } <?php
}

if ( ! empty( $logo_position ) ) { ?>
  .login h1 a {
    background-position: <?php echo esc_attr( $logo_position ); ?>;
  } <?php
}

if ( ! empty( $logo_repeat ) ) { ?>
  .login h1 a {
    background-repeat: <?php echo esc_attr( $logo_repeat ); ?>;
  } <?php
}

// From Wrapper Styles
$form_wrapper_width = get_field( 'form_wrapper_width', 'option' );
$form_wrapper_background_color = get_field( 'form_wrapper_background_color', 'option' );
$form_wrapper_background_image = get_field( 'form_wrapper_background_image', 'option' );
$form_wrapper_background_position = get_field( 'form_wrapper_background_position', 'option' );
$form_wrapper_background_repeat = get_field( 'form_wrapper_background_repeat', 'option' );
$form_wrapper_background_size = get_field( 'form_wrapper_background_size', 'option' );
$form_wrapper_border_radius = get_field( 'form_wrapper_border_radius', 'option' );
$form_wrapper_border_width = get_field( 'form_wrapper_border_width', 'option' );
$form_wrapper_border_color = get_field( 'form_wrapper_border_color', 'option' );
$form_wrapper_box_shadow = get_field( 'form_wrapper_box_shadow', 'option' );
$form_wrapper_box_shadow_color = get_field( 'form_wrapper_box_shadow_color', 'option' );

if ( ! empty( $logo_repeat ) ) { ?>
  .login form {
    width: <?php echo esc_attr( $form_wrapper_width ); ?>;
  } <?php
}

if ( ! empty( $form_wrapper_background_color ) ) { ?>
  .login form {
    background: <?php echo sanitize_hex_color( $form_wrapper_background_color ); ?>;
  } <?php
}

if ( ! empty( $form_wrapper_background_image ) ) { ?>
  .login form {
    background-image: url(<?php echo esc_url( $form_wrapper_background_image ); ?>);
  } <?php
}

if ( ! empty( $form_wrapper_background_position ) ) { ?>
  .login form {
    background-position: <?php echo esc_attr( $form_wrapper_background_position ); ?>;
  } <?php
}

if ( ! empty( $form_wrapper_background_repeat ) ) { ?>
  .login form {
    background-repeat: <?php echo esc_attr( $form_wrapper_background_repeat ); ?>;
  } <?php
}

if ( ! empty( $form_wrapper_background_size ) ) { ?>
  .login form {
    background-size: <?php echo esc_attr( $form_wrapper_background_size ); ?>;
  } <?php
}

if ( ! empty( $form_wrapper_border_radius ) ) { ?>
  .login form {
    border-radius: <?php echo esc_attr( $form_wrapper_border_radius ); ?>;
  } <?php
}

if ( ! empty( $form_wrapper_border_width ) ) { ?>
  .login form {
    border-width: <?php echo esc_attr( $form_wrapper_border_width ); ?>;
  } <?php
}

if ( ! empty( $form_wrapper_border_color ) ) { ?>
  .login form {
    border-color: <?php echo sanitize_hex_color( $form_wrapper_border_color ); ?>;
  } <?php
}

if ( ! empty( $form_wrapper_box_shadow ) ) { ?>
  .login form {
    box-shadow: <?php echo esc_attr( $form_wrapper_box_shadow ); ?>;
  } <?php
}

// From Field Styles
$form_fields_label_font_size = get_field( 'form_fields_label_font_size', 'option' );
$form_fields_label_color = get_field( 'form_fields_label_color', 'option' );
$form_fields_input_background_color = get_field( 'form_fields_input_background_color', 'option' );
$form_fields_input_background_focus_color = get_field( 'form_fields_input_background_focus_color', 'option' );
$form_fields_input_border_radius = get_field( 'form_fields_input_border_radius', 'option' );
$form_fields_input_border_color = get_field( 'form_fields_input_border_color', 'option' );
$form_fields_input_box_shadow = get_field( 'form_fields_input_box_shadow', 'option' );
$form_fields_input_height = get_field( 'form_fields_input_height', 'option' );
$form_fields_input_padding = get_field( 'form_fields_input_padding', 'option' );
$form_fields_submit_button_color = get_field( 'form_fields_submit_button_color', 'option' );
$form_fields_submit_button_hover_color = get_field( 'form_fields_submit_button_hover_color', 'option' );
$form_fields_submit_button_border_color = get_field( 'form_fields_submit_button_border_color', 'option' );
$form_fields_submit_button_border_width = get_field( 'form_fields_submit_button_border_width', 'option' );
$form_fields_submit_button_box_shadow = get_field( 'form_fields_submit_button_box_shadow', 'option' );
$form_fields_submit_button_height = get_field( 'form_fields_submit_button_height', 'option' );
$form_fields_submit_button_text_shadow = get_field( 'form_fields_submit_button_text_shadow', 'option' );
$form_fields_submit_button_font_size = get_field( 'form_fields_submit_button_font_size', 'option' );
$form_fields_make_submit_button_full_width = get_field( 'form_fields_make_submit_button_full_width', 'option' );

if ( ! empty( $form_fields_label_font_size ) ) { ?>
  .login label {
    font-size: <?php echo esc_attr( $form_fields_label_font_size ); ?>;
  } <?php
}

if ( ! empty( $form_fields_label_color ) ) { ?>
  .login label {
    color: <?php echo sanitize_hex_color( $form_fields_label_color ); ?>;
  } <?php
}

if ( ! empty( $form_fields_input_background_color ) ) { ?>
  .login form .input[type=text], .login form .input[type=password] {
    background: <?php echo sanitize_hex_color( $form_fields_input_background_color ); ?>;
  } <?php
}

if ( ! empty( $form_fields_input_background_focus_color ) ) { ?>
  .login form .input[type=text]:focus, .login form .input[type=password]:focus {
    background: <?php echo sanitize_hex_color( $form_fields_input_background_focus_color ); ?>;
  } <?php
}

if ( ! empty( $form_fields_input_border_radius ) ) { ?>
  .login form .input[type=text], .login form .input[type=password] {
    border-radius: <?php echo esc_attr( $form_fields_input_border_radius ); ?>;
  } <?php
}

if ( ! empty( $form_fields_input_border_color ) ) { ?>
  .login form .input[type=text], .login form .input[type=password] {
    border-color: <?php echo sanitize_hex_color( $form_fields_input_border_color ); ?>;
  } <?php
}

if ( ! empty( $form_fields_input_box_shadow ) ) { ?>
  .login form .input[type=text], .login form .input[type=password] {
    box-shadow: <?php echo esc_attr( $form_fields_input_box_shadow ); ?>;
  } <?php
}

if ( ! empty( $form_fields_input_height ) ) { ?>
  .login form .input[type=text], .login form .input[type=password] {
    height: <?php echo esc_attr( $form_fields_input_height ); ?>;
  } <?php
}

if ( ! empty( $form_fields_input_padding ) ) { ?>
  .login form .input[type=text], .login form .input[type=password] {
    padding: <?php echo esc_attr( $form_fields_input_padding ); ?>;
  } <?php
}

if ( ! empty( $form_fields_submit_button_color ) ) { ?>
  .login form input#wp-submit.button {
    background: <?php echo sanitize_hex_color( $form_fields_submit_button_color ); ?>;
  } <?php
}

if ( ! empty( $form_fields_submit_button_hover_color ) ) { ?>
  .login form input#wp-submit.button:hover {
    background: <?php echo sanitize_hex_color( $form_fields_submit_button_hover_color ); ?>;
  } <?php
}

if ( ! empty( $form_fields_submit_button_border_color ) ) { ?>
  .login form input#wp-submit.button {
    border-color: <?php echo sanitize_hex_color( $form_fields_submit_button_border_color ); ?>;
  } <?php
}

if ( ! empty( $form_fields_submit_button_border_width ) ) { ?>
  .login form input#wp-submit.button {
    border-width: <?php echo esc_attr( $form_fields_submit_button_border_width ); ?>;
  } <?php
}

if ( ! empty( $form_fields_submit_button_box_shadow ) ) { ?>
  .login form input#wp-submit.button {
    box-shadow: <?php echo esc_attr( $form_fields_input_box_shadow ); ?>;
  } <?php
}

if ( ! empty( $form_fields_submit_button_height ) ) { ?>
  .login form input#wp-submit.button {
    height: <?php echo esc_attr( $form_fields_submit_button_height ); ?>;
  } <?php
}

if ( ! empty( $form_fields_submit_button_text_shadow ) ) { ?>
  .login form input#wp-submit.button {
    text-shadow: <?php echo esc_attr( $form_fields_submit_button_text_shadow ); ?>;
  } <?php
}

if ( ! empty( $form_fields_submit_button_font_size ) ) { ?>
  .login form input#wp-submit.button {
    font-size: <?php echo esc_attr( $form_fields_submit_button_font_size ); ?>;
  } <?php
}

if ( $form_fields_make_submit_button_full_width == true ) { ?>
  .login form input#wp-submit.button {
    width: 100%;
    margin-top: 20px;
  } <?php
}

// Bottom Nav Links Styles
$bottom_nav_links_bottom_nav_text_color = get_field( 'bottom_nav_links_bottom_nav_text_color', 'option' );
$bottom_nav_links_bottom_nav_text_hover_color = get_field( 'bottom_nav_links_bottom_nav_text_hover_color', 'option' );
$bottom_nav_links_bottom_nav_position = get_field( 'bottom_nav_links_bottom_nav_position', 'option' );

if ( ! empty( $bottom_nav_links_bottom_nav_text_color ) ) { ?>
  .login #backtoblog a, .login #nav a {
    color: <?php echo sanitize_hex_color( $bottom_nav_links_bottom_nav_text_color ); ?>;
  } <?php
}

if ( ! empty( $bottom_nav_links_bottom_nav_text_hover_color ) ) { ?>
  .login #backtoblog a:hover, .login #nav a:hover {
    color: <?php echo sanitize_hex_color( $bottom_nav_links_bottom_nav_text_hover_color ); ?>;
  } <?php
}

if ( ! empty( $bottom_nav_links_bottom_nav_position ) ) { ?>
  .login #backtoblog, .login #nav {
    text-align: <?php echo esc_attr( $bottom_nav_links_bottom_nav_position ); ?>;
  } <?php
}

// Custom CSS.
$advanced_custom_css = get_field( 'advanced_custom_css', 'option' );

if ( ! empty( $advanced_custom_css ) ) {
  echo $advanced_custom_css;
}

echo '</style>';

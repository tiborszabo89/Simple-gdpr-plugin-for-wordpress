<?php
/*
Plugin Name: GDPR Cookie Banner
Description: A GDPR-compliant cookie banner with ACF Pro integration.
Version: 1.0
Author: Tibor Szabó
*/

if (!defined('ABSPATH')) {
  exit;
}

function gdpr_cookie_banner_scripts()
{

  wp_enqueue_style('gdpr-cookie-banner-style', plugins_url('css/style.css', __FILE__));


  wp_enqueue_script('gdpr-cookie-banner-script', plugins_url('js/script.js', __FILE__), array('jquery'), null, true);

  wp_localize_script('gdpr-cookie-banner-script', 'gdpr_ajax', array(
    'ajax_url' => admin_url('admin-ajax.php'),
  ));
}
add_action('wp_enqueue_scripts', 'gdpr_cookie_banner_scripts');
function gdpr_cookie_banner_html()
{
  $banner_text = get_field('cookie_banner_text', 'option');
  $accept_text = get_field('accept_button_text', 'option');
  $deny_text = get_field('deny_button_text', 'option');
  $privacy_link = get_field('privacy_policy_link', 'option');
  $cookie_icon = get_field('cookie_icon', 'option');

  if (!isset($_COOKIE['gdpr_cookie_consent']) || (isset($_GET['show_cookie_banner']) && $_GET['show_cookie_banner'] === 'true')) {
    echo '<div id="gdpr-cookie-banner">
                <p>' . esc_html($banner_text) . ' <a href="' . esc_url($privacy_link['url']) . '">Privacy Policy</a></p>
                <button id="gdpr-accept">' . esc_html($accept_text) . '</button>
                <button id="gdpr-deny">' . esc_html($deny_text) . '</button>
              </div>';
  }

  if ((isset($_COOKIE['gdpr_cookie_consent']) || isset($_COOKIE['visited_before'])) && $cookie_icon) {
    echo '<div id="gdpr-cookie-icon">
                <img src="' . esc_url($cookie_icon['url']) . '" alt="Cookie Icon">
              </div>';
  }
}
add_action('wp_footer', 'gdpr_cookie_banner_html');

<?php
/**
 * Plugin Name: CV Builder Embed
 * Description: Embed the Curriculum Vitae Builder (hosted on Vercel) into your WordPress site.
 * Version: 1.0
 * Author: Your Name
 */
function cvbuilder_embed_shortcode($atts) {
  $atts = shortcode_atts([
    'src' => 'https://your-vercel-app.vercel.app',
    'height' => '1500',
    'width' => '100%'
  ], $atts);
  return '<iframe src="' . esc_url($atts['src']) . '" width="' . esc_attr($atts['width']) . '" height="' . esc_attr($atts['height']) . '" style="border:none;"></iframe>';
}
add_shortcode('cvbuilder', 'cvbuilder_embed_shortcode');

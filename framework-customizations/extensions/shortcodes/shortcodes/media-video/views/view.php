<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

global $wp_embed;

$width  = ( is_numeric( $atts['width'] ) && ( $atts['width'] > 0 ) ) ? $atts['width'] : '300';
$height = ( is_numeric( $atts['height'] ) && ( $atts['height'] > 0 ) ) ? $atts['height'] : '200';
$iframe = $wp_embed->run_shortcode( '[embed  width="' . $width . '" height="' . $height . '"]' . trim( $atts['url'] ) . '[/embed]' );


$html_class = ( $atts['html_class'] ) ? ' class="' . $atts['html_class'] . '"' : '';
$html_id = ( $atts['html_id'] ) ? ' id="' . $atts['html_id'] . '"' : '';
$autoplay = ( $atts['autoplay'] ) ? ' autoplay=""' : '';
$loop = ( $atts['loop'] ) ? ' loop=""' : '';
$muted = ( $atts['muted'] ) ? ' muted=""' : '';
$html_video_parameters = $html_class . $html_id . $autoplay . $loop . $muted;

if ( $atts['insert_html_code'] && isset( $atts['url_mp4'] ) ): ?>
    <video<?php echo $html_video_parameters; ?>>
        <source src="<?php echo $atts['url_mp4']; ?>" type="video/mp4">
    </video>
<?php else: ?>
<div class="video-wrapper shortcode-container">
	<?php echo do_shortcode( $iframe ); ?>
</div>
<?php endif; ?>
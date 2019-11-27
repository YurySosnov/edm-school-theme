<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}
if ( ! empty( $atts['background_gradient'] ) ) {
    $bg_image = 'background:' . $atts['background_gradient'];
}

$overlay_color = '';
if ( ! empty( $atts['overlay_color'] ) ) {
    $overlay_color = 'background-color:' . $atts['overlay_color'] . ';';
}
$overlay_image = '';
if ( ! empty( $atts['overlay_image'] ) && ! empty( $atts['overlay_image']['data']['icon'] ) ) {
    $overlay_image = 'background-image:url(' . $atts['overlay_image']['data']['icon'] . ');';
}
if ( ! empty( $atts['overlay_gradient'] ) ) {
    $overlay_image = 'background:' . $atts['overlay_gradient'];
}

$bg_video_data_attr    = '';
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
	$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video';
}

$section_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr($bg_color . $bg_image) . '"' : '';
$overlay_style   = ( $overlay_color || $overlay_image ) ? 'style="' . esc_attr($overlay_color . $overlay_image) . '"' : '';
$video_styles    = ( $atts['background_video_opacity'] !== '1') ? 'opacity:' . $atts['background_video_opacity'] : '';

$video_styles = ( $video_styles !== '' ) ? 'style="' . $video_styles . '"' : '';

$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'fw-container';
if ( $atts['is_fullheight'] ) {
    $section_extra_classes .= ' full-height';
}
$section_extra_classes .= ( isset($atts['custom_section_class']) &&  $atts['custom_section_class']) ? ' ' . $atts['custom_section_class'] : '';

$bg_video_autoplay = ( $atts['background_video_autoplay'] ) ? ' autoplay=""' : '';
$bg_video_loop = ( $atts['background_video_loop'] ) ? ' loop=""' : '';
$bg_video_muted = ( $atts['background_video_muted'] ) ? ' muted=""' : '';
$html_video_parameters = $bg_video_autoplay . $bg_video_loop . $bg_video_muted;

$inner_area_parameters = '';
if ( $atts['inner_area'] ) {
    if ( $atts['inner_area_class'] ) {
        $inner_area_parameters .= ' class="' . $atts['inner_area_class'] . '"';
    }
    if ( $atts['inner_area_id'] ) {
        $inner_area_parameters .= ' id="' . $atts['inner_area_id'] . '"';
    }
}

?>
<section class="fw-main-row<?php echo esc_attr($section_extra_classes) ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?>>
    <?php if ( isset( $atts['background_video_url'] ) && $atts['background_video_url'] !== '' ) : ?>
    <video class="section-background-video"<?php echo $html_video_parameters; ?><?php echo $video_styles; ?>>
        <source src="<?php echo $atts['background_video_url']; ?>" type="video/mp4">
    </video>
    <?php endif; ?>
    <?php if ( $atts['overlay'] ): ?>
    <div class="section-overlay" <?php echo $overlay_style; ?>></div>
    <?php endif; ?>

    <?php if ( $atts['inner_area'] ): ?>
    <<?php echo $atts['inner_area_tag']; ?><?php echo $inner_area_parameters; ?>>
    <?php endif; ?>
	<div class="<?php echo esc_attr($container_class); ?>">
		<?php echo do_shortcode( $content ); ?>
	</div>
    <?php if ( $atts['inner_area'] ): ?>
    </<?php echo $atts['inner_area_tag']; ?>>
    <?php endif; ?>
</section>

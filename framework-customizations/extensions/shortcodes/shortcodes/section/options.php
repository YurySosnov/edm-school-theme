<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
    'shortcode_title' => array(
        'type' => 'text',
        'label' => __('Shortcode title', 'fw'),
        'value' => '',
    ),
    'custom_section_class' => array(
        'label' => __('Custom section class', 'fw'),
        'desc'  => __('Insert CSS class', 'fw'),
        'type'  => 'text',
    ),
    'section_title' => array(
        'label' => __('Section Title', 'fw'),
        'type'  => 'text',
        'value' => ''
    ),
    'section_title_color' => array(
        'label' => __('Section Title Color', 'fw'),
        'type'  => 'color-picker',
    ),
    'section_title_padding' => array(
        'label' => __('Section Title Padding', 'fw'),
        'type'  => 'text',
    ),
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
        'value'        => false
	),
    'is_fullheight' => array(
        'label'        => __('Full Height', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
    'background_gradient' => array(
        'label' => __('Background Gradient', 'fw'),
        'desc'  => __('Please select the background CSS gradient', 'fw'),
        'type'  => 'text',
    ),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),

    'inner_area' => array(
        'label'        => __('Inner Area', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'inner_area_tag' => array(
        'label'        => __('Inner Area Tag', 'fw'),
        'type'         => 'text',
        'value'        => 'div'
    ),
    'inner_area_class' => array(
        'label'        => __('Inner Area HTML Class', 'fw'),
        'type'         => 'text',
        'value'        => ''
    ),
    'inner_area_id' => array(
        'label'        => __('Inner Area HTML Id', 'fw'),
        'type'         => 'text',
        'value'        => ''
    ),

    'overlay' => array(
        'label'        => __('Overlay', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'overlay_color' => array(
        'label' => __('Overlay Color', 'fw'),
        'desc'  => __('Please select the background color', 'fw'),
        'type'  => 'color-picker',
    ),
    'overlay_gradient' => array(
        'label' => __('Overlay Gradient', 'fw'),
        'desc'  => __('Please select the background CSS gradient', 'fw'),
        'type'  => 'text',
    ),
    'background_video_url' => array(
        'label' => __('Background Video URL', 'fw'),
        'type'  => 'text',
    ),
    'background_video_autoplay' => array(
        'type'  => 'switch',
        'label' =>  __( 'Background Video Autoplay', 'fw' ),
        'desc'  => __( 'Autoplay video (only if muted)', 'fw' ),
        'value' => false
    ),
    'background_video_loop' => array(
        'type'  => 'switch',
        'label' =>  __( 'Background Video Loop', 'fw' ),
        'value' => false
    ),
    'background_video_muted' => array(
        'type'  => 'switch',
        'label' =>  __( 'Background Video Mute', 'fw' ),
        'value' => true
    ),
    'background_video_opacity' => array(
        'type'  => 'text',
        'label' =>  __( 'Background Video Opacity', 'fw' ),
        'value' => '1'
    ),
    'stickyda_after' => array(
        'type'  => 'switch',
        'label' =>  __( 'StickyDa after', 'fw' ),
        'value' => false
    ),
);

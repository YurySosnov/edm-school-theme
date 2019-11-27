<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'Insert Video URL', 'fw' ),
		'desc'  => __( 'Insert Video URL to embed this video', 'fw' )
	),
	'width'  => array(
		'type'  => 'text',
		'label' => __( 'Video Width', 'fw' ),
		'desc'  => __( 'Enter a value for the width', 'fw' ),
		'value' => 300
	),
	'height' => array(
		'type'  => 'text',
		'label' => __( 'Video Height', 'fw' ),
		'desc'  => __( 'Enter a value for the height', 'fw' ),
		'value' => 200
	),

    'html_class'    => array(
        'type'  => 'text',
        'label' => __( 'HTML CLASS', 'fw' ),
        'desc'  => __( 'Insert HTML class for "video" tag', 'fw' )
    ),
    'html_id'    => array(
        'type'  => 'text',
        'label' => __( 'HTML ID', 'fw' ),
        'desc'  => __( 'Insert HTML id for "video" tag', 'fw' )
    ),
    'url_mp4'    => array(
        'type'  => 'text',
        'label' => __( 'Insert Video URL mp4 file', 'fw' ),
        'desc'  => __( 'Insert Video URL to embed this video by mp4 file', 'fw' )
    ),
    'full_page' => array(
        'type'  => 'switch',
        'label' =>  __( 'Full page', 'fw' ),
        'desc'  => __( 'Switch to full fill screen by video', 'fw' ),
        'value' => false
    ),
    'insert_html_code' => array(
        'type'  => 'switch',
        'label' =>  __( 'Insert HTML', 'fw' ),
        'desc'  => __( 'Switch to insert tag "video"', 'fw' ),
        'value' => false
    ),
    'autoplay' => array(
        'type'  => 'switch',
        'label' =>  __( 'Autoplay', 'fw' ),
        'desc'  => __( 'Autoplay video (only if muted)', 'fw' ),
        'value' => false
    ),
    'loop' => array(
        'type'  => 'switch',
        'label' =>  __( 'Loop', 'fw' ),
        'desc'  => __( 'Loop video', 'fw' ),
        'value' => false
    ),
    'muted' => array(
        'type'  => 'switch',
        'label' =>  __( 'Muted', 'fw' ),
        'desc'  => __( 'Mute video', 'fw' ),
        'value' => true
    ),
);

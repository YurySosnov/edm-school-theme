<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'text' => array(
        'type'  => 'textarea',
        'label' => __( 'Content', 'fw' ),
        'desc'  => __( 'Enter some content for this texblock', 'fw' )
    ),
    'tag' => array(
        'type'  => 'text',
        'label' => __( 'Tag', 'fw' ),
        'value' => 'div'
    ),
    'class' => array(
        'type'  => 'text',
        'label' => __( 'Class', 'fw' ),
        'value' => ''
    ),
    'id' => array(
        'type'  => 'text',
        'label' => __( 'Id', 'fw' ),
        'value' => ''
    ),
);
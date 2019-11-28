<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'video' => array(
        'type'  => 'text',
        'label' => __( 'Embeded video code', 'fw' ),
    ),
    'text' => array(
        'type'  => 'text',
        'label' => __( 'Text', 'fw' ),
    ),
    'class' => array(
        'type'  => 'text',
        'label' => __( 'Class', 'fw' ),
        'value' => ''
    ),
    'bg' => array(
        'type'  => 'upload',
        'label' => __( 'Background', 'fw' ),
    ),
);
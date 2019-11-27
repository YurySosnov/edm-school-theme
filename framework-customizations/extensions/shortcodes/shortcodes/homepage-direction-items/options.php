<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
    'elements' => array(
        'type'          => 'addable-popup',
        'label'         => __( 'Elements', 'fw' ),
        'popup-title'   => __( 'Add/Edit elements', 'fw' ),
        'template'      => '{{=text}}',
        'popup-options' => array(
            'text'   => array(
                'type'  => 'text',
                'label' => __('Text', 'fw')
            ),
            'link' => array(
                'type'  => 'text',
                'label' => __('Link', 'fw')
            ),
            'image' => array(
                'type'  => 'upload',
                'label' => __( 'Image', 'fw' ),
            ),
        )
    )
);
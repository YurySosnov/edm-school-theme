<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
    'elements' => array(
        'type'          => 'addable-popup',
        'label'         => __( 'Elements', 'fw' ),
        'popup-title'   => __( 'Add/Edit elements', 'fw' ),
        'template'      => '{{=title}}',
        'popup-options' => array(
            'title'   => array(
                'type'  => 'text',
                'label' => __('Title', 'fw')
            ),
            'text'   => array(
                'type'  => 'textarea',
                'label' => __('Text', 'fw')
            ),
            'image' => array(
                'type'  => 'upload',
                'label' => __( 'Image', 'fw' ),
            ),
        )
    )
);
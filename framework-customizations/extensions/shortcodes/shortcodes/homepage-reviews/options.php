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
            'age'   => array(
                'type'  => 'text',
                'label' => __('Age', 'fw')
            ),
            'text'   => array(
                'type'  => 'wp-editor',
                'label' => __('Text', 'fw')
            ),
            'image' => array(
                'type'  => 'upload',
                'label' => __( 'Image', 'fw' ),
            ),
        )
    )
);
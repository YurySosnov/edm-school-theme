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
            'list'   => array(
                'type'  => 'addable-popup',
                'label' => __('List', 'fw'),
                'popup-title'   => __( 'Add/Edit elements', 'fw' ),
                'template'      => '{{=text}}',
                'popup-options' => array(
                    'text'   => array(
                        'type'  => 'text',
                        'label' => __('Item text', 'fw')
                    ),
                )
            ),
        )
    )
);
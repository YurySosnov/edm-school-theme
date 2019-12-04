<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
    'elements' => array(
        'type'          => 'addable-popup',
        'label'         => __( 'Elements', 'fw' ),
        'popup-title'   => __( 'Add/Edit elements', 'fw' ),
        'template'      => '{{=text}}',
        'popup-options' => array(
            'number'   => array(
                'type'  => 'text',
                'label' => __('Number', 'fw')
            ),
            'text'   => array(
                'type'  => 'text',
                'label' => __('Text', 'fw')
            ),
        )
    ),
    'last_item_title' => array(
        'type' => 'text',
        'label' => __('Last Item Title'),
        'value' => ''
    ),
    'last_item_text' => array(
        'type' => 'text',
        'label' => __('Last Item Text'),
        'value' => ''
    ),
    'last_item_button_text' => array(
        'type' => 'text',
        'label' => __('Last Item Button Text'),
        'value' => ''
    ),
);
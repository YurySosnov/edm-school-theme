<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'name' => array(
        'type'    => 'select',
        'choices' => array(
            'vk' => __('VK', 'fw'),
            'fb' => __('Facebook', 'fw'),
            'ig' => __('Instagram', 'fw'),
        ),
        'label'  => __( 'Select Social Network', 'fw' ),
    ),
    'url' => array(
        'type'  => 'text',
        'label' => __('URL', 'fw')
    ),
    'alt' => array(
        'type'  => 'text',
        'label' => __('Alt text', 'fw'),
        'value' => ''
    ),
    'design_scheme' => array(
        'type' => 'select',
        'label' => __('Design scheme', 'fw'),
        'choices' => array(
            'default' => __('Default','fw')
        )
    )
);
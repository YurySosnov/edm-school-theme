<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'name' => array(
        'type'    => 'select',
        'choices' => array(
            'logo-white-edm-school'    => __('EDM School white logo', 'fw'),
            'logo-white-peoneer-dj' => __('Peoneer DJ white logo', 'fw'),
        ),
        'label'  => __( 'Select Logo', 'fw' ),
    ),
    'tag' => array(
        'label'  => __( 'Tag', 'fw' ),
        'type'    => 'select',
        'choices' => array(
            'div'    => __('div', 'fw'),
            'span' => __('span', 'fw'),
            'img' => __('img', 'fw'),
        ),
    ),
    'class' => array(
        'type'   => 'text',
        'label'  => __( 'Class', 'fw' ),
        'value'  => ''
    ),
    'alt' => array(
        'type'   => 'text',
        'label'  => __( 'Alt text for IMG', 'fw' ),
        'value'  => ''
    ),
    'use_url' => array(
        'type'   => 'switch',
        'label'  => __( 'Use URL', 'fw' ),
        'value'  => false
    ),
    'url' => array(
        'type'   => 'text',
        'label'  => __( 'URL', 'fw' ),
        'value'  => ''
    ),
);
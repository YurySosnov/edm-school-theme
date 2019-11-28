<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'slides' => array(
        'type'         => 'addable-popup',
        'label'        => __('Slides', 'fw'),
        'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),
        'template'      => '{{=title}}',
        'popup_size'  => 'large',
        'popup-options' => array(
            'title'   => array(
                'type'  => 'text',
                'label' => __('Title', 'fw')
            ),
            'name' => array(
                'type'  => 'text',
                'label' => __('Name', 'fw')
            ),
            'text' => array(
                'type'  => 'wp-editor',
                'label' => __('Content', 'fw')
            ),
            'img'   => array(
                'type'  => 'upload',
                'label' => __('Image', 'fw')
            ),
            'img_alt'   => array(
                'type'  => 'upload',
                'label' => __('Alternative Image', 'fw')
            ),
            'img_hover'   => array(
                'type'  => 'upload',
                'label' => __('Hover Image', 'fw')
            ),
            'video'   => array(
                'type'  => 'text',
                'label' => __('Video', 'fw')
            ),
            'audio'   => array(
                'type'  => 'text',
                'label' => __('Audio', 'fw')
            ),
        )
    ),
    'container_class'  => array(
        'label'        => __('Container Class', 'fw'),
        'type'         => 'text',
        'value'        => ''
    ),
    'alternative' => array(
        'label'        => __('Alternative slider', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'dj_list_slider' => array(
        'label'        => __('DJ Slider', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'video' => array(
        'label'        => __('Videos Slider', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'audio' => array(
        'label'        => __('Audios Slider', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
);

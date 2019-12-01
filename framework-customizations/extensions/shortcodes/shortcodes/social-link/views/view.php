<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php
$parameters = '';
$class = '';
if ( $atts['design_scheme'] !== 'default' ) {
    $class .= ' ' . $atts['design_scheme'];
}
$src = '/wp-content/themes/edm-school/img/socials/' . $atts['name'] . '.svg';
?>

<a href="<?= $atts['url'] ;?>" class="social-link<?= $class; ?>">
    <span class="social-link-box">
        <img src="<?= $src; ?>" class="social-link-image" alt="<?= $atts['alt']; ?>">
    </span>
</a>


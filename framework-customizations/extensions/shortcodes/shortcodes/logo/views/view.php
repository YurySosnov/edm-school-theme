<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php
$parameters = '';
$class = $atts['name'];
if ( $atts['class'] !== '' ) {
    $class .= ' ' . $atts['class'];
}
$src = '/wp-content/themes/edm-school/img/logos/' . $atts['name'] . '.svg';
?>
<? if ( $atts['tag'] && $atts['tag'] !== 'img') : ?>
    <<?php echo $atts['tag']; ?> class="logo <?php echo $class; ?>"></<?php echo $atts['tag']; ?>>
<? endif; ?>

<? if ( !$atts['tag'] || $atts['tag'] === 'img') : ?>
    <img src="<?php echo $src; ?>" alt="<?php $atts['alt']; ?>" class="logo <?php echo $class; ?>">
<? endif; ?>


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
$src = get_template_directory_uri() . '/img/logos/' . $atts['name'] . '.svg';
?>
<?php if ( $atts['use_url'] ) : ?>
<a href="<?= $atts['url'] ;?>">
<?php endif; ?>

<?php if ( $atts['tag'] && $atts['tag'] !== 'img') : ?>
    <<?php echo $atts['tag']; ?> class="logo <?php echo $class; ?>"></<?php echo $atts['tag']; ?>>
<?php endif; ?>

<?php if ( !$atts['tag'] || $atts['tag'] === 'img') : ?>
    <img src="<?php echo $src; ?>" alt="<?php $atts['alt']; ?>" class="logo <?php echo $class; ?>">
<?php endif; ?>

<?php if ( $atts['use_url'] ) : ?>
</a>
<?php endif; ?>
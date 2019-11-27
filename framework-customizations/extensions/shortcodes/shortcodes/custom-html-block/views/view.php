<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php
$parameters = '';
if ( $atts['class'] ) {
    $parameters .= ' class="' . $atts['class'] . '"';
}
if ( $atts['id'] ) {
    $parameters .= ' id="' . $atts['id'] . '"';
}
?>
<?php if ( $atts['tag'] === '' ) : ?>
    <?php echo $atts['text']; ?>
<? else: ?>
    <<?php echo $atts['tag']; ?><?php echo $parameters; ?>>
        <?php echo $atts['text']; ?>
    </<?php echo $atts['tag']; ?>>
<?php endif; ?>
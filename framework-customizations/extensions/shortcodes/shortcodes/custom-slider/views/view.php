<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

/**
* @var array $atts
*/

$l1_container_class = ( empty( $atts['l1_container_class'] ) ) ? $atts['l1_container_class'] : '';

?>

<div<?php if ( ! empty( $atts['l1_container_class'] ) ) : ?> class="<?php echo $atts['l1_container_class']; ?>"<?php endif; ?>>

</div>
<?php if ($atts['2levels']) : ?>
<div<?php if ( ! empty( $atts['l2_container_class'] ) ) : ?> class="<?php echo $atts['l2_container_class']; ?>"<?php endif; ?>>

</div>
<? endif; ?>
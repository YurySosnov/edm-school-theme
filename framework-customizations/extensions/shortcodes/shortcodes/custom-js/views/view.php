<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php if ( $atts['src'] !== '') : ?>
<script src="<?= $atts['src']; ?>" type="text/javascript"></script>
<?php endif; ?>
<?php if ( $atts['code'] !== '') : ?>
<script type="text/javascript">
    <?= $atts['code']; ?>
</script>
<?php endif; ?>

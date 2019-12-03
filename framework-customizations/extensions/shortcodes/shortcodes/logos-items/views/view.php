<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="fw-row logos">
    <?php foreach ( fw_akg( 'elements', $atts, array() ) as $el ) : ?>
        <div class="fw-col-md-4 fw-col-lg-2 fw-col-sm-6 fw-col-xs-12 logos-logo">
            <div class="block">
                <div class="block-src"<? if ( !empty( $el['image'] ) ) : ?> style="background-image: url('<?php echo $el['image']['url'] ; ?>');" <? endif; ?>></div>
                <div class="block-hov"<? if ( !empty( $el['image_hover'] ) ) : ?> style="background-image: url('<?php echo $el['image_hover']['url'] ; ?>');" <? endif; ?>></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

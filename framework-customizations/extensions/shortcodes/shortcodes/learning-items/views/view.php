<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="fw-row learning-row">
    <?php foreach ( fw_akg( 'elements', $atts, array() ) as $el ) : ?>
        <div class="fw-col-sm-12 fw-col-6">
            <div class="block">
                <div class="fw-row">
                    <div class="fw-col-sm-12 fw-col-md-5 fw-col-4 img">
                        <img alt="<?php echo $el['text']; ?>"
                             src="<? if ( !empty( $el['image'] ) ) : ?> <?php echo $el['image']['url'] ; ?>"<? endif; ?>>
                    </div>
                    <div class="fw-col-sm-12 fw-col-md-7 fw-col-8"><?php echo $el['text']; ?></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

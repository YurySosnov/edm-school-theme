<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="fw-container">
    <?php foreach ( fw_akg( 'elements', $atts, array() ) as $el ) : ?>
        <div class="fw-col-12 fw-col-md-6 fw-col-lg-4">
            <div class="direction-block">
                <div class="img"<? if ( !empty( $el['image'] ) ) : ?> style="background-image: url('<?php echo $el['image']['url'] ; ?>');" <? endif; ?>>
                    <div class="name"><?php echo $el['text']; ?></div>
                    <a href="<?php echo $el['link']; ?>"><span class="bord"></span></a>
                </div>
                <div class="bg"></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

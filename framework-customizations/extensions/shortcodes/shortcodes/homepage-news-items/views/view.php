<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="fw-container">
    <?php foreach ( fw_akg( 'elements', $atts, array() ) as $el ) : ?>
        <a class="fw-col-12 fw-col-md-4" href="<?php echo $el['link']; ?>">
            <span class="block">
                <span class="fw-row">
                    <span class="fw-col-12">
                        <span class="img"<? if ( !empty( $el['image'] ) ) : ?> style="background-image: url('<?php echo $el['image']['url'] ; ?>');" <? endif; ?>></span>
                    </span>
                </span>
                <p><?php echo $el['text']; ?></p>
            </span>
        </a>
    <?php endforeach; ?>
</div>

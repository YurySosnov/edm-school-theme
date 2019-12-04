<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="fw-container elements-suitable">
    <div class="row">
        <?php foreach ( fw_akg( 'elements', $atts, array() ) as $el ) : ?>
            <div class="fw-col-12 fw-col-md-6 fw-col-lg-4 item">
                <div class="item-info">
                    <div class="item-number">
                        <h2><?= $el['number']; ?></h2>
                    </div>
                    <div class="item-text">
                        <p><?= $el['text']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="fw-col-12 fw-col-md-6 fw-col-lg-8 item-last">
            <div class="item-info">
                <h3 class="item-title"><?= $atts['last_title']; ?></h3>
                <p><?= $atts['last_text']; ?></p>
                <button type="button" class="pink-button-question item-last-submit"><?= $atts['last_button']; ?></button>
            </div>
        </div>
    </div>
</div>

<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="elements-courses-contain fw-container">
    <div class="fw-row">
    <?php foreach ( fw_akg( 'elements', $atts, array() ) as $el ) : ?>
        <div class="fw-col-lg-3 fw-col-md-3 fw-col-sm-6 fw-col-xs-12 elements-courses-contain-item">
            <div class="elements-courses-contain-item-title">
                <h4><?= $el['title'];?></h4>
            </div>
            <div class="content-block-course">
                <ul class="list-coures">
                    <?php foreach ( fw_akg( 'list', $el, array() ) as $list_item ) : ?>
                        <li><?= $list_item['text']; ?></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

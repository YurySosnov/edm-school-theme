<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */

$nums_to_show = [2,3];
$counter = 0;
?>
<div class="fw-row texts">
    <?php foreach ( fw_akg( 'elements', $atts, array() ) as $el ) : ?>
        <?php $counter++; ?>
        <div class="fw-col-lg-3 fw-col-md-6 fw-col-sm-6 fw-col-xs-6 item <?php if ( in_array($counter, $nums_to_show ) ) : ?>opt2<?php else: ?>opt1<?php endif; ?>">
            <div class="row">
                <div class="fw-col-12 fw-col-md-3">
                    <div class="img"<? if ( !empty( $el['image'] ) ) : ?> style="background-image: url('<?php echo $el['image']['url'] ; ?>');" <? endif; ?>></div>
                </div>
                <div class="fw-col-12 fw-col-md-9">
                    <p class="name"><strong><?php echo $el['title']; ?></strong><?php echo ( $el['age'] !== '' ) ? ', ' . $el['age'] : ''; ?></p>
                    <p><?php echo $el['text']; ?></p>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>


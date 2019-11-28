<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

/**
 * @var array $atts
 */

$counter = 0;
$type = 'default';
if ( $atts['dj_list_slider'] ) {
    $type = 'dj';
    if ( $atts['alternative'] ) {
        $type = 'dj_alt';
    }
}
if ( $atts['video'] ) {
    $type = 'video';
}

if ( $atts['audio'] ) {
    $type = 'audio';
}
?>


<?php if ( $atts['container_class'] !== '' ) : ?><div class="<?php echo $atts['container_class']; ?>"><?php endif; ?>

<?php if ( $type === 'dj' ) : ?>
    <div class="dj-slider-top">
        <div class="fw-container">
            <div class="djlist-left"></div>
            <div class="owl-carousel djlist">
                <?php foreach ( fw_akg( 'slides', $atts, array() ) as $slide ) : ?>
                    <?php $counter++; ?>
                    <div class="item fw-col-12 fw-col-md">
                        <a href="#n<?php echo $counter; ?>">
                            <div class="ava"<? if ( !empty( $slide['img'] ) ) : ?> style="background-image: url('<?php echo $slide['img']['url'] ; ?>');" <? endif; ?>></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="djlist-right"></div>
        </div>
    </div>
<?php endif; ?>
<?php if ( $type === 'dj_alt'  ) : ?>
    <div class="dj-slider-bottom">
        <div class="fw-container">
            <div class="fw-col-12 fw-col-md-10 fw-order-2 fw-order-md-1">
                <div class="owl-carousel owl-theme">
                    <?php foreach ( fw_akg( 'slides', $atts, array() ) as $slide ) : ?>
                        <?php $counter++; ?>
                        <div class="item" data-hash="n<?php echo $counter; ?>">
                            <div class="row">
                                <div class="fw-col-sm-12 fw-col-md-5">
                                    <div class="img"<? if ( !empty( $slide['img_alt'] ) ) : ?> style="background-image: url('<?php echo $slide['img_alt']['url'] ; ?>');" <? endif; ?>></div>
                                </div>
                                <div class="fw-col-sm-12 fw-col-md-7">
                                    <div class="text">
                                        <p class="title"><?php echo $slide['title']; ?></p>
                                        <p class="name"><?php echo $slide['name']; ?></p>
                                        <?php echo $slide['text']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="fw-col-12 fw-col-md-2 fw-order-1 fw-order-md-2">
                <div class="but right"></div>
                <div class="but left"></div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ( $type === 'video') : ?>
    <div class="owl-carousel">
        <?php foreach ( fw_akg( 'slides', $atts, array() ) as $slide ) : ?>
        <div class="item">
            <div class="row">
                <div class="fw-col-12">
                    <div class="video-block">
                        <?php echo $slide['video']; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="fw-col-12">
            <div class="left"></div>
            <div class="right"></div>
        </div>
    </div>
<?php endif; ?>

<?php if ( $atts['container_class'] !== '' ) : ?></div><?php endif; ?>

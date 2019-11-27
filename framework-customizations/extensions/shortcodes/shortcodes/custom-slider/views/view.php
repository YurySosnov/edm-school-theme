<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

/**
 * @var array $atts
 */

?>

<?php if ( !$atts['alternative']) : ?>
    <?php if ( $atts['l1_container_class'] !== '' ) : ?><div class="<?php echo $atts['l1_container_class']; ?>"><?php endif; ?>
    <?php if ( $atts['dj_list_slider']) : ?>
        <div class="dj-slider-top">
            <div class="fw-container">
                <div class="djlist-left"></div>
                <?php $counter = 0; ?>
                <div class="owl-carousel djlist">
                    <?php foreach ( fw_akg( 'slides', $atts, array() ) as $slide ) : ?>
                        <?php $counter++; ?>
                        <div class="item fw-col-12 fw-col-md">
                            <a href="#n<?php echo $counter; ?>">
                                <div class="ava"<? if ( !empty( $slide['s1_img'] ) ) : ?> style="background-image: url('<?php echo $slide['s1_img']['url'] ; ?>');" <? endif; ?>></div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="djlist-right"></div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ( $atts['l1_container_class'] !== '' ) : ?></div><?php endif; ?>
<?php endif; ?>

<?php if ( !$atts['alternative']) : ?>
    <?php if ($atts['two_levels']) : ?>
        <?php if ( $atts['l2_container_class'] !== '' ) : ?><div class="<?php echo $atts['l2_container_class']; ?>"><?php endif; ?>
        <?php $counter = 0; ?>
        <?php if ( $atts['l2_container_class'] !== '' ) : ?></div><?php endif; ?>
    <? endif; ?>
<? endif; ?>

<?php if ($atts['alternative']) : ?>
    <?php if ( $atts['alt_container_class'] !== '' ) : ?><div class="<?php echo $atts['alt_container_class']; ?>"><?php endif; ?>
    <?php $counter = 0; ?>
    <?php if ( $atts['dj_list_slider'] ) : ?>
        <div class="dj-slider-bottom">
            <div class="fw-container">
                <div class="fw-col-12 fw-col-md-10 fw-order-2 fw-order-md-1">
                    <div class="owl-carousel owl-theme">
                        <?php foreach ( fw_akg( 'slides', $atts, array() ) as $slide ) : ?>
                            <?php $counter++; ?>
                            <div class="item" data-hash="n<?php echo $counter; ?>">
                                <div class="row">
                                    <div class="fw-col-sm-12 fw-col-md-5">
                                        <div class="img"<? if ( !empty( $slide['s2_img'] ) ) : ?> style="background-image: url('<?php echo $slide['s2_img']['url'] ; ?>');" <? endif; ?>></div>
                                    </div>
                                    <div class="fw-col-sm-12 fw-col-md-7">
                                        <div class="text">
                                            <p class="title"><?php echo $slide['s2_title']; ?></p>
                                            <p class="name"><?php echo $slide['s2_name']; ?></p>
                                            <?php echo $slide['s2_text']; ?>
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
    <?php if ( $atts['alt_container_class'] !== '' ) : ?></div><?php endif; ?>
<? endif; ?>

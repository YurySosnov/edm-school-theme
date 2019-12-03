<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

/**
 * @var array $atts
 */


if ( !function_exists ('tpl_getVar') ){
    function tpl_getVar($var, $type) {
        switch ($type) {
            case 'string' :
                return $var;
                break;
            case 'int' :
                return (int) $var;
                break;
            case 'boolean' :
                return ( $var === false || $var === '' ) ? 'false' : 'true';
                break;
        }
        return false;
    }
}
$counter = 0;
$type = 'default';
//if ( $atts['dj_list_slider'] ) {
//    $type = 'dj';
//    if ( $atts['alternative'] ) {
//        $type = 'dj_alt';
//    }
//}
//if ( $atts['video'] ) {
//    $type = 'video';
//}
//
//if ( $atts['audio'] ) {
//    $type = 'audio';
//}

$type = $atts['slider_type'];

if ( !function_exists ('tpl_convertClassForJQ') ) {
    function tpl_convertClassForJQ ($str) {
        $jq_class = '';
        if ( $str !== '' ) {
            $el_classes = explode(' ', $str);
            foreach ($el_classes as $el_class) {
                $jq_class .= '.' . $el_class;
            }
        }
        return $jq_class;
    }
}

$slider_additional_class = ( $atts['slider_class'] !== '' ) ? ' ' . $atts['slider_class'] : '';
if ( $type === 'reviews') {
    $slider_additional_class .= ' slider-reviews';
}
$slider_additional_class .= ' custom-slider-design-' . $atts['design'];
$slider_class_js = tpl_convertClassForJQ( $atts['slider_class'] );
?>


<?php if ( $atts['container_class'] !== '' ) : ?><div class="<?= $atts['container_class']; ?>"><?php endif; ?>

<?php if ( $type === 'dj' ) : ?>
    <?php $slider_additional_class = ' dj-list-top-slider';?>
    <?php $slider_class_js = '.dj-list-top-slider';?>
    <div class="dj-slider-top">
        <div class="fw-container">
            <div class="dj-list-prev pink-prev"></div>
            <div class="owl-carousel<?= $slider_additional_class; ?>">
                <?php foreach ( fw_akg( 'slides', $atts, array() ) as $slide ) : ?>
                    <?php $counter++; ?>
                    <div class="item fw-col-12 fw-col-md">
                        <a href="#n<?= $counter; ?>">
                            <div class="ava"<? if ( !empty( $slide['img'] ) ) : ?> style="background-image: url('<?= $slide['img']['url'] ; ?>');" <? endif; ?>></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="dj-list-next pink-next"></div>
        </div>
    </div>
<?php endif; ?>
<?php if ( $type === 'dj_alt'  ) : ?>
    <?php $slider_additional_class = ' dj-list-bottom-slider';?>
    <?php $slider_class_js = '.dj-list-bottom-slider';?>
    <div class="dj-slider-bottom">
        <div class="fw-container">
            <div class="fw-col-12 fw-col-md-10 fw-order-2 fw-order-md-1">
                <div class="owl-carousel owl-theme<?= $slider_additional_class; ?>">
                    <?php foreach ( fw_akg( 'slides', $atts, array() ) as $slide ) : ?>
                        <?php $counter++; ?>
                        <div class="item" data-hash="n<?= $counter; ?>">
                            <div class="row">
                                <div class="fw-col-sm-12 fw-col-md-5">
                                    <div class="img"<? if ( !empty( $slide['img_alt'] ) ) : ?> style="background-image: url('<?= $slide['img_alt']['url'] ; ?>');" <? endif; ?>></div>
                                </div>
                                <div class="fw-col-sm-12 fw-col-md-7">
                                    <div class="text">
                                        <p class="title"><?= $slide['title']; ?></p>
                                        <p class="name"><?= $slide['name']; ?></p>
                                        <?= $slide['text']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="fw-col-12 fw-col-md-2 fw-order-1 fw-order-md-2 dj-slider-bottom-nav-outer">
                <div class="dj-list-alt-prev pink-prev"></div>
                <div class="dj-list-alt-next pink-next"></div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ( $type === 'reviews') : ?>
<div class="owl-carousel<?= $slider_additional_class; ?>">
    <?php foreach ( fw_akg( 'slides', $atts, array() ) as $slide ) : ?>
        <div class="item">
            <div class="info">
                <div class="img"<? if ( !empty( $slide['img'] ) ) : ?> style="background-image: url('<?= $slide['img']['url'] ; ?>');" <? endif; ?>></div>
                <div class="text">
                    <p class="name"><strong><?= $slide['name']; ?></strong>, <?= $slide['age']; ?></p>
                    <p><?= $slide['text']; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
<?php if ( $type === 'default' || $type === 'video' || $type === 'audio' ) : ?>
    <div class="owl-carousel owl-theme<?= $slider_additional_class; ?>">
        <?php foreach ( fw_akg( 'slides', $atts, array() ) as $slide ) : ?>
            <div class="item">
                <?php if ( $type === 'audio') : ?>
                    <?= $slide['audio']; ?>
                <?php endif; ?>
                <?php if ( $type === 'video') : ?>
                    <div class="video-block">
                        <?= $slide['video']; ?>
                    </div>
                <?php endif; ?>
                <?php if ( $type === 'default' ) : ?>
                    <div class="slider-img" <? if ( !empty( $slide['img'] ) ) : ?> style="background-image: url('<?= $slide['img']['url'] ; ?>');" <? endif; ?>>
                        <div class="slider-img-hover" <? if ( !empty( $slide['img_hover'] ) ) : ?> style="background-image: url('<?= $slide['img_hover']['url'] ; ?>');" <? endif; ?>></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <?php if ( $atts['prev_button_class'] !== '' || $atts['next_button_class'] !== '') : ?>
        <div class="fw-row">
            <div class="fw-col-12 slider-buttons-align slider-buttons-align-<?= $atts['buttons_align']; ?>">
                <?php if ( $atts['prev_button_class'] !== '') : ?><div class="<?= $atts['prev_button_class'] ;?>" style="margin: <?= $atts['buttons_margin']; ?>;"></div><?php endif; ?>
                <?php if ( $atts['next_button_class'] !== '') : ?><div class="<?= $atts['next_button_class'] ;?>" style="margin: <?= $atts['buttons_margin']; ?>;"></div><?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if ( $atts['container_class'] !== '' ) : ?></div><?php endif; ?>
<script>
    $(function(){
        $('.owl-carousel<?= $slider_class_js; ?>').owlCarousel({
            loop: <?= tpl_getVar($atts['loop'],'boolean'); ?>,
            dots: <?= tpl_getVar($atts['dots'],'boolean'); ?>,
            margin: <?= tpl_getVar($atts['margin'],'int'); ?>,
            responsiveClass: '<?= $atts['responsiveClass']; ?>',
            URLhashListener: <?= tpl_getVar($atts['URLhashListener'],'boolean'); ?>,
            autoplayHoverPause: <?= tpl_getVar($atts['autoplayHoverPause'],'boolean'); ?>,
            startPosition: '<?= $atts['startPosition']; ?>',
            responsive: {
            <?php foreach (fw_akg('responsive', $atts, array()) as $responsive_item) : ?>
                <?= $responsive_item['resolution']; ?> : {
                    items : <?= $responsive_item['items']; ?>,
                    nav   : <?= tpl_getVar($responsive_item['nav'],'boolean'); ?>
                },
            <?php endforeach; ?>
            },
        });

        <?php if ( $atts['prev_button_class'] !== '' ) : ?>
            $('<?= tpl_convertClassForJQ($atts['prev_button_class']); ?>').click(function() {
                $('<?= $slider_class_js; ?> .owl-prev').trigger('click');
            });
        <?php endif; ?>
        <?php if ( $atts['next_button_class'] !== '' ) : ?>
            $('<?= tpl_convertClassForJQ($atts['next_button_class']); ?>').click(function() {
                $('<?= $slider_class_js; ?> .owl-next').trigger('click');
            });
        <?php endif; ?>

        <?php if ( $type === 'dj' ) : ?>
        $('.dj-list-prev').click(function() {
            $('<?= $slider_class_js; ?> .owl-prev').trigger('click');
        });
        $('.dj-list-next').click(function() {
            $('<?= $slider_class_js; ?> .owl-next').trigger('click');
        });
        <?php endif; ?>

        <?php if ( $type === 'dj_alt' ) : ?>
        $('.dj-list-alt-prev').click(function() {
            $('<?= $slider_class_js; ?> .owl-prev').trigger('click');
        });
        $('.dj-list-alt-next').click(function() {
            $('<?= $slider_class_js; ?> .owl-next').trigger('click');
        });
        <?php endif; ?>
    });
</script>

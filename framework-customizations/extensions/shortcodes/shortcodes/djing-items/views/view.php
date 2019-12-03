<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="fw-container djing">
    <div class="fw-row djing">
        <?php foreach ( fw_akg( 'elements', $atts, array() ) as $el ) : ?>
        <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-6 fw-col-lg-4 block-djing">
            <div class="content-block-djing">
                <div class="fw-col-12 fw-col-md-5 fw-col-lg-4 img">
                    <img src="<? if ( !empty( $el['image'] ) ) : ?><?= $el['image']['url'] ; ?><? endif; ?>" alt="<?= $el['text']; ?>">
                </div>
                <div class="fw-col-12 fw-col-md-7 fw-col-lg-8 info-djing">
                    <p><?= $el['text']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="fw-col-12 fw-col-md-6 fw-col-lg-4 block-djing container-about-djing">
            <div class="question-btn none-bg question-top">Бесплатная консультация<span class="arrow-btn"></span></div>
        </div>
    </div>
</div>

<script>
    $(function() {
        let questionTop = $('.question-top');
        if ( !questionTop.hasClass('top-animate-activated') ) {
            questionTop.on('click', function () {
                $('html,body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            questionTop.addClass('top-animate-activated')
        }
    });
</script>
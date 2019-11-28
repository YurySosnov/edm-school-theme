<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="fw-container-fluid <?php echo $atts['class'];?>"<? if ( !empty( $atts['bg'] ) ) : ?> style="background-image: url('<?php echo $atts['bg']['url'] ; ?>');" <? endif; ?>>
    <div class="row cont">
        <div id="playu" class="block">
            <p><?php echo $atts['text'];?></p>
            <div class="but"></div>
        </div>
        <div id="pauseu"></div>
        <div class="youtube"><?php echo $atts['video'];?></div>
    </div>
</div>
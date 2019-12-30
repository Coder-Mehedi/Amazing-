<?php
$el_classes = apply_filters( 'kc-el-class', $atts );
! empty( $extra_class ) ? $el_classes[] = $extra_class : null;
$section_title = $atts['about_section_title'];
$title_color   = $atts['amazing_title_color'];
?>
<div>
    <h2 class="section-title text-center <?php echo $title_color; ?> <?php echo implode( ' ', $el_classes ); ?>">
		<span><?php echo esc_attr( $section_title ); ?></span><span class="highlight"> .</span>
    </h2>
</div>

<?php // print_r($atts) ?>
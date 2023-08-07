<?php
 /**
  * Title: Header Default
  * Slug: next-business/header-default
  * Categories: next-business, featured
  */
?>
<!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}}},"className":"header-section"} -->
<div class="wp-block-columns header-section" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"}},"textColor":"black","fontSize":"medium","fontFamily":"ubuntu"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:navigation {"customTextColor":"#747582","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"14px"}},"fontFamily":"ubuntu"} -->
    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Home', 'next-business'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('About Us', 'next-business'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Services', 'next-business'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Project', 'next-business'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Blog', 'next-business'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"<?php echo esc_html__('Contact Us', 'next-business'); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"color":{"gradient":"linear-gradient(138deg,rgb(255,105,141) 0%,rgb(251,63,108) 100%)"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"ubuntu"} -->
<div class="wp-block-button has-custom-font-size has-ubuntu-font-family" style="font-size:14px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-white-color has-text-color has-background wp-element-button" style="background:linear-gradient(138deg,rgb(255,105,141) 0%,rgb(251,63,108) 100%)"><?php echo esc_html__('Lets Talk', 'next-business'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
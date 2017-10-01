<?php
/**
 * @file
 * Display Suite Case Study Teaser template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $topcase_: Rendered content for the "TopCase " region.
 * - $topcase__classes: String of classes that can be used to style the "TopCase " region.
 *
 * - $bottomcase: Rendered content for the "BottomCase" region.
 * - $bottomcase_classes: String of classes that can be used to style the "BottomCase" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $topcase_wrapper; ?> class="ds-topcase-<?php print $topcase_classes; ?>">
      <?php print $topcase; ?>
    </<?php print $topcase_wrapper; ?>>

    <<?php print $bottomcase_wrapper; ?> class="ds-bottomcase<?php print $bottomcase_classes; ?>">
      <?php print $bottomcase; ?>
    </<?php print $bottomcase_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

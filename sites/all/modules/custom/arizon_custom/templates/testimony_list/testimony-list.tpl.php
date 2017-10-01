<?php
/**
 * @file
 * Display Suite Testimony List template.
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
 * - $top_: Rendered content for the "Top " region.
 * - $top__classes: String of classes that can be used to style the "Top " region.
 *
 * - $bottom: Rendered content for the "Bottom" region.
 * - $bottom_classes: String of classes that can be used to style the "Bottom" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $top__wrapper; ?> class="ds-top-<?php print $top__classes; ?>">
      <?php print $top_; ?>
    </<?php print $top__wrapper; ?>>

    <<?php print $bottom_wrapper; ?> class="ds-bottom<?php print $bottom_classes; ?>">
      <?php print $bottom; ?>
    </<?php print $bottom_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

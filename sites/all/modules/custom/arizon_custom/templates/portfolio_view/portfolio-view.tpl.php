<?php
/**
 * @file
 * Display Suite Portfolio View template.
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
 * - $_top: Rendered content for the " Top" region.
 * - $_top_classes: String of classes that can be used to style the " Top" region.
 *
 * - $between: Rendered content for the "Between" region.
 * - $between_classes: String of classes that can be used to style the "Between" region.
 *
 * - $left: Rendered content for the "Left" region.
 * - $left_classes: String of classes that can be used to style the "Left" region.
 *
 * - $right: Rendered content for the "Right" region.
 * - $right_classes: String of classes that can be used to style the "Right" region.
 */
?>
<div class = "portfolio-wrapper">
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $_top_wrapper; ?> class="ds--top<?php print $_top_classes; ?>">
      <?php print $_top; ?>
    </<?php print $_top_wrapper; ?>>

    <<?php print $between_wrapper; ?> class="ds-between<?php print $between_classes; ?>">
      <?php print $between; ?>
    </<?php print $between_wrapper; ?>>

    <<?php print $left_wrapper; ?> class="ds-left<?php print $left_classes; ?>">
      <?php print $left; ?>
    </<?php print $left_wrapper; ?>>

    <<?php print $right_wrapper; ?> class="ds-right<?php print $right_classes; ?>">
      <?php print $right; ?>
    </<?php print $right_wrapper; ?>>

</<?php print $layout_wrapper ?>>
</div>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

<?php
$wrapper_attributes = get_block_wrapper_attributes([
  'class' => 'cta cta--' . esc_attr( $attributes['variant'] ?? 'light' )
]);

$title    = $attributes['title'] ?? '';
$subtitle = $attributes['subtitle'] ?? '';
?>

<div <?php echo $wrapper_attributes; ?>>
  <?php if ( $title ) : ?>
    <h2><?php echo esc_html( $title ); ?></h2>
  <?php endif; ?>

  <?php if ( $subtitle ) : ?>
    <p><?php echo esc_html( $subtitle ); ?></p>
  <?php endif; ?>
</div>

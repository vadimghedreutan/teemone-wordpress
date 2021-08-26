<div class="hero">
  <?php $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>
  <div class="hero_bg" style="background:url('<?php echo $thumbnail_url; ?>') center center/cover;"></div>
</div>
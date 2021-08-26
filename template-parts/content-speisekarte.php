<?php 
$file_menu = get_field('menu_upload');

if( $file_menu ): ?>
  <a href="<?php echo $file_menu['url']; ?>">Speisekarte</a>
<?php endif; ?>
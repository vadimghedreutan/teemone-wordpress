<section>
  <div class="container">
    
    <div class="custom-text">
    <?php
			while ( have_posts() ) :
        the_post();
        the_content();
      endwhile; 
		?>
    </div>
  </div>

</section>
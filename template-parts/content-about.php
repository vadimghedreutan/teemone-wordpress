<?php $about_image = get_field('about_image'); ?>
<section id="well" class="well">
    <div class="container">
      <div class="about">
        <div class="about__image">
            <div class="well-image">
              <?php if( !empty($about_image) ): ?>
                <div class="well-image_bg" style="background:url('<?php echo $about_image['url']; ?>') center center/cover;"></div>
              <?php endif; ?>
            </div>
        </div>
        <div class="about__description">
        <?php
            while ( have_posts() ) :
              the_post();
              the_content();
            endwhile; 
          ?>
        </div>
      </div>
    </div>
  </section>
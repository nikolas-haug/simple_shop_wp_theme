<?php get_header(  ); ?>

    <div class="grid-container">
      <div class="grid-x">
        <div class="cell large-12">
          <div class="showcase callout secondary">
            <?php if(is_active_sidebar( 'showcase' )) : ?>
              <?php dynamic_sidebar('showcase'); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="grid-container">
      <div class="grid-x">
        <div class="cell large-8 medium-8">
          <div class="products grid-x">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(  ); ?>
                <div class="cell large-12">
                    <h3><?php the_title( ); ?></h3>
                    <?php if(has_post_thumbnail( )) : ?>
                        <?php the_post_thumbnail( ); ?>
                    <?php endif; ?>
                    <?php the_content( ); ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="cell large-4 medium-4">
          <?php if(is_active_sidebar( 'sidebar' )) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

<?php get_footer(  ); ?>
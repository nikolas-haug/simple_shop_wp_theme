<?php get_header(  ); ?>

    <hr>

    <div class="grid-container">
      <div class="grid-x">
        <div class="cell large-8 medium-8">
          <div class="products grid-x">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(  ); ?>
                <div class="cell large-5">
                    <a href="<?php echo site_url('/'); ?>">Go Back</a>
                    <br>
                    <?php if(has_post_thumbnail( )) : ?>
                        <?php the_post_thumbnail( ); ?>
                    <?php endif; ?>
                </div>
                <div class="cell large-7">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content( ); ?>
                    <hr>
                    <?php if(the_tags( )) : ?>
                        <?php if(function_exists('the_tags')) { ?>
                            <strong>Tags: </strong><?php the_tags('', '', ''  ) ?><br>
                        <?php } ?>
                    <?php endif; ?>
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
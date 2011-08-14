<?php /* If there are no posts to display, such as an empty archive page */ ?>

<?php if ( ! have_posts() ) : ?>
	<div class="notice">
		<p class="bottom">Sorry, no results were found.</p>
	</div>
	<?php get_search_form(); ?>		
<?php endif; ?>

<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post();  ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <?php $fi_position = get_post_meta( $post->ID, 'featured_image_position', true ); ?>
            
            <header>
                <?php if ( $fi_position == "top" || $fi_position == "" ) adelante_featured_image(); ?>               
				<h2 class="blog_header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php adelante_post_meta(); ?>				
				<?php if ( get_option( 'adelante_post_author' ) == 'checked' ) : ?>
				<p class="byline author vcard">
					Written by <span class="fn"><?php the_author(); ?></span>
				</p>
				<?php endif; ?>
			</header>
            
			<div class="entry-content">
                <?php if ( $fi_position == 'left' ) adelante_featured_image( 200, 200, null, "gallery-item alignedleft" ); ?>                        
                <?php if ( $fi_position == 'right' ) adelante_featured_image( 200, 200, null, "gallery-item alignedright" ); ?>            
	            <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search ?>
			            <?php the_excerpt(); ?>
	            <?php else : ?>
                        <?php the_content( 'Continue&hellip;' ); ?>
	            <?php endif; ?>
			</div>
            
		</article>

		<?php comments_template( '', true ); ?>
    
<?php endwhile; ?>

<div class="clearboth"></div>
<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>  
        
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php //if ( $wp_query->max_num_pages > 1 ) : ?>
<!--	<nav id="post-nav">
		<div class="post-previous"><?php //next_posts_link( __( '&larr; Older posts', 'adelante' ) ); ?></div>
		<div class="post-next"><?php //previous_posts_link( __( 'Newer posts &rarr;', 'adelante' ) ); ?></div>
	</nav> -->
<?php //endif; ?>
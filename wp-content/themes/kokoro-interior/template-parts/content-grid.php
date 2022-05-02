<div class="kokoro-grid-item">
<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
	
	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<a href="<?php echo esc_url(get_permalink()); ?>"><?php the_post_thumbnail('kokoro-full-thumb'); ?></a>
	</div>
	<?php endif; ?>
	
	<div class="entry-header">
		<div class="entry-box">
		<span class="entry-cate"><?php the_category(' '); ?></span>
		</div>
		<h2 class="entry-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h2>
        <span class="title-divider"></span>
	</div>
	
	<div class="entry-content">
		<p><?php kokoro_interior_the_excerpt_max_charlength(120); ?></p>
	</div>
	<div class="entry-more">
		<a href="<?php echo esc_url(get_permalink()); ?>" class="more-link"><span class="more-button"><?php esc_html_e( 'Continue Reading', 'kokoro-interior' ); ?></span></a>
	</div>
	
</article>
</div>
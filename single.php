<?php get_header(); ?>

</div>
</section>

<style>
	.main-section{
		background: -webkit-gradient(
			linear,
			left top, left bottom,
			from(rgba(0, 0, 0, 0.5)),to(rgba(0, 0, 0, 0.5))
		), url("<?php the_post_thumbnail_url('landscape'); ?>"); 
		background: -webkit-linear-gradient(
			rgba(0, 0, 0, 0.35),
			rgba(0, 0, 0, 0.35)
		), url("<?php the_post_thumbnail_url('landscape'); ?>"); 
		background: -o-linear-gradient(
			rgba(0, 0, 0, 0.35),
			rgba(0, 0, 0, 0.35)
		), url("<?php the_post_thumbnail_url('landscape'); ?>"); 
		background: linear-gradient(
			rgba(0, 0, 0, 0.35),
			rgba(0, 0, 0, 0.35)
		), url("<?php the_post_thumbnail_url('landscape'); ?>");
		background-position: top;
  		background-size: cover;
	}
</style>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section>
	<div class="blog-container post-container flex-container">
		<div class="blog-card flex-parent">
			<div class="blog">
				<div class="blog-content flex-container">
					<h1><?php echo get_the_title(); ?></h1>
					<p>
						<?php echo get_the_author(); ?>
						<br>
						<?php echo get_the_date(); ?>
					</p>

					<p class="description"><?php echo wp_strip_all_tags(get_the_content()); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>	

<?php endwhile; endif; ?>

<?php get_footer(); ?>
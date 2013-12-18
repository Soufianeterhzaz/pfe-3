<?php  get_header();?>

	<?php query_posts( 'posts_per_page=5' ); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<p>Posté le <?php the_date(); ?> par <?php the_author(); ?></p>
			<p><?php the_content() ?></p>
		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
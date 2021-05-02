<?php get_header(); ?>

<div class="container pt-9">
	<?php while (have_posts()) : the_post() ?>
		<article class="single">
			<img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
			<h3 class="title mb-3"><?= the_title() ?></h3>
			<p><?= the_content() ?></p>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
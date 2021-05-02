<?php get_header() ?>

<section class="pt-9">
	<div class="container">
		<h2 class="title mb-4"><?= get_queried_object()->name ?></h2>

		<div class="row">
			<?php $query = new WP_Query(['post_type' => ['news','events'], 'category_name' => get_queried_object()->slug]) ?>
			<?php if ($query->have_posts()) : ?>
				<?php while ($query->have_posts()) : $query->the_post() ?>
						<div class="col-lg-6 mb-3">
							<article class="thumb">
								<div class="left">
									<img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">	
								</div>

								<div class="right">
									<h3 class="mb-1"><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h3>
									<p><?= the_excerpt() ?></p>
								</div>
							</article>
						</div>
				<?php endwhile ?>
			<?php endif ?>
		</div>
	</div>
</section>

<?php get_footer() ?>
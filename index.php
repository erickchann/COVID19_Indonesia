<?php get_header() ?>

<section class="banner mb-5">
	<div class="image"></div>
	<div class="overlay">Ayo Lawan Corona!</div>
</section>

<section class="news">
	<div class="container">
		<h2 class="title mb-4">News</h2>

		<div class="row">
			<?php $query = new WP_Query(['post_type' => 'news']) ?>
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

<section class="events mt-3">
	<div class="container">
		<h2 class="title mb-4">Events</h2>

		<div class="row">
			<?php $query = new WP_Query(['post_type' => 'events']) ?>
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
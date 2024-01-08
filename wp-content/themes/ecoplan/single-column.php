<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();

		// Get post category/taxonomy
		$post_index = 3;
		$terms = wp_get_post_terms($post->ID, 'column-category', '');
		$taxonomy_name = "";
		$taxonomy_slug = "";
		$category_makeup = "";
		if (count($terms)) :
			$taxonomy_name = $terms[0]->name;
			$taxonomy_slug = $terms[0]->slug;

			$category_makeup = '{
				"@type": "ListItem",
				"position": 3,
				"item": {
					"@id": "' . home_url('column-category/') . $taxonomy_slug . '/",
					"name": "' . $taxonomy_name . '"
				}
			},';
			$post_index = 4;
		endif;

		/* ============================================ */
		/* =================== META =================== */
		$GLOBALS['title'] = get_field('meta_title') ?: "コラム詳細｜エアコン・空調機・省エネ対策｜エコプランのBeONE";
		$GLOBALS['keywords'] = get_field('meta_keywords') ?: "";
		$GLOBALS['description'] = get_field('meta_description') ?: "業務用エアコン・空調機・冷凍機などの消費電力を削減するエコプランがご提供する省エネ制御装置「EcoData BeONE」や省エネに関するコラムはこちらからご覧いただけます。";
		$GLOBALS['h1'] = get_field('meta_h1') ?: "エアコン・空調機の省エネ対策に関するコラムはこちらからご覧ください。";
		/* ================= end META ================= */
		/* ============================================ */

		$GLOBALS['json_makeup'] = '<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "BreadcrumbList",
			"itemListElement": [{
					"@type": "ListItem",
					"position": 1,
					"item": {
						"@id": "' . home_url() . '",
						"name": "HOME"
					}
				},
				{
					"@type": "ListItem",
					"position": 2,
					"item": {
						"@id": "' . home_url('column/') . '",
						"name": "コラム一覧"
					}
				},
				' . $category_makeup . '
				{
					"@type": "ListItem",
					"position": ' . $post_index . ',
					"item": {
						"@id": "' . get_permalink() . '",
						"name": "' . get_the_title() . '"
					}
				}
			]
		}
		</script>';

		// ID of <body> 
		$GLOBALS['bodyID'] = "";

		// Class of <body>
		$GLOBALS['bodyClass'] = "under";

		get_header();
?>

		<main id="main" class="main-under">
			<!-- top info = main visual -->
			<div id="mainvisual" class="under-visual">
				<div class="inner">
					<div class="umvs-wrap">
						<h2 class="umvs-title">コラム一覧</h2>
					</div>
				</div>
			</div>
			<!-- #top_info end -->
			<div id="content">
				<!-- topic path = breadcrumb -->
				<div id="topic-path">
					<ul class="topic-list">
						<li><a href="<?php echo home_url(); ?>">HOME</a></li>
						<li><a href="<?php echo home_url('column/'); ?>">コラム一覧</a></li>
						<?php if (count($terms)) : ?>
							<li><a href="<?php echo home_url('column-category/' . $taxonomy_slug . '/'); ?>"><?php echo $taxonomy_name; ?></a></li>
						<?php endif; ?>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
				<!-- #topic_path end -->

				<section>
					<div class="ucolumn-detail">
						<h3><?php the_title(); ?></h3>
						<p class="h3-en">column</p>
						<?php
						for ($i = 1; $i <= 10; $i++) :
							$img = get_field('img' . $i);
							$txt = get_field('txt' . $i);
							if ($img || $txt) :
						?>
								<div class="ucolumn-item">
									<?php if ($img) : ?>
										<p class="ucolumn-img">
											<img src="<?php echo $img ?>" alt="<?php the_title(); ?>">
										</p>
									<?php endif; ?>
									<?php if ($txt) : ?>
										<div class="ucolumn-desc">
											<?php echo $txt ?>
										</div>
									<?php endif; ?>
								</div>
						<?php
							endif;
						endfor;
						?>
					</div>
				</section>

				<!-- Next/prev post -->
				<section>
					<?php
					// Get previous post
					$hidePrev = "";
					$prev_url = "";
					$prev_post = get_previous_post();
					if ($prev_post) :
						$prev_url = get_permalink($prev_post->ID);
					else :
						$hidePrev = "hidden";
					endif;

					// Get next post
					$hideNext = "";
					$next_url = "";
					$next_post = get_next_post();
					if ($next_post) :
						$next_url = get_permalink($next_post->ID);
					else :
						$hideNext = "hidden";
					endif;
					?>
					<ul class="btn-prev-next">
						<li class="prevPage <?php echo $hidePrev; ?>"><a href="<?php echo $prev_url; ?>">前の記事へ</a></li>
						<li><a href="<?php echo home_url('column/'); ?>">一覧に戻る</a></li>
						<li class="nextPage <?php echo $hideNext; ?>"><a href="<?php echo $next_url; ?>">次の記事へ</a></li>
					</ul>
				</section>
			</div>
		</main>

<?php
		get_footer();

	endwhile;
endif;
?>
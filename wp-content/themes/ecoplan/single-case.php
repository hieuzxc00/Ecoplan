<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();

		// Get post category/taxonomy
		$post_index = 3;
		$terms = wp_get_post_terms($post->ID, 'case-category', '');
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
					"@id": "' . home_url('case-category/') . $taxonomy_slug . '/",
					"name": "' . $taxonomy_name . '"
				}
			},';
			$post_index = 4;
		endif;

		/* ============================================ */
		/* =================== META =================== */
		$GLOBALS['title'] = get_field('meta_title') ?:  get_the_title()."｜エアコンの省エネ対策｜エコプランのBeONE";
		$GLOBALS['keywords'] = get_field('meta_keywords') ?: "";
		$GLOBALS['description'] = get_field('meta_description') ?: "業務用エアコン・空調機・冷凍機などの消費電力を削減するエコプランがご提供する省エネ制御装置「EcoData BeONE」を導入していただいている企業様の事例を詳しくご案内しています。";
		$GLOBALS['h1'] = get_field('meta_h1') ?: "エアコン・空調機の省エネ対策ができるBeONEの".get_the_title()."です。";
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
						"@id": "' . home_url('case/') . '",
						"name": "導入事例(一覧)"
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
						<h2 class="umvs-title">導入事例(一覧)</h2>
					</div>
				</div>
			</div>
			<!-- #top_info end -->
			<div id="content">
				<!-- topic path = breadcrumb -->
				<div id="topic-path">
					<ul class="topic-list">
						<li><a href="<?php echo home_url(); ?>">HOME</a></li>
						<li><a href="<?php echo home_url('case/'); ?>">導入事例(一覧)</a></li>
						<?php if (count($terms)) : ?>
							<li><a href="<?php echo home_url('case-category/' . $taxonomy_slug . '/'); ?>"><?php echo $taxonomy_name; ?></a></li>
						<?php endif; ?>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
				<!-- #topic_path end -->
				<section class="uh3">
					<div class="uwrap">
						<div class="uh3-tt">
							<h3>BeONE 導入企業の事例一覧</h3>
							<p class="h3-en">case</p>
						</div>
						<div class="uh3-desc">
							<p>
								エコプランが提供する「EcoData BeONE」は、業務用エアコン・空調機・冷凍機などの消費電力とデマンドの削減に大きく貢献する省エネ制御装置です。これまでに多くの企業様に導入していただき、高い省エネ効果を発揮しています。
							</p>
							<p>こちらでは、「EcoData BeONE」を導入していただいている企業様の事例を詳しくご案内しています。各事例に関するコメントなどもご紹介していますので、ぜひご覧ください。</p>
						</div>
					</div>
				</section>

				<?php if (get_field("ttl_h4") || get_field("txt_h4")) : ?>
					<section>
						<div class="uwrap">
							<?php if (get_field("ttl_h4")) : ?>
								<h4><?php echo get_field("ttl_h4") ?></h4>
							<?php endif; ?>
							<?php if (get_field("txt_h4")) : ?>
								<p><?php echo get_field("txt_h4") ?></p>
							<?php endif; ?>
						</div>
					</section>
				<?php endif; ?>

				<section class="ucase-detail">
					<h5><?php the_title(); ?></h5>
					<?php
					$check_img = false;
					for ($i = 1; $i <= 5; $i++) {
						$img = get_field('img' . $i);
						if ($img) {
							$check_img = true;
						}
					}
					if ($check_img) :
					?>
						<div class="ucase-slider">
							<div class="ucase-slider-bg">
								<ul>
									<?php
									for ($i = 1; $i <= 5; $i++) :
										$img = get_field('img' . $i);
										if ($img) :
									?>
											<li>
												<p class="ucase-img"><img src="<?php echo $img ?>" alt="<?php the_title(); ?>"></p>
											</li>
									<?php
										endif;
									endfor;
									?>
								</ul>
							</div>
							<div class="ucase-slider-sm">
								<ul>
									<?php
									for ($i = 1; $i <= 5; $i++) :
										$img = get_field('img' . $i);
										if ($img) :
									?>
											<li>
												<p class="ucase-img"><img src="<?php echo $img ?>" alt="<?php the_title(); ?>"></p>
											</li>
									<?php
										endif;
									endfor;
									?>
								</ul>
							</div>
						</div>
					<?php endif; ?>
					<?php
					if (get_field("td1") || get_field("td2") || get_field("td3") || get_field("td4")) : ?>
						<div class="tbl-bg">
							<table class="under-tbl tbl-block">
								<?php if (get_field("td1")) : ?>
									<tr>
										<th>導入先</th>
										<td><?php echo nl2br(get_field("td1")); ?></td>
									</tr>
								<?php endif; ?>
								<?php if (get_field("td2")) : ?>
									<tr>
										<th>業種</th>
										<td><?php echo nl2br(get_field("td2")); ?></td>
									</tr>
								<?php endif; ?>
								<?php if (get_field("td3")) : ?>
									<tr>
										<th>導入機器</th>
										<td><?php echo nl2br(get_field("td3")); ?></td>
									</tr>
								<?php endif; ?>
								<?php if (get_field("td4")) : ?>
									<tr>
										<th>利用年数</th>
										<td><?php echo nl2br(get_field("td4")); ?></td>
									</tr>
								<?php endif; ?>
							</table>
						</div>
					<?php endif; ?>

					<?php if (get_field("txt")) : ?>
						<div class="ucase-detail-desc">
							<?php echo get_field("txt"); ?>
						</div>
					<?php endif; ?>

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
						<li><a href="<?php echo home_url('case/'); ?>">一覧に戻る</a></li>
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
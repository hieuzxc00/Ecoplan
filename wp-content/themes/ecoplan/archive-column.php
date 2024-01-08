<?php

/* ============================================ */
/* =================== META =================== */
$GLOBALS['title'] = "コラム一覧｜エアコン・空調機・省エネ対策｜エコプランのBeONE";
$GLOBALS['keywords'] = "";
$GLOBALS['description'] = "業務用エアコン・空調機・冷凍機などの消費電力を削減するエコプランがご提供する省エネ制御装置「EcoData BeONE」や省エネに関するコラムを一覧でご案内しています。";
$GLOBALS['h1'] = "エアコン・空調機の省エネ対策に関するコラムを一覧でご紹介します。";
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
				<li>コラム一覧</li>
			</ul>
		</div>
		<!-- #topic_path end -->
		<section class="uh3">
			<div class="uwrap">
				<div class="uh3-tt">
					<h3>エコプランのコラム一覧</h3>
					<p class="h3-en">column</p>
				</div>
				<div class="uh3-desc">
					<p>
						省エネ制御装置「EcoData BeONE」をご提供しているエコプランでは、省エネに関するさまざまなコラムを公開しています。消費電力の削減は、企業にとって取り組むべき大きな課題です。当社のコラムが、これから本格的に省エネに取り組もうとする皆様の参考になれば幸いです。
					</p>
					<p>コラムの内容や「EcoData BeONE」を活用した省エネについて詳しく知りたい方は、お気軽にお問い合わせください。</p>
				</div>
			</div>
		</section>
		<section>
			<div class="uwrap">
				<h4>コラム一覧</h4>
			</div>
			<ul class="ucolumn-post">
				<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				global $post;
				// Query post argument
				$args = array(
					'post_type' => 'column',
					'orderby' => 'date',
					'order' => 'desc',
					'paged' => $paged,
					'posts_per_page' => 4,
				);

				$the_query = new WP_Query($args);
				$news_posts = get_posts($args);
				if ($news_posts) :
					foreach ($news_posts as $post) :
						setup_postdata($post);
						// Get post thumbnail image. If not, replace by dummy image
						$thumbnail = get_post_thumbnail_id();
						$thumbnail_url = $thumbnail ? wp_get_attachment_url($thumbnail, 'medium') : get_theme_file_uri('images/under-img02.jpg');
				?>
						<li>
							<p class="ucolumn-img">
								<img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>">
							</p>
							<div class="ucolumn-text">
								<p class="ucolumn-date"><?php echo get_the_date('Y.m.d'); ?></p>
								<p class="ucolumn-tt"><?php the_title(); ?></p>
								<div class="ucolumn-desc">
									<p>
										<?php echo strip_tags(get_field("txt1")) ?>
									</p>
								</div>
							</div>
							<a href="<?php the_permalink(); ?>" class="ucolumn-lk"></a>
						</li>
				<?php
					endforeach;
				else :
					echo '<p>記事は見つかりませんでした。</p>';
				endif;
				?>
			</ul>

			<div class="pagination-wp ">
				<?php
				wp_pagenavi(array('query' => $the_query));
				wp_reset_postdata();
				wp_reset_query();
				?>
			</div>
		</section>

	</div>
</main>

<?php
get_footer();
?>
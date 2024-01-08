<?php

/* ============================================ */
/* =================== META =================== */
$GLOBALS['title'] = "導入事例(一覧)｜エアコンの省エネ対策｜エコプランのBeONE";
$GLOBALS['keywords'] = "";
$GLOBALS['description'] = "業務用エアコン・空調機・冷凍機などの消費電力を削減するエコプランがご提供する省エネ制御装置「EcoData BeONE」を導入している企業の事例を一覧でご紹介しています。";
$GLOBALS['h1'] = "エアコン・空調機の省エネ対策ができるBeONEの導入事例一覧。";
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
				<li>導入事例(一覧)</li>
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
						業務用エアコン・空調機・冷凍機などの消費電力を削減するエコプランの省エネ制御装置「EcoData
						BeONE」は、高い省エネ効果から大手をはじめとした多くの企業に導入されています。
					</p>
					<p>こちらでは、消費電力・デマンドの削減に貢献する「EcoData
						BeONE」を実際に導入している企業の事例を一覧でご紹介しています。詳しい事例は各事例のリンクをクリックしてください。</p>
				</div>
			</div>
		</section>

		<section>
			<div class="uwrap">
				<h4>制御システムによる温度変化について</h4>
				<p>
					業務用エアコン・空調機・冷凍機などの消費電力を削減する、省エネ制御装置「EcoData BeONE」の制御システムについて紹介します。
				</p>
			</div>
		</section>

		<section>
			<div class="uwrap">
				<h4>BeONE事例詳細</h4>
			</div>

			<ul class="ucase-post">
				<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				global $post;
				// Query post argument
				$args = array(
					'post_type' => 'case',
					'orderby' => 'date',
					'order' => 'desc',
					'paged' => $paged,
					'posts_per_page' => 6,
				);

				$the_query = new WP_Query($args);
				$news_posts = get_posts($args);
				if ($news_posts) :
					foreach ($news_posts as $post) :
						setup_postdata($post);
						// Get post thumbnail image. If not, replace by dummy image
						$thumbnail = get_post_thumbnail_id();
						$thumbnail_url = $thumbnail ? wp_get_attachment_url($thumbnail, 'medium') : get_field('img1');
						$img_url = $thumbnail_url ?: get_theme_file_uri('images/under-img02.jpg');

						// Get post category/taxonomy
						$terms = wp_get_post_terms($post->ID, 'case-category', '');
						$category_name = $terms[0]->name;
						$category_slug = $terms[0]->slug;
				?>
						<li>
							<p class="ucase-tt"><?php the_title(); ?></p>
							<div class="ucase-item">
								<p class="ucase-img">
									<img src="<?php echo $img_url ?>" alt="<?php the_title(); ?>">
								</p>
								<div class="ucase-txt">
									<table class="ucase-tbl">
										<tr>
											<th>導入先</th>
											<td><?php echo nl2br(get_field("td1")); ?></td>
										</tr>
										<tr>
											<th>業種</th>
											<td><?php echo nl2br(get_field("td2")); ?></td>
										</tr>
										<tr>
											<th>利用年数</th>
											<td><?php echo nl2br(get_field("td4")); ?></td>
										</tr>
									</table>
								</div>
							</div>
							<p class="ucase-lk">
								<a href="<?php the_permalink() ?>">詳細はこちら</a>
							</p>
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
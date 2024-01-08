<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();

		/* ============================================ */
		/* =================== META =================== */
		include('includes/page_meta.php');
		/* ================= end META ================= */
		/* ============================================ */

		$post_index = 2;
		if ($post->post_parent){
			$post_parent_makeup = '{
				"@type": "ListItem",
				"position": 2,
				"item": {
					"@id": "' . get_permalink($post->post_parent) .'",
					"name": "' . strip_tags(get_the_title($post->post_parent)) . '"
				}
			},';
			$post_index = 3;
		}

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
				' . $post_parent_makeup . '
				{
					"@type": "ListItem",
					"position": ' . $post_index . ',
					"item": {
						"@id": "' . get_permalink() . '",
						"name": "' . strip_tags(get_the_title()) . '"
					}
				},
			]
		}
		</script>'. get_field('json_page');

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
						<h2 class="umvs-title"><?php echo the_title() ?></h2>
					</div>
				</div>
			</div>
			<!-- #top_info end -->
			<div id="content">
                <!-- topic path = breadcrumb -->
				<div id="topic-path">
					<ul class="topic-list">
						<li><a href="<?php echo home_url(); ?>">HOME</a></li>
						<?php if ($post->post_parent) : ?>
							<li>
								<a href="<?php echo get_permalink($post->post_parent); ?>">
									<?php echo strip_tags(get_the_title($post->post_parent)); ?>
								</a>
							</li>
						<?php endif; ?>
						<li><?php echo strip_tags(get_the_title()); ?></li>
					</ul>
				</div>
                <!-- #topic_path end -->
				<?php the_content(); ?>
			</div>
		</main>

<?php
		get_footer();

	endwhile;
endif;
?>
<?php
$terms = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$taxonomy_name = $terms->name;
$taxonomy_slug = $terms->slug;

/* ============================================ */
/* =================== META =================== */
$GLOBALS['title'] = "";
$GLOBALS['keywords'] = "";
$GLOBALS['description'] = "";
$GLOBALS['h1'] = "";
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
				"@id": "'. home_url() .'",
				"name": "HOME"
			}
		},
		{
			"@type": "ListItem",
			"position": 2,
			"item": {
				"@id": "'. home_url('blog/') .'",
				"name": "Blog"
			}
		},
		{
			"@type": "ListItem",
			"position": 3,
			"item": {
				"@id": "'. home_url('blog-category/'). $taxonomy_slug .'/",
				"name": "'. $taxonomy_name .'"
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
	    	<div id="content">
				<div id="topic-path">
					<ul class="topic-list">
					<li><a href="<?php echo home_url(); ?>">HOME</a></li>
	                    <li><a href="<?php echo home_url('blog/'); ?>">Blog</a></li>
	                    <li><?php echo $taxonomy_name; ?></li>
					</ul>
				</div>
	    		<div class="inner">
	    			<?php if(have_posts()): ?>
	                	<ul class="list-posts">
		                	<?php 
		                	while ( have_posts() ) :
		                        the_post(); 

		                        // Get post thumbnail image. If not, replace by dummy image
		                        $thumbnail = get_post_thumbnail_id();
		                        $thumbnail_url = $thumbnail ? wp_get_attachment_url($thumbnail, 'medium') : get_theme_file_uri('images/dummy.jpg');

		                        // Get post category/taxonomy
		                        $terms = wp_get_post_terms($post->ID, 'blog-taxonomy', '');
								$taxonomy_name = "";
								$taxonomy_slug = "";
								if(count($terms)) :
									$taxonomy_name = $terms[0]->name;
									$taxonomy_slug = $terms[0]->slug;
								endif;
		                        ?>
		                        <li>
		                            <p class="post-thumbnail"><img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>"></p>
	                                <p class="post-date"><?php echo get_the_date('Y.m.d'); ?></p>
	                                <p class="post-title"><?php the_title(); ?></p>
		                            <a class="post-link" href="<?php the_permalink(); ?>"></a>
		                        </li>
	                        <?php endwhile; ?>
	                    </ul>
	                    <?php
	                    // Pagination
	                    $total_pages = $wp_query->max_num_pages;
	                    if ( $total_pages > 1 ) :
	                        echo '<div class="pagination">';
	                        $current_page = max( 1, get_query_var( 'paged' ) );
	                        echo paginate_links( array(
	                            'base' => get_pagenum_link( 1 ) . '%_%',
	                            'format' => 'page/%#%',
	                            'current' => $current_page,
	                            'total' => $total_pages,
	                            'prev_text' => __( '« 前へ' ),
	                            'next_text' => __( '次へ »' ),
	                        ) );
	                        echo '</div>';
	                    endif;
	                endif;
	                ?>
	    		</div>
	    	</div>
	    </main>

<?php
get_footer();
?>
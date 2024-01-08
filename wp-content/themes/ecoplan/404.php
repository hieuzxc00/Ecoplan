<?php

header('Location:' . home_url());


/* ============================================ */
/* =================== META =================== */
$GLOBALS['title'] = "404 Not Found";
$GLOBALS['keywords'] = "404 Not Found";
$GLOBALS['description'] = "404 Not Found";
$GLOBALS['h1'] = "404 Not Found";
/* ================= end META ================= */
/* ============================================ */

// ID of <body> 
$GLOBALS['bodyID'] = "";

// Class of <body>
$GLOBALS['bodyClass'] = "under";
$GLOBALS['json_makeup'] = "";

get_header();
?>
		<main id="main" class="">
			<!-- top info = main visual -->
			<div id="mainvisual" class="under-visual">
				<div class="inner">
					<div class="umvs-wrap">
						<h2 class="umvs-title">404 Not Found</h2>
					</div>
				</div>
			</div>
			<!-- #top_info end -->
	    	<div id="content">
				 <!-- topic path = breadcrumb -->
				 <div id="topic-path">
					<ul class="topic-list">
						<li><a href="<?php echo home_url(); ?>">HOME</a></li>
						<li>404 Not Found</li>
					</ul>
				</div>
                <!-- #topic_path end -->
	    		<div class="inner">
	    			<h3 class="center">404 Not Found</h3>
		    		<p class="center">お探しのページが見つかりませんでした。<br>URLが正しく入力されていない可能性がありますので、再度ご確認ください。</p>
		    		<p class="center"><a href="<?php echo home_url(); ?>">TOPページに戻る</a></p>
	    		</div>
	    	</div>
	    </main>
<?php 
get_footer();
?>
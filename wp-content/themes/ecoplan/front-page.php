<?php

/* ============================================ */
/* =================== META =================== */
include('includes/page_meta.php');
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
		}
	]
}
</script>' . get_field('json_page');

// ID of <body> 
$GLOBALS['bodyID'] = "home";

// Class of <body>
$GLOBALS['bodyClass'] = "";

get_header();
?>

<main id="main">
	<section class="visual">
		<div class="visual__item">
			<div class="inner">
				<div class="visual__content">
					<p class="visual__content-sub" data-aos="fade-left">導入数30,000台以上の省エネ実績</p>
					<h2 class="visual__content-heading" data-aos="fade-right" data-aos-delay="300">
						使用電力量を<br>
						安全に確実に削減
					</h2>
					<p class="visual__content-desc" data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
						デマンドを監視しなくても<br>
						デマンドをコントロールします。
					</p>
					<div class="visual__content-circle" data-aos="fade-up" data-aos-offset="-100" data-aos-delay="500">
						<p class="circle__txt mb0">
							<span>
								23年以上の歴史<br>
								<span>
									大手実績<br>
									多数
								</span>
							</span>
						</p>
						<ul class="circle__list">
							<li class="circle__list-item">トヨタ自動車株式会社</li>
							<li class="circle__list-item">株式会社デンソー</li>
							<li class="circle__list-item">近鉄百貨店流通センター</li>
							<li class="circle__list-item">大阪府教育センター</li>
							<li class="circle__list-item">その他</li>
						</ul>
					</div>
				</div>
				<div class="visual__product" data-aos="fade-up" data-aos-delay="800">
					<p class="visual__product-img">
						<img src="<?php echo get_theme_file_uri('images/visual_01.png') ?>" alt="エアコン・空調省エネシステム" width="499" height="550">
						<span class="visual__product-title">
							エアコン・空調省エネシステム
							<span>【商標登録商品】</span>
						</span>
					</p>

				</div>
			</div>
		</div>
	</section>

	<section class="case">
		<div class="inner" data-aos="fade-up">
			<div class="case__top">
				<div class="case__content">
					<h3 class="case__content-heading">実績・事例<span>Case</span></h3>
					<p class="case__content-desc">
						トヨタ自動車株式会社・株式会社デンソー・近鉄百貨店流通センター<br>
						大阪府教育センターなど多数の実績があります。
					</p>
				</div>
				<p class="case__btn"><a href="<?php echo home_url('case') ?>" class="i-btn"><span>導入事例一覧</span></a></p>
			</div>
			<div class="case__bottom">
				<ul class="case__list">
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
							$img_url = $thumbnail_url ?: get_theme_file_uri('images/case_01.jpg');

							// Get post category/taxonomy
							$terms = wp_get_post_terms($post->ID, 'case-category', '');
							$category_name = $terms[0]->name;
							$category_slug = $terms[0]->slug;
					?>
							<li class="case__list-item">
								<a href="<?php the_permalink() ?>" class="item">
									<span class="item__img">
										<img src="<?php echo $img_url ?>" width="400" height="280" loading="lazy" alt="<?php the_title(); ?>">
									</span>
									<span class="item__content">
										<span class="item__content-line name">
											<span class="title">導入先</span>
											<span class="desc"><?php echo nl2br(get_field("td1")); ?></span>
										</span>
										<span class="item__content-line type">
											<span class="title">業種</span>
											<span class="desc"><?php echo nl2br(get_field("td2")); ?></span>
										</span>
										<span class="item__content-line">
											<span class="item__content-detail">利用年数:</span>
											<span class="desc lh"><?php echo nl2br(get_field("td4")); ?></span>
										</span>
									</span>
								</a>
							</li>
					<?php
						endforeach;
					else :
						echo '<p>記事は見つかりませんでした。</p>';
					endif;
					?>
				</ul>
				<ul class="case__navi">
					<li class="case__navi-arrow next"></li>
					<li class="case__navi-arrow prev"></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="pickup">
		<div class="inner" data-aos="fade-up">
			<div class="pickup__content">
				<h3 class="pickup__content-heading">Pick UP<span>ピックアップ</span></h3>
				<p class="pickup__content-desc">リズム時計工業様のエアコン省エネ制御器EcoDate BeONE 導入後取材動画。</p>
				<p class="pickup__content-desc">2013年8月導入後1年半たった2015年4月にBeONEの導入効果を聞いています。デマンドも40ｋｗ以上削減、電気代単価が上がったのに年間100万円のメリットで大好評でした。</p>
			</div>
			<p class="pickup__video">
				<iframe width="1236" height="695" src="https://www.youtube.com/embed/EgWirHh7KJI" title="ecoplan 151031" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</p>
		</div>
	</section>

	<section class="intro">
		<div class="inner" data-aos="fade-up">
			<div class="intro__top">
				<div class="intro__content">
					<h3 class="intro__content-heading">30,000台以上の実績<br><span>「BeONEシリーズ」</span></h3>
					<p class="intro__content-desc">
						トヨタ自動車株式会社・株式会社デンソー・<br>
						近鉄百貨店流通センター・大阪府教育センターなど<br>
						多数の実績があります。
					</p>
				</div>
				<p class="intro__btn"><a href="<?php echo home_url('actual') ?>" class="i-btn"><span>その他の納入・導入</span></a></p>
			</div>
			<div class="intro__box">
				<p class="intro__box-title">工場実績</p>
				<p class="intro__box-desc">トヨタ自動車 / 東海理化 / デンソー / 豊田自動織機 / 豊田合成 / トヨタ車体 / アイシン精機 / アスモ / 桑名精工 / エクセディ / 日本ガイシ / 小松製作所 / 積水ハウス / 積水化学工業 / アステラス製薬（藤沢薬品工業） / 持田製薬 / 大阪資生堂</p>
				<p class="intro__box-btn center">
					<a href="<?php echo home_url('actual') ?>" class="i-btn light"><span>その他の一部実績はこちら</span></a>
				</p>
			</div>
		</div>
		<div class="inner-fluid">
			<p class="intro__desc center">
				工場や施設の省エネ対策・電力削減・空調管理システムの導入は、大手企業様の実績多数のエコプランにお任せください。業務用エアコンなどの使用電力量<br>
				を削減する省エネ制御装置「BeONE」は、多くのデマコンとは一線を画した安心できる省エネ制御装置です。
			</p>
		</div>
	</section>

	<section class="product">
		<div class="inner" data-aos="fade-up">
			<h3 class="product__heading sec-heading">製品情報<span>Product</span></h3>
			<div class="product__list">
				<div class="product__list-item">
					<p class="product__img mb0">
						<img src="<?php echo get_theme_file_uri('images/product_bg_01.png') ?>" alt="BeONEタイプ" class="product__img-bg" width="868" height="860" loading="lazy">
						<img src="<?php echo get_theme_file_uri('images/product_01.png') ?>" alt="BeONEタイプ" class="product__img-main" width="212" height="380" loading="lazy">
					</p>
					<div class="product__content">
						<p class="product__content-title">BeONEタイプ</p>
						<p class="product__content-desc">エアコンなどの圧縮機の稼働状況を常時監視して圧縮機を傷めないように、最適なタイミングでエアコンを個別制御しデマンドコントロールを行います。</p>
						<p class="product__content-btn">
							<a href="<?php echo home_url('aircon') ?>" class="i-btn"><span>詳細はこちら</span></a>
						</p>
						<ul class="product__content-url">
							<li><a href="<?php echo home_url('aircon#aircon_ttl01') ?>">スポット空調での事例</a></li>
							<li><a href="<?php echo home_url('aircon#aircon_ttl03') ?>">カレンダー機能を使用した事例</a></li>
							<li><a href="<?php echo home_url('aircon#aircon_ttl06') ?>">デマンド警報機を導入されている場合</a></li>
							<li><a href="<?php echo home_url('aircon#aircon_ttl02') ?>">負荷が少ないオフィスでの事例</a></li>
							<li><a href="<?php echo home_url('aircon#aircon_ttl05') ?>">氷蓄熱を導入されている場合</a></li>
							<li><a href="<?php echo home_url('aircon#aircon_ttl07') ?>">デマコンをすでに導入されている場合</a></li>
						</ul>
					</div>
				</div>
				<div class="product__list-item">
					<p class="product__img mb0">
						<img src="<?php echo get_theme_file_uri('images/product_bg_02.png') ?>" alt="REMS - NETタイプ" class="product__img-bg" width="935" height="857" loading="lazy">
						<img src="<?php echo get_theme_file_uri('images/product_02.png') ?>" alt="REMS - NETタイプ" class="product__img-main" width="257" height="379" loading="lazy">
					</p>
					<div class="product__content">
						<p class="product__content-title">REMS - NETタイプ</p>
						<p class="product__content-desc">エアコン集中管理省エネシステムに構築できるので、エアコンのタイムリーな稼働状況と、効率的な消費電力のカットとデマンド制御を行えます。</p>
						<p class="product__content-btn">
							<a href="<?php echo home_url('remnet') ?>" class="i-btn"><span>詳細はこちら</span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="strength" data-aos="fade-up">
		<div class="strength__wrap">
			<ul class="strength__img">
			<li class="strength__img-item active"><img src="<?php echo get_theme_file_uri('images/strength_04.jpg') ?>" width="890" height="950" loading="lazy" alt="省エネの「見える化」"></li>
			<li class="strength__img-item"><img src="<?php echo get_theme_file_uri('images/strength_03.jpg') ?>" width="890" height="950" loading="lazy" alt="圧縮機保護機能付き制御で安心" ></li>
			<li class="strength__img-item"><img src="<?php echo get_theme_file_uri('images/strength_02.jpg') ?>" width="890" height="950" loading="lazy" alt="大手工場の安全基準を満たした施工"></li>
			
			
			<li class="strength__img-item"><img src="<?php echo get_theme_file_uri('images/strength_01.jpg') ?>" width="890" height="950" loading="lazy" alt="圧倒的な実績と信頼"></li>
			
			
				
				
				
				
				
				
			</ul>
		</div>
		<div class="strength__content">
			<h3 class="strength__content-heading sec-heading">私たちの強み<span>Our Strength</span></h3>
			<p class="strength__content-desc">業務用エアコン・空調機・冷凍機などの消費電力を削減し、デマンドコントロールによる省エネ・節電に貢献する機器「BeONE」を製造・販売する、エコプランの強みを紹介します。</p>
			<ul class="strength__list">
				<li class="strength__list-item active">
					<a href="<?php echo home_url('feature#feature_ttl1') ?>">
						<span class="item__num">01</span>
						<span class="item__title">
							圧倒的な実績と信頼
							<span class="item__title-sub">23年の歴史と圧倒的な大手企業の実績数</span>
						</span>
					</a>
				</li>
				<li class="strength__list-item">
					<a href="<?php echo home_url('feature#feature_ttl2') ?>">
						<span class="item__num">02</span>
						<span class="item__title">
							大手工場の安全基準を満たした施工
							<span class="item__title-sub">大手企業も対応可能な高い基準での施工が可能</span>
						</span>
					</a>
				</li>
				<li class="strength__list-item">
					<a href="<?php echo home_url('feature#feature_ttl3') ?>">
						<span class="item__num">03</span>
						<span class="item__title">
							圧縮機保護機能付き制御で安心
							<span class="item__title-sub">安心して自動でエアコンをデマンドコントロール</span>
						</span>
					</a>
				</li>
				<li class="strength__list-item">
					<a href="<?php echo home_url('feature#feature_ttl4') ?>">
						<span class="item__num">04</span>
						<span class="item__title">
							省エネの「見える化」
							<span class="item__title-sub">360日間の電力削減データを記録・保存・ダウンロード可能</span>
						</span>
					</a>
				</li>
			</ul>
			<p class="strength__content-btn">
				<a href="<?php echo home_url('feature') ?>"><span>詳細はこちら</span></a>
			</p>
		</div>
	</section>

	<section class="energy">
		<div class="inner-fluid" data-aos="fade-up">
			<h3 class="energy__heading sec-heading">電力削減・省エネ対策について<span>Energy Saving</span></h3>
			<div class="energy__box">
				<a href="<?php echo home_url('contents#contents_ttl01') ?>" class="energy__box-item">
					<span class="box__img">
						<img src="<?php echo get_theme_file_uri('images/energy_01.jpg') ?>" alt="電気代があがっている実情" width="768" height="480" loading="lazy">
					</span>
					<span class="box__content">
						<span class="box__content-title">電気代があがっている実情</span>
						<span class="box__content-desc">企業や工場にとって、日本の電気料金の高騰は無視できない大きな問題となっています。その背景にあるのは、ロシアのウクライナ侵攻に伴うエネルギー危機です。電気料金高騰の主な原因となっているのは燃料価格の高騰で、特に液化天然ガス（LNG）・石炭・原油の価格が大幅に上昇しました。こうした状況を受けて日本では電気料金が改定されています。</span>
						<span class="box__content-desc">政府の緩和措置によって改定後の料金が申請前より安価になるケースも一部あるようですが、燃料価格の高騰や国内の電力供給不足、再エネ賦課金の単価上昇といった要因によって電気料金の高騰は続いているのが現状です。多くの電力を必要とする法人・企業にとっては、今後も対策が必須だといえるでしょう。</span>
					</span>
				</a>
				<a href="<?php echo home_url('contents#contents_ttl02') ?>" class="energy__box-item">
					<span class="box__img">
						<img src="<?php echo get_theme_file_uri('images/energy_02.jpg') ?>" alt="省エネ対策の取り組み" width="768" height="480" loading="lazy">
					</span>
					<span class="box__content">
						<span class="box__content-title">省エネ対策の取り組み</span>
						<span class="box__content-desc">工場においてもっとも電力を使用しているのは、基本的に生産に関わる設備になります。そして、その次に電力消費が大きいと考えられるのが空調設備です。従業員の快適な職場環境を維持するため、生産体制の安定化のためなど理由はさまざまですが、空調設備は必須であり、省エネ対策が欠かせません。</span>
						<span class="box__content-desc">エコプランでは、工場のデマンド電力を監視し、契約電力を超えそうになると自動的に空調機を制御する省エネ制御装置「EcoData BeONE」をご提供しています。「EcoData BeONE」の強みは、契約電力を超えないようにコントロールできることや、エアコン内部の圧縮機を傷めないことです。単に消費電力を抑えるだけでなく、SDGsやカーボンニュートラル（脱炭素）の流れで本格的に省エネへの取り組みを検討するなら「EcoData BeONE」をご検討ください。</span>
					</span>
				</a>
			</div>
			<div class="inner">
				<p class="energy__desc">工場や施設の業務用エアコン・空調機・冷凍機の省エネ対策ならエコプランにご相談ください。業務用エアコン・空調機・冷凍機などの設備の消費電力を削減し、デマンドコントロールによる省エネ・節電に貢献する機器の製造・販売を行っております。23年以上にわたり開発や改良を重ね、3万台以上のエアコンや冷凍機を制御してきた実績事例がございます。大手工場の安全基準を満たした施工から機器導入後のアフターフォロー体制も整えており、設置機器の不具合や移設、追加機器への対応など、お客様の立場に立ったスピーディーなサポートをいたします。まずは、お気軽にお問い合わせください。</p>
				<div class="energy__group">
					<p class="energy__group-btn">
						<a class="i-btn" href="<?php echo home_url('aircon') ?>"><span>BeONEタイプ</span></a>
					</p>
					<p class="energy__group-btn">
						<a class="i-btn" href="<?php echo home_url('remnet') ?>"><span>REMS - NETタイプ</span></a>
					</p>
					<p class="energy__group-btn">
						<a class="i-btn" href="<?php echo home_url('beone') ?>"><span>導入効果・メリット・<br>製品比較</span></a>
					</p>
					<p class="energy__group-btn">
						<a class="i-btn" href="<?php echo home_url('contents') ?>"><span>電力削減・省エネ対策</span></a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="news">
		<div class="inner" data-aos="fade-up">
			<h3 class="news__heading sec-heading">新着情報・コラム<span>News / Column</span></h3>
			<ul class="news__list">
				<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				global $post;
				// Query post argument
				$args = array(
					'post_type' => 'column',
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
						$thumbnail_url = $thumbnail ? wp_get_attachment_url($thumbnail, 'medium') : get_theme_file_uri('images/under-img02.jpg');
				?>
						<li class="news__list-item">
							<a href="<?php the_permalink() ?>">
								<span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
								<span class="title"><?php the_title(); ?></span>
							</a>
						</li>
				<?php
					endforeach;
				else :
					echo '<p>記事は見つかりませんでした。</p>';
				endif;
				?>
			</ul>
			<p class="news__btn"><a href="<?php echo home_url('column') ?>" class="i-btn"><span>詳細はこちら</span></a></p>
		</div>
	</section>

	<!-- <section class="greeting">
		<div class="inner" data-aos="fade-up">
			<h3 class="greeting__heading sec-heading">工場の省エネ対策・<br>電力削減ならエコプランへ<span>Greeting</span></h3>
			<p class="greeting__desc">
				業務用エアコン・空調機・冷凍機などの消費電力を削減する、省エネ制御装置「BeONE」を製造・販売するエコプラン。開発・製造される「BeONE」は、エアコンなどの圧縮機の稼働状況を監視しピーク時のデマンド（需要電力）を効率的にカット。圧縮機保護システムも搭載されているため、設置機器本体を傷めてしまう心配もありません。<br>
				23年にわたる納入実績から、導入台数も3万台を超えております。オフィスをはじめ、工場や倉庫、店舗、ホテル、病院などと、さまざまな設置場所・設置環境に対応することが可能です。長年にわたる経験の中で蓄積された多くのデータにより、最適なプランニング設計もご提案。施工自体も承っておりワンストップで対応できる体制を整えております。<br>
				23年にわたる長年の制御経験で培われた技術力や対応力と大手工場の安全基準を満たした施工、提案力を駆使し、エアコン・冷凍機のデマンドコントロール技術のパイオニアとしてこれからも省エネやコスト削減、電力削減に、貢献していきたいと考えております。
			</p>
		</div>
	</section> -->
</main>
<!-- end <main>-->

<?php
get_footer();
?>
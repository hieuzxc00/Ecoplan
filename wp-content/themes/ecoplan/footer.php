<footer class="footer">
	<div class="footer__top">
		<div class="inner">
			<p class="footer__top-heading">
				<span>お電話</span>または<span>WEBフォーム</span>にて<br>
				お問い合わせください
			</p>
			<p class="footer__top-tel"><a href="tel:06-6949-8210" class="sweetlink" onclick="gtag('event', 'tel', {'event_category': 'sp'});">06-6949-8210</a></p>
			<ul class="footer__top-group">
				<li class="group__item material">
					<a href="<?php echo home_url('resources') ?>">
						<div class="group__item-img">
							<img src="<?php echo get_theme_file_uri('images/ico_10.png'); ?>" alt="資料ダウンロード" width="29" height="38" loading="lazy">
						</div>
						資料ダウンロード
					</a>
				</li>
				<li class="group__item inquiry">
					<a href="<?php echo home_url('contact') ?>">
						<div class="group__item-img">
							<img src="<?php echo get_theme_file_uri('images/ico_11.png'); ?>" alt="お問い合わせ" width="44" height="40" loading="lazy">
						</div>
						お問い合わせ
					</a>
				</li>
				<li class="group__item agents">
					<a href="<?php echo home_url('partner#partner-ttl01') ?>">
						<div class="group__item-img">
							<img src="<?php echo get_theme_file_uri('images/ico_09.png'); ?>" alt="（募集）代理店様" width="29" height="38" loading="lazy">
						</div>
						（募集）代理店様
					</a>
				</li>
				<li class="group__item partner">
					<a href="<?php echo home_url('partner#partner-ttl02') ?>">
						<div class="group__item-img">
							<img src="<?php echo get_theme_file_uri('images/ico_12.png'); ?>" alt="（募集）協力工事業者様" width="29" height="38" loading="lazy">
						</div>
						（募集）協力工事業者様
					</a>
				</li>
			</ul>
			<p class="footer__top-logo partner">
				<a href="https://www.ecoplan2001.com/"><img src="<?php echo get_theme_file_uri('images/site_logo.png'); ?>" alt="株式会社エコプラン" width="374" height="112" loading="lazy"></a>
			</p>
		</div>
	</div>
	<?php
		if (is_front_page() || is_home()) :
	?>
	<div class="greeting">
		<div class="inner" data-aos="fade-up">
			<h3 class="greeting__heading sec-heading">工場の省エネ対策・<br>電力削減ならエコプランへ<span>Greeting</span></h3>
			<p class="greeting__desc">
				業務用エアコン・空調機・冷凍機などの消費電力を削減する、省エネ制御装置「BeONE」を製造・販売するエコプラン。開発・製造される「BeONE」は、エアコンなどの圧縮機の稼働状況を監視しピーク時のデマンド（需要電力）を効率的にカット。圧縮機保護システムも搭載されているため、設置機器本体を傷めてしまう心配もありません。<br>
				23年にわたる納入実績から、導入台数も3万台を超えております。オフィスをはじめ、工場や倉庫、店舗、ホテル、病院などと、さまざまな設置場所・設置環境に対応することが可能です。長年にわたる経験の中で蓄積された多くのデータにより、最適なプランニング設計もご提案。施工自体も承っておりワンストップで対応できる体制を整えております。<br>
				23年にわたる長年の制御経験で培われた技術力や対応力と大手工場の安全基準を満たした施工、提案力を駆使し、エアコン・冷凍機のデマンドコントロール技術のパイオニアとしてこれからも省エネやコスト削減、電力削減に、貢献していきたいと考えております。
			</p>
		</div>
	</div>
	<?php endif; ?>
	<div class="footer__main">
		<div class="inner">
			<div class="footer__menu">
				<div class="footer__menu-col">
					<ul class="menu">
						<li class="menu__item mb30">
							<a href="https://www.ecoplan2001.com/">Home</a>
						</li>
						<li class="menu__item">
							<a href="<?php echo home_url('column') ?>">新着＆コラム</a>
						</li>
					</ul>
				</div>
				<div class="footer__menu-col">
					<ul class="menu">
						<li class="menu__item">
							<span>会社案内</span>
							<ul class="menu__item-sub">
								<li><a href="<?php echo home_url('feature') ?>">特長・強み、よくあるご質問</a></li>
								<li><a href="<?php echo home_url('company') ?>">会社概要・プライバシーポリシー</a></li>
							</ul>
						</li>
						<li class="menu__item">
							<span>お問い合わせ</span>
							<ul class="menu__item-sub">
								<li><a href="<?php echo home_url('partner') ?>">工事業者・代理店応募フォーム</a></li>
								<li><a href="<?php echo home_url('contact') ?>">お問い合わせフォーム</a></li>
								<li><a href="<?php echo home_url('resources') ?>">資料ダウンロードフォーム</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="footer__menu-col">
					<ul class="menu">
						<li class="menu__item">
							<span>製品情報</span>
							<ul class="menu__item-sub">
								<li><a href="<?php echo home_url('aircon') ?>">BeONE</a></li>
								<li><a href="<?php echo home_url('remnet') ?>">REMS-NET</a></li>
							</ul>
						</li>
						<li class="menu__item">
							<span>技術情報</span>
							<ul class="menu__item-sub">
								<li><a href="<?php echo home_url('control') ?>">制御システム</a></li>
								<li><a href="<?php echo home_url('eco') ?>">削減データの見える化</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="footer__menu-col">
					<ul class="menu">
						<li class="menu__item">
							<span>実績・事例</span>
							<ul class="menu__item-sub">
								<li><a href="<?php echo home_url('actual') ?>">納入・導入実績</a></li>
								<li><a href="<?php echo home_url('case') ?>">導入事例(一覧)</a></li>
							</ul>
						</li>
						<li class="menu__item">
							<span>電力削減・省エネ</span>
							<ul class="menu__item-sub">
								<li><a href="<?php echo home_url('beone') ?>">導入効果・メリット・製品比較</a></li>
								<li><a href="<?php echo home_url('contents') ?>">電力削減・省エネ対策</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<address>Copyright &copy;<br> 工場や施設のエアコン・空調機・<br>省エネ対策は｜エコプランの「BeONE」で電力削減 All Rights Reserved.</address>
		</div>
	</div>

	<ul class="fixed__btn sp">
		<li class="fixed__btn-item dl"><a href="<?php echo home_url('resources') ?>">資料DL</a></li>
		<li class="fixed__btn-item mail"><a href="<?php echo home_url('contact') ?>"><img src="<?php echo get_theme_file_uri('images/mail_icon.png'); ?>" alt="Email" width="52" height="36">お問合せ</a></li>
		<li class="fixed__btn-item recruit-01"><a href="<?php echo home_url('partner#partner-ttl01') ?>">（募集）<br>代理店様</a></li>
		<li class="fixed__btn-item recruit-02"><a href="<?php echo home_url('partner#partner-ttl02') ?>">（募集）<br>工事業者様</a></li>
		<li class="fixed__btn-item tel"><a href="tel:06-6949-8210" class="sweetlink" onclick="gtag('event', 'tel', {'event_category': 'sp'});"><img src="<?php echo get_theme_file_uri('images/ico_01.png'); ?>" alt="Tel" width="78" height="108"></a></li>
	</ul>
	<div class="to-top"><a href="#wrapper"></a></div>
</footer>
<!-- end <footer> -->
</div> <!-- CLOSE tag #wrapper -->
<?php wp_footer(); ?>
</body>

</html>
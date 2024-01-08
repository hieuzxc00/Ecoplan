<!Doctype html>
<html lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MFXK8KZ');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=-1" />
    <meta name="format-detection" content="telephone=no">
    <title><?php echo isset($GLOBALS['title']) ? $GLOBALS['title'] : ""; ?></title>
    <meta name="keywords" content="<?php echo isset($GLOBALS['keywords']) ? $GLOBALS['keywords'] : ""; ?>" />
    <meta name="description" content="<?php echo isset($GLOBALS['description']) ? $GLOBALS['description'] : ""; ?>" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <!-- FAVICON -->
    <link rel="icon" href="<?php echo home_url('favicon.ico') ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri('favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri('favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo get_theme_file_uri('favicon/site.webmanifest') ?>">
    <!-- STYLESHEET -->
    <?php wp_head(); ?>
    <!-- Google Analytics start -->
    <script type="text/javascript">
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-21188519-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Google Analytics end -->
    <?php echo isset($GLOBALS['json_makeup']) ? $GLOBALS['json_makeup'] : ""; ?>
</head>

<body id="<?php echo isset($GLOBALS['bodyID']) ? $GLOBALS['bodyID'] : ""; ?>" class="<?php echo isset($GLOBALS['bodyClass']) ? $GLOBALS['bodyClass'] : ""; ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFXK8KZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper">
        <header class="header">
            <div class="header__logo">
                <h1><?php echo isset($GLOBALS['h1']) ? $GLOBALS['h1'] : ""; ?></h1>
                <p class="header__logo-img">
                    <a href="https://www.ecoplan2001.com/"><img src="<?php echo get_theme_file_uri('images/site_logo.png'); ?>" alt="EcoData BeONE 株式会社エコプラン" width="622" height="115"></a>
                </p>
            </div>
            <div class="header__nav">
                <div class="header__contact">
                    <p class="header__contact-tel mb0">
                        <a href="tel:06-6949-8210" class="sweetlink" onclick="gtag('event', 'tel', {'event_category': 'sp'});">06-6949-8210</a>
                    </p>
                    <ul class="header__contact-btn">
                        <li class="btn-item material"><a href="<?php echo home_url('resources') ?>">資料ダウンロード</a></li>
                        <li class="btn-item inquiry"><a href="<?php echo home_url('contact') ?>">お問い合わせ</a></li>
                        <li class="btn-item agents"><a href="<?php echo home_url('partner#partner-ttl01') ?>">（募集）代理店様</a></li>
                        <li class="btn-item partner"><a href="<?php echo home_url('partner#partner-ttl02') ?>">（募集）協力工事業者様</a></li>
                    </ul>
                </div>
                <ul class="header__menu">
                    <li class="header__menu-item"><a href="<?php echo home_url('aircon') ?>">BeONE</a></li>
                    <li class="header__menu-item"><a href="<?php echo home_url('remnet') ?>">REMS-NET</a></li>
                    <li class="header__menu-item has-sub">
                        <span>技術情報</span>
                        <ul class="sub__menu">
                            <li class="sub__menu-item"><a href="<?php echo home_url('control') ?>">制御システム</a></li>
                            <li class="sub__menu-item"><a href="<?php echo home_url('eco') ?>">削減データの見える化</a></li>
                        </ul>
                    </li>
                    <li class="header__menu-item has-sub">
                        <span>実績・事例</span>
                        <ul class="sub__menu">
                            <li class="sub__menu-item"><a href="<?php echo home_url('actual') ?>">納入・導入実績</a></li>
                            <li class="sub__menu-item"><a href="<?php echo home_url('case') ?>">導入事例(一覧)</a></li>
                        </ul>
                    </li>
                    <li class="header__menu-item has-sub">
                        <span>電力削減・省エネ</span>
                        <ul class="sub__menu">
                            <li class="sub__menu-item"><a href="<?php echo home_url('beone') ?>">導入効果・メリット・<br>製品比較について</a></li>
                            <li class="sub__menu-item"><a href="<?php echo home_url('contents') ?>">電力削減・省エネ対策</a></li>
                        </ul>
                    </li>
                    <li class="header__menu-item has-sub">
                        <span>会社案内</span>
                        <ul class="sub__menu">
                            <li class="sub__menu-item"><a href="<?php echo home_url('feature') ?>">特長・強み、よくあるご質問</a></li>
                            <li class="sub__menu-item"><a href="<?php echo home_url('company') ?>">会社概要・<br>プライバシーポリシー</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header__sp sp">
                <ul class="header__sp-btn">
                    <li class="btn-item dl"><a href="#">資料DL</a></li>
                    <li class="btn-item mail"><a href="#"><img src="<?php echo get_theme_file_uri('images/mail_icon.png'); ?>" alt="Email" width="52" height="36">お問合せ</a></li>
                    <li class="btn-item tel"><a href="tel:06-6949-8210" class="sweetlink" onclick="gtag('event', 'tel', {'event_category': 'sp'});"><img src="<?php echo get_theme_file_uri('images/ico_01.png'); ?>" alt="Tel" width="78" height="108"></a></li>
                </ul>
                <div id="menu-toggle" class="sp">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>
        <div class="nav sp">
            <ul class="nav__menu">
                <li class="nav__menu-item"><a href="https://www.ecoplan2001.com/">TOPページ</a></li>
                <li class="nav__menu-item"><a href="<?php echo home_url('aircon') ?>">BeONE</a></li>
                    <li class="nav__menu-item"><a href="<?php echo home_url('remnet') ?>">REMS-NET</a></li>
                    <li class="nav__menu-item has-sub">
                        <span>技術情報</span>
                        <ul class="sub__menu">
                            <li class="sub__menu-item"><a href="<?php echo home_url('control') ?>">制御システム</a></li>
                            <li class="sub__menu-item"><a href="<?php echo home_url('eco') ?>">削減データの見える化</a></li>
                        </ul>
                    </li>
                    <li class="nav__menu-item has-sub">
                        <span>実績・事例</span>
                        <ul class="sub__menu">
                            <li class="sub__menu-item"><a href="<?php echo home_url('actual') ?>">納入・導入実績</a></li>
                            <li class="sub__menu-item"><a href="<?php echo home_url('case') ?>">導入事例(一覧)</a></li>
                        </ul>
                    </li>
                    <li class="nav__menu-item has-sub">
                        <span>電力削減・省エネ</span>
                        <ul class="sub__menu">
                            <li class="sub__menu-item"><a href="<?php echo home_url('beone') ?>">導入効果・メリット・製品比較について</a></li>
                            <li class="sub__menu-item"><a href="<?php echo home_url('contents') ?>">電力削減・省エネ対策</a></li>
                        </ul>
                    </li>
                    <li class="nav__menu-item has-sub">
                        <span>会社案内</span>
                        <ul class="sub__menu">
                            <li class="sub__menu-item"><a href="<?php echo home_url('feature') ?>">特長・強み、よくあるご質問</a></li>
                            <li class="sub__menu-item"><a href="<?php echo home_url('company') ?>">会社概要・プライバシーポリシー</a></li>
                        </ul>
                    </li>
                    <li class="nav__menu-item"><a href="<?php echo home_url('column') ?>">コラム</a></li>
            </ul>
            <p class="nav__tel"><a href="tel:06-6949-8210" class="sweetlink" onclick="gtag('event', 'tel', {'event_category': 'sp'});"><span>06-6949-8210</span></a></p>
            <ul class="nav__btn">
                <li class="nav__btn-item dl"><a href="<?php echo home_url('resources') ?>">資料DL</a></li>
                <li class="nav__btn-item mail"><a href="<?php echo home_url('contact') ?>"><img src="<?php echo get_theme_file_uri('images/mail_icon.png'); ?>" alt="Email" width="52" height="36">お問合せ</a></li>
                <li class="nav__btn-item recruit-01"><a href="<?php echo home_url('partner#partner-ttl01') ?>">（募集）<br>代理店様</a></li>
                <li class="nav__btn-item recruit-02"><a href="<?php echo home_url('partner#partner-ttl02') ?>">（募集）<br>工事業者様</a></li>
            </ul>
        </div>
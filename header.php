<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- 基本メタ -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no,email=no,address=no" />

    <?php
    $default_title = 'アネラ — 愛媛県今治市のスナック | Anela';
    $default_desc = 'アネラ（Anela）は愛媛県今治市のスナックです。焼酎・ウイスキー・ワイン・シャンパン・日本酒（山丹政宗 ほか）を取り揃えております。ご予約はSNS DMまたはお電話で承ります。';
    $current_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $theme_url = get_template_directory_uri();
    $home_url = esc_url(home_url('/'));
    $ogp_image = $theme_url . '/img/og-image.jpg';
    ?>


    <title><?php echo isset($page_title) ? $page_title : $default_title; ?></title>
    <meta
      name="description"
      content="<?php echo isset($page_description) ? $page_description : $default_desc; ?>" />


    <!-- Canonical -->
    <link rel="canonical" href="<?php echo $current_url; ?>" />

    <!-- Favicon / Manifest -->
    <link rel="icon" href="<?php echo $theme_url; ?>/img/favicon.png" />
    <link rel="apple-touch-icon" href="<?php echo $theme_url; ?>/img/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- テーマカラー -->
    <meta name="theme-color" content="#066C9C" />

    <!-- Open Graph (SNSでの共有用) -->
    <meta property="og:locale" content="ja_JP" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Anela (アネラ)" />
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : $default_title; ?>" />
    <meta
      property="og:description"
      content="<?php echo isset($page_description) ? $page_description : $default_desc; ?>" />
    <meta property="og:url" content="<?php echo $current_url; ?>" />
    <meta property="og:image" content="<?php echo $ogp_image; ?>" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : $default_title; ?>" />
    <meta
      name="twitter:description"
      content="<?php echo isset($page_description) ? $page_description : $default_desc; ?>" />
    <meta
      name="twitter:image"
      content="<?php echo $ogp_image; ?>" />

    <!-- Google / Search Console -->
    <!-- <meta name="google-site-verification" content="your_verification_token" /> -->

    <!-- 構造化データ（JSON-LD）: LocalBusiness を簡易で記載 -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BarOrPub",
        "name": "Anela",
        "alternateName": "アネラ",
        "brand": {
          "@type": "Organization",
          "name": "Anela"
        },
        "url": "<?php echo $home_url; ?>",
        "telephone": "+81-90-5148-5498",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "松本町1丁目7-7",
          "addressLocality": "今治市",
          "addressRegion": "愛媛県",
          "postalCode": "794-0041",
          "addressCountry": "JP"
        },
        "openingHoursSpecification": [
          {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday"
            ],
            "opens": "20:00",
            "closes": "02:00"
          }
        ],
        "priceRange": "¥¥",
        "image": "<?php echo $ogp_image; ?>",
        "description": "Anela (アネラ) is a cozy snack bar offering shochu, whisky, wine, champagne and sake. Reservations via SNS DM or phone."
      }
    </script>

    <?php wp_head(); ?> 

    <!-- Analytics / Tag Manager（必要なら差し替え） -->
    <!-- Google Analytics 4 の gtag 例（コメントアウト） -->
    <!--
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX', { 'anonymize_ip': true });
  </script>
  -->

    <!-- カスタムスクリプト -->
    <!-- <script src="/assets/js/main.js" defer></script> -->
  </head>
  <body>
    <header>
      <div class="container">
        <h1 class="logo">
          <a href="<?php echo esc_url( home_url() ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ">
          </a>
        </h1>

        <div class="menu">
          <nav>
            <ul>
              <li><a href="<?php echo esc_url( home_url() ); ?>">Top</a></li>
              <li><a href="<?php echo esc_url(home_url('/menu/')); ?>">Menu</a></li>
              <li><a href="<?php echo esc_url(home_url('/castwanted/')); ?>">Cast Wanted</a></li>
              <li><a href="#access">Access</a></li>
            </ul>
          </nav>
          <ul class="header-sns">
            <li class="instagram">
              <a href="https://www.instagram.com/anela_0304?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="インスタグラム">
              </a>
            </li>
            <li class="tel">
              <a href="tel:09051485498">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tel.png" alt="電話">
              </a>
            </li>
            <li class="tb-instagram">
              <a href="https://www.instagram.com/anela_0304?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                <img src="<?php echo get_template_directory_uri(); ?>/img/instagram-tb.png" alt="インスタグラム">
              </a>
            </li>
            <li class="tb-tel">
              <a href="tel:09051485498">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tel-tb.png" alt="電話">
              </a>
            </li>
          </ul>
          <a class="nav-logo" href="<?php echo esc_url( home_url() ); ?>"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/nav-logo.png" alt="ロゴ"></a>
        </div>

        <div class="toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="mask"></div>
        
      </div>
    </header>
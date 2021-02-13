<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マハーバーラタ</title>
    <meta name="description" content="マハーバーラタのイベントの詳細情報">
    <!-- font-family -->
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css" media="screen and (max-width :767px)">
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href=" https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!-- favicon -->
    <!-- wow.js -->
    <script src="<?php echo get_template_directory_uri()?>/js/wow.js"></script>
    <!-- script.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- animate.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/animate.css">
    <!-- main.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <?php wp_head()?>
</head>
<body>
    <!--header -->
    <header class="header">
        <ul class="header-nav">
            <li class="header-item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-link">
                    <p class="header-item-sub">トップ</p>
                    <p class="header-item-main">TOP</p>
                </a>
            </li>
            <li class="header-item">
                <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="header-link">
                    <p class="header-item-sub">ニュース</p>
                    <p class="header-item-main">NEWS</p>
                </a>
            </li>
            <li class="header-item">
                <a href="<?php echo esc_url( home_url( '/story' ) ); ?>" class="header-link">
                    <p class="header-item-sub">ストーリー</p>
                    <p class="header-item-main">STORY</p>
                </a>
            </li>
            <li class="header-item">
                <a href="<?php echo esc_url( home_url( '/comments' ) ); ?>" class="header-link">
                    <p class="header-item-sub">コメント</p>
                    <p class="header-item-main">COMMENTS</p>
                </a>
            </li>
            <li class="header-item">
                <a href="<?php echo esc_url( home_url( '/cast' ) ); ?>" class="header-link">
                    <p class="header-item-sub">キャスト</p>
                    <p class="header-item-main">CAST</p>
                </a>
            </li>
            <li class="header-item">
                <a href="<?php echo esc_url( home_url( '/inquiry' ) ); ?>" class="header-link">
                    <p class="header-item-sub">問い合わせ</p>
                    <p class="header-item-main">INQUIRY</p>
                </a>
            </li>
        </ul>
    </header>
    <!-- header -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-content">
        <div class="site-branding">
            <?php if (has_custom_logo()) : ?>
                <div class="site-logo">
                    <?php the_custom_logo(); ?>
                </div>
            <?php else : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        そりまち石材店
                    </a>
                </h1>
            <?php endif; ?>
        </div>
        
        <nav class="main-navigation">
            <ul class="nav-menu">
                <li><a href="#about">会社概要</a></li>
                <li><a href="#services">サービス</a></li>
                <li><a href="#portfolio">施工事例</a></li>
                <li><a href="#contact">お問い合わせ</a></li>
            </ul>
        </nav>
        
        <!-- モバイルメニューボタン -->
        <button class="mobile-menu-toggle" aria-label="メニュー">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<!-- モバイルメニュー -->
<div class="mobile-menu-overlay">
    <nav class="mobile-navigation">
        <ul class="mobile-nav-menu">
            <li><a href="#about">会社概要</a></li>
            <li><a href="#services">サービス</a></li>
            <li><a href="#portfolio">施工事例</a></li>
            <li><a href="#contact">お問い合わせ</a></li>
        </ul>
    </nav>
</div>
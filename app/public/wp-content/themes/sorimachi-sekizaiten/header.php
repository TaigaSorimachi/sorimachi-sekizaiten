<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-content">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
            <?php bloginfo('name'); ?>
        </a>
        
        <nav class="main-navigation">
            <ul>
                <li><a href="#about">私たちについて</a></li>
                <li><a href="#services">サービス</a></li>
                <li><a href="#contact">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>
</header>
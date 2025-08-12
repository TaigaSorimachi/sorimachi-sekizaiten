<?php
/**
 * 関斎店テーマ functions and definitions
 */

// テーマサポートの有効化
function sorimachi_theme_support() {
    // タイトルタグのサポート
    add_theme_support('title-tag');
    
    // カスタムロゴのサポート
    add_theme_support('custom-logo');
    
    // 投稿サムネイルのサポート
    add_theme_support('post-thumbnails');
    
    // HTMLコメントフォームのサポート
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // カスタムメニューの登録
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'sorimachi_theme_support');

// スタイルとスクリプトの読み込み
function sorimachi_scripts() {
    wp_enqueue_style('sorimachi-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'sorimachi_scripts');

// カスタマイザーの設定
function sorimachi_customize_register($wp_customize) {
    // 会社情報セクション
    $wp_customize->add_section('company_info', array(
        'title' => '会社情報',
        'priority' => 30,
    ));
    
    // 住所設定
    $wp_customize->add_setting('company_address', array(
        'default' => '〒000-0000 都道府県市区町村番地',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('company_address', array(
        'label' => '住所',
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // 電話番号設定
    $wp_customize->add_setting('company_phone', array(
        'default' => '000-0000-0000',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('company_phone', array(
        'label' => '電話番号',
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // 営業時間設定
    $wp_customize->add_setting('business_hours', array(
        'default' => '9:00 - 18:00',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('business_hours', array(
        'label' => '営業時間',
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // 定休日設定
    $wp_customize->add_setting('closed_days', array(
        'default' => '日曜日・祝日',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('closed_days', array(
        'label' => '定休日',
        'section' => 'company_info',
        'type' => 'text',
    ));
}
add_action('customize_register', 'sorimachi_customize_register');

// コンタクトフォームの処理
function handle_contact_form() {
    if (isset($_POST['contact_submit'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // メール送信処理（実際の実装では適切なメール送信機能を使用）
        $to = get_option('admin_email');
        $email_subject = 'お問い合わせ: ' . $subject;
        $email_message = "お名前: $name\n";
        $email_message .= "メールアドレス: $email\n";
        $email_message .= "電話番号: $phone\n";
        $email_message .= "件名: $subject\n\n";
        $email_message .= "メッセージ:\n$message";
        
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        wp_mail($to, $email_subject, $email_message, $headers);
        
        // 成功メッセージの表示
        add_action('wp_footer', function() {
            echo '<script>alert("お問い合わせありがとうございました。");</script>';
        });
    }
}
add_action('init', 'handle_contact_form');

// カスタム投稿タイプ: サービス
function create_services_post_type() {
    register_post_type('services',
        array(
            'labels' => array(
                'name' => 'サービス',
                'singular_name' => 'サービス'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-tools',
        )
    );
}
add_action('init', 'create_services_post_type');

// セキュリティ強化
function sorimachi_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
}
add_action('send_headers', 'sorimachi_security_headers');

// 管理バーの非表示（フロントエンド）
add_filter('show_admin_bar', '__return_false');

// WordPress標準のjQueryを無効化し、CDNから読み込み
function sorimachi_jquery_cdn() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, '3.6.0', true);
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'sorimachi_jquery_cdn');
?>
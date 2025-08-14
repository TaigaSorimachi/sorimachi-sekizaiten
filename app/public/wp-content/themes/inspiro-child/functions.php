<?php
/**
 * Inspiro Child Theme functions and definitions
 * 関斎店カスタマイズ
 */

// 子テーマのスタイルシート読み込み
function inspiro_child_enqueue_styles() {
    wp_enqueue_style( 'inspiro-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'inspiro-child-style', get_stylesheet_uri(), array('inspiro-parent-style') );
    
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'inspiro_child_enqueue_styles' );

// 関斎店用のカスタム機能
function sorimachi_setup() {
    // カスタムロゴサポート
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'sorimachi_setup' );

// カスタマイザー設定
function sorimachi_customize_register( $wp_customize ) {
    // 会社情報セクション
    $wp_customize->add_section( 'sorimachi_company_info', array(
        'title'    => '関斎店 - 会社情報',
        'priority' => 30,
    ) );
    
    // 住所
    $wp_customize->add_setting( 'sorimachi_address', array(
        'default'           => '〒000-0000 都道府県市区町村番地',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'sorimachi_address', array(
        'label'   => '住所',
        'section' => 'sorimachi_company_info',
        'type'    => 'text',
    ) );
    
    // 電話番号
    $wp_customize->add_setting( 'sorimachi_phone', array(
        'default'           => '000-0000-0000',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'sorimachi_phone', array(
        'label'   => '電話番号',
        'section' => 'sorimachi_company_info',
        'type'    => 'text',
    ) );
    
    // 営業時間
    $wp_customize->add_setting( 'sorimachi_hours', array(
        'default'           => '9:00 - 18:00',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'sorimachi_hours', array(
        'label'   => '営業時間',
        'section' => 'sorimachi_company_info',
        'type'    => 'text',
    ) );
    
    // 定休日
    $wp_customize->add_setting( 'sorimachi_closed', array(
        'default'           => '日曜日・祝日',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'sorimachi_closed', array(
        'label'   => '定休日',
        'section' => 'sorimachi_company_info',
        'type'    => 'text',
    ) );
    
    // メールアドレス
    $wp_customize->add_setting( 'sorimachi_email', array(
        'default'           => 'info@sorimachi-sekizaiten.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    
    $wp_customize->add_control( 'sorimachi_email', array(
        'label'   => 'メールアドレス',
        'section' => 'sorimachi_company_info',
        'type'    => 'email',
    ) );
}
add_action( 'customize_register', 'sorimachi_customize_register' );

// 会社情報取得関数
function get_sorimachi_info( $key ) {
    return get_theme_mod( 'sorimachi_' . $key );
}

// ショートコード: 会社情報
function sorimachi_company_info_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'type' => 'all',
    ), $atts );
    
    $output = '';
    
    switch ( $atts['type'] ) {
        case 'address':
            $output = get_sorimachi_info( 'address' );
            break;
        case 'phone':
            $output = get_sorimachi_info( 'phone' );
            break;
        case 'hours':
            $output = get_sorimachi_info( 'hours' );
            break;
        case 'closed':
            $output = get_sorimachi_info( 'closed' );
            break;
        case 'email':
            $output = get_sorimachi_info( 'email' );
            break;
        case 'all':
        default:
            $output = '<div class="company-info">';
            $output .= '<h3>店舗情報</h3>';
            $output .= '<p><strong>住所:</strong> ' . get_sorimachi_info( 'address' ) . '</p>';
            $output .= '<p><strong>電話:</strong> ' . get_sorimachi_info( 'phone' ) . '</p>';
            $output .= '<p><strong>営業時間:</strong> ' . get_sorimachi_info( 'hours' ) . '</p>';
            $output .= '<p><strong>定休日:</strong> ' . get_sorimachi_info( 'closed' ) . '</p>';
            $output .= '<p><strong>メール:</strong> ' . get_sorimachi_info( 'email' ) . '</p>';
            $output .= '</div>';
            break;
    }
    
    return $output;
}
add_shortcode( 'sorimachi_info', 'sorimachi_company_info_shortcode' );

// サービスアイコンショートコード
function sorimachi_service_icon_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'icon' => '🏪',
    ), $atts );
    
    return '<div class="service-icon">' . $atts['icon'] . '</div>';
}
add_shortcode( 'service_icon', 'sorimachi_service_icon_shortcode' );

// プレースホルダー画像ショートコード
function sorimachi_placeholder_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'text' => '画像がここに入ります',
        'height' => '300px',
    ), $atts );
    
    return '<div class="placeholder-image" style="height: ' . esc_attr( $atts['height'] ) . ';">' . esc_html( $atts['text'] ) . '</div>';
}
add_shortcode( 'placeholder', 'sorimachi_placeholder_shortcode' );

// カスタムJavaScript
function sorimachi_custom_scripts() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        // スムーズスクロール
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        });
        
        // ヘッダーの背景変更
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.site-header').addClass('scrolled');
            } else {
                $('.site-header').removeClass('scrolled');
            }
        });
        
        // カードのアニメーション
        $('.wp-block-column').each(function(i) {
            $(this).delay(i * 200).animate({
                opacity: 1,
                transform: 'translateY(0)'
            }, 600);
        });
    });
    </script>
    <style>
    .site-header.scrolled {
        background: rgba(255, 255, 255, 0.98) !important;
        box-shadow: 0 2px 20px rgba(0,0,0,0.15) !important;
    }
    
    .wp-block-column {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }
    </style>
    <?php
}
add_action( 'wp_footer', 'sorimachi_custom_scripts' );

// コンタクトフォーム処理
function sorimachi_handle_contact_form() {
    if ( isset( $_POST['sorimachi_contact_submit'] ) && wp_verify_nonce( $_POST['sorimachi_contact_nonce'], 'sorimachi_contact' ) ) {
        $name = sanitize_text_field( $_POST['contact_name'] );
        $email = sanitize_email( $_POST['contact_email'] );
        $phone = sanitize_text_field( $_POST['contact_phone'] );
        $subject = sanitize_text_field( $_POST['contact_subject'] );
        $message = sanitize_textarea_field( $_POST['contact_message'] );
        
        // メール送信
        $to = get_option( 'admin_email' );
        $email_subject = '【関斎店】お問い合わせ: ' . $subject;
        $email_message = "お名前: $name\n";
        $email_message .= "メールアドレス: $email\n";
        $email_message .= "電話番号: $phone\n";
        $email_message .= "件名: $subject\n\n";
        $email_message .= "メッセージ:\n$message\n\n";
        $email_message .= "送信日時: " . date( 'Y-m-d H:i:s' );
        
        $headers = array( 'Content-Type: text/html; charset=UTF-8' );
        
        if ( wp_mail( $to, $email_subject, nl2br( $email_message ), $headers ) ) {
            add_action( 'wp_footer', function() {
                echo '<script>alert("お問い合わせありがとうございました。担当者より折り返しご連絡いたします。");</script>';
            });
        }
    }
}
add_action( 'init', 'sorimachi_handle_contact_form' );

// 管理バーの非表示
add_filter( 'show_admin_bar', '__return_false' );
?>
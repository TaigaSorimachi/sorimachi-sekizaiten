<?php
/**
 * Template Name: 関斎店ホームページ
 * The template for displaying the home page
 */

get_header(); ?>

<main id="main" class="site-main">
    <!-- ヒーローセクション -->
    <section class="custom-header alignfull">
        <div class="header-content">
            <h1>関斎店</h1>
            <p>伝統と革新が織りなす、上質なサービスをお届けします</p>
            <a href="#about" class="cta-button">詳しく見る</a>
        </div>
    </section>

    <!-- About セクション -->
    <section id="about" class="wp-block-group has-light-gray-background-color has-background">
        <div class="container">
            <h2 class="wp-block-heading">私たちについて</h2>
            <div class="wp-block-columns">
                <div class="wp-block-column">
                    <p>関斎店は、長年にわたり地域の皆様に愛され続けてきました。伝統的な技術と現代的なアプローチを融合させ、お客様一人ひとりのニーズに合わせたサービスを提供しています。</p>
                    <p>私たちの使命は、最高品質のサービスを通じて、お客様の生活をより豊かにすることです。経験豊富なスタッフが、心を込めてサポートいたします。</p>
                    <p>お客様の満足が私たちの最大の喜びです。どんな小さなことでも、お気軽にご相談ください。</p>
                </div>
                <div class="wp-block-column">
                    <div class="placeholder-image">
                        店舗の画像がここに入ります
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス セクション -->
    <section id="services" class="wp-block-group">
        <div class="container">
            <h2 class="wp-block-heading">サービス</h2>
            <div class="wp-block-columns">
                <div class="wp-block-column">
                    <div class="service-icon">🏪</div>
                    <h3>店舗サービス</h3>
                    <p>お客様のご要望に合わせた丁寧なサービスを提供いたします。経験豊富なスタッフが対応いたします。</p>
                </div>
                <div class="wp-block-column">
                    <div class="service-icon">📞</div>
                    <h3>電話相談</h3>
                    <p>お電話でのご相談も承っております。お気軽にお問い合わせください。専門スタッフが対応いたします。</p>
                </div>
                <div class="wp-block-column">
                    <div class="service-icon">🚚</div>
                    <h3>配送サービス</h3>
                    <p>ご自宅まで安全に配送いたします。お忙しい方にも安心してご利用いただけます。</p>
                </div>
            </div>
            <div class="wp-block-columns">
                <div class="wp-block-column">
                    <div class="service-icon">⏰</div>
                    <h3>予約制サービス</h3>
                    <p>事前予約により、お待たせすることなくスムーズなサービスを提供いたします。</p>
                </div>
                <div class="wp-block-column">
                    <div class="service-icon">🎯</div>
                    <h3>カスタマイズ</h3>
                    <p>お客様のご要望に応じて、オーダーメイドのサービスも承っております。</p>
                </div>
                <div class="wp-block-column">
                    <div class="service-icon">🤝</div>
                    <h3>アフターサポート</h3>
                    <p>サービス提供後のフォローアップも充実。長期にわたってサポートいたします。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- お問い合わせ セクション -->
    <section id="contact" class="wp-block-group contact-section alignfull">
        <div class="container">
            <h2 class="wp-block-heading" style="color: white;">お問い合わせ</h2>
            <div class="wp-block-columns">
                <div class="wp-block-column">
                    <div class="company-info">
                        <h3>店舗情報</h3>
                        <p><strong>住所:</strong> <?php echo get_sorimachi_info('address'); ?></p>
                        <p><strong>電話:</strong> <?php echo get_sorimachi_info('phone'); ?></p>
                        <p><strong>営業時間:</strong> <?php echo get_sorimachi_info('hours'); ?></p>
                        <p><strong>定休日:</strong> <?php echo get_sorimachi_info('closed'); ?></p>
                        <p><strong>メール:</strong> <?php echo get_sorimachi_info('email'); ?></p>
                    </div>
                    <div class="placeholder-image" style="height: 250px; margin-top: 2rem;">
                        店舗外観の画像がここに入ります
                    </div>
                </div>
                <div class="wp-block-column">
                    <div class="wp-block-group" style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 15px;">
                        <h3>お問い合わせフォーム</h3>
                        <form method="post" action="">
                            <?php wp_nonce_field('sorimachi_contact', 'sorimachi_contact_nonce'); ?>
                            <p>
                                <label for="contact_name">お名前 *</label><br>
                                <input type="text" id="contact_name" name="contact_name" required style="width: 100%; padding: 0.8rem; margin-top: 0.5rem; border: none; border-radius: 5px;">
                            </p>
                            <p>
                                <label for="contact_email">メールアドレス *</label><br>
                                <input type="email" id="contact_email" name="contact_email" required style="width: 100%; padding: 0.8rem; margin-top: 0.5rem; border: none; border-radius: 5px;">
                            </p>
                            <p>
                                <label for="contact_phone">電話番号</label><br>
                                <input type="tel" id="contact_phone" name="contact_phone" style="width: 100%; padding: 0.8rem; margin-top: 0.5rem; border: none; border-radius: 5px;">
                            </p>
                            <p>
                                <label for="contact_subject">件名</label><br>
                                <input type="text" id="contact_subject" name="contact_subject" style="width: 100%; padding: 0.8rem; margin-top: 0.5rem; border: none; border-radius: 5px;">
                            </p>
                            <p>
                                <label for="contact_message">メッセージ *</label><br>
                                <textarea id="contact_message" name="contact_message" rows="5" required style="width: 100%; padding: 0.8rem; margin-top: 0.5rem; border: none; border-radius: 5px; resize: vertical;"></textarea>
                            </p>
                            <p>
                                <button type="submit" name="sorimachi_contact_submit" class="cta-button">送信する</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
<?php
/**
 * The main template file
 * 関斎店 - Sorimachi Sekizaiten Theme
 */

get_header(); ?>

<main class="site-content">
    <!-- ヒーローセクション -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>関斎店</h1>
            <p>伝統と革新が織りなす、上質なサービスをお届けします</p>
            <a href="#about" class="cta-button">詳しく見る</a>
        </div>
    </section>

    <!-- About セクション -->
    <section id="about" class="section about-section">
        <div class="container">
            <h2 class="section-title">私たちについて</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>関斎店は、長年にわたり地域の皆様に愛され続けてきました。伝統的な技術と現代的なアプローチを融合させ、お客様一人ひとりのニーズに合わせたサービスを提供しています。</p>
                    <p>私たちの使命は、最高品質のサービスを通じて、お客様の生活をより豊かにすることです。経験豊富なスタッフが、心を込めてサポートいたします。</p>
                    <p>お客様の満足が私たちの最大の喜びです。どんな小さなことでも、お気軽にご相談ください。</p>
                </div>
                <div class="about-image">
                    <div class="placeholder-image">
                        店舗の画像がここに入ります
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス セクション -->
    <section id="services" class="section">
        <div class="container">
            <h2 class="section-title">サービス</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🏪</div>
                    <h3>店舗サービス</h3>
                    <p>お客様のご要望に合わせた丁寧なサービスを提供いたします。経験豊富なスタッフが対応いたします。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📞</div>
                    <h3>電話相談</h3>
                    <p>お電話でのご相談も承っております。お気軽にお問い合わせください。専門スタッフが対応いたします。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🚚</div>
                    <h3>配送サービス</h3>
                    <p>ご自宅まで安全に配送いたします。お忙しい方にも安心してご利用いただけます。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">⏰</div>
                    <h3>予約制サービス</h3>
                    <p>事前予約により、お待たせすることなくスムーズなサービスを提供いたします。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎯</div>
                    <h3>カスタマイズ</h3>
                    <p>お客様のご要望に応じて、オーダーメイドのサービスも承っております。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🤝</div>
                    <h3>アフターサポート</h3>
                    <p>サービス提供後のフォローアップも充実。長期にわたってサポートいたします。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- コンタクト セクション -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <h2 class="section-title" style="color: white;">お問い合わせ</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>店舗情報</h3>
                    <p><strong>住所:</strong> 〒000-0000 都道府県市区町村番地</p>
                    <p><strong>電話:</strong> 000-0000-0000</p>
                    <p><strong>営業時間:</strong> 9:00 - 18:00</p>
                    <p><strong>定休日:</strong> 日曜日・祝日</p>
                    
                    <div style="margin-top: 2rem;">
                        <div class="placeholder-image" style="height: 200px;">
                            店舗外観の画像がここに入ります
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>お問い合わせフォーム</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">お名前 *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">メールアドレス *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">電話番号</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="subject">件名</label>
                            <input type="text" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="message">メッセージ *</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">送信する</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
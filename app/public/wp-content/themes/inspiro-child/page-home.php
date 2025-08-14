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
            <h1>そりまち石材店</h1>
            <p class="tagline">伝統と革新が織りなす、唯一無二の形。</p>
            <div style="margin-top: 2rem;">
                <a href="#services" class="cta-button">サービスを見る</a>
                <a href="#portfolio" class="cta-button secondary" style="margin-left: 1rem;">施工事例</a>
            </div>
        </div>
    </section>

    <!-- About セクション -->
    <section id="about" class="about-section">
        <div class="container">
            <h2 class="wp-block-heading">私たちについて</h2>
            <div class="about-grid">
                <div class="about-content">
                    <h3>伝統を受け継ぐ職人の技</h3>
                    <p>そりまち石材店は、創業以来、石材加工の伝統的な技術を大切に受け継ぎながら、現代のニーズに応える革新的なデザインを追求してまいりました。</p>
                    <p>お墓、灯籠、記念碑など、一つひとつに込められた想いを形にするため、熟練の職人が丁寧に仕上げます。石という永続的な素材を通じて、大切な記憶を未来へと繋げるお手伝いをいたします。</p>
                    <p>お客様との対話を重視し、ご要望に応じたオーダーメイドの製品をご提案いたします。</p>
                </div>
                <div class="about-image">
                    <div class="placeholder-image">
                        職人の作業風景や工房の画像
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">創業からの年数</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">1000+</span>
                    <span class="stat-label">施工実績</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">5</span>
                    <span class="stat-label">熟練職人数</span>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス セクション -->
    <section id="services" class="wp-block-group" style="background: #f5f5f5;">
        <div class="container">
            <h2 class="wp-block-heading">サービス</h2>
            <div class="wp-block-columns">
                <div class="wp-block-column">
                    <div class="stone-service-card">
                        <div class="service-icon">⛩️</div>
                        <h3>お墓・墓石</h3>
                        <p>伝統的なお墓から現代的なデザインまで、ご家族の想いを込めた墓石を丁寧に製作いたします。石材選びからデザイン、施工まで一貫してサポート。</p>
                    </div>
                </div>
                <div class="wp-block-column">
                    <div class="stone-service-card">
                        <div class="service-icon">🏮</div>
                        <h3>灯籠・石灯籠</h3>
                        <p>庭園や神社仏閣に映える美しい石灯籠を製作。和の趣を演出し、空間に上品な雰囲気をもたらします。サイズやデザインのカスタマイズも可能。</p>
                    </div>
                </div>
                <div class="wp-block-column">
                    <div class="stone-service-card">
                        <div class="service-icon">🏛️</div>
                        <h3>記念碑・モニュメント</h3>
                        <p>企業や団体の記念碑、個人の記念モニュメントなど、永続的な記憶を刻む石造物を製作。オリジナルデザインでの製作も承ります。</p>
                    </div>
                </div>
            </div>
            <div class="wp-block-columns" style="margin-top: 2rem;">
                <div class="wp-block-column">
                    <div class="stone-service-card">
                        <div class="service-icon">🏠</div>
                        <h3>建築石材</h3>
                        <p>住宅や建築物の外装・内装用石材の加工・施工。耐久性と美しさを兼ね備えた石材で、建物に高級感と風格を与えます。</p>
                    </div>
                </div>
                <div class="wp-block-column">
                    <div class="stone-service-card">
                        <div class="service-icon">🔧</div>
                        <h3>修復・メンテナンス</h3>
                        <p>既存の石材製品の修復やメンテナンスも承ります。長年の経験と技術で、大切な石造物を末永く保存いたします。</p>
                    </div>
                </div>
                <div class="wp-block-column">
                    <div class="stone-service-card">
                        <div class="service-icon">💎</div>
                        <h3>オーダーメイド</h3>
                        <p>お客様のご要望に応じた完全オリジナルの石材製品を製作。アイデアスケッチから完成まで、職人が丁寧に対応いたします。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 施工事例 セクション -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <h2 class="wp-block-heading">施工事例</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/../inspiro-child/../../../img/portfolio1.jpg" alt="和風庭園の石灯籠" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="placeholder-image" style="display: none;">
                            和風庭園の石灯籠施工事例
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>和風庭園の石灯籠</h3>
                        <p>伝統的な日本庭園に映える石灯籠を製作・設置。御影石を使用し、庭園の美しさを引き立てる上品な仕上がりとなりました。</p>
                        <div class="portfolio-meta">
                            <span class="portfolio-category">灯籠</span>
                            <span>2024年3月完成</span>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/../inspiro-child/../../../img/portfolio2.jpg" alt="現代的なお墓" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="placeholder-image" style="display: none;">
                            現代的なお墓の施工事例
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>現代的なお墓</h3>
                        <p>シンプルで洗練されたデザインのお墓。黒御影石を使用し、モダンな霊園にも調和する美しい仕上がりです。</p>
                        <div class="portfolio-meta">
                            <span class="portfolio-category">お墓</span>
                            <span>2024年2月完成</span>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/../inspiro-child/../../../img/portfolio3.jpg" alt="企業記念碑" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="placeholder-image" style="display: none;">
                            企業記念碑の施工事例
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>企業記念碑</h3>
                        <p>創立50周年を記念した企業モニュメント。白御影石に金文字で刻印し、企業の歴史と伝統を表現しました。</p>
                        <div class="portfolio-meta">
                            <span class="portfolio-category">記念碑</span>
                            <span>2024年1月完成</span>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/../inspiro-child/../../../img/portfolio4.jpg" alt="住宅外壁石材" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="placeholder-image" style="display: none;">
                            住宅外壁石材の施工事例
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>住宅外壁石材</h3>
                        <p>高級住宅の外壁に天然石を使用。耐久性と美観を兼ね備えた仕上がりで、建物に風格を与えています。</p>
                        <div class="portfolio-meta">
                            <span class="portfolio-category">建築石材</span>
                            <span>2023年12月完成</span>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/../inspiro-child/../../../img/portfolio5.jpg" alt="神社の狛犬" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="placeholder-image" style="display: none;">
                            神社の狛犬修復事例
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>神社の狛犬修復</h3>
                        <p>歴史ある神社の狛犬を修復。伝統的な技法を用いて、元の美しさを取り戻しました。文化財保護の観点からも重要な仕事です。</p>
                        <div class="portfolio-meta">
                            <span class="portfolio-category">修復</span>
                            <span>2023年11月完成</span>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/../inspiro-child/../../../img/portfolio6.jpg" alt="オリジナル表札" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="placeholder-image" style="display: none;">
                            オリジナル石材表札
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>オリジナル表札</h3>
                        <p>お客様のご要望に応じたオリジナルデザインの石材表札。書体やレイアウトにこだわり、住宅の顔となる美しい表札を製作。</p>
                        <div class="portfolio-meta">
                            <span class="portfolio-category">オーダーメイド</span>
                            <span>2023年10月完成</span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 3rem;">
                <a href="/portfolio" class="cta-button">すべての施工事例を見る</a>
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
# 関斎店 WordPress コンテンツ設定ガイド

## 1. テーマの有効化

1. WordPress管理画面にログイン
2. 「外観」→「テーマ」に移動
3. 「Inspiro Child - 関斎店」テーマを有効化

## 2. 固定ページの作成

### ホームページ
**タイトル:** ホーム
**スラッグ:** home
**コンテンツ:**

```html
<!-- ヒーローセクション -->
<div class="wp-block-group custom-header alignfull has-background" style="background-image:linear-gradient(135deg,rgba(44,62,80,0.8) 0%,rgba(52,152,219,0.8) 100%)">
<div class="wp-block-group__inner-container">
<div class="header-content">
<h1 class="wp-block-heading has-text-align-center">関斎店</h1>
<p class="has-text-align-center">伝統と革新が織りなす、上質なサービスをお届けします</p>
<div class="wp-block-buttons is-content-justification-center">
<div class="wp-block-button">
<a class="wp-block-button__link cta-button" href="#about">詳しく見る</a>
</div>
</div>
</div>
</div>
</div>

<!-- About セクション -->
<div id="about" class="wp-block-group has-light-gray-background-color has-background">
<div class="wp-block-group__inner-container">
<h2 class="wp-block-heading has-text-align-center">私たちについて</h2>
<div class="wp-block-columns">
<div class="wp-block-column">
<p>関斎店は、長年にわたり地域の皆様に愛され続けてきました。伝統的な技術と現代的なアプローチを融合させ、お客様一人ひとりのニーズに合わせたサービスを提供しています。</p>
<p>私たちの使命は、最高品質のサービスを通じて、お客様の生活をより豊かにすることです。経験豊富なスタッフが、心を込めてサポートいたします。</p>
<p>お客様の満足が私たちの最大の喜びです。どんな小さなことでも、お気軽にご相談ください。</p>
</div>
<div class="wp-block-column">
[placeholder text="店舗の画像がここに入ります" height="350px"]
</div>
</div>
</div>
</div>

<!-- サービス セクション -->
<div id="services" class="wp-block-group">
<div class="wp-block-group__inner-container">
<h2 class="wp-block-heading has-text-align-center">サービス</h2>
<div class="wp-block-columns">
<div class="wp-block-column">
[service_icon icon="🏪"]
<h3 class="has-text-align-center">店舗サービス</h3>
<p class="has-text-align-center">お客様のご要望に合わせた丁寧なサービスを提供いたします。経験豊富なスタッフが対応いたします。</p>
</div>
<div class="wp-block-column">
[service_icon icon="📞"]
<h3 class="has-text-align-center">電話相談</h3>
<p class="has-text-align-center">お電話でのご相談も承っております。お気軽にお問い合わせください。専門スタッフが対応いたします。</p>
</div>
<div class="wp-block-column">
[service_icon icon="🚚"]
<h3 class="has-text-align-center">配送サービス</h3>
<p class="has-text-align-center">ご自宅まで安全に配送いたします。お忙しい方にも安心してご利用いただけます。</p>
</div>
</div>
<div class="wp-block-columns">
<div class="wp-block-column">
[service_icon icon="⏰"]
<h3 class="has-text-align-center">予約制サービス</h3>
<p class="has-text-align-center">事前予約により、お待たせすることなくスムーズなサービスを提供いたします。</p>
</div>
<div class="wp-block-column">
[service_icon icon="🎯"]
<h3 class="has-text-align-center">カスタマイズ</h3>
<p class="has-text-align-center">お客様のご要望に応じて、オーダーメイドのサービスも承っております。</p>
</div>
<div class="wp-block-column">
[service_icon icon="🤝"]
<h3 class="has-text-align-center">アフターサポート</h3>
<p class="has-text-align-center">サービス提供後のフォローアップも充実。長期にわたってサポートいたします。</p>
</div>
</div>
</div>
</div>

<!-- お問い合わせ セクション -->
<div id="contact" class="wp-block-group contact-section alignfull has-background">
<div class="wp-block-group__inner-container">
<h2 class="wp-block-heading has-text-align-center" style="color:white">お問い合わせ</h2>
<div class="wp-block-columns">
<div class="wp-block-column">
[sorimachi_info]
[placeholder text="店舗外観の画像がここに入ります" height="250px"]
</div>
<div class="wp-block-column">
<div class="wp-block-group" style="background:rgba(255,255,255,0.1);padding:2rem;border-radius:15px">
<h3>お問い合わせフォーム</h3>
<!-- ここにコンタクトフォームプラグインのショートコードを挿入 -->
<p><em>Contact Form 7などのプラグインでフォームを作成してください</em></p>
</div>
</div>
</div>
</div>
</div>
```

### サービス詳細ページ
**タイトル:** サービス
**スラッグ:** services

### 会社概要ページ
**タイトル:** 会社概要
**スラッグ:** about

### お問い合わせページ
**タイトル:** お問い合わせ
**スラッグ:** contact

## 3. 設定手順

1. **「設定」→「表示設定」**
   - ホームページの表示: 固定ページ
   - ホームページ: 作成した「ホーム」ページを選択

2. **「外観」→「カスタマイズ」**
   - 「関斎店 - 会社情報」セクションで店舗情報を入力

3. **「外観」→「メニュー」**
   - メインメニューを作成し、各ページへのリンクを追加

## 4. 推奨プラグイン

- **Contact Form 7**: お問い合わせフォーム作成
- **Yoast SEO**: SEO最適化
- **WP Super Cache**: 高速化
- **Akismet**: スパム対策

## 5. 画像の追加

以下の場所に実際の画像を追加してください：
- About セクション: 店舗内観写真
- Contact セクション: 店舗外観写真
- ヘッダー背景: 店舗やサービスに関連する画像

## 6. カスタマイズのポイント

- カラーテーマは青系グラデーション (#2c3e50 → #3498db) を基調
- 日本語フォント (Noto Sans JP) を使用
- レスポンシブデザイン対応
- スムーズなアニメーション効果
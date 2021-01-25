<?php include('../shared/head.php'); ?>

<?php
$slider_images = [
  "/home/top_image_1.png",
  "/home/top_image_2.png"
];
$lineup_articles = [
  [
    "Image" => "/home/lineup_1.png",
    "Title" => "エアコン室外機カバー（ホワイト ・ ブラウン）",
    "Description" => 'サビ・腐食に強く、キレイな状態が長持ちします。お庭に調和しながら、室外機を人目から隠します。'
  ],
  [
    "Image" => "/home/lineup_2.png",
    "Title" => "こちらには商品名がはいりますこちらには商品名がはいります",
    "Description" => 'この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。'
  ],
  [
    "Image" => "/home/lineup_3.png",
    "Title" => "こちらには商品名がはいりますこちらには商品名がはいります",
    "Description" => 'この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。'
  ],
];
?>

<div class="ns-home">
  <div class="slider-container">
    <?php foreach ($slider_images as $image) : ?>
      <div class="slide" style="background-image: url(<?= $imgPath . $image ?>)">
        <div class="slide-content layout">
          <p class="slide-title">
            優れたコーティング技術をインテリアに。<br>
            機能的で、 より美しく。
          </p>
          <p class="slide-description">
            樹脂コーティングのパイオニアとして、<br>
            金属と樹脂の技術を融合・応用した商品をお客様にお届けいたします
          </p>
        </div>
      </div>
    <?php endforeach ?>
    <div class="section andc-background">
      <div class="layout">
        <h2 class="main-title txt-center">
          商品の素材感、美しさを体感してください
        </h2>
        <p class="txt-center">
          ＆C（アンド ・ シー）　は、 視界を程よく遮るスチールメッシュの　『ブラインドメタル』　と、　屋外でも長期間キレイな外観を保つ　『耐候密着コーティング技術』　を生かしたエクステリア製品ブランドとして、2019年秋に誕生しました。
        </p>
        <p class="txt-center">
          私たちが得意とする樹脂コーティング　（Coating）技術を用いて、お客様 (Customer)　の心に寄り添い、心地よい(Comfortable) 空間を演出する商品をご提案してまいります。
        </p>
      </div>
    </div>
    <div class="section brown-background">
      <div class="layout">
        <h2>
          <p class="english-title txt-center">
            PICK UP ITEM
          </p>
          <p class="main-title txt-center">
            ピックアップアイテム
          </p>
        </h2>
        <div class="pickup-item">
          <div class="flex-child">
            <img class="image" src="<?= $imgPath ?>/home/pickup_item_1.png" alt="pickup_item_1">
            <img class="image" src="<?= $imgPath ?>/home/pickup_item_2.png" alt="pickup_item_2">
          </div>
          <div class="flex-child">
            <h3 class="description-head">
              室外機をオシャレに隠す、お庭のコーディネイトの新提案。
            </h3>
            <p class="green-text txt-center">
              エアコン室外機カバー　（ホワイト ・ ブラウン）
            </p>
            <p class="text">
              一般的な室外機カバーは数年で劣化し、 また買いなおすことになりがちですが、　この室外機カバーは、材質は強度に優れたスチール製。
            </p>
            <p class="text">
              サビ ・ 腐食に強い耐候密着コーティングを採用しているため、長期間安心してご利用いただけます。
            </p>
            <p class="text">
              趣味でガーデニングをされる方や、　オーナメントやイルミネーションで飾り付けをされる方におススメのシンプルで秋の来ないデザインです。
            </p>
            <div class="button-container">
              <button class="button">
                エアコン室外機カバー<br>
                商品詳細はこちら
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section grey-background">
      <div class="layout">
        <h2>
          <p class="english-title txt-center">
            LINEUP
          </p>
          <p class="main-title txt-center">
            ラインナップ
          </p>
        </h2>
        <div class="lineup">
          <?php foreach ($lineup_articles as $article) : ?>
            <div class="article">
              <img class="image" src=<?= $imgPath . $article["Image"] ?>>
              <div class="title">
                <p><?= $article["Title"] ?></p>
              </div>
              <div class="description">
                <?= $article["Description"] ?>
              </div>
              <div class="button-container">
                <button class="button">
                  商品名が入ります<br>
                  商品詳細はこちら
                </button>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    <div class="section grey-background">
      <div class="layout">
        <h2>
          <p class="english-title txt-center">
            TECHNOLOGY
          </p>
          <p class="main-title txt-center">
            技術へのこだわり
          </p>
        </h2>
        <div class="technology">
          <p class="description txt-center">
            ＆C（アンド・シー）を手掛ける岩谷マテリアル株式会社のコーティング部は、
            樹脂コーティングのパイオニアとして、建築資材 ・ 家電製品 ・ 伝説資材などの多くの分野で、
            金属と樹脂を融合 ・ 応用したモノづくりを行っています。<br>
            コーティング後の素材感や美しさを保ち、耐候性や絶縁性など製品に応じた機能を付加して
            新たな魅力を引き出すことをテーマに、商品を開発してまいります。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  let showIndex = 0;
  showSlides();

  function showSlides() {
    const slides = document.getElementsByClassName("slide");
    Array.from(slides).forEach((slide, index) => {
      slide.style.display = index === showIndex ? "block" : "none";
    })
    showIndex = showIndex === slides.length - 1 ? 0 : showIndex += 1;
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
</script>

<?php include('../shared/foot.php'); ?>
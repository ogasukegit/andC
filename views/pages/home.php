<?php include('../shared/head.php'); ?>

<?php
$slider_images = array("/assets/images/home/top_image_1.png", "/assets/images/home/top_image_2.png");
$lineup_articles = array(
  array(
    "Image" => "/assets/images/home/lineup_1.png",
    "Title" => "エアコン室外機カバー（ホワイト ・ ブラウン）",
    "Description" => 'サビ・腐食に強く、キレイな状態が長持ちします。お庭に調和しながら、室外機を人目から隠します。'
  ),
  array(
    "Image" => "/assets/images/home/lineup_2.png",
    "Title" => "こちらには商品名がはいりますこちらには商品名がはいります",
    "Description" => 'この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。'
  ),
  array(
    "Image" => "/assets/images/home/lineup_3.png",
    "Title" => "こちらには商品名がはいりますこちらには商品名がはいります",
    "Description" => 'この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。'
  ),
);
?>

<div class="ns-home">
  <div class="slider-container">
    <div class="slide" style="background-image: url(<?php echo $slider_images[0]; ?>)"></div>
    <div class="slide" style="background-image: url(<?php echo $slider_images[1]; ?>)"></div>
  </div>
  <div class="section andc-background">
    <div class="layout">
      <h2 class="main-title  txt-center">
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
      <h2 class="english-title txt-center">
        PICK UP ITEM
      </h2>
      <h2 class="main-title txt-center">
        ピックアップアイテム
      </h2>
      <div class="pickupitem">
        <div class="pickupitem flex-child">
          <img class="pickupitem image" src="/assets/images/home/pickup_item_1.png" alt="pickup_item_1">
          <img class="pickupitem image" src="/assets/images/home/pickup_item_2.png" alt="pickup_item_2">
        </div>
        <div class="pickupitem flex-child">
          <p class="pickupitem description-head">
            室外機をオシャレに隠す、お庭のコーディネイトの新提案。
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section grey-background">
    <div class="layout">
      <h2 class="english-title txt-center">
        LINEUP
      </h2>
      <h2 class="main-title txt-center">
        ラインナップ
      </h2>
      <div class="lineup">
        <?php
        foreach ($lineup_articles as $article) {
        ?>
          <div class="article">
            <img class="image" src=<?php echo $article["Image"]; ?>>
            <div class="title">
              <p><?php echo $article["Title"]; ?></p>
            </div>
            <p class="description"><?php echo $article["Description"]; ?></p>
            <div class="button-container">
              <button class="button">
                商品名が入ります<br>
                商品詳細はこちら
              </button>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>

<script>
  let index = 0;
  showSlides();

  function showSlides() {
    const slides = document.getElementsByClassName("slide");
    slides[index].style.display = "block";
    slides[index === 1 ? 0 : 1].style.display = "none";
    index = index === 1 ? 0 : 1;
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
</script>

<?php include('../shared/foot.php'); ?>
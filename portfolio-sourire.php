<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<title>sourire｜思わず微笑んでしまう、最高のチョコレートを。</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Lato|PT+Serif:400i&display=swap" rel="stylesheet">
</head>

<body>

<!-- ===============================
 header 
=============================== -->
<header class="header">
<nav class="header-nav">
<h1><a href="">sourire</a></h1>
  <ul class="header-list">
    <li class="header-item"><a class="anchorlink" href="#aa">About</a></li>
    <li class="header-item"><a class="anchorlink" href="#bb">Chocolate</a></li>
    <li class="header-item"><a class="anchorlink" href="#cc">Access</a></li>
    <li class="header-item"><a class="anchorlink" href="#dd">Contact</a></li>
</ul>
</nav>
</header>


<!-- ===============================
 top-img 
=============================== -->
<img src="images/chocolate/shop.jpg" class="top-img">

<div class="site-width">


<!-- ===============================
 about
=============================== -->

  <section class="main about">
    <h1 id="aa"><span>About</span></h1>
    <p>「sourire」はフランス語で「微笑む」という意味です。<br>
      口に入れた瞬間、誰もが思わず微笑んでしまう。<br>
      そんなチョコレートをお届けするという気持ちでこの名前をつけました。<br>
      フランス・パリで修行を重ねたショコラティエの最高のチョコレートを、どうぞご賞味あれ。</p>
      </section>

      <!-- ===============================
        chocolatier
      =============================== -->
      <section class="main intro">
      <img src="images/chocolate/chocolatier.jpg" class="chocolatier">
      <div class="intro-wrap">
      <h2>Chocolatier</h2>
      <h3>Alan Cuvier（アラン・キュヴィエ）</h3>
      <table>
      <tr><td class="intro-year">1970年</td><td class="intro-history">フランス・オーヴェルニュに生まれる</td></tr>
      <tr><td class="intro-year">1988年</td><td class="intro-history">パリで修行を始める</td></tr>
      <tr><td class="intro-year">1993年</td><td class="intro-history">世界的コンクールで準優勝を飾る</td></tr>
      <tr><td class="intro-year">1994年</td><td class="intro-history">世界的コンクールで優勝</td></tr>
      <tr><td class="intro-year">1996年</td><td class="intro-history">日本の五つ星ホテルでオーナーショコラティエを務める</td></tr>
      <tr><td class="intro-year">1999年</td><td class="intro-history">ショコラ品評会で最高評価を獲得</td></tr>
      <tr><td class="intro-year">2000年</td><td class="intro-history">世界大会の審査員を務める</td></tr>
      <tr><td class="intro-year">2002年</td><td class="intro-history">日本で「sourire」をオープン</td></tr>
</table>
    </div>
  </section>



<!-- ===============================
 chocolate
=============================== -->
  <section class="main chocolate">
  <h1 id="bb"><span>Chocolate</span></h1>
  <p>当店で販売しているお菓子をご紹介致します。</p>
  <div class="chocolate-wrap">
  <img src="images/chocolate/chocolate1.jpg" class="chocolate-item">
  <img src="images/chocolate/cake.jpg" class="chocolate-item">
  <img src="images/chocolate/cake2.jpg" class="chocolate-item">
  <img src="images/chocolate/cake3.jpg" class="chocolate-item">
  <img src="images/chocolate/donuts.jpg" class="chocolate-item">
  <img src="images/chocolate/macaron.jpg" class="chocolate-item last">
</div>
</section>


<!-- ===============================
 access
=============================== -->
<section class="main access">
<h1 id="cc"><span>Access</span></h1>
<div class="addr">
  <dl>
  <div class="line"></div>
    <dt>住所</dt><dd>〒123-456<br>東京都港区北青山3丁目123-456</dd>
    <div class="line"></div>
    <dt>営業時間</dt><dd>11:00〜16:00</dd>
    <div class="line"></div>
    <dt>営業日</dt><dd>土日・祝日のみ</dd>
    <div class="line"></div>
    <dt>電話番号</dt><dd>01-2345-6789</dd>
    <div class="line"></div>
    <dt>アクセス</dt><dd>東京メトロ銀座線「表参道駅」<br>
                        東京メトロ半蔵門線「表参道駅」<br>
                        東京メトロ千代田線「表参道駅」<br>
                        各徒歩1分。</dd>
    <div class="line"></div>
  </dl>
</div>
<div class="access-gmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2206.364275053649!2d139.7106333222819!3d35.66420601137388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1570432203345!5m2!1sja!2sjp" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</section>


<!-- ===============================
 contact 
=============================== -->
<section class="main contact">
  <h1 id="dd"><span>Contact</span></h1>
  <form action ="" method ="post" autocomplete="off">
  <div class="form-group">
  <label><span class="err_msg"></span></label>
  <input type="text" placeholder="お名前" name="text" value="" class="js-valid-text">
</div>

<div class="form-group">
  <label><span class="err_msg"></span></label>
  <input type="email" placeholder="E-mail" name="email" value="" class="js-valid-email">
</div>

<div class="form-group">
  <label><span class="err_msg"></span></label>
  <textarea cols="100" rows="10" placeholder="内容" name="comment" class="js-valid-textarea"></textarea>
</div>

  <input type="submit" value="送信" name="submit">
</form>
</section>
</div>


<!-- ===============================
 footer 
=============================== -->
<footer>
  <p>Copyright <a href="">sourire</a>.All Rights Reserved.</p>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="main.js"></script>
</body>

</html>

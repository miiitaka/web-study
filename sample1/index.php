<?php get_header(); ?>
<body>
  <header>
    <h1>
      <a href="index.html">
        <img src="images/logo.png" width="244" height="76" alt="ZOO LOGICAL">
      </a>
    </h1>
  </header>

  <nav class="nav-global">
    <ul>
      <li><a href="about.html">動物園について</a></li>
      <li><a href="guide.html">ガイドのご案内</a></li>
      <li><a href="animals.html">人気の動物たち</a></li>
      <li><a href="contact.html">お問い合わせ</a></li>
    </ul>
  </nav>

  <nav class="nav-breadcrumb" id="graphic">
    <ul>
      <li class="now"><img src="images/graphic1.png" alt="「ペンギンのすみか」が4月25日にオープン！遊びに来てね！" class="image1"></li>
      <li><img src="images/graphic2.png" alt="ZOO LOGICALにパンダが登場！5月10日から6月29日まで" class="image2"></li>
      <li><img src="images/graphic3.png" alt="トラさんが「みんなの来場を待ってるよ！」と言っている。" class="image3"></li>
    </ul>
  </nav>

  <div class="contents">
    <main>
      <section>
        <h2>お知らせ</h2>
        <ul class="contents-news">
          <li><time datetime="2014-07-25">2014年07月25日</time>動物園にライオンがやってきます。</li>
          <li><time datetime="2014-05-10">2014年05月10日</time>緊急企画「パンダ展」を開催します。</li>
          <li><time datetime="2014-04-25">2014年04月25日</time>ゴールデンウィーク展「ペンギンのライフスタイル」を開催します。</li>
        </ul>
      </section>
    </main>

    <div class="sub">
      <aside>
        <div class="bnr_area">
          <dl>
            <dt>
              <a href="guide.html">
                <img src="images/bnr_guide.png" width="240" height="100" alt="ガイドのご案内">
              </a>
            </dt>
            <dd>飼育委員が動物たちをご紹介</dd>
          </dl>
        </div>
        <div class="bnr_area">
          <a href="contanct.html">
            <p><img src="images/bnr_contact.png" width="240" height="60" alt="お問い合わせ"></p>
          </a>
        </div>
      </aside>
    </div>
  </div>
<?php get_footer(); ?>
<!-- header.php 読み込み -->
<?php get_header(); ?>

<!-- 固定ページの内容を表示 第5章のWordPressループを使用-->
<?php
if ( have_posts() ) :
    // アクセスした場所の固定ページを取得するので実質1件のみ取得
    while ( have_posts() ) : the_post();
?>
<!-- ▼ ここからコンテンツエリア ▼-->
<div id="wp-work-section">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-9">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h2 class="panel-title">
                        <!-- タイトルを表示 -->
                        <?php the_title(); ?>
                    </h2>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-12 col-sm-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/voice.jpg">
                      </div>
                      <div class="col-xs-12 col-sm-8">
                        <p class="lead text-primary">
                            <!-- 本文を表示 -->
                            <?php the_content(); ?>                                                    
                        </p>
                        <hr>
                      </div>
                      <div class="col-xs-12 col-sm-12">
                        <p class="text-primary">カテゴリ－自己紹介</p>
                        <p class="text-primary">〇月〇日</p>
                        <p class="text-primary">コメント数</p>
                        <hr>
                      </div>
                    </div>
                  </div>
                </div>
                <nav class="center">
                  <div class='wp-pagenavi' role='navigation'>
                    <span class='pages'>2 / 3</span>
                    <a class="previouspostslink" rel="#">« 前へ</a>
                    <a class="page smaller" title="Page 1" href="#">1</a>
                    <span aria-current='page' class='current'>2</span>
                    <a class="page larger" title="Page 3" href="#">3</a>
                    <a class="nextpostslink" rel="next" href="#">» 次へ</a>
                  </div>
                </nav>
              </div>
              <div class="col-xs-12 col-sm-3">
                <ul class="list-group">
                  <li class="list-group-item active text-center">アーカイブ</li>
                  <li class="list-group-item">
                    <a href="#">〇月〇日　四条店　山田</a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">〇月〇日　五条店　鈴木</a>
                  </li>
                </ul>
                <ul class="list-group">
                  <li class="list-group-item active text-center">カテゴリー </li>
                  <li class="list-group-item">
                    <a href="#">メインカテゴリ </a>
                    <a class="pull-right" href="#sub1" data-toggle="collapse">
                      <span class="caret"></span>
                    </a>
                  </li>
                  <div class="collapse" id="sub1">
                    <a href="#" class="list-group-item">自己紹介</a>
                    <a href="#" class="list-group-item">地元のグルメ</a>
                    <a href="#" class="list-group-item">お知らせ</a>
                  </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!-- ▲ ここまでコンテンツエリア ▲-->
<?php
    endwhile;
endif;
?>
<!-- footer.phpの読み込み -->
<?php echo get_footer(); ?>
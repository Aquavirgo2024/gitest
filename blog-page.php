<!-- ▼ ここからコンテンツエリア ▼-->
<div id="wp-work-section">
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-9">
<?php
    // ページ番号を取得する（取得できない場合は１ページとする）
    $paged = get_query_var('paged', 1);
    $blog_args = array(
        'paged' => $paged,          // 表示を行うページ
        'post_status' => 'publish', // 公開データを取得
        'posts_per_page' => 10,     // １ページの表示件数は10件
        'orderby' => 'post_date',   // 表示の順番は投稿日付を基準
        'order' => 'DESC',          // 表示の順番は降順
    );

    // WP_Queryを用いて取得(サブループ)
    $blog_query = new WP_Query($blog_args);
    // 上記の条件を元に投稿データ分ループ(最大10回ループ)
    while($blog_query->have_posts()):
        // WordPressループで使用していたthe_post()と同じ意味です。
        $blog_query->the_post();
?>
    <div class="panel panel-primary">
        <div class="panel-heading">
        <h2 class="panel-title"><?php the_title(); ?></h2>
        </div>
        <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/voice.jpg">
            </div>
            <div class="col-xs-12 col-sm-6">
            <p class="text-primary">カテゴリ－お知らせ</p>
            <p class="text-primary">〇月〇日</p>
            <p class="text-primary">コメント数</p>
            <hr>
            <a href="<?php echo get_permalink(); ?>"
                class="btn btn-primary btn-block btn-lg">続きを読む</a>
            </div>
        </div>
        </div>
    </div>
<?php endwhile; ?>

    <nav class="center">
      <?php
        //wp_pagenavi()の呼び出し(ただし、引数の指定が必要！)
        wp_pagenavi(array('query'=>$blog_query));

        wp_reset_postdata();
?>
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
</div>
<!-- ▲ ここまでコンテンツエリア ▲-->
  <!-- header.phpの読み込み -->
  <?php echo get_header(); ?>
  
  <?php
    // もしお知らせページならblog-page.phpを読み込む
    if(is_page("blog")): 
      get_template_part('blog','page');

    // お知らせページ以外なら今までと同じ処理
    else: ?>

<!-- 固定ページの内容を表示 第5章のWordPressループを使用-->
  <?php
    if ( have_posts() ) :
      // アクセスした場所の固定ページを取得するので実質1件のみ取得
      while ( have_posts() ) : the_post();
        the_content(); // 固定ページに投稿した本文を表示
      endwhile;
    endif;
  ?>
  <?php endif; ?>
  <!-- footer.phpの読み込み -->
  <?php echo get_footer(); ?>
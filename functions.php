<?php
  // アクションフック用関数 呼び出したいCSSやJSファイル一覧
  function add_css_js_files(){
      // スタイルシートの読み込み
      wp_enqueue_style('animate',
          get_template_directory_uri().'/css/animate.css' );
      wp_enqueue_style('icomoon',
          get_template_directory_uri().'/css/icomoon.css' );
      wp_enqueue_style('bootstrap',
          get_template_directory_uri().'/css/bootstrap.css' );
      wp_enqueue_style('superfish',
          get_template_directory_uri().'/css/superfish.css' );
      wp_enqueue_style('style',
          get_template_directory_uri().'/css/style.css' );

      // WordPressに元々格納されたjQueryを無効化
      wp_deregister_script('jquery');

      // JavaScriptの読み込み
      wp_enqueue_script('Modernizr',
          get_template_directory_uri().'/js/modernizr-2.6.2.min.js');
      wp_enqueue_script('new_jquery',
          get_template_directory_uri().'/js/jquery.min.js');
      wp_enqueue_script('easing',
          get_template_directory_uri().'/js/jquery.easing.1.3.js');
      wp_enqueue_script('bootstrap',
          get_template_directory_uri().'/js/bootstrap.min.js');
      wp_enqueue_script('waypoints',
          get_template_directory_uri().'/js/jquery.waypoints.min.js');
      wp_enqueue_script('hoverIntent',
          get_template_directory_uri().'/js/hoverIntent.js');
      wp_enqueue_script('superfish',
          get_template_directory_uri().'/js/superfish.js');
      wp_enqueue_script('main',
          get_template_directory_uri().'/js/main.js');
  }

  // action hook(アクションフック)
  add_action('wp_enqueue_scripts', 'add_css_js_files');
?>
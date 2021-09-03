<?php
/*
Plugin Name: Web Pixel Show Text
Plugin URI: https://www.webopixel.net/wordpress/631.html
Description: テキストを表示するだけのプラグイン
Author:
Author URI: https://www.webopixel.net/wordpress/631.html
Version: 0.2
*/

function web_pixel_show_text() {
  echo 'おはようございます。';
}
web_pixel_show_text();

// 更新の確認
require 'lib/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/ken3986/web_pixel_show_text',
  __FILE__,
  'web-pixel-show-text'
);
$myUpdateChecker -> getVcsApi() -> enableReleaseAssets();
?>

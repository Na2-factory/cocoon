<?php //アフィリエイトタグフォーム
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<form name="form1" method="post" action="">
  <?php

  if (isset($_GET['id'])) {
    $action = 'edit';
    $id = isset($_GET['id']) ? intval($_GET['id']) : '';

    $recode = get_affiliate_tag($id);
    $title = isset($recode->title) ? $recode->title : '';
    $text = isset($recode->text) ? stripslashes_deep($recode->text) : '';
    $visible = !empty($recode->visible) ? 1 : 0;

  } else {
    $action = 'new';
    $id = '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $text = isset($_POST['text']) ? stripslashes_deep($_POST['text']) : '';
    $visible = 1;
  }

  echo '<h2>'.__( 'タイトル', THEME_NAME ).' '.__( '（※必須）', THEME_NAME ).'</h2>';
  generate_textbox_tag('title', $title, __( 'タイトルの入力（126文字まで）', THEME_NAME ));
  generate_tips_tag(__( '表示ラベルとなるタイトルを入力してください。タイトルは一覧表示用です。', THEME_NAME ));

  echo '<h2>'.__( '内容', THEME_NAME ).' '.__( '（※必須）', THEME_NAME ).'</h2>';
  //_v($_POST);
  generate_textarea_tag('text', $text,  __( 'アフィリエイトタグを入力', THEME_NAME ));

  generate_tips_tag(__( 'アフィリエイトタグを入力してください。', THEME_NAME ));

  //TinyMCE表示
  generate_checkbox_tag('visible' , $visible, __( 'エディターのリストに表示する', THEME_NAME ));
  generate_tips_tag(__( 'エディターのドロップダウンリストに表示しなくて良い場合は、無効にしてください。', THEME_NAME )); ?>
  <input type="hidden" name="action" value="<?php echo $action; ?>">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="<?php echo HIDDEN_FIELD_NAME; ?>" value="<?php echo wp_create_nonce('affiliate-tag');?>"><br>
  <?php submit_button(__( '保存', THEME_NAME )); ?>
</form>

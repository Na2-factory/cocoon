<?php //カテゴリーインデックス
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

//インデックスカテゴリを読み込む
$cat_ids = get_index_list_category_ids();
$count = get_index_category_entry_card_count();
?>
<div id="list-wrap" class="list-wrap">
  <!-- 新着記事 -->
  <?php get_template_part('tmp/list-new-entries'); ?>

  <?php //広告表示
  //インデックスミドルに広告を表示してよいかの判別
  if (is_ad_pos_index_middle_visible() && is_all_adsenses_visible()) {
    get_template_part_with_ad_format(get_ad_pos_index_middle_format(), 'ad-index-middle', is_ad_pos_index_middle_label_visible());
  }

  ////////////////////////////
  //インデックスリストミドルウィジェット
  ////////////////////////////
  if (is_active_sidebar( 'index-middle' )){
    dynamic_sidebar( 'index-middle' );
  }; ?>

  <div id="list-columns" class="list-columns">
    <?php //カテゴリの表示
    for ($i=0; $i < count($cat_ids); $i++):
      $cat_id = $cat_ids[$i]; ?>
      <div class="list-category-<?php echo $cat_id; ?> list-column">
        <h1 class="list-category-<?php echo $cat_id; ?>-title list-title">
          <?php echo get_category_name_by_id($cat_id); ?>
        </h1>
        <div class="<?php echo get_index_list_classes(); ?>">
          <span class="list-title-in">
            <?php echo get_category_index_list_entry_card_tag($cat_id, $count); ?>
          </span>
        </div><!-- .list -->
        <?php if($cat = get_category($cat_id)): ?>
          <div class="list-more-button-wrap">
              <a href="<?php echo trailingslashit(get_bloginfo('url')) ?>archives/category/<?php echo $cat->slug ?>" class="list-more-button"><?php echo __( 'もっと見る', THEME_NAME ); ?></a>
          </div>
        <?php endif; ?>
      </div><!-- .list-category- -->
    <?php endfor; ?>
  </div><!-- .list-columns -->
</div><!-- .list-wrap -->
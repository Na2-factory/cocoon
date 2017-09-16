<?php //シェアボタン ?>
<?php if ( is_sns_share_buttons_visible() ): ?>
<aside class="sns-share<?php echo get_additional_sns_share_button_classes(); ?>">
  <?php if ( get_sns_share_message() ): //シェアボタン用のメッセージを取得?>
    <div class="sns-share-message"><?php echo get_sns_share_message(); ?></div>
  <?php endif; ?>

  <div class="sns-share-buttons">
    <?php if ( is_twitter_share_button_visible() )://Twitterボタンを表示するか ?>
      <a href="<?php echo get_twitter_share_url(); ?>" class="share-button twitter-share-button" target="blank" rel="nofollow"><span class="social-icon icon-twitter"></span><span class="button-caption"><?php _e( 'Twitter', THEME_NAME ) ?></span><span class="share-count twitter-share-count"></span></a>
    <?php endif; ?>

    <?php if ( is_facebook_share_button_visible() )://Facebookボタンを表示するか ?>
      <a href="<?php echo get_facebook_share_url(); ?>" class="share-button facebook-share-button" target="blank" rel="nofollow"><span class="social-icon icon-facebook"></span><span class="button-caption"><?php _e( 'Facebook', THEME_NAME ) ?></span><span class="share-count facebook-share-count"></span></a>
    <?php endif; ?>

    <?php if ( is_hatebu_share_button_visible() )://はてなボタンを表示するか ?>
      <a href="<?php echo get_hatebu_share_url(); ?>" class="share-button hatebu-share-button" data-hatena-bookmark-layout="simple" title="<?php the_title(); ?>" target="blank" rel="nofollow"><span class="social-icon icon-hatena"></span><span class="button-caption"><?php _e( 'はてブ', THEME_NAME ) ?></span><span class="share-count hatebu-share-count"></span></a>
    <?php endif; ?>

    <?php if ( is_gooogle_plus_share_button_visible() )://Google＋ボタンを表示するか ?>
      <a href="//plus.google.com/share?url=<?php echo get_google_plus_share_url(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="share-button googleplus-share-button" target="blank" rel="nofollow"><span class="social-icon icon-googleplus"></span><span class="button-caption"><?php _e( 'Google+', THEME_NAME ) ?></span><span class="share-count googleplus-share-count"></span></a>
    <?php endif; ?>

    <?php if ( is_pocket_share_button_visible() )://pocketボタンを表示するか ?>
      <a href="//getpocket.com/edit?url=<?php the_permalink() ?>" class="share-button pocket-share-button" target="blank" rel="nofollow"><span class="social-icon icon-pocket"></span><span class="button-caption"><?php _e( 'Pocket', THEME_NAME ) ?></span><span class="share-count pocket-share-count"></span></a>
    <?php endif; ?>

    <?php if ( is_line_at_share_button_visible() )://LINEボタンを表示するか ?>
      <a href="<?php //echo get_line_share_url(); ?>" class="share-button line-share-button" target="blank" rel="nofollow"><span class="social-icon icon-line"></span><span class="button-caption"><?php _e( 'LINE', THEME_NAME ) ?></span></a>
    <?php endif; ?>

  </div><!-- /.sns-share-buttons -->

</aside><!-- /.sns-share -->
<?php endif; ?>
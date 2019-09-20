<?php
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat )
  {
    if ( file_exists(TEMPLATEPATH . "/{$cat->slug}-page/instance.php") ) return TEMPLATEPATH . "/{$cat->slug}-page/instance.php";
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(TEMPLATEPATH . "/{$cat->slug}-page/instance.php") ) return TEMPLATEPATH . "/{$cat->slug}-page/instance.php";
    }
  }
  return $t;
}

function getWebsiteViews(){
  $count_key = 'post_views_count';
  $count = get_post_meta(1, $count_key, true);
  if($count==''){
      delete_post_meta(1, $count_key);
      add_post_meta(1, $count_key, '0');
      return "0 View";
  }
  return $count.' Views';
}
function setWebsiteView() {
  $count_key = 'post_views_count';
  $count = get_post_meta(1, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta(1, $count_key);
      add_post_meta(1, $count_key, '0');
  }else{
      $count++;
      update_post_meta(1, $count_key, $count);
  }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
?>
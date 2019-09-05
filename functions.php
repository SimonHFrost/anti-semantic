<?php
    /* url loosely matches categories and is used for filtering */

    function getUrl() {
        if(strpos($_SERVER['REQUEST_URI'], 'past') !== false){
            return 'past';
        } else {
            return 'upcoming';
        }
    }
?>

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
?>
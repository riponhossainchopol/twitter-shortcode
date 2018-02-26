// Example 3 : WP Shortcode to share post or page on Twitter.
function ink_wp_shortcode($atts, $content=null)
{
$post_url = get_permalink($post->ID);
$post_title = get_the_title($post->ID);
$tweet = '<a style="color:blue; font-size: 20px;" href="http://twitter.com/home/?status=Read' . $post_title . 'at' . $post_url . '">
<b>Share on Twitter </b></a>';
return $tweet;
}
add_shortcode('twitter', 'ink_wp_shortcode');
?>

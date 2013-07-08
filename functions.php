<?php 

add_theme_support('menus');

register_sidebar(
	array(
		'before_widget' => '<div class="news">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'		
		)
	);

function contributors() {
	global $wpdb;

	$authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users WHERE display_name <> 'admin' ORDER BY display_name");

	foreach ($authors as $author ) {

		echo "<li>";
		echo "<a href=\"".get_bloginfo('url')."/author/";
		the_author_meta('user_nicename', $author->ID);
		echo "/\">";
		echo get_avatar($author->ID);
		echo "</a>";
		echo '<div>';
		echo "<a href=\"".get_bloginfo('url')."/author/";
		the_author_meta('user_nicename', $author->ID);
		echo "/\">";
		the_author_meta('display_name', $author->ID);
		echo "</a>";
		echo "<br />";
		echo "Website: <a href=\"";
		the_author_meta('user_url', $author->ID);
		echo "/\" target='_blank'>";
		the_author_meta('user_url', $author->ID);
		echo "</a>";
		echo "<br />";
		echo "Twitter: <a href=\"http://twitter.com/";
		the_author_meta('twitter', $author->ID);
		echo "\" target='_blank'>";
		the_author_meta('twitter', $author->ID);
		echo "</a>";
		echo "</div>";
		echo "</li>";
	}
}

?>
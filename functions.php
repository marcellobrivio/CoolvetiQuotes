<?php
// Custom menu registration here...
if ( function_exists('register_nav_menus') )
	register_nav_menus(array(
		'main_nav' => 'Main Menu',
	));

// Custom fallback function to be call when the Main Menu and the Footer Menu are empty...
function defaultNavigation() {
	echo '<ul>';
	if (is_home()) {$homeLI = '<li class="current_page_item">';}
	else {$homeLI = '<li>';}
	echo $homeLI . '<a href="' . get_bloginfo('url') . '" title="' . get_bloginfo('name') . ' Home Page">Home</a></li>';
	wp_list_pages('title_li=&sort_column=menu_order&depth=1');
	echo '</ul>';
}

// Auto generates feed links in wp-head
add_theme_support('automatic-feed-links');

// CoolvetiQuotes Custom Options Array
$themename = "CoolvetiQuotes";
$shortname = "coolvetiquotes";
$options = array (
	array(
		"name" => "Google Analytics",
		"desc" => "Paste here the tracking code to have Google Analytics added in the head section.",
		"id" => $shortname."_google_analytics",
		"std" => "",
		"type" => "textarea"
	)
);

function add_custom_admin() {
    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
				update_option( $value['id'], stripslashes($_REQUEST[ $value['id'] ]) );
			}
			foreach ($options as $value) {
				if( isset( $_REQUEST[ $value['id'] ] ) ) {
					update_option( $value['id'], stripslashes($_REQUEST[ $value['id'] ])  );
				} else {
					delete_option( $value['id'] );
				}
			}
			header("Location: themes.php?page=functions.php&saved=true");
			die;
		}
		else if ( 'reset' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
				delete_option( $value['id'] );
			}
			header("Location: themes.php?page=functions.php&reset=true");
			die;
        }
    }
	add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'custom_admin');
}

function custom_admin() {
    global $themename, $shortname, $options;
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
	?>

<div class="wrap">

	<div id="icon-options-general" class="icon32"><br /></div>
	<h2><?php echo $themename; ?> settings</h2>
	
	<form method="post">

	<?php 
	foreach ($options as $value) {
	?>
			
		<?php if ( $value['type'] == "textarea") { ?>
			<h3><?php echo $value['name']; ?></h3>
			<p><label for="<?php echo $value['id']; ?>"><?php echo $value['desc']; ?></label></p>
			<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" class="large-text code" rows="5"><?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?></textarea>
		<?php } ?>
							
	<?php
	}
	?>

	<p class="submit">
		<input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes"  />
		<input type="hidden" name="action" value="save" />
	</p>
</form>
<form method="post">
	<h3>Reset To Factory Settings</h3>
	<p>You can use the button below to reset all saved options for <?php echo $themename; ?> to their default value.</p>
	<p class="submit">
		<input type="submit" name="reset" id="reset" class="button-primary" value="Reset" />
		<input type="hidden" name="action" value="reset" />
	</p>
</form>
<?php
}
add_action('admin_menu', 'add_custom_admin');
?>
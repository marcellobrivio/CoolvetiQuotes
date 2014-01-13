<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<!--     H A I L   T O   Y O U ,    T H E   S O U R C E C O D E   V I E W E R !     -->

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="robots" content="all" />
<meta name="googlebot" content="index, follow, snippet, archive" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<style type="text/css">
@font-face {
	font-family: 'CoolveticaRegular';
   	src: url('<?php bloginfo('template_directory'); ?>/coolvetica/coolveti-webfont.eot');
}

@font-face {
	font-family: 'CoolveticaRegular';
	src: url(data:font/truetype;charset=utf-8;base64,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AIQAAwABBAkABQAYAKgAAwABBAkABgAUAMAAAwABBAkAyABuANQAKABDACkAIAAxADkAOQA5ACAAUgBhAHkAIABMAGEAcgBhAGIAaQBlACAALQByAGwAYQByAGEAYgBpAGUAQABoAG8AdABtAGEAaQBsAC4AYwBvAG0AQwBvAG8AbAB2AGUAdABpAGMAYQBSAGUAZwB1AGwAYQByAHcAZQBiAGYAbwBuAHQAQwBvAG8AbAB2AGUAdABpAGMAYQAgAFIAZQBnAHUAbABhAHIAVgBlAHIAcwBpAG8AbgAgADEALgAwADAAQwBvAG8AbAB2AGUAdABpAGMAYQBUAGgAaQBzACAAZgBvAG4AdAAgAHcAYQBzACAAZwBlAG4AZQByAGEAdABlAGQAIABiAHkAIAB0AGgAZQAgAEYAbwBuAHQAIABTAHEAdQBpAHIAcgBlAGwAIABHAGUAbgBlAHIAYQB0AG8AcgAuAAIAAAAAAAD+8AAoAAAAAAAAAAAAAAAAAAAAAAAAAAAA6wAAAAEAAgADAAQABQAGAAcACAAJAAoACwAMAA0ADgAPABAAEQASABMAFAAVABYAFwAYABkAGgAbABwAHQAeAB8AIAAhACIAIwAkACUAJgAnACgAKQAqACsALAAtAC4ALwAwADEAMgAzADQANQA2ADcAOAA5ADoAOwA8AD0APgA/AEAAQQBCAEMARABFAEYARwBIAEkASgBLAEwATQBOAE8AUABRAFIAUwBUAFUAVgBXAFgAWQBaAFsAXABdAF4AXwBgAGEBAgCjAIQAhQC9AJYA6ACGAI4AiwCdAKkApAEDAIoA2gCDAJMBBAEFAI0BBgCIAQcA3gEIAJ4AqgD1APQA9gCiAK0AyQDHAK4AYgBjAJAAZADLAGUAyADKAM8AzADNAM4A6QBmANMA0ADRAK8AZwDwAJEA1gDUANUAaADrAO0AiQBqAGkAawBtAGwAbgCgAG8AcQBwAHIAcwB1AHQAdgB3AOoAeAB6AHkAewB9AHwAuAChAH8AfgCAAIEA7ADuALoA1wCwALEAuwDYAN0A2QEJAQoBCwEMAQ0BDgEPARABEQESARMBFAEVARYAsgCzALYAtwDEALQAtQDFAIcAqwEXAL4AvwEYAIwBGQEaARsBHAEdB3VuaTAwQTAHdW5pMDBBRAd1bmkwMEIyB3VuaTAwQjMHdW5pMDBCNQd1bmkyMjE5B3VuaTAwQjkHdW5pMjAwMAd1bmkyMDAxB3VuaTIwMDIHdW5pMjAwMwd1bmkyMDA0B3VuaTIwMDUHdW5pMjAwNgd1bmkyMDA3B3VuaTIwMDgHdW5pMjAwOQd1bmkyMDBBB3VuaTIwMTAHdW5pMjAxMQpmaWd1cmVkYXNoB3VuaTIwMkYHdW5pMjA1Rgd1bmlFMDAwB3VuaUZCMDEHdW5pRkIwMgd1bmlGQjAzB3VuaUZCMDQAuAH/hbABjQBLsAhQWLEBAY5ZsUYGK1ghsBBZS7AUUlghsIBZHbAGK1xYALAFIEWwAytEsAcgRbIFbgIrsAMrRLAGIEWyBzUCK7ADK0SwCCBFsgWGAiuwAytEsAkgRbIIRQIrsAMrRAGwCiBFsAMrRLAMIEWyCm4CK7EDRnYrRLALIEWyDD0CK7EDRnYrRLANIEW6AAp//wACK7EDRnYrRLAOIEWyDYMCK7EDRnYrRLAPIEWyDm0CK7EDRnYrRLAQIEWyDzUCK7EDRnYrRLARIEWyEC0CK7EDRnYrRLASIEWyESYCK7EDRnYrRLATIEWyEhcCK7EDRnYrRLAUIEWyExECK7EDRnYrRLAVIEWyFBACK7EDRnYrRFmwFCs=) format('truetype');
	font-weight: normal;
	font-style: normal;
}
</style>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<?php if(!is_archive() && !is_page()) : ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/backgrounds.css" type="text/css" media="screen" />
<?php endif; ?>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.textshadow.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	/* textShadow used to create shadows on bad browsers without CSS3 support */
	$("#container h1").textShadow();
	$("#container p").textShadow();
	$("#title").textShadow();
	$("#archive h2 a").textShadow();
	$("#archive p").textShadow();	
	$("#controls img").hover(
	   function () {
	      $(this).fadeTo("normal", 0.5);
		},
	    function () {
			$(this).fadeTo("normal", 1);
		}
	);
	$("#pagination img").hover(
	   function () {
	      $(this).fadeTo("normal", 0.5);
		},
	    function () {
			$(this).fadeTo("normal", 1);
		}
	);
});
</script>

<?php wp_head() ?>

<?php echo get_option("coolvetiquotes_google_analytics"); ?>

</head>

 <body <?php body_class($class); ?>> 

	<div id="toolbar">
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?> Home Page"><h2 id="logo"><span><?php bloginfo('name'); ?></span></h2></a>
		
		<ul id="menu">
			<?php wp_nav_menu( array('theme_location' => 'main_nav', 'fallback_cb' => 'defaultNavigation', 'container' => 'menu', 'menu_class' => '')); ?>
		</ul>
	</div>
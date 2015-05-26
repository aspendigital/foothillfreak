<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/1">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3412657-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	
</head>
<body>
	
	<div id="header">
		<h1><a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description');?></h2>
	</div>	
<div id="menu">
		<ul>
			<li <?php if(is_home()){echo 'class="current_page_item"';}?>><a href="<?php bloginfo('siteurl'); ?>" title="Home">Home</a></li>
			<?php wp_list_pages('title_li=&depth=1');?>
            <li><a href="http://www.foothillfreak.com/index-old.php">Old Freak Site</a></li>
            <!--<li><a href="http://www.foothillfreak.com/favorites/best/ski_tours.php">Favorite Ski Tours</a></li>-->
           <li><a href="http://www.foothillfreak.com/favorites/photos/ski_photos.php">Favorite Picts</a></li>
           <li><a href="http://www.foothillfreak.com/favorites/best/ski_stories.php">Best Stories</a></li>
           <li><a href="http://www.foothillfreak.com/glossary/introduction.php">Ski Glossary</a></li>
           <li><a href="http://www.foothillfreak.com/about/praise.php">Praise for the foothillfreak</a></li>
		</ul>
	</div>
	
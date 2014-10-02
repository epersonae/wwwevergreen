<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div class="row box" id="sitewide-alert"><!--This is a placeholder. Keep it empty.--></div>
	<header class="row" role="banner">
		<div class="header-dropdowns">
<div><input id="internal-users-flag" name="header-toggle" type="checkbox"/> 
<ul class="element-list header-dropdown internal-users">
<li><a href="https://my.evergreen.edu"><img alt="User" height="10" src="<?php $theme_path ?>/images/user-32.png" width="10"/> my.evergreen.edu</a></li>
<li><a href="http://evergreen.edu/webmail">Webmail</a></li>
</ul>
</div>
<div class="top-search"><input id="search-flag" name="header-toggle" type="checkbox"/> 
<div class="header-dropdown">
<form action="/search/home" class="search" method="get" role="search"><label for="q">Search</label> <input id="q" name="q" placeholder="Search" type="search"/><!-- --><button class="search-button"><img alt="Search" src="<?php $theme_path ?>/images/search-32.png"/></button> 
<ul class="element-list search-tools">
<li class="internal-users-alt"><a href="https://my.evergreen.edu"><img alt="User" height="10" src="<?php $theme_path ?>/images/user-32.png" width="10"/> my.evergreen.edu</a></li>
<li class="internal-users-alt"><a href="http://evergreen.edu/webmail">Webmail</a></li>
<li><a href="http://evergreen.edu/directories.htm">Directories</a></li>
</ul>
</form>
</div>
</div>
</div>
<div class="page-header">
<div class="logo"><a href="http://evergreen.edu"><img alt="The Evergreen State College&#8212;Olympia, Washington" src="<?php $theme_path ?>/images/logo.png" srcset="<?php $theme_path ?>/images/evergreen-long-tree-oly.svg 1x, <?php $theme_path ?>/images/evergreen-long-tree-oly.svg 2x"/></a></div>
<div class="off-canvas"><label class="search-toggle" for="search-flag"><img alt="Search" src="<?php $theme_path ?>/images/search-w32.png"/></label> <label class="student-toggle" for="internal-users-flag"><img alt="Profile" src="<?php $theme_path ?>/images/user-w32.png"/></label></div>
</div>


		<nav class="top-nav" role="navigation">
		
		
		<!--
		//this is the original navigation markup, that's mostly static, with just a smidge of XSLT.
		
		<ul class="top-nav-list"><li class=""><a class="top-nav-link" href="http://evergreen.edu/home">Home</a></li><li><a class="top-nav-link" href="http://evergreen.edu/academics/home">Academics</a></li><li><a class="top-nav-link" href="http://evergreen.edu/campuslife/home">Campus Life</a></li><li><a class="top-nav-link" href="http://evergreen.edu/costs/home">Costs &amp; Aid</a></li><li><a class="top-nav-link" href="http://evergreen.edu/admissions/home">Admission
                        <span class="gt32">s</span></a></li></ul>
                        
                        
                        <ul class="secondary-nav-list"><li><a class="secondary-nav-link" href="http://evergreen.edu/currentstudent/home"><span class="gt32">Current</span> Students
                    </a></li><li><a class="secondary-nav-link" href="http://evergreen.edu/facultystaff/home">Faculty &amp; Staff</a></li><li><a class="secondary-nav-link" href="http://evergreen.edu/alumni/home">Alumni</a></li><li><a class="secondary-nav-link" href="http://evergreen.edu/community/home">Visitors</a></li></ul>
                        
                        -->
                        
                        
<?php 

//navigation build using the Drupal menu system.
//what I haven't worked out quite yet is how to do any styling any deeper than the ul layer. it may actually require a special module, or hand-rendering the arrays?!

//global navigation, always appears.
print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('top-nav-list')))); 

//audience navigation, only appears on the home page.
if($is_front == TRUE) { 
	print theme('links', array('links' => menu_navigation_links('menu-audience-navigation'), 'attributes' => array('class'=> array('secondary-nav-list')) ));
};	
?>
                    
                    
       </nav>
	</header><!-- /.row -->


<section class="site-content">

<header class="row wrapper"><div class="site-name unit-5-7">
<?php 
//eventually, the site title will be set up programmatically.
//if($is_front != TRUE) { 
	print render($page['section_title']);
?> 
<!--<h1><a href="/academics">Sample Site Title</a></h1>-->
<? //}; ?>
</div></header>

<main id="main-row" class="main-row row wrapper" role="main">

<nav id="tertiary-nav" class="box">
<!-- 
This will need quite a bit of work to mesh Drupal with the current setup.
Because wow. That markup is entirely different from anything I'm going to wrangle out of Drupal natively.
-->
<?php print render($page['section_nav']); ?>
</nav>


<!-- so here I have some interesting choices to make about templates.... -->

      <div id="content-wrapper" class="content-wrapper unit-4-7"><article class="main-content">
      
      <?php print $messages; ?>
      
      
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </article></div> <!-- /.main-content, /#content-wrapper -->
      
      <div id="sidebar-wrapper" class="sidebar-wrapper unit-2-7">
				<section class="sidebar">
					<?php print render($page['secondary_content']); ?>
                    <!--<h2>Secondary Content</h2>
<p>Static placeholder. No way yet to switch between full-width content and sidebar content, nor to even include any content in this area.</p> -->                   
                </section><!-- /.sidebar -->
			</div>

      <?php /*if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif;*/ ?>


  

  
  
  
<!-- end Drupal default HTML -->

</main>
<div class="main-background"><?php print render($page['background_image']); ?><!--<img src="images/hero.jpg" class="main-background-img" alt="">--></div>

</section>

	<!-- Page Footer -->
    	<footer class="row page-footer" role="contentinfo">
<div class="wrapper">
<div class="grid">
<div class="do-not-print unit-3-7">
<p class="footer-map"><a href="http://evergreen.edu/tour/home"><img alt="Map of Washington" src="<?php $theme_path ?>/images/map-land-cover.jpg"/></a><br/>
 <small>&#169; <abbr title="Washington">WA</abbr> <abbr title="Department">Dept.</abbr> of&#160;Ecology</small></p>
<ul class="element-list link-list">
<li><a href="http://evergreen.edu/employment">Jobs at Evergreen</a></li>
<li><a href="http://evergreen.edu/give">Give to Evergreen</a></li>
<li>
<p>Stay connected:</p>
<ul class="element-list lineup">
<li><a href="http://facebook.com/TheEvergreenStateCollege" title="Facebook"><img alt="Facebook" class="lineup-icon" src="<?php $theme_path ?>/images/icons/external/facebook32x32.png"/></a></li>
<li><a href="http://twitter.com/EvergreenStCol" title="Twitter"><img alt="Twitter" class="lineup-icon" src="<?php $theme_path ?>/images/icons/external/twitter32x32.png"/></a></li>
<li><a href="http://youtube.com/user/evergreen" title="YouTube"><img alt="YouTube" class="lineup-icon" src="<?php $theme_path ?>/images/icons/external/youtube32x32.png"/></a></li>
<li><a href="http://instagram.com/TheEvergreenStateCollege" title="Instagram"><img alt="Instagram" class="lineup-icon" src="<?php $theme_path ?>/images/icons/external/instagram32x32.png"/></a></li>
<li><a href="http://www.linkedin.com/edu/school?id=19655" title="LinkedIn"><img alt="LinkedIn" class="lineup-icon" src="<?php $theme_path ?>/images/icons/external/linkedin32x32.png"/></a></li>
</ul>
</li>
</ul>
</div>
<!-- /.unit-3-7 -->
<div class="unit-2-7">
<div class="base vcard">
<div class="fn org">The&#160;Evergreen State&#160;College</div>
<div class="adr">
<div class="street-address">2700 Evergreen Parkway&#160;NW</div>
<div class="location"><span class="locality">Olympia</span>, <span class="region">Washington</span> <span class="postal-code">98505</span></div>
</div>
<!-- /.adr -->
<div class="tel">360-867-6000</div>
<div><a href="http://evergreen.edu/directories">Phone &amp; Email Directories</a></div>
</div>
<!-- /.vcard --></div>
<!-- /.unit-2-7 -->
<div class="unit-2-7">
<ul class="element-list link-list">
<li>
<div class="copyright">&#169; <?php echo date("Y") ?> The&#160;Evergreen State&#160;College</div>
</li>
<!--<li class="do-not-print"><a href="#">Privacy Policy</a></li>-->
<li class="do-not-print"><a href="http://www.evergreen.edu/news/weatherdelays">Emergency Information</a> <small>(Includes alerts about delays and closures.)</small></li>
<li class="do-not-print"><a href="http://www.evergreen.edu/about/privacy.htm">Privacy Policy</a></li>
</ul>
</div>
<!--/.unit-2-7--></div>
<!--/.grid--></div>
<!--/.wrapper--></footer>
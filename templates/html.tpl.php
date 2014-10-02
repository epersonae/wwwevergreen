<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <!-- stuff from existing page -->
  <meta charset="utf-8"/>
	
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/><!-- Do not allow (In)Compatibility Mode -->
<meta content="width=device-width, maximum-scale=1.0, minimum-scale=1.0" name="viewport"/>
<meta content="Evergreen" name="apple-mobile-web-app-title"/>
<link href="http://evergreen.edu/apple-touch-icon-precomposed.png" rel="apple-touch-icon" sizes="57x57"/><!-- non-retina iPhone pre iOS 7 -->
<link href="http://evergreen.edu/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72"/><!-- non-retina iPad pre iOS 7 -->
<link href="http://evergreen.edu/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76"/><!-- non-retina iPad iOS 7 -->
<link href="http://evergreen.edu/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114"/><!-- retina iPhone pre iOS 7 -->
<link href="http://evergreen.edu/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120"/><!-- retina iPhone iOS 7 -->
<link href="http://evergreen.edu/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144"/><!-- retina iPad pre iOS 7 -->
<link href="http://evergreen.edu/apple-touch-icon-152-precomposed.png" rel="apple-touch-icon" sizes="152x152"/><!-- retina iPad iOS 7 -->
<link href="http://evergreen.edu/favicon.png" rel="icon" type="image/png"/><!-- favicon for everybody else -->
<link href="http://evergreen.edu/favicon.ico" rel="shortcut icon" type="image/x-icon"/><!-- IE and hi-dpi favicon -->
<!--<link href="http://evergreen.edu/_inc/styles.css" media="all" rel="stylesheet"/>-->
<link href="http://evergreen.edu/_inc/print.css" media="print" rel="stylesheet"/>
  
  
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>

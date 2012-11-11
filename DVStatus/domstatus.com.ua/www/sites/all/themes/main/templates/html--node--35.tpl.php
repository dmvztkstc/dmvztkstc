<?php 
/**
 * @file
 * Alpha's theme implementation to display the basic html structure of a single
 * Drupal page.
 */
?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head profile="<?php print $grddl_profile; ?>">
  <?php //print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php //print $styles; ?>
  <link href="/css/style.css" rel="stylesheet" type="text/css">
  <?php //print $scripts; ?>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-35473708-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
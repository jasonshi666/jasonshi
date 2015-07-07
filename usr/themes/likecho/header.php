<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(" &raquo; ",""," - "); ?><?php $this->options->title(); ?></title>
<link rel="shorcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/x-ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<script src="http://lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if IE 6]>
<link href="./css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="container">
	<header>
	<a href="<?php $this->options->siteurl(); ?>"><img src="<?php $this->options->themeUrl('images/logo.png'); ?>" /><h1>轻敲键盘，静候回音</h1></a>

		<p><a href="http://typecho.org/" title="轻敲键盘，静候回音">轻敲键盘，静候回音</a></p>
		<nav class="main">
			<ul>
				<li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                 <li<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                <?php endwhile; ?>
				<li><a href="<?php $this->options->siteUrl(); ?>feed/" class="menu-rss" target="_blank" title="订阅本站"><span class="rss1">)</span><span class="rss2">)</span><span class="rss3">)</span></a></li>
			</ul>
		</nav>
	</header>
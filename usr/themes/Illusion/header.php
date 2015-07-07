<!DOCTYPE html>
<html>
<head>
	<title><?php $this->archiveTitle(" &raquo; ",""," - "); ?><?php $this->options->title(); ?> - <?php $this->options->description() ?></title>
	<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
	<meta name="renderer" content="webkit"><?php $this->header(); ?>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="/favicon.gif" type="image/gif" />
	<?php if(!$this->options->cstyle):?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/duoshuo.css'); ?>">
	<?php else:?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/cstyle.css'); ?>" />
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/cduoshuo.css'); ?>">
	<?php endif ?>
	<script type="text/javascript" src="http://libcdn.cdn.duapp.com/js/jquery-1.9.0.min.js" /></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/global.js'); ?>" /></script>
</head>
<body>
<header id="header">
	<div id="header_box">
		<h1><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>"><?php $this->options->title() ?></a></h1>
		<h2><?php $this->options->description() ?></h2>
	</div>
</header>
<div id="main">
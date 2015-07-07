<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body>
  <div class="main">
    <div class="main-width">	
          <div class="header">				
			<div class="logo">
				<div class="bgr01"><div class="bgr02">
				  <div class="indent">
					  <h1 onclick="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></h1>
				  </div>
				</div></div>
			</div>

			<div class="main-menu"><div class="bgr01"><div class="bgr02">

				<div class="search">
					<div class="indent">
						<form method="post" id="searchform" action="">
	<input type="text" class="text" value="" name="s" id="s" /><input class="but" type="image" src="<?php $this->options->themeUrl('images/search.gif'); ?>" value="submit" />
</form>
					</div>
				</div>

				<div class="menu">
                  <ul>
                    <li<?php if($this->is('index')): ?> class="page_item page-item-2 current_page_parent"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>
                    <li<?php if($this->is('page', $pages->slug)): ?> class="page_item page-item-2"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>
                    <li class="page_item page-item-2"><a href="<?php $this->options->feedUrl(); ?>">RSS订阅</a></li>
                  </ul>
                </div>

			</div></div></div>

		  </div>
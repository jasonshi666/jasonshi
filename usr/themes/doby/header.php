<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?> | <?php $this->options->description(); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><?php $this->header("generator=&template=&wlw=&xmlrpc=&commentReply=&rss1=&atom="); ?>
<link rel="icon" href="favicon.png">
<!--[if lt IE 9]>
  <script type="text/javascript" src="<?php $this->options->themeUrl('js/html5.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php $this->options->themeUrl('js/css3-mediaqueries.js'); ?>"></script>
<![endif]-->
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
</head>
<body>
    <header id="header">
    <div class="nav-warp">
      <nav id="nav" class="w">
          <a class="main-nav-link" href="/"><?php $this->options->title(); ?></a>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?><?php while($pages->next()): ?>
          <a class="main-nav-link" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
<?php endwhile; ?>
        <a id="nav-search" class="icon-search fr" onclick="show_search()" title="Search"></a>
        <div id="nav-search-input" class="hide">
          <form action="./" id="search" method="post" class="search-form">
            <input type="text" class="input-text" name="s" placeholder="Search">
			<button type="submit" class="input-submit"><?php _e('搜索'); ?></button>
          </form>
        </div>
      </nav>
    </div>
    <div id="logo">
      <div class="hg">
        <h1 id="site-title">
          <a href="/"><?php $this->options->title(); ?></a>
        </h1>
          <h2 id="site-description"><?php $this->options->description() ?></h2>
      </div>
    </div>
  </header>
  <section id="main">

<!--[if lte IE 8]><script>(function(){var e="abbr,article,aside,audio,canvas,datalist,details,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=e.length;while(i--){document.createElement(e[i]);}}());</script><![endif]-->
<!DOCTYPE html>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<link href="<?php $this->options->themeUrl('img/favicon.ico'); ?>" rel="shortcut icon"  type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
    ), '', ' | '); ?><?php $this->options->title(); ?><?php if($this->is('index')){echo " | "; $this->options->description(); }?></title>

<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('skin/' . $this->options->css . '.css'); ?>">
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&rss1=&rss2=&atom=&commentReply='); ?>
</head>
<body class="<?php if(is_mobile()) {echo 'mobile-body';}?>">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="spinner" role="spinner"><div class="spinner-icon"></div></div>
<header id="header">
    <div id="menu-bar" class="container">
        <h1 class="logo fl"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
        <div class="" id="nav">

            <nav id="nav-menu" class="clearfix" role="navigation">
                <a<?php if($this->is('index')): ?> class="current waves-effect waves-button waves-classic"<?php endif; ?> class="waves-effect waves-button waves-classic" href="<?php $this->options->siteUrl(); ?>" id="home"><?php _e('首页'); ?></a>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a<?php if($this->is('page', $pages->slug)): ?> class="current waves-effect waves-button waves-classic"<?php endif; ?> class="waves-effect waves-button waves-classic" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
                 <?php if(is_mobile()) : ?>
                <a href="javascript:;" class="searchicon"><img src="<?php $this->options->themeUrl('img/search.png'); ?>" alt=""></a>
                <?php endif;?>
                 <?php if(is_mobile()) : ?>
                    <input type="checkbox" id="button">
                    <label for="button" onclick=""></label>
                    <ul>
                         <li><a  class="waves-effect waves-button waves-classic" href="<?php $this->options->siteUrl(); ?>" id="home"><?php _e('首页'); ?></a></li>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <li><a href="<?php $pages->permalink(); ?>" class="waves-effect waves-button waves-classic" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                <?php endwhile; ?>
                      
                    </ul>
                 <?php endif;?>
            </nav>
            
        </div>
    </div>
    <?php if(is_mobile()) : ?>
    <div class="mb-search">
                <form id="bmsearchform" method="post" action="./" role="search">
                <input type="text" name="s" class="bmtext" autocomplete="on" placeholder="<?php _e('输入关键字搜索'); ?>" />
                </form>

    </div>
<?php endif;?>
</header><!-- end #header -->
<div id="body">
    <div class="container">
        <div class="row">

    
    

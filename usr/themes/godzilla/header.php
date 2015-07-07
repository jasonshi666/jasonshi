<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 --> 
    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.min.css'); ?>">
    <!-- 这个是代码高亮的样式 --> 
    <link rel="stylesheet" href="<?php $this->options->themeUrl('github.css');  ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('bento.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('bento.css'); ?>">
    <script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
    <script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header id="header" class="clearfix">
    <div class="container">
            <div class="site-name">
                <div id="logo">
                        <h1 class="shake"><a href="<?php $this->options->siteUrl(); ?>"><?php //$this->options->title() ?>Jason</a></h1>
                        <span class="description"><?php $this->options->description() ?></span>
                </div>
            </div>
            <div id="nav" class="row">
                <nav id="nav-menu" class="clearfix col-mb-12 col-9" role="navigation">
                    <a id="nav-logo" class="nav-a" href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->description() ?>"><?php //$this->options->title() ?>Jason</a>
                    <a id="nav-home" class="nav-a<?php if(!$this->is('category')&&!$this->is('page')): ?> current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=category-list'); ?>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a class="nav-page nav-a<?php if($this->is('page', $pages->slug)): ?> current<?php endif; ?>" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </nav>
                <div class="col-3 kit-hidden-tb">
                    <div class="site-search">
                        <form id="search" method="post" action="./" role="search">
                            <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                            <input type="text" name="s" class="text" placeholder="<?php _e('搜搜更健康! ^_^'); ?>" />
                            <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</header><!-- end #header -->
<div  class="container">
    <div id="tip">
        <?php if ($this->is('index')&&false): ?><!-- 页面为首页时 -->
            推荐置顶：<?php  $this->widget('Widget_Archive@indextop', 'pageSize=1&type=tag', 'slug=top')->parse('<a href="{permalink}" title="{title}" target="_blank">{title}</a>'); ?>
        <?php else: ?>
            当前位置 : 
            <?php if ($this->is('post')): ?><!-- 页面为文章单页时 -->
                <?php $this->category(); ?> / <?php $this->title() ?>
            <?php else: ?><!-- 页面为其他页时 -->
                <?php $this->archiveTitle(' &raquo; ','',''); ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<div id="body">
    <div class="container">
        <div class="row">
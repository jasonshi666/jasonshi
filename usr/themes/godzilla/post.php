<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-9" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <?php if (isset($this->fields->banner)): ?>
                <div class="kit-hidden-mb post-image"><a itemtype="url" href="<?php $this->permalink() ?>"><img  class="lazy" src="<?php $this->options->themeUrl('img/blank.gif'); ?>" alt="<?php $this->title() ?>" data-original="<?php $this->fields->banner(); ?>"  alt="<?php $this->title() ?>" /></a>
                </div>
            <?php endif; ?>
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <!--<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>-->
            <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time></li>
            <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
    </article>

    <ul class="post-near clearfix kit-hidden-mb">
        <li class="prev">上一篇: <?php $this->thePrev('%s','已经是最前一篇'); ?></li>
        <li class="next">下一篇: <?php $this->theNext('%s','已经是最后一篇'); ?></li>
    </ul>

    <?php $this->need('comments.php'); ?>

    
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

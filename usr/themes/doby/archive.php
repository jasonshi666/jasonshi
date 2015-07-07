<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <article class="post">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
     <header class="post-head">
      <h2 class="post-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h2><hr>
      <h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <time datetime="<?php $this->date('c') ?>" class="post-time"><?php $this->date('F j, Y') ?></time>
     </header>
<?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
if($imgCount >= 1){
    $img = $matches[2][0];
echo <<<Html
     <section class="post-images">
      <a href="{$this->permalink}" title="{$this->title}">
       <img src="{$img}" alt="{$this->title}">
      </a>
     </section>

Html;
}
?>
     <section class="post-content typo"><?php $this->excerpt('200', '...') ?>
     </section>
     <footer class="post-foot">
      <section class="post-foot-warp clear">
       <ul class="post-tag home-tag icon-tag fl">
        <li><?php $this->tags('</li><li>', true, '<a>None</a>') ?></li>
       </ul>
      <a href="<?php $this->permalink() ?>" class="post-foot-link fr">READ MORE</a>
      </section>
     </footer>
    </article>
    	<?php endwhile; ?>
        <?php else: ?>
     <header class="post-head">
      <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
     </header>
        <?php endif; ?>
    <nav class="page-nav"><?php $this->pageNav('&laquo; Prev', 'Next &raquo;'); ?></nav>
	<?php $this->need('footer.php'); ?>
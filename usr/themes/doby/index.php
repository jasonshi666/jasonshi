<?php
/**
 * 一款简洁又大气，时尚又高端的全平台自适应主题！
 * 
 * @package Doby Kunr Theme
 * @author Doby(dobyi.com) & Kunr(kunr.me)
 * @version 1.0
 * @link http://www.dobyi.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

    <?php while($this->next()): ?>
    <article class="post">
     <header class="post-head">
      <h2 class="post-title">
        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </h2>
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
    <nav class="page-nav"><?php $this->pageNav('&laquo; Prev', 'Next &raquo;'); ?></nav>
	<?php $this->need('footer.php'); ?>
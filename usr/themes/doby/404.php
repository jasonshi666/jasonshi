<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <article class="post">
     <header class="post-head">
      <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
     </header>
     <section class="post-content typo">
      <p><?php _e('Sorry, 你想查看的页面已被转移或删除, 请留言给博主报告错误吧!'); ?></p>
     </section>
    </article>
    <?php $this->need('footer.php'); ?>
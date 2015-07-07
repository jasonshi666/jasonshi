<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <article class="post">
     <header class="post-head">
      <h2 class="post-title">
        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </h2>
      <time datetime="<?php $this->date('c') ?>" class="post-time"><?php $this->date('F j, Y') ?></time>
     </header>
     <section class="post-content typo">
      <?php $this->content(); ?>
     </section>
     <footer class="post-foot">
      <section class="post-foot-warp clear">
       <ul class="post-tag home-tag icon-tag fl">
        <li><?php $this->tags('</li><li>', true, '<a>None</a>') ?></li>
       </ul>
      </section>
     </footer>
    </article>

    <nav id="post-nav" class="clear">
     <div class="post-nav-title fl"><?php $this->thePrev('<a>&laquo;</a>%s','<a>没有了</a>'); ?></div>
     <div class="post-nav-title fr"><?php $this->theNext('%s<a>&raquo;</a>','<a>没有了</a>'); ?></div>
    </nav>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
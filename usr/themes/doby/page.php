<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <article class="post">
     <header class="post-head">
      <h2 class="post-title">
        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </h2>
     </header>
     <section class="post-content typo">
      <?php $this->content(); ?>
     </section>
    </article>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
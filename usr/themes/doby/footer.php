<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</section>
    <footer id="footer">
    <div class="foot-warp">
      <p>&copy; <?php echo date('Y'); ?> <?php $this->options->title(); ?> / Theme by <a href="http://www.dobyi.com">Doby )))</a></p>
      <p class="links">Links:
          <a href="http://www.dobyi.com" rel="external">Doby's Blog</a>,
          <a href="http://www.5yuns.com" rel="external">乌云博客</a>
      </p>
    </div>
  </footer>
  <?php $this->footer(); ?>
  <script src="<?php $this->options->themeUrl('js/tools.js'); ?>"></script>
</body>
</html>
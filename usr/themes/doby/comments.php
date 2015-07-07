    <section id="comments" class="post">
<?php if($this->allow("comment")): ?>
     <div class="post-content typo">
     <!-- Duoshuo Comment BEGIN -->
     <div class="ds-thread" data-thread-key="<?php $this->cid() ?>" data-title="<?php $this->title() ?>" data-author-key="<?php $this->authorId() ?>" data-url=<?php $this->permalink() ?>"></div>
     <script type="text/javascript">
      var duoshuoQuery = {short_name:"<?php echo trim(Duoshuo_Action::getOption('short_name')) ?>",theme:"<?php echo ($this->options->Duoshuo_theme) ? $this->options->Duoshuo_theme : 'bluebox'?>"};
      (function() {
          var ds = document.createElement("script");
          ds.type = "text/javascript";ds.async = true;
          ds.src = "http://static.duoshuo.com/embed.js";
          ds.charset = "UTF-8";
      (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(ds);
      })();
      </script>
     <!-- Duoshuo Comment END -->
      </div><?php else: ?>
     <header class="post-head"><h2 class="post-title"><?php _e("评论已关闭"); ?></h2></header>
<?php endif; ?>
    </section>
<?php $this->need('header.php'); ?>
	<div id="content">
	 <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
        <section class="post">
			<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p class="entry_data">
				<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<span><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
				<?php _e('分类：'); ?><?php $this->category(','); ?>
			</p>
			<div class="con">
			    <?php $this->content('阅读剩余部分...'); ?>
			</div>
		</section>
	<?php endwhile; ?>
    <?php else: ?>
        <section class="post">
            <h2><?php _e('没有找到内容'); ?></h2>
        </section>
    <?php endif; ?>
      <ol class="pages clearfix">
            <?php $this->pageNav(); ?>
      </ol>
    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
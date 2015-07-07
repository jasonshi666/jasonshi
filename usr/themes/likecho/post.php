<?php $this->need('header.php'); ?>

    <div id="content">
        <section class="post">
			<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p class="entry_data">
				<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<span><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
				<?php _e('分类：'); ?><?php $this->category(','); ?>
			</p>
			<div class="con">
			     <?php $this->content(); ?>
			     <p class="tags"><?php _e('标签'); ?>: <?php $this->tags(', ', true, 'none'); ?></p>
			</div>
		</section>

		<?php $this->need('comments.php'); ?>
    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
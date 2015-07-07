<?php $this->need('header.php'); ?>

    <div id="content">
        <section class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p class="entry_data">
				<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?>
			</p>
			<div class="con">
			    <?php $this->content(); ?>
			</div>
		</section>

		<?php $this->need('comments.php'); ?>
    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
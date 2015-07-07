<?php
/**
 *
 * 标签页模版 
 *
 */
 $this->need('header.php'); ?>
	<div id="content">
	 	<article id="post_list" class="index">
	 	<?php while($this->next()): ?>
	 		<div class="ptop christmas"></div>
	 		<section class="post">
	 			<div class="box">
		 			<h2>
		 				<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
		 			</h2>
		 			<div class="entry tags">
		 				<?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
		 				<?php if($tags->have()): ?>
		 					<?php while ($tags->next()): ?>
		 						<a style="color:rgb(<?php echo(mt_rand(0,255)); ?>,<?php echo(mt_rand(0,255)); ?>,<?php echo(mt_rand(0,255)); ?>)" href="<?php $tags->permalink();?>" title="有<?php $tags->count(); ?>篇文章使用<?php $tags->name(); ?>标签">
		 							<?php $tags->name(); ?>
		 						</a>
		 					<?php endwhile; ?>
		 				<?php endif; ?>
		 			</div>
	 			</div>
	 		</section>
	 		<div class="pbot christmas"></div>
	 	<?php endwhile; ?>
	 	</article>
 	</div>
	<?php $this->need('sider.php'); ?>
	<?php $this->need('footer.php'); ?>
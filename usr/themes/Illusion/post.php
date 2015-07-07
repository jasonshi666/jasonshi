<?php
/**
 *
 * 详情页模版 
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
		 			<div class="entry">
		 				<?php $this->content('阅读更多');?>
		 				<?php //echo sermore($this->content,'>> 阅读全文 <<',$this->permalink,$this->title); ?>
		 			</div>
	 				<div class="info">
	 					<span class="meta-date">
	 						<i class="postdate tags"></i>
		 					<a href="<?php $this->permalink() ?>"><?php $this->date('Y年m月d日'); ?></a>
		 				</span>
		 				<span class="meta-view">
		 					<i class="postview tags"></i>
		 					<a href="<?php $this->permalink() ?>"><?php $this->views();?>次围观</a>
		 				</span>
		 				<span class="meta-comm">
		 					<i class="postcomm tags"></i>
		 					<a href="<?php $this->permalink() ?>#comments">
		 						<span class="ds-thread-count" data-thread-key="<?php $this->cid() ?>" data-count-type="comments">暂无评论</span>
		 					</a>
		 				</span>
		 				<span class="meta-tag">
		 					<i class="posttag tags"></i>
		 					<?php $this->tags(','); ?>
		 				</span>
		 				<div class="clearfix"></div>
		 			</div>
		 		</div>
	 		</section>
	 		<div class="pbot christmas"></div>
	 	<?php endwhile; ?>
	 	</article>
	 	<?php $this->need('comments.php'); ?>
 	</div>
	<?php $this->need('sider.php'); ?>
	<?php $this->need('footer.php'); ?>
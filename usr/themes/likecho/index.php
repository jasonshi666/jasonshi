<?php
/**
 * 破相制作的Typecho主题，命名为XfunY T1
 * 
 * @package XfunY T1 
 * @author 破相
 * @version 1.0.7
 * @link http://xfuny.com
 */
 
 $this->need('header.php');
 ?>
	<div id="content">
	<?php while($this->next()): ?>
		<section class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p class="entry_data">
				<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<span><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
				<span><?php _e('分类：'); ?><?php $this->category(','); ?></span>
				<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
			</p>
			<div class="con"><?php $this->content('阅读剩余部分...'); ?></div>
		</section>
	<?php endwhile; ?>
	<?php $this->pageNav(); ?>
	</div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
	

<?php
/**
 *
 * 归档页模版 
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
	 			</div>
	 		</section>
	 		<div class="pbot christmas"></div>
	 	<?php endwhile; ?>
	 	</article>
 	</div>
	<?php $this->need('sider.php'); ?>
	<?php $this->need('footer.php'); ?>
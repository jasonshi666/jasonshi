<?php
/**  
  * 友情链接 
  *  
  * @package custom
  *  
  */ 
 $this->need('header.php'); ?>
	<div id="content">
	 	<article id="post-list" class="index">
	 	<?php while($this->next()): ?>
	 		<div class="ptop christmas"></div>
	 		<section class="post">
	 			<div class="box">
		 			<h2>
		 				<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
		 			</h2>
		 			<div class="entry links-list">
						<ul>
		 					<?php $this->content('阅读更多');?>
		 				</ul>
		 			</div>
		 		</div>
	 		</section>
	 		<div class="pbot christmas"></div>
	 	<?php endwhile; ?>
	 	</article>
 	</div>
 	<style>#content .box{padding:0 10px}#content .box h2{padding: 10px 0 0 0;}</style>
	<?php $this->need('sider.php'); ?>
	<?php $this->need('footer.php'); ?>
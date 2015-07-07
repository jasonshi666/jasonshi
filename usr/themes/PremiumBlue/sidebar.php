                <div class="widget widget_categories"><div class="widget-bg">
					<div class="title">
						<div><div><h2><?php _e('日志分类'); ?></h2></div></div>
					</div>
					<ul>
						<?php $this->widget('Widget_Metas_Category_List')
                ->parse('<li class="cat-item cat-item-3"><a href="{permalink}" title="{name}">{name}</a> ({count})</li>'); ?>
					</ul>
				</div></div>
                
				<div class="widget widget_archive"><div class="widget-bg">
					<div class="title">
						<div><div><h2>最新日志</h2></div></div>
					</div>
					<ul>
							 <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
					</ul>					
				</div></div>

				<div class="widget widget_archive"><div class="widget-bg">
					<div class="title">
						<div><div><h2>最新评论</h2></div></div>
					</div>
					<ul>
							 <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(50, '...'); ?></li>
            <?php endwhile; ?>
					</ul>					
				</div></div>
                
                <div class="widget widget_categories"><div class="widget-bg">
					<div class="title">
						<div><div><h2><?php _e('日志归档'); ?></h2></div></div>
					</div>
					<ul>
						<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
					</ul>
				</div></div>
				
				<div class="widget widget_meta"><div class="widget-bg">
					<div class="title">
						<div><div><h2><?php _e('博客管理'); ?></h2></div></div>
					</div>
					<ul>
                       		<?php if($this->user->hasLogin()): ?>
					<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                    <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
                <?php else: ?>
                    <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
                <?php endif; ?>
					</ul>
			
				</div></div>
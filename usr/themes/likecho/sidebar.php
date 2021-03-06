
	<aside>

		<div class="section search">
			<form action="/search" class="head-search" method="get">
			<input id="search-input" type="text" name="s" class="inputbox" value="搜索..." onfocus="if (value =='搜索...'){value =''}" onblur="if (value ==''){value='搜索...'}" x-webkit-speech lang="zh-CN" />	
			<input type="submit" value="搜索" class="btn">
			</form>
		</div>
        
		<div class="section highlight" >
			<h2><?php _e('最新文章'); ?></h2>
            <ul>
                <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
		</div>

		<div class="section highlight" >
			<h2><?php _e('最近回复'); ?></h2>
            <ul>
            <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(50, '...'); ?></li>
            <?php endwhile; ?>
            </ul>
		</div>
		
		<div class="section ralign" id="ad">
		<a href="" title="斯瑞灯饰，照亮人生"><img src="<?php $this->options->themeUrl('images/light.gif'); ?>" width="250" height="250" alt="斯瑞灯饰"></a>
		</div>
		
		<div class="section transbgr">
			<h3><?php $this->options->description() ?></h3>
			<h2><?php _e('其它'); ?></h2>
			<ul>
                <?php if($this->user->hasLogin()): ?>
					<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                    <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
                <?php else: ?>
                    <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
                <?php endif; ?>
                <li><a href="http://validator.w3.org/check/referer">Valid XHTML</a></li>
                <li><a href="http://www.typecho.org">Typecho</a></li>
            </ul>
		</div>

	</aside><!-- end #sidebar -->
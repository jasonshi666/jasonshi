 	<aside id="aside" class="left">
 		<div class="top christmas"></div>
 		<div class="center">
		    <div class="logo">
		        <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>">
		            <div class="author"></div>
		            <h1><?php $this->options->title() ?></h1>
		        </a>
		    </div>
		    <div class="description">
		        <?php $this-> options->description() ?>
		    </div>
		    <div class="menu">
		        <ul>
		            <li class="nav<?php if($this->is('index')): ?> current<?php endif; ?>">
		                <a href="<?php $this->options->siteUrl(); ?>">首页</a>
		            </li>
		            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		            <?php while($pages-> next()): ?>
		                <li class="nav<?php if($this->is('page', $pages->slug)): ?> current<?php endif; ?>">
		                    <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
		                        <?php $pages->title(); ?>
		                    </a>
		                </li>
		            <?php endwhile; ?>
		            <li class="te"><a href="/tag/typecho/" title="关于typecho">TYPECHO</a></li>
		        </ul>
		    </div>
		    <div class="search">
		        <form id="searchform" method="get" action="<?php $this->options->siteUrl(); ?>">
		            <input id="s" title="你可以在这里搜索你想要的东西-;)" size="30" type="text" name="s" class="txt" placeholder="回车搜索...">
		        </form>
		    </div>
		    <div class="footer">
		        <span class="beian">
		        	<?php if($this->options->beian) echo $this->options->beian?>
		        </span>
		    </div>
		</div>
	    <div class="bottom christmas"></div>
	</aside>
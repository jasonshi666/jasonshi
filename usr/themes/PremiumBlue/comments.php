	<?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <div class="title-page02">
		<h3 id="comments" style="padding-bottom: 0pt;"><?php $this->commentsNum(_t('当前暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
	</div>
	
		<div class="navigation" style="">
			<div class="alignleft"></div>
			<div class="alignright"></div>
		</div>
		
		
		<div class="text-box">
			<ol class="commentlist">
            <?php while($comments->next()): ?>
						<li class="comment even thread-even depth-1" id="comment-3">
				<div id="div-comment-3" class="comment-body">
				<div class="comment-author vcard">
		<?php $comments->gravatar(32, 'X', '', 'avatar'); ?>
   		<?php $comments->author(); ?> <span class="says">评论说:</span>
        		</div>

		<div class="comment-meta commentmetadata"><?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?> <!-- <span class="count">#<?php echo $comments->sequence(); ?></span> --></div>

		<p><?php $comments->content(); ?></p>

		<div class="reply">
				</div>
				</div>
		</li>
        <?php endwhile; ?>
			</ol>
		</div>
        <?php endif; ?>
		
		<div class="navigation">
			<div class="alignleft"></div>
			<div class="alignright"></div>
			<div class="clear"></div>
		</div><br>

<?php if($this->allow('comment')): ?>
<div id="respond">

<div class="title-page02">
	<h3><?php _e('添加新评论'); ?> &raquo;</h3>
</div>
	
<div class="text-box">
	
	<div class="cancel-comment-reply">
		<small><?php Helper::cancleCommentReplyLink('点击取消评论', 'respond'); ?></small>
	</div>
	
		
	<form action="<?php $this->commentUrl() ?>" method="post" id="commentform">	
		
    <?php if($this->user->hasLogin()): ?>
    <p>
    <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('登出'); ?> &raquo;</a>
    </p>
    <?php else: ?>
    <p> 
    <input class="text" name="author" id="author" value="<?php $this->remember('author'); ?>" size="22" tabindex="1" type="text">
	<label for="author"><small><?php _e('称呼'); ?> (*必填)</small></label></p>
	
	<p><input class="text" name="mail" id="email" value="<?php $this->remember('mail'); ?>" size="22" tabindex="2" type="text">
	<label for="email"><small><?php _e('E-mail'); ?> <?php if ($this->options->commentsRequireMail): ?>(*必填！我们不会公开！)<?php endif; ?></small></label></p>
	
	<p><input class="text" name="url" id="url" value="<?php $this->remember('url'); ?>" size="22" tabindex="3" type="text">
	<label for="url"><small><?php _e('网站'); ?> <?php if ($this->options->commentsRequireURL): ?>(*留下网址，方便回访！)<?php else: ?>(留下网址，方便回访！)<?php endif; ?></small></label></p>
	<?php endif; ?>
		
	<p><textarea name="text" id="comment" cols="100%" rows="10" tabindex="4" style="width: 521px;"><?php $this->remember('text'); ?></textarea></p>
	<p> <input name="submit" src="<?php $this->options->themeUrl('images/submit.gif'); ?>" id="submit" tabindex="5" value="<?php _e('提交评论'); ?>" type="image">
	</p>
		
	</form>		
		
</div>
</div>	
<?php endif; ?>					
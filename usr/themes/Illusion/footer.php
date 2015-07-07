	<div class="clearfix"></div>
    <div id="footer">
        <div class="copy">
            Powered by
            <a href="http://typecho.org/" title="优秀的博客程序" target=_blank>typecho</a> |
            <a href="http://ysido.com/" title="沼泽,来自LOFTER作品" target=_blank>错觉</a> |
            Copyright © 2014 <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> |
            <a href="http://www.duoshuo.com" title="特别感谢多说提供评论系统支持" target="_blank">多说</a>
        </div>
    </div>
</div>
<?php 
if ($this->is('post')):
?>
<div class="navigation">
    <div class="alignleft" title="&quot;→&quot; 键更方便"><?php $this->theNext("%s",""); ?></div>
    <div class="alignright" title="&quot;←&quot; 键更方便"><?php $this->thePrev("%s",""); ?></div>
</div>
<?php endif ?>
<div id="back2top"></div>
<?php $this->footer(); ?>
<?php if($this->options->duoshuo):?>
<script type="text/javascript">var duoshuoQuery = {short_name:"<?php echo $this->options->duoshuo?>",theme:'none'};</script>
<script type="text/javascript" src="http://static.duoshuo.com/embed.js" async="true" /></script>
<?php endif ?>
</body>
</html>
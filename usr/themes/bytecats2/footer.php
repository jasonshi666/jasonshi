<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<div id="goTop" class="<?php if(is_mobile()) {echo 'mbtop';}?>" >
	<div class="arrow"></div>
	<div class="stick"></div>
</div>
<script src="<?php $this->options->themeUrl('js/waves.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.appear.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/script.js'); ?>"></script>

<footer id="footer" class="<?php if(is_mobile()) {echo 'mbfoot';}?>" role="contentinfo">
    Copyright&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php if(!is_mobile()) : ?><?php _e('由 <a href="http://www.typecho.org" target="_blank">Typecho)))</a> 强力驱动'); ?> Theme by <a href="http://www.bytecats.com/" target="_blank">字节猫™</a> <?php echo '加载耗时：',timer_stop(), ' s';?><?php endif;?>
</footer><!-- end #footer -->
<?php $this->footer(); ?>
<script type="text/javascript">
	// material design 图标点击效果
	  Waves.displayEffect();
</script>
</body>
</html>

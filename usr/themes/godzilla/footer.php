<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
<div class="container">
   <div class="info clearfix">
		<div class="copyright">版权所有，保留一切权利！ &copy; <?php echo date('Y'); ?> Jason</div>
		<div class="powerby"><!-- Powered by <a href="http://www.typecho.org" target="_blank">Typecho)))</a> -->
			<a href="http://www.miitbeian.gov.cn" rel="nofollow" class="records" target="_blank"></a>
		</div>
	</div>
  </div>
</footer><!-- end #footer -->
    <script src="http://cdn.staticfile.org/jquery/1.4.0/jquery.js"></script>
    <script src="<?php $this->options->themeUrl('prettify.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('jquery.lazyload.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('theme.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>

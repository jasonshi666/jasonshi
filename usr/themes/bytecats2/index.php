<?php
/**
 * material风格响应式博客模板,最大宽度为1200px<br />同时支持IE8+，iPad,iPhone,Andriod等移动设备<br />欢迎与我交流QQ：373345619
 * 
 * @package Bytecats 
 * @author bytecats
 * @version 1.1.0
 * @link http://www.bytecats.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="grid-3-4" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post type-post" >
			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<?php if(!is_mobile()) :?>
					<li itemprop="author"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<?php endif; ?>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
                <?php $this->content('阅读全文&raquo;'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

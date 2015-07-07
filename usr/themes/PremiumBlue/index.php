<?php
/**
 * 菠萝Typecho主题系列，请保留版权链接！非常感谢！
 * 
 * @package Premium Blue
 * @author 菠萝
 * @version V1.1
 * @link http://www.blook.org.cn
 */
 include('header.php');
 ?>
		<div class="content">
			<div class="border-left"><div class="border-right"><div class="border-bot">
				<div class="border-left02"><div class="border-right02">
				<div class="corner-left-bot"><div class="corner-right-bot">
				
					<div class="border-left"><div class="border-right"><div class="border-top"><div class="border-bot">
						<div class="corner-left-top"><div class="corner-right-top"><div class="corner-left-bot"><div class="corner-right-bot">
                        
			<div class="column-left">	
			  <?php include('sidebar.php'); ?>               
			</div>

<div class="column-center">
    <?php while($this->next()): ?>
	<div class="post-6 post hentry category-consectetuer category-fusce-suscipit category-lorem-ipsum-dolor category-praesent-vestibulum" id="post-6">

					<div class="indent">
						<div class="title png">							
							<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>						
							<div class="date"><?php _e('分类：'); ?><?php $this->category(','); ?> | <?php _e('作者：'); ?><?php $this->author(); ?> | <?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></div>
						</div>
					
						<div class="text-box">
							<?php $this->content('阅读剩余部分...'); ?>
						</div>	
						
						<div class="comments"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></div>
									
						<div class="link-edit"></div>
					
					</div>
				</div>
    <?php endwhile; ?>
	<ol class="pages clearfix">
            <?php $this->pageNav(); ?>
    </ol>
							</div>
		
						</div></div></div></div>
					</div></div></div></div>
			
				</div></div>
				</div></div>
			</div></div></div>
		</div>

<?php include('footer.php'); ?>
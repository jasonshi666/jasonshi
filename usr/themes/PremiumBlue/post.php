<?php include('header.php'); ?>
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

									
					<div class="navigation">
						<div class="alignleft"> <a href="#">Previous</a></div>
						<div class="alignright"><a href="#">Next</a></div>
						<div class="clear"></div><br />
					</div>
					
					<div class="post-4 post hentry category-aenean-nonummy category-consectetuer category-fusce-suscipit category-hendrerit-mauris category-praesent-vestibulum" id="post-4">
						
						
						<div class="indent bgnone">
							<div class="title png">
								
								
								<h2><?php $this->title() ?></h2>
								<div class="date"></div>
								<div class="author"><?php _e('分类：'); ?><?php $this->category(','); ?> | <?php _e('作者：'); ?><?php $this->author(); ?> | <?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></div>
						
									
							</div>
							
							<div class="text-box">
								
								<?php $this->content(); ?>
							
							</div>
							
								<div class="postmetadata"><?php _e('标签'); ?>: <?php $this->tags(', ', true, 'none'); ?></div>
									
								<div class="postmetadata alt">
									<small style="color:#3399FF;">
                                    本文地址：<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a>　转载请标明出处！
                                    </small>
								</div>

							
	<div id="respond">
		<?php include('comments.php'); ?>
	</div>						
						</div>
						
					</div>
					
				

							</div>
		
						</div></div></div></div>
					</div></div></div></div>
			
				</div></div>
				</div></div>
			</div></div></div>
		</div>
		
<?php include('footer.php'); ?>
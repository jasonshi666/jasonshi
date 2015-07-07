<?php $this->need('header.php'); ?>

    <div id="content">
        <section class="post">
            <h2 class="entry_title">404 - <?php _e('页面没找到'); ?></h2>
            <p>
            <form method="post">
                <div><input type="text" name="s" class="inputbox" size="20" /> <input type="submit" class="btn" value="<?php _e('搜索'); ?>" /></div>
            </form>
            </p>
        </section>

    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>

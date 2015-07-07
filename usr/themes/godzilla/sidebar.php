<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-mb-12 col-3 kit-hidden-tb" id="secondary" role="complementary">





    <section class="widget tag-cloud">
        <h3 class="widget-title"><?php _e('标签云'); ?></h3>
        <ul class="widget-list clearfix">
            <?php $this->widget('Widget_Metas_Tag_Cloud')
            ->parse('<li><a href="{permalink}">{name}({count})</a></li>'); ?>
        </ul>
    </section>

    <section class="widget">
        <h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>


    <?php if ($this->is('post')): ?>
    <?php $this->related()->to($relatedPosts); ?>
    <?php if ($relatedPosts->have()): ?>
    <section id="newslist" class="widget">
        <h3 class="widget-title"><?php _e('相关文章'); ?></h3>
        <ul class="widget-list">
            <?php $relatedPosts->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php endif; ?>

</div><!-- end #sidebar -->

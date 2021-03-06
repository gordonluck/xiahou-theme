<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<aside id="sidebar" class="sidebar">
    <div class="sidebar-inner">
        <section class="site-overview sidebar-panel  sidebar-panel-active ">
            <div class="site-author motion-element">
                <img class="site-author-image" src="<?php $this->options->themeUrl('public/img/7539841.jpeg')?>"
                     alt="夏侯仲达" />
                <p class="site-author-name">
                    <?php echo $this->options->title;?>
                </p>
                <p class="site-description motion-element">
                    <?php echo $this->options->description;?>
                </p>
            </div>
            <nav class="site-state motion-element">
                <div class="site-state-item site-state-posts">
                    <a href="/archive.html">
                        <span class="site-state-item-count">
                            <?php
                            $this->widget('Widget_Stat')->to($stat);
                            echo $stat->publishedPostsNum;
                            ?>
                        </span>
                        <span class="site-state-item-name">日志</span>
                    </a>
                </div>

                <div class="site-state-item site-state-categories">
                    <span class="site-state-item-count">
                        <?php
                        echo $stat->categoriesNum;
                        ?>
                    </span>
                    <span class="site-state-item-name">分类</span>

                </div>

                <div class="site-state-item site-state-tags">
                    <a href="/tag.html">
                        <span class="site-state-item-count">
                            <?php
                            echo tags_count();
                            ?>
                        </span>
                        <span class="site-state-item-name">标签</span>
                    </a>
                </div>

            </nav>


            <div class="feed-link motion-element">
                <a href="/feed/atom/" rel="alternate">
                    <i class="fa fa-rss"></i>
                    RSS
                </a>
            </div>

            <div class="links-of-author motion-element">
                <span class="links-of-author-item">
                <a href="https://github.com/xtreeio" target="_blank" rel="nofollow">
                    <i class="fa fa-github"></i> GitHub
                </a>
                </span>

                <span class="links-of-author-item">
                <a href="https://twitter.com/tzllangzi" target="_blank" rel="nofollow">
                    <i class="fa fa-twitter"></i> Twitter
                </a>
                </span>

                <?php
                $friends = explode("\n", $this->options->friends);
                foreach($friends as $f) {
                    $_f = explode(',', $f);
                    if(!trim($_f[0])) continue;

                ?>
                <span class="links-of-author-item">
                <a href="<?php echo $_f[1]; ?>" target="_blank">
                    <i class="fa fa-globe"></i><?php echo mb_substr($_f[0], 0, 3) ; ?></a>
                </span>
                <?php  } ?>
            </div>

            <div class="links-of-author motion-element"></div>
        </section>
    </div>
</aside>
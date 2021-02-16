    <?php get_header()?>
    <?php get_template_part('template-parts/single-top')?>
    <!-- main -->
    <main class="na-main">
        <div class="inner">
            <div class="na-pans">
                <?php if(function_exists(bcn_display())):?>
                    <?php bcn_display(); ?>
                <?php endif?>
            </div>
        </div>
        <section class="na-news">
            <div class="inner">
                <h2 class="section-title">NEWS</h2>
                <?php if (have_posts()):?>
                    <div class="na-news-items">
                        <?php while (have_posts()):the_post()?>
                            <a href="<?php the_permalink()?>" class="na-news-link">
                                <article class="na-news-item">
                                    <figure class="na-news__img">
                                        <img src="<?php the_field('img')?>" alt="newsのサムネイル画像">
                                    </figure>
                                    <div class="na-news-item__body">
                                        <time datetime="<?php the_time('Y/m/d')?>"><?php the_time('Y/m/d')?></time>
                                        <h3 class="na-news-item__title"><?php echo the_title();?></h3>
                                    </div>
                                </article>
                            </a>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
                <!-- pagination -->
                <!-- <div class="na-news-pagination__body">
                    <a href="" class="na-news-pagination na-mun"><p>1</p></a>
                    <a href="" class="na-news-pagination na-mun"><p>2</p></a>
                    <a href="" class="na-news-pagination na-next"><p>></p></a>
                </div> -->
                <?php if(paginate_links()):?>
                    <div class="na-news-pagination__body">
                        <?php
                            echo paginate_links(
                                array(
                                    'end_size' =>1,
                                    'mid_size' =>1,
                                    'prev_next' =>true,
                                    'prev_text' => '<',
                                    'next_text' => '>'
                                )
                            )
                        ?>
                    </div><!-- /pagenation -->
                <?php endif;?>
            </div>
        </section>
<?php get_footer()?>

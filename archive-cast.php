    <?php get_header()?>
    <!-- top -->
    <?php get_template_part('template-parts/single-top')?>
    <!-- top -->
    <!-- main -->
    <main class="ca-main cast-main">
        <div class="ca-title-area ca-inner">
            <div class="inner">
            <div class="na-pans">
                <?php if(function_exists(bcn_display())):?>
                    <?php bcn_display(); ?>
                <?php endif?>
            </div>
                <h2 class="section-title">CAST</h2>
            </div>
        </div>
        <section class="cas">
            <div class="inner">
            <?php
            $cast = new WP_Query( array(
                'post_type' => 'dev_cast',
                'posts_per_page' => 3
                )
            );
            if (have_posts()):?>
                <ul class="cas-items">
                    <?php while ( $cast->have_posts() ) : $cast->the_post();?>
                    <li class="ca-item">
                        <div class="ca-item-img">
                            <img src="<?php the_field('img')?>" alt="キャストの写真">
                        </div>
                        <div class="ca-prof">
                            <p class="ca-position"><?php the_field('position')?></p>
                            <p class="ca-name"><?php the_field('name')?></p>
                            <p class="ca-title"><?php the_field('title')?></p>
                        </div>
                        <div class="ca-text">
                        <?php the_field('text')?>
                        </div>
                    </li>
                    <?php endwhile;?>
                </ul>
                <?php endif;?>
            </div>
        </section>
        <section class="ca-sec-area">
        <?php
            $cast = new WP_Query( array(
                'offset' => 2,
                'post_type' => 'dev_cast',
                'post_per_pages' => -1,
                )
            );
            if (have_posts()):?>
                <div class="inner">
                <?php while ( $cast->have_posts() ) : $cast->the_post();?>
                        <article class="ca-sec__item">
                            <figure>
                                <img src="<?php the_field('img')?>" alt="キャストの写真">
                            </figure>
                            <div class="ca-sec__txt-area">
                                <h4 class="ca__position"><?php the_field('position')?></h4>
                                <h3 class="ca__name"><?php the_field('name')?></h3>
                                <p class="ca__performance"><?php the_field('title')?></p>
                                <p class="ca__txt"><?php the_field('text')?></p>
                            </div>
                        </article>
                    <?php  endwhile;?>
                </div>
            <?php endif;?>
        </section>
        <?php
            $cast_sub = new WP_Query( array(
                'post_type' => 'cast_sub',
                )
            );
            if (have_posts()):?>
            <section class="ca-th">
                <div class="inner">
                    <?php while ( $cast_sub->have_posts() ) : $cast_sub->the_post();?>
                        <article class="ca-th__item">
                            <h4 class="ca__position"><?php the_field('position')?></h4>
                            <h3 class="ca__name"><?php the_field('name')?></h3>
                            <p class="ca__performance"><?php the_field('title')?></p>
                        </article>
                    <?php endwhile;?>
                </div>
            </section>
        <?php endif;?>
        <!-- schedule -->
    <?php get_footer()?>
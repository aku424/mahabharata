<?php get_header()?>
<!-- top -->
<?php get_template_part('template-parts/single-top')?>
    <!-- top -->
    <!-- main -->
    <main class="c-main">
        <div class="inner">
        <div class="na-pans">
                <?php if(function_exists(bcn_display())):?>
                    <?php bcn_display(); ?>
                <?php endif?>
            </div>
        </div>
        <section class="comments">
            <div class="inner">
                <h2 class="section-title">COMMENTS</h2>
                <h3 class="comments-title-sub">舞台関係者のみならず各界著名人からコメントが届いています！</h3>
                <div class="comments-box">
                    <h4 class="comments-box-title">京都佛立ミュージアム館長 <span>長松清潤</span></h4>
                    <p class="comments-text">
                        「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br> 
                        まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
                    </p>
                </div>
                <?php if(have_posts()):?>
                    <div class="c-items">
                        <?php while (have_posts()):the_post()?>
                            <article class="c-item">
                                <div class="c-item__title">
                                    <h4 class="c-item__name"><?php the_field('name')?></h4>
                                    <p class="c-item__position"><?php the_field('title')?></p>
                                </div>
                                <p class="c-item__txt">
                                <?php the_field('text')?>
                                </p>
                            </article>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
            </div>
        </section>
        <?php get_footer()?>
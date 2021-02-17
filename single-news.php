<?php get_header()?>
<!-- top -->
<?php get_template_part('template-parts/single-top')?>
<!-- top -->
<!-- main -->
<main class="na-main">
    <div class="inner">
        <div class="na-pans">
            <?php if(function_exists(bcn_display())):?>
                <?php bcn_display(); ?>
            <?php endif?>
        </div>
    </div>
    <section class="na-s">
        <div class="inner">
            <h2 class="section-title">NEWS</h2>
            <article class="na-s__main">
                <figure class="na-s___img">
                    <img src="<?php the_field('img')?>" alt="newsのサムネイル画像">
                </figure>
                <div class="na-s__title">
                    <time  datetime="<?php the_time('Y/m/d')?>"><?php the_time('Y/m/d')?></time>
                    <h3><?php echo the_title();?></h3>
                </div>
                <div class="na-s__body">
                    <h4 class="na-s__b_title"><?php the_field ('title')?></h4>
                    <p class="na-s__b_txt">
                        <!-- <br><span>ストーリー</span><br><br> マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br><br> 世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。 <br><br>インドだけでなくアジア全般で広く知られた作品であり、TVドラマや映画の原案として使われることも多い。全編舞台化の難しさ日本では、イギリスの演出家ピーター・ブルックがワールドツアーの一環として1988年6月に銀座セゾン劇場で上演。三部作であったが、上演時間は9時間にも及んだ。 <br> 日本人の作品としては演出家・宮城聰が『マハーバーラタ～ナラ王の冒険』や歌舞伎作品『極付印度伝マハーバーラタ戦記』として、「マハーバーラタ」の長大なストーリーの一部分を舞台化した。全編上映はブルック以外にめぼしい作品は世界的にも存在しない。<br><br><span>なぜ今「マハーバーラタ」なのか？</span>  <br><br>「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br><br> それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br><br> 平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。「多様性の共生」というアジア的思想アジアでは、多様な歴史、文化、気候や地形がそれぞれの社会に影響を及ぼし、多様な言語や宗教、伝統が共存する。<br><br> また、芸術面に関して言えば、アジアにおける伝統舞台芸術の多くは演劇・舞踊・音楽などのジャンルを分けることなく融合的に用いる。この多様性がアジアの特徴であり、「共生」がアジア的思想の鍵と言える。<br> 人種や宗教、歴史などの多様性を持つアジア的思想や哲学の源流である古典叙事詩「マハーバーラタ」の全編舞台化を通して、多様化する現代社会に生きる観客へ向けて、今後の世界に求められる「共生」社会のあり方を提示する。 -->
                        <?php the_field ('text')?>
                    </p>
                </div>
            </article>
        </div>
    </section>
    <!-- pagination -->
    <div class="na-s-pagination_area">
        <div class="inner">
            <?php 
                $pre_post = get_previous_post();
                $next_post = get_next_post();
                if ( $pre_post ):?>
                <a href="<?php echo get_permalink($pre_post ->ID)?>" class="na-s_pagination_link pagination-pev">
                    <span></span>
                    <div class="na-s_pagination_info pagination-info-pev">
                        <time datetime="<?php echo $pre_post->post_date?>"><?php echo $pre_post->post_date?></time>
                        <p><?php echo $pre_post->post_title; ?></p>
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($next_post):?>
                <a href="<?php echo get_permalink($next_post ->ID)?>" class="na-s_pagination_link pagination-next">
                    <span></span>
                    <div class="na-s_pagination_info pagination-info-next">
                    <time datetime="<?php echo $next_post->post_date?>"><?php echo $next_post->post_date?></time>
                        <p><?php echo $next_post->post_title; ?></p>
                    </div>
                </a>
            <?php endif;?>
        </div>
    </div>
<?php get_footer()?>
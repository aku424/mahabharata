<?php get_header()?>
    <!-- top -->
    <section class="i-top">
        <div class="inner">
            <div class="it-op-title-box">
                <img src="<?php echo get_template_directory_uri()?>/img/title.png" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化。完全版マハーバーラタ">
            </div>
            <div class="i-top__contents">
                    <img class="i-top__contents__info" src="<?php echo get_template_directory_uri()?>/img/schedule.png" alt="2020年7月4日〜7日なかのZERO大ホール">
                <p class="i-top-contents__text">
                    小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である<span>完全版マハーバーラタ</span>の公演が決定！！<br>
                    アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
                </p>
            </div>
        </div>
        <div class="t-btn__box">
            <div class="inner">
                <a href="<?php echo esc_url( home_url( '/inquiry' ) ); ?>" class=" to-reserve">チケット予約サイトへ</a>
            </div>
        </div>
    </section>
    <!-- top -->
    <!-- main -->
    <main class="index-main">
        <div class="inner">
            <!-- news -->
            <section class="i-news">
                    <div class="i-intro-box">
                        <h2 class="section-title">INTRODUCTION</h2>
                        <p class="i-intro__sub">なぜ今「マハーバーラタ」なのか？</p>
                        <div class="i-intro-text-box">
                            <p class="i-intro-text-left">
                                「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
                                それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
                                平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
                            </p>
                            <p class="i-intro-text-left">
                                現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
                                神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
                                非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
                            </p>
                        </div>
                    </div>
                    <div class="news-btn-box">
                        <h2 class="section-title i-news-title">NEWS</h2>
                        <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="btn to-news">ニュース一覧へ</a>
                    </div>
                    <?php
                        $news = new WP_Query( array(
                                'post_type' => 'news',
                                'posts_per_page' => 5
                            )
                        );
                        if (have_posts()):?>
                    <div class="i-news-box">
                    <?php while ( $news->have_posts() ) : $news->the_post();?>
                        <article class="i-news-item i-news-item-first">
                            <a href="<?php the_permalink()?>" class="i-news-link">
                                <figure>
                                    <img src="<?php echo the_field('img')?>" alt="">
                                </figure>
                                <div class="i-news-text__box">
                                    <time class="i-news-time" datetime="<?php the_time('Y/m/d')?>"><?php the_time('Y/m/d')?></time>
                                    <h4 class="i-news-item-title"><?php echo the_title();?></h4>
                                </div>
                            </a>
                        </article>
                        <?php endwhile;?>
                    </div>
                <?php endif;?> 
            </section>
        </div>    
        <!-- news -->
        <!-- story -->
        <section class="i-story">
            <div class="i-story__second">
                <div class="inner">
                    <h2 class="section-title">STORY</h2>
                    <p class="index-story-text">
                        マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br> 
                        世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
                    </p>
                    <a href="<?php echo esc_url( home_url( '/story' ) ); ?>" class="btn to-story">もっと詳しく</a>
                </div>
            </div>
        </section>
        <!-- story -->
        <!-- comments -->
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
                        <a href="<?php echo esc_url( home_url( '/comments' ) ); ?>" class="btn to-comments">もっと見る</a>
                    </div>
                    <article class="comment__res">
                        <div class="comment__res-img"></div>
                        <div class="comment__res__txtarea">
                            <h4 class="comment__res__title">京都佛立ミュージアム館長 <span>長松清潤</span></h4>
                            <p class="comments__res_txt">
                                「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br> 
                                まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。
                                小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
                            </p>
                        </div>
                    </article>
                    <h2 class="section-title section-ca-title">CASTS</h2>
                </div>
            </section>
            <!-- comments -->
            <!-- casts -->
            <section class="cas">
                <div class="inner">
                    <ul class="cas-items">
                        <?php
                            $casts = new WP_Query( array(
                                    'post_type' => 'cast',
                                    'posts_per_page' => 3
                                )
                            );
                            if (have_posts()):?>
                            <?php while ( $casts->have_posts() ) : $casts->the_post();?>
                                <li class="ca-item">
                                    <div class="ca-item-img">
                                        <img src="<?php the_field('img')?>" alt="">
                                        
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
                        <?php endif;?>                        
                    </ul>
                        <a href="<?php echo esc_url( home_url( '/cast' ) ); ?>" class="btn to-casts">もっと見る</a>
                </div>
            </section>
            <!-- casts -->
<?php get_footer()?>
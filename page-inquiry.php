<?php get_header()?>
<?php get_template_part('template-parts/single-top')?>

<!-- main -->
<main class="c-main">
        <div class="inner">
            <div class="na-pans">
                <p>ホーム > お問い合わせ</p>
            </div>
        </div>
        <section class="ing">
            <div class="inner">
                <h2 class="section-title">INQUIRY</h2>
                <div class="ing-area">
                    <div class="ing__before">
                        <p class="ing-txt__top">小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br> 
                            公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br> 
                            お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。
                        </p>
                        <form action="">
                            <dl class="contact-item">
                                <dt>
                                    <label for="" class="ing-title">
                                        お名前
                                    </label>
                                </dt>
                                <dd>
                                    <input type="text"  class="ing__input ing__name" >
                                </dd>
                            </dl>
                            <dl class="contact-item">
                                <dt>
                                    <label for="" class="ing-title">
                                        電話番号
                                    </label>
                                </dt>
                                <dd>
                                    <input type="tel"  class="ing__input ing__tel">
                                </dd>
                            </dl>
                            <dl class="contact-item">
                                <dt>
                                    <label for="" class="ing-title">
                                        メールアドレス
                                    </label>
                                </dt>
                                <dd>
                                    <input type="email" class="ing__input ing__email">
                                </dd>
                            </dl>
                            <dl class="contact-item">
                                <dt>
                                    <label for="" class="ing-title">
                                        内容
                                    </label>
                                </dt>
                                <dd>
                                    <textarea class="ing__txt" name="" id="" cols="30" rows="10"></textarea>
                                </dd>
                            </dl>
                            <a id="js-submit" href="#" class="contact_sub" type="submit" disabled>送信</a>
                        </form>
                    </div>
                    <!-- 送信後のメッセージ -->
                    <p class="ing__message ing__after">
                        お問い合わせありがとうございました。<br>
                        メッセージは正常に送信されました。
                    </p>
                </div>
            </div>
        </section>
<?php get_footer()?>
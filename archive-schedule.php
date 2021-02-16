<!-- schedule -->
<div class="inner">
<section class="index-schedule">
    <div class="index-schedule-box">
        <h2 class="section-title">SCHEDULE</h2>
        <table class="index-schedule-table">
        <?php
            $posts = new WP_Query( array(
                    'post_type' => 'schedule',
                    'posts_per_page' => 4
                )
            );
            if (have_posts()):?>
                <tbody>
                    <?php while ( $posts->have_posts() ) : $posts->the_post();?>
                        <tr>
                            <td class="index-schedule-date"><?php the_field('day')?></td>
                            <td class="index-schedule-time"><?php the_field('start')?> 〜 <?php the_field('finish')?></td>
                            <td class="index-schedule-place"><?php the_field('place')?></td>
                            <td class="index-schedule-reserve">
                                <a href="#">
                                    チケット予約受付中
                                </a>
                            </td>
                        </tr>
                    <?php endwhile;?>
                </tbody>
            <?php endif;?>
        </table>
    </div>
    <div class="schedule-btn-box">
        <a href="<?php echo esc_url( home_url( '/inquiry' ) ); ?>" class="btn to-contact">お問い合わせはこちら</a>
        <a href="" class="btn to-reserve">チケット予約サイトへ</a>
    </div>
</section>
<!-- schedule -->


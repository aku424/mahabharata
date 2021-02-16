<?php if (has_post_thumbnail()) {
    the_post_thumbnail('large');
    }else{
        echo '<img src="'.esc_url(get_template_directory_uri()).'/img/story1.png" alt="投稿のサムネイル画像">';
}?>
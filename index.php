<?php
/**
 * The main template file
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */

    if(is_front_page()) {
        get_template_part('layouts/home');
    }
    else if(is_home()) {
        get_template_part('layouts/blog');
    }
    else {
        get_template_part('layouts/default');
    }

?>
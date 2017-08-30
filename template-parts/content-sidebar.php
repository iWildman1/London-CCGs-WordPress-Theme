<?php

    $sidebar_iterator = 0;
    $current_id        = $post->ID;

?>

<div class="col-md-4 sidebar transforming-sidebar">
    <?php
        if ( have_rows('sidebar_modules') ) :
            $flexible_row = get_field('sidebar_modules');
            while ( have_rows('sidebar_modules') ) : the_row();
                $module_type = $flexible_row[$sidebar_iterator]["acf_fc_layout"];

                switch ($module_type) {
                    case 'links':
                        if ( have_rows('page_links') ) :
                            while ( have_rows('page_links') ) : the_row();
                                $post_object = get_sub_field('page_link');
                                $post = $post_object;
                                setup_postdata( $post );
                                $active_class = "";
                                $child_class = "";
                                if ($current_id == $post->ID) {
                                    $active_class = "sidebar-active";
                                }
                                $children = get_children( array(
                                    'post_parent' => $post->ID,
                                    'post_type'   => 'page'
                                ) );

                                if ($children) {
                                    $child_class = "has-sub-menu";
                                }

                                echo '<a href="' . get_the_permalink() .'"><button class="btn sidebar-nav-button ' . $active_class . ' ' . $child_class . ' ">' . get_the_title() . '</button></a>';

                                if ($children) {
                                    echo '<div class="sidebar-sub-menu">';
                                    foreach ($children as $child) {
                                        $sub_active_class = "";
                                        if ( $current_id == $child->ID ) {
                                            $sub_active_class = "sidebar-active";
                                        }
                                        echo '
                                            <a href="' . $child->guid . '"><button class="btn sidebar-nav-button sidebar-sub-btn ' . $sub_active_class . '">' . $child->post_title . '</button></a>
                                        ';
                                    }
                                    echo '</div>';
                                }

                                wp_reset_postdata();
                            endwhile;
                        endif;
                        break;
                    case 'downloads':
                        echo '<h4>Downloads</h4>';
                        if ( have_rows('download_links') ) :
                            while ( have_rows('download_links') ) : the_row();
                                $download_link = (get_sub_field('download_link'));
                                echo '<a href="' . $download_link["url"] .'" download><button class="btn sidebar-nav-button btn-download"><i class="fa fa-download" aria-hidden="true"></i>' . $download_link["filename"] .'</button></a>';
                            endwhile;
                        endif;
                        break;
                    case 'myhealthlondon_widget':
                        echo '
                            <hr>

                            <div class="health-finder-widget">
                                <img src="' . get_sub_field('widget_placeholder') . '" alt="">
                            </div>
                        ';
                        break;
                }

                $sidebar_iterator++;
            endwhile;
        endif;
    ?>
</div>
<?php get_header( 'front-page' ); ?>

<div class="bg-overlay ">
    <section id="quick-stats" class="px-5  pt-20">
        <div class="container mx-auto flex md:flex-row flex-col py-10">
            <div class=" md:w-1/3 w-full flex items-center  ">
                <img class="mx-auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Nukage-Headshot.png">
            </div>
            <div class="md:w-2/3 w-full container flex flex-row quick-list-holder md:pl-16  flex-wrap ">
                <div class="w-full">
                    <h3 class="qs-title oswald font-black"><?php _e( 'Quick Stats', 'nukage_2020' ); ?></h3>
                </div>
                <div class="sm:w-1/2 w-full font-hairline open-sans   ">
                    <ul>
                        <li>
                            <span><?php _e( 'ARTIST NAME:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Nukage', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'EMAIL:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'nukage@nukage.net', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Website:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'www.nukage.net', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Genre:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Dubstep, Future Bass, Trap', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Shows Played:', 'nukage_2020' ); ?></span> 
                            <?php _e( '100+', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Social Links:', 'nukage_2020' ); ?></span>
                            <br> 
                            <?php _e( 'Instagram Facebook Youtube Soundcloud', 'nukage_2020' ); ?>
                        </li>
                    </ul>
                </div>
                <div class="sm:w-1/2 w-full">
                    <ul>
                        <li>
                            <span><?php _e( 'REAL NAME:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Tom Myruski', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Website:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'www.nukage.net', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Residence:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Brooklyn, NY', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Perfomance Style:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Live PA or DJ Set', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Beatport Charting Releases:', 'nukage_2020' ); ?></span> 
                            <?php _e( '5', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Support From:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Ill Gates, KJ Sawka, Future Magic, Demien Sixx', 'nukage_2020' ); ?>
                        </li>
                    </ul>
                </div>
                <div class="w-full media-notables">
                    <ul>
                        <li>
                            <span><?php _e( 'MEDIA NOTABLES:', 'nukage_2020' ); ?></span>
                            <br>
                            <a href="#"><?php _e( 'EDM Artist Organizes NYC Electronic Music Community (Interview)', 'nukage_2020' ); ?></a>
                            |
                            <a href="#"><?php _e( 'Demien Sixx &', 'nukage_2020' ); ?> <?php _e( 'Nukage Release Latest Original – “Maximum Overdrive”', 'nukage_2020' ); ?></a> |
                            <a href="#"><?php _e( 'Your', 'nukage_2020' ); ?> <?php _e( 'EDM Premiere:', 'nukage_2020' ); ?> <?php _e( 'Archtekt & Nukage - Black Mass', 'nukage_2020' ); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="bio">
        <div class="bg-overlay-2">
            <div class="container mx-auto">
                <h3 class="section-title"><?php _e( 'Bio', 'nukage_2020' ); ?></h3>
                <div class="accordion p-3  ">
                    <?php  
            if (have_rows('flex1')) :
            while ( have_rows('flex1') ) : 
            the_row(); if( get_row_layout() == 'accordion_group' ): 
            if( have_rows('accordion') ):                                                                     
            while ( have_rows('accordion') ) : 
            the_row();
             ?>
                    <h3 class="accordian-h3 container "><?php echo get_sub_field('title'); ?></h3>
                    <div class="accordian-body container ">
                        <?php echo get_sub_field('body') ?>
                    </div>
                    <?php 

            endwhile; 
            endif; 
            endif;
            endwhile;
            endif;

             ?>
                </div>
                <!-- .accordion -->
            </div>
        </div>
    </section>
    <!-- #bio -->
    <section id="gallery">
        <div class="bg-risered_bg_1">
            <div class="gallery">
                <div class="container mx-auto">
                    <h3 class="section-title"><?php _e( 'Photo Gallery', 'nukage_2020' ); ?></h3>
                    <div class="button-group filter-button-group oswald uppercase">
                        <button data-filter="*" class="btn  ">
                            <?php _e( 'Show', 'nukage_2020' ); ?>
                            <?php _e( 'all', 'nukage_2020' ); ?>
                        </button>
                        <button data-filter=".headshot" class="btn  ">
                            <?php _e( 'headshot', 'nukage_2020' ); ?>
                        </button>
                        <button data-filter=".live" class="btn">
                            <?php _e( 'live', 'nukage_2020' ); ?>
                        </button>
                        <button data-filter=".press" class="btn">
                            <?php _e( 'press', 'nukage_2020' ); ?>
                        </button>
                    </div>
                </div>
            <div class="grid flex flex-row flex-wrap justify-center container mx-auto">
                    <?php
                        if(have_rows('gallery')) :
                        while( have_rows('gallery') ): the_row();
                        $image = get_sub_field('image');
                        $caption = get_sub_field('caption');
                        $category = get_sub_field('category');
                        $class = ' element-item ' . $category ;
                        $thumb_image = wp_get_attachment_image($image, 'gallery_thumb', " " , array(
                        "draggable" => "false", "class" => "gallery-img" ) );
                        $full_image_url = wp_get_attachment_image_src($image, 'full' , false, '' );
                    ?>
                    <div class="<?php echo $class ?>">
                        <a href="<?php echo esc_url( $full_image_url[0] ); ?>" data-fancybox="images"> <?php echo  $thumb_image  ?></a>
                    </div>
                <?php endwhile;

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       endif;
                ?>
                </div>
            </div>
        </div>
    </section>
    <section id="videos">
        <div class="bg-overlay-2">
            <div class="container mx-auto">
                <h3 class="section-title"><?php _e( 'Videos', 'nukage_2020' ); ?></h3>
            <div class="video-block flex flex-row flex-wrap w-full">
                    <?php
                        if(have_rows('video_gallery')) :
                        while( have_rows('video_gallery') ): the_row();
                        $image = get_sub_field('placeholder_image');
                        $caption = get_sub_field('video_caption');
                        $thumb_image = wp_get_attachment_image($image, 'gallery_thumb', " " , array(
                        "draggable" => "false" ) );
                        $full_image_url = wp_get_attachment_image_src($image, 'full' , false, '' );
                        $link = get_sub_field('video');
                    ?>
                    <div class="video-col ">
                        <img class="play-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play-icon.svg" alt="">
                        <a class="" href="<?php echo esc_url( $link ); ?>" data-fancybox="video"> <?php echo  $thumb_image ?></a>
                        <p class="text-center mt-3 oswald uppercase text-sm"><?php echo $caption ?></p>
                    </div>
                <?php endwhile;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   endif;
                ?>
                </div>
            </div>
        </div>
    </section>
    <section id="music">
        <div class="container mx-auto ">
            <h3 class="section-title"><?php _e( 'Music', 'nukage_2020' ); ?></h3>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 p-10 ">
                    <iframe width="100%" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/346239864%3Fsecret_token%3Ds-yavhv&color=%23de225c&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                </div>
                <div class="w-full md:w-1/2 p-10">
                    <iframe width="100%" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/631193934&color=%23de225c&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                </div>
                <div class="w-full md:w-1/2 p-10">
                    <iframe width="100%" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/521934486&color=%23de225c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section id="press">
        <div class="bg-overlay-2">
            <div class="container mx-auto">
                <h3 class="section-title"><?php _e( 'Press &amp; Features', 'nukage_2020' ); ?></h3>
                <div class="press flex flex-row flex-wrap justify-center">
                    <?php if ( have_rows('news_items') ) :
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       while( have_rows('news_items') ) : the_row();
                    ?>
                        <div class="press-item   ">
                            <div class="inner ">
                                <h4 class="press-quote"><?php echo get_sub_field('quote') ?></h4>
                                <a class="press-link italic hover:underline" href="<?php echo esc_url( get_sub_field('news_link') ); ?>" target="_blank"><?php echo get_sub_field('news_source') ?></a>
                            </div>
                        </div>
                    <?php endwhile;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section id="logos">
        <h3 class="section-title"><?php _e( 'Logos &amp; Banners', 'nukage_2020' ); ?></h3>
    </section>
    <section id="contact">
        <div class="bg-overlay-2">
            <h3 class="section-title"><?php _e( 'Contact', 'nukage_2020' ); ?></h3>
            <div class="container mx-auto flex flex-row max-w-5xl">
                <div class="p-1 w-1/2 ">
                    <h4 class="contact-title leading-loose text-2xl text-center font-hairline uppercase mb-3 "><?php _e( 'Producer', 'nukage_2020' ); ?> <i class="fas fa-circle "></i> <?php _e( 'Performer', 'nukage_2020' ); ?> <i class="fas fa-circle"></i> <?php _e( 'DJ', 'nukage_2020' ); ?> <i class="fas fa-circle"></i> <?php _e( 'Guitarist', 'nukage_2020' ); ?></h4>
                    <div class="flex flex-row">
                        <div class=" md:w-1/2 w-full flex items-center  ">
                            <img class="mx-auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Nukage-Headshot.png">
                        </div>
                        <div class=" md:w-1/2 w-full oswald leading-loose font-hairline p-3 mb-3"> 
                            <?php _e( 'I am inspired by producing meaningful content; making deep connections and helping others achieve their own level of personal greatness via my music, session singing services and various entrepreneurial endeavors.', 'nukage_2020' ); ?> 
                        </div>
                    </div>
                </div>
                <div class="p-1 md:w-1/2 w-full px-5">
                    <div style="border border-gray-200 rounded-lg">
                        <h4 class="contact-title leading-loose text-2xl text-center font-hairline uppercase "><?php _e( 'Let\'s Chat!', 'nukage_2020' ); ?></h4>
                        <div class="wpcf7">
                            <?php echo do_shortcode('[contact-form-7 id="62" title="Contact form 1"]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>                

<?php get_footer( 'front-page' ); ?>
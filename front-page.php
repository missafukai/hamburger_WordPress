<?php get_header(); ?>
            <main class="l-main">
                <div class="p-jumbotron --index" style="background-image: url(<?php the_field('banner_bg'); ?>);">
                    <h1 class="p-jumbotron__title c-title c-title--jp"><?php the_field('page_title'); ?></h1>
                </div> <!-- /p-jumbotron -->
                <div class="p-card__container">
                    <div class="p-card --takeout" style="background-image: url(<?php the_field('take_out_bg'); ?>);">
                        <a href="<?php echo get_category_link('274'); ?>">
                            <div class="p-card__title c-title">
                                <h1>Take Out</h1>
                            </div> <!-- /p-card__title 1-->
                            <div class="p-card__contents">
                                <div class="p-card__content">
                                    <h3><?php the_field('take_out1'); ?></h3>
                                    <p><?php the_field('take_out1_description'); ?></p>
                                </div> <!-- /p-card__content 1-->
                                <div class="p-card__content">
                                    <h3><?php the_field('take_out2'); ?></h3>
                                    <p><?php the_field('take_out2_description'); ?></p>
                                </div> <!-- /p-card__content 1-->
                            </div> <!-- /p-card__contents 1-->
                        </a>
                    </div> <!-- /p-card 1-->
                    <div class="p-card --eatin" style="background-image: url(<?php the_field('eat_in_bg'); ?>);">
                        <a href="<?php echo get_category_link('273'); ?>">   
                            <div class="p-card__title c-title">
                                <h1>Eat In</h1>
                            </div> <!-- /p-card__title 2-->
                            <div class="p-card__contents">
                                <div class="p-card__content">
                                    <h3><?php the_field( 'eat_in1' ); ?></h3>
                                    <p><?php the_field( 'eat_in1_description' ); ?></p>
                                </div> <!-- /p-card__content 2-->
                                <div class="p-card__content">
                                    <h3><?php the_field( 'eat_in2' ); ?></h3>
                                    <p><?php the_field( 'eat_in2_description' ); ?></p>
                                </div> <!-- /p-card__content 2-->
                            </div> <!-- /p-card__contents 2-->
                        </a>
                    </div> <!-- /p-card 2--> 
                </div> <!-- /p-card__container -->
                <article class="p-about">
                    <h2 class="p-about__title"><?php the_field('about_title'); ?></h2>
                    <p class="p-about__description"><?php the_field('about_description'); ?></p>
                </article> <!-- /p-about -->
<!-- ここから全ページ共通2 -->
            </main>
        </div> <!-- /c-flex--pc__main -->
        <?php get_sidebar(); ?>
    </div> <!-- /c-flex -->
<?php get_footer(); ?>
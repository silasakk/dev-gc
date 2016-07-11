<?php include "header.php";?>

    <div class="banner-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php

                $image = get_field('banner');

                if( !empty($image) ): ?>
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <?php endif; ?>
                <?php

                $image = get_field('banner_2');

                if( !empty($image) ): ?>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <?php endif; ?>
                <?php

                $image = get_field('banner_3');

                if( !empty($image) ): ?>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <?php endif; ?>



            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">


                    <?php

                    $image = get_field('banner');

                    if( !empty($image) ): ?>
                        <div class="item active">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  class="img-responsive"/>
                        </div>
                    <?php endif; ?>
                <?php

                $image = get_field('banner_2');

                if( !empty($image) ): ?>
                    <div class="item ">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  class="img-responsive"/>
                    </div>
                <?php endif; ?>
                <?php

                $image = get_field('banner_3');

                if( !empty($image) ): ?>
                    <div class="item ">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  class="img-responsive"/>
                    </div>
                <?php endif; ?>




            </div>

        </div>
    </div>
    <section class="hl">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about pt60">
                        <div class="txt-about">เกี่ยวกับเรา</div>
                        <h1>" <?php the_field('head_about_us'); ?> "</h1>
                        <p>
                            <?php the_field('test_about_us'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <div class="about text-center">
                        <?php

                        $image = get_field('image_about_us');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />

                        <?php endif; ?>


                        <h1>“ <?php the_field('head_2_about'); ?> ”</h1>
                        <p><?php the_field('text_2_about_us'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hl">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <img src="<? echo get_template_directory_uri() ?>/assets/images/pre1.png" class="img-responsive spec1" alt="">

                </div>
                <div class="col-sm-6">
                    <div class="about">
                        <div class="txt-about">
                            <?php the_field('head_our_product'); ?>
                        </div>
                        <p>
                           <?php the_field('text_our_product')?>
                        </p>
                        <?php

                        $image = get_field('image_our_product');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />

                        <?php endif; ?>
                        <p>
                            <?php the_field('text_2_our_product')?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hl">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="about">
                        <div class="txt-about">
                            ตัวแทนจำหน่าย
                        </div>
                        <p>
                            <?php the_field('text_distribution')?>
                        </p>

                    </div>
                </div>
                <div class="col-sm-5">
                    <?php

                    $image = get_field('image_distributiom');

                    if( !empty($image) ): ?>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <section class="hl-review">
        <div class="container">


            <div class="row">
                <div class="txt-head">
                    รีวิว จากลูกค้าของเรา
                </div>


                <div class="col-sm-4 no-padding">
                    <a href="<?php echo site_url('reviews') ?>"><img src="<?php the_field('review1') ?>" class="img-responsive" alt=""></a>
                </div>
                <div class="col-sm-4 no-padding">
                    <a href="<?php echo site_url('reviews') ?>"><img src="<?php the_field('review2') ?>" class="img-responsive" alt=""></a>
                </div>
                <div class="col-sm-4 no-padding">
                    <a href="<?php echo site_url('reviews') ?>"><img src="<?php the_field('review3') ?>" class="img-responsive" alt=""></a>
                </div>
                <div class="col-sm-4 no-padding">
                    <a href="<?php echo site_url('reviews') ?>"><img src="<?php the_field('review4') ?>" class="img-responsive" alt=""></a>
                </div>
                <div class="col-sm-4 no-padding">
                    <a href="<?php echo site_url('reviewss') ?>"><img src="<? echo get_template_directory_uri() ?>/assets/images/logo-rw.png" class="img-responsive" alt=""></a>
                </div>
                <div class="col-sm-4 no-padding">
                    <a href="<?php echo site_url('reviews') ?>"><img src="<?php the_field('review5') ?>" class="img-responsive" alt="">
                </div>

                <div class="col-sm-4 no-padding">
                    <a href="<?php echo site_url('reviews') ?>"><img src="<?php the_field('review6') ?>" class="img-responsive" alt=""></a></a>
                </div>
                <div class="col-sm-4 no-padding">
                    <a href="<?php echo site_url('reviews') ?>"><img src="<?php the_field('review7') ?>" class="img-responsive" alt=""></a>
                </div>
                <div class="col-sm-4 no-padding">
                    <a href="<?php echo site_url('reviews') ?>"><img src="<?php the_field('review8') ?>" class="img-responsive" alt=""></a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php' ?>
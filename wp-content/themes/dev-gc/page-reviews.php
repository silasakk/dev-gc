
<?php include "header.php"; ?>


<?php if(get_field('feature')): ?>
<section class="page-black">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="videoWrapper">
                    <div class="embed-container">
                        <?php the_field('feature'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if( have_rows('video_review') ): ?>
<section class="page-black">
    <div class="container">
        <div class="card-1 card-left">
            <div class="text-hl ">VIDEO REVIEW</div>
            <div class="flexslider">
                <ul class="slides">
                    <?php while ( have_rows('video_review') ) : the_row(); ?>
                    <li>
                        <div class="videoWrapper">
                            <?php the_sub_field('embed') ?>
                        </div>
                    </li>
                    <?php endwhile; ?>

                </ul>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>

<section class="page-black">
    <div class="container">
        <div class="card-1 card-left ">
            <div class="text-hl ">PHOTO REVIEW</div>
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    $images = get_field('photo_review');

                    if( $images ): ?>

                            <?php foreach( $images as $image ): ?>
                                <li>
                                    <a href="<?php echo $image['url']; ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </a>
                                </li>

                            <?php endforeach; ?>

                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
</section>

<?php if( have_rows('social_review') ): ?>
<section class="page-black">
    <div class="container">
        <div class="card-1 card-left">
            <div class=" text-hl ">SOCIAL REVIEW</div>
            <!-- Place somewhere in the <body> of your page -->
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    $images = get_field('social_review');

                    if( $images ): ?>

                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo $image['url']; ?>">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                            </li>

                        <?php endforeach; ?>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php include "footer.php"; ?>

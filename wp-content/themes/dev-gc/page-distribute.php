<?php include "header.php";?>

<section class="page-black">
    <div class="container">
        <h1 class="headline">ตัวแทนจำหน่าย</h1>
        <p>
            <?php the_field('text1') ?>
        </p>
        <br>

        <div class="text-center">
            <a class="btn btn-primary" style="color: #000" href="<?php the_field('download') ?>">ดาวน์โหลดใบสมัคร</a> <a class="btn btn-primary" style="color: #000" href="<?php the_field('register') ?>">ดาวน์โหลดใบสมัครสมาชิก</a>
        </div>


        <div class="text-hl">
            <?php  the_field('text2') ?>
        </div>
        <p>
            <?php the_field('text3') ?>
        </p>

        <div class="row">
            <div class="col-sm-4">
                <div class="card-1">
                    <div class="text-hl">
                        <?php the_field('card_1_title') ?>
                    </div>
                    <div class="text-hl">
                        <?php the_field('card_1_detail') ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-1">
                    <div class="text-hl">
                        <?php the_field('card_2_title') ?>
                    </div>
                    <div class="text-hl">
                        <?php the_field('card_2_detail') ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-1">
                    <div class="text-hl">
                        <?php the_field('card_2_title') ?>
                    </div>
                    <div class="text-hl">
                        <?php the_field('card_2_detail') ?>
                    </div>
                </div>
            </div>


            <div class="col-sm-4 col-sm-offset-4">
                <div class="card-1">
                    <div class="text-hl-big">
                        <?php the_field('card_4_detail') ?>
                    </div>

                </div>
            </div>



        </div>
    </div>
</section>
<section class="page-soft">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card-2">
                    <div class="text-hl">
                        <?php the_field('head_left') ?>
                    </div>
                    <div class="content">
                        <?php the_field('content_left') ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-2">
                    <div class="text-hl">
                        <?php the_field('head_right') ?>
                    </div>
                    <div class="content">
                        <?php the_field('content_right') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-black">
    <div class="container" id="links">
        <?php

        $images = get_field('gallery');

        if( $images ): ?>

            <?php foreach( $images as $image ): ?>
                <div class="col-sm-6" style="margin-bottom: 15px;">
                    <a href="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" />
                    </a>

                </div>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</section>
<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>
<?php include "footer.php";?>

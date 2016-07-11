<?php include "header.php";?>



    <?php
    if(isset($_POST['fullname'])){
        $to = 'silasak.lf@gmail.com';

        $subject = 'Contact gglassmask.com';

        $html = '
    
    <table border="1">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Fullname</td>
            <td>'.$_POST['fullname'].'</td>
        </tr>
        <tr>
            <td>Tel</td>
            <td>'.$_POST['tel'].'</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>'.$_POST['email'].'</td>
        </tr>
        <tr>
            <td>MSG</td>
            <td>'.$_POST['msg'].'</td>
        </tr>
    </table>
    ';
        $body = $html;
        $headers[] = 'From: gglassmask <oh.ay.ka@gmail.com>';
        $headers[] = 'Content-Type: text/html; charset=UTF-8';
        $headers[] = 'Cc: aey <oh.ay.ka@gmail.com>';

        wp_mail( $to, $subject, $body, $headers );
        echo '<section class="page-black"><h2 class="text-center">Thank you for your information</h2></section>';
    }


    ?>


<section class="page-black">
    <div class="container">
        <h1 class="headline">ติดต่อเรา</h1>

        <div class="card-1">
            <div id="map" style="height: 300px;"></div>
            <script>

                function initMap() {
                    var myLatLng = {lat: 13.908098, lng: 100.5373293};

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 16,
                        center: myLatLng
                    });

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        title: 'เลขที่ 68/12 อาคารซีอีซี ชั้น 6 ถ.กำแพงเพชร 6 แขวงลาดยาว เขตจตุจักร กทม. 10900'
                    });
                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJsRq6kCNqA9IiOYnvQ83V-WDb4QTa19U&callback=initMap">
            </script>
        </div>

        <div class="row">
            <div class="col-sm-6 text-center">
                <a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-sm-6 text-center">
                <div class="text-hl">
                    สอบถาม
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card-1">
                    <div class="card-left">
                        <div class="text-hl">ที่ตั้งสำนักงาน</div>
                        <p>
                            <?php the_field('address') ?>
                        </p>
                        <div class="ttime">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 24 ชม.</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> 092 158 0348-9</p>
                        </div>

                        <div class="tdtl">
                            <p>คุณอุ้ม รัสรินทร์</p>
                            <p><i class="fa fa-envelope-o"></i> oum_rusarin@gmail.com</p>
                            <p><i class="fa fa-facebook"></i> <a href="https://www.facebook.com/Gold-Glass-Mask-Russarin_officail-253095778401289/?fref=ts">FACEBOOK</a></p>
                            <p><i class="fa fa-instagram"></i> <a href="https://www.instagram.com/gglass_mask/">Instagram</a></p>
                            <p><img src="<?php echo get_template_directory_uri() ?>/assets/images/line-spec.png" alt=""> <a href="http://line.me/tl/p/@gggmask_nattayui">LINE</a></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-1">
                    <form action="" method="post">
                        <div class="card-right">
                            <p>ติดต่อสอบถามรายละเอียดเพิ่มเติม ได้ที่แบบฟอร์มด้านล่าง</p>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="label">ชื่อ - สกุล :</div>
                                    <input type="text" name="fullname" required>
                                </div>
                                <div class="col-sm-6">
                                    <div class="label">เบอร์โทรติดต่อกลับ :</div>
                                    <input type="text" name="tel" required>
                                </div>
                                <div class="col-sm-6">
                                    <div class="label">อีเมล์ :</div>
                                    <input type="email" name="email" required>
                                </div>
                                <div class="col-sm-12">
                                    <div class="label">ข้อความ :</div>
                                    <textarea name="msg" id="" cols="30" rows="5"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">ส่งข้อมูล</button>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>



<?php include "footer.php";?>

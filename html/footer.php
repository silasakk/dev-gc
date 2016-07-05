<footer>
    <a href="" class="btt">
        BACK TO TOP <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>
    <div class="container">
        <div class="social">
            <a href="">
                <img src="assets/images/ico-facebook.png" alt="">
            </a>
            <a href="">
                <img src="assets/images/ico-twitter.png" alt="">
            </a>
            <a href="">
                <img src="assets/images/ico-google.png" alt="">
            </a>
            <a href="">
                <img src="assets/images/ico-youtube.png" alt="">
            </a>
            <a href="">
                <img src="assets/images/ico-line.png" alt="">
            </a>

        </div>
        <div class="copyright">
            WWW.GOLDGLASSMASKBYNATTAYUI.CO.TH TEL.098-9450045
        </div>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/lib/flexslider/jquery.flexslider-min.js"></script>

<script>
    jQuery('.btt').click(function(event) {

        var duration = 500;
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
    jQuery(window).load(function() {
        jQuery('.flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 250,
            itemMargin: 15,
            flexslider : '.slides > .col-sm-3',
            directionNav : false
        });
    });
</script>
</body>
</html>
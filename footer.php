		
		<script src="<?php theJQueryDirectory(); ?>jquery.min.js"></script>
        <script src="<?php theHTML5BoilerplateDirectory(); ?>js/plugins.js"></script>
        <script src="<?php theActiveThemeDirectory(); ?>js/main.js"></script>

        <?php if (is_front_page()) : ?>

            <!-- load Slick and apply it to .slider -->
            <script type="text/javascript" src="<?php theSlickDirectory() ; ?>slick.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function()
                {
                    $('.slider').slick({
                        dots: true,
                        arrows: false,
                        autoplay: true,
                        autoplaySpeed: 8000, 
                        speed: 300, 
                        fade: true,
                        infinite: true  
                    });

                    $('.multiple-slider').slick({
                        // autoplay: true,
                        // autoplaySpeed: 8000, 
                        speed: 300, 
                        arrows: true,
                        dots: false,
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    });
                });
            </script>



        <?php endif; ?>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
    </body>
</html>
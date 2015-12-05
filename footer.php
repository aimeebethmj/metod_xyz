		<?php 
            // vars
            $meHeading = get_field('me_heading', 15);
            $profilePic = get_field('footer_profile_pic', 15);
            $meBlurb = get_field('footer_blurb', 15);
            $endNote = get_field('end_note', 2);
            $email = get_field('email', 15);
            $instaLink = get_field('instagram_link', 15);
            $twitLink = get_field('twitter_link', 15);
            $wantMore = get_field('want_more_message', 15);
            // add other vars for alternative footer
        ?>

		<div class="container" id="me">
            <h2 class="main-heading"><?php echo $meHeading; ?></h2>
            <div class="boxed-content">
                <div class="two columns">
                    <img src="<?php echo $profilePic['url'] ; ?>">
                </div>
                <div class="ten columns"><p><?php echo $meBlurb; ?></p></div>
            </div>
            <div class="boxed-content">
                <div class="twelve columns contact-links">
                        <p><b><?php echo $email; ?></b></p>
                        <a href="<?php echo $instaLink; ?>"><i class="fa fa-instagram fa-2x"></i></a>
                        <a href="<?php echo $twitLink; ?>"><i class="fa fa-twitter fa-2x"></i></a>
                </div>
                <div class="twelve columns contact-links">
                    <p><?php echo $wantMore; ?></p><a href="<?php echo get_page_link(15); ?>">➔</a>
                </div>
            </div>
        </div>
        <div id="footer-bar">
            <p><?php echo $endNote; ?></p>
        </div>

        <script src="<?php theJQueryDirectory(); ?>jquery.min.js"></script>
        <script src="<?php theHTML5BoilerplateDirectory(); ?>js/plugins.js"></script>
        <script src="<?php theActiveThemeDirectory(); ?>js/main.js"></script>

        <?php if (is_front_page() || in_category('work-types' || 'art' || 'fieldnote') ) : ?>

            <!-- load Slick and apply it to .slider -->
            <script type="text/javascript" src="<?php theSlickDirectory() ; ?>slick.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function()
                {
                    $('.slider').slick({
                        dots: true,
                        arrows: true,
                        autoplay: false,
                        autoplaySpeed: 8000, 
                        speed: 300, 
                        fade: true,
                        infinite: true  
                    });

                    $('.multiple-slider').slick({
                        autoplay: true,
                        autoplaySpeed: 8000, 
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
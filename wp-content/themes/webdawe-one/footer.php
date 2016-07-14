    <section id="<?php echo sanitize_title(get_option('webdawe_one_contact_title'))?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php echo webdawe_get_option('contact_heading')?></h2>
                    <hr class="primary">
                    <p><?php echo webdawe_get_option('contact_content')?></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p><?php echo webdawe_get_option('contact_phone')?></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:<?php echo webdawe_get_option('contact_email')?>"><?php echo webdawe_get_option('contact_email')?></a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php echo bloginfo('name');?> - &copy; <?php echo date('Y')?>
                </div>
            </div>
        </div>
    </section>
    <?php wp_footer();?>
    <!-- jQuery -->
    <script src="<?php bloginfo('template_url'); ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/creative.min.js"></script>

</body>

</html>
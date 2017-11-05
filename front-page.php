<?php
/* Front Page Template */
		get_header();
?>

<!-- Page Content -->
    <div class="container">
            <div class="row">
                <div class="col col-lg-12">
                    <?php
                        // Start the loop
                        if (have_posts()) :
                                while (have_posts()) :
                                        the_post();
                                                the_content();
                                endwhile;
                        endif;
                    ?>
                </div>
            </div>
    </div>
    <!-- /.container -->

<?php get_footer(); ?>
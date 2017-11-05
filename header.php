<?php 
    /* Main header template */
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    <style>
        .hero {
            height:100%;
            color: #f8f8f8;
            background: url('<?php bloginfo('template_url')?>/images/perch.jpg') no-repeat center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" role="navigation">
        <div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand topnav" href="/index.html"><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php 
                    wp_nav_menu( $arg = array (
                            'menu_class' => 'navbar-nav ml-auto',
                            'theme_location' => 'primary'
                        ))
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <div class="hero">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-message">
                        <h1><?php bloginfo('name'); ?></h1>
                        <h2><?php bloginfo('description'); ?></h2>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.hero -->
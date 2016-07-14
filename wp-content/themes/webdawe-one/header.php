<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php bloginfo('template_url'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php bloginfo('template_url'); ?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>


                    <?php if ($theme_logo  = get_theme_mod( 'webdawe_one_logo' ) ) : ?>
                        <img src='<?php echo esc_url( $theme_logo ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>

                    <?php else : ?>
                        <?php bloginfo( 'name' ); ?>
                    <?php endif; ?>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#<?php echo sanitize_title(webdawe_get_option('about_title'))?>"><?php echo webdawe_get_option('about_title')?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#<?php echo sanitize_title(webdawe_get_option('services_title'))?>"><?php echo webdawe_get_option('services_title')?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#<?php echo sanitize_title(webdawe_get_option('portfolio_title'))?>"><?php echo webdawe_get_option('portfolio_title')?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#<?php echo sanitize_title(webdawe_get_option('contact_title'))?>"><?php echo webdawe_get_option('contact_title')?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header  style="background-image:url('<?php header_image();?>');">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php echo webdawe_get_option('home_heading')?></h1>
                <hr>
                <p><?php echo webdawe_get_option('home_content')?></p>
                <a href="#<?php echo sanitize_title(webdawe_get_option('about_title'))?>" class="btn btn-primary btn-xl page-scroll"><?php echo webdawe_get_option('home_button')?></a>
            </div>
        </div>
    </header>
<head>
    <meta charset="utf-8">
    <title>Tommi Aalto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Add font awesome icons -->


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div id="headerImage">
        <a href="<?php echo site_url(); ?>">
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        </a>
    </div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name');?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <?php
                wp_nav_menu( array(
                    'theme_location' => 'my-custom-menu',
                    'container_class' => 'custom-menu-class' ) );
                ?>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a target="_blank" href="https://www.facebook.com/tommi.aalto.9" class="fa fa-facebook"></a>
                <a target="_blank" href="https://twitter.com/Aaltommi" class="fa fa-twitter"></a>
                <a target="_blank" href="https://www.linkedin.com/in/tommi-aalto-61bb82120/" class="fa fa-linkedin"></a>
                <a target="_blank" href="https://github.com/aaltommi" class="fa fa-github"></a>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</header>


<div class="container">
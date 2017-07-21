<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_bloginfo('name')?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />


	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

</head>
<body>

<header>


	<nav class="navbar navbar-default header-site" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
				</div>
		    <!-- Collect the nav links, forms, and other content for toggling -->

			<?php /* Primary navigation */
            wp_nav_menu( array(
                'menu'              => 'header-menu',
                'theme_location'    => 'header-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
			?>




		  </div><!-- /.container-fluid -->
	</nav>






</header>




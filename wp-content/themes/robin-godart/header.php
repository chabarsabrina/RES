<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- Meta -->
	<title></title>
	<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.png" />
	<meta name="description" content="" />
	
	<!-- Scripts externes -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/library/css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:900,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>	
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel='stylesheet/less' id='style-less-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/library/styles/woocommerce/woocommerce.less' type='text/css' media='screen' />

	
</head>

<header>
	<?php
	if(get_field('slides', 'option')): ?>
		<div id="main_carousel" class="carousel slide carousel-fade" data-ride="carousel">
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php $k=1; while(has_sub_field('slides', 'option')): ?>
					<div class="item <?php if($k==1){echo "active";}?>" style="background: url('<?php the_sub_field('image'); ?>') no-repeat center top">
						
					</div><!-- .item -->
				<?php $k++; endwhile; ?>
			</div>

			<!-- Controls -->
			<a class="prev btn_control" href="#main_carousel" data-slide="prev">
				<i class="fa fa-chevron-left"></i>
			</a>
			<a class="next btn_control" href="#main_carousel" data-slide="next">
				<i class="fa fa-chevron-right"></i>
			</a>
		</div>
	<?php
	endif; ?>
	<nav id="nav-header">
		<?php wp_nav_menu(array('theme_location' => 'menu_header', 'container' =>false, 'walker' => new wp_bootstrap_navwalker())) ?>
	</nav>
</header>

<body <?php body_class(); ?> >


	
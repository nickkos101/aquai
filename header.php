<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title( '' ); ?></title>
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body class="col-wrap">
    <header>
    	<div class="container">
    		<div class="column third">
    			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
    		</div>
    		<div class="column two-thirds talignright">
    			<nav>
    				<ul>
    					<li><a href="">How it Works</a></li>
    					<li><a href="">What does it solve?</a></li>
    					<li><a href="">What people say</a></li>
    				</ul>
    				<div class="btn"><i class="fa fa-shopping-cart"></i> Order Now</div>
    			</nav>
    		</div>
    	</div>
    </header>
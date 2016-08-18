<!DOCTYPE html>
<html data-logged="<?php if (is_user_logged_in()) {echo"true";}else{echo"false";} ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title("|", true, "right") ?></title>
        <?php wp_head() ?>
    </head>
    <body>
        <header class="container-fluid">
            <div class="small-logo pull-left">
                <a href="<?= bloginfo('home'); ?>"><h1 class="text-uppercase"><?= bloginfo("name") ?></h1></a>
            </div>
            <div class="pull-right button-menu">
                <span></span>
            </div>
        </header>
        <nav class="nav side-nav">
			<div class="closing-nav">
				<div class="large-logo pull-left">
	                <a href="<?= bloginfo('home'); ?>"><h1 class="text-uppercase"><?= bloginfo("name") ?></h1></a>
	            </div>
				<span class="glyphicon glyphicon-menu-left"></span>
			</div>
            <?php wp_nav_menu(); ?>
        </nav>

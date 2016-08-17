<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title() ?></title>
        <?php wp_head() ?>
    </head>
    <body>
        <header class="container-fluid">
            <div class="logo pull-left">
                <a href="<?= bloginfo('home'); ?>"><h1 class="text-uppercase"><?= bloginfo("name") ?></h1></a>
            </div>
            <div class="pull-right button-menu">
                <span>Menu</span>
            </div>
        </header>
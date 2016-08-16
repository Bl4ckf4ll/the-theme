<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title() ?></title>
        <?php wp_head() ?>
    </head>
    <header class="container-fluid">
        <div class="logo pull-left">
            <h1 class="text-uppercase"><?= bloginfo("name") ?></h1>
        </div>
        <div class="pull-right button-menu">
            <span>Menu</span>
        </div>
    </header>
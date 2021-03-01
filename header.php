<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> hello <?php wp_title(); ?></title>
    <?php wp_head() ?>
</head>

<body>
    <nav class="">
        <a href="#" class="navbar-brand">
            <?php bloginfo('name')
            ?>
        </a>
        <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'menu',
        ]) ?>
        <?= get_search_form() ?>
    </nav>
    <div class="container">
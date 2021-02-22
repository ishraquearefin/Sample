<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title(); ?></title>


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <?php wp_head()?>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">

    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <?php
        wp_nav_menu(
            array(
                'container'     => '',
                'theme_location'=> 'top-menu',
                'depth'         => 1,
                'fallback_cb'   => false,
                'add_li_class'  => 'li-style list-inline-item '
            )
        );
        ?>
        <a class="btn btn-primary" href="#">Sign In</a>


    </div>
    <div class=" container row ml-5" >
    <?php dynamic_sidebar('top-nav')?>
    </div>
</nav>

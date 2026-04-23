<!-- index.php is the only other strictly required file. Its job is to render all the front-end output for our theme. -->
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?> <!-- Allows wordpress and plugins to directly insert code into header. -->
</head>
<body <?php body_class();?>><!--body_class() is a helper function provided by WordPress that will output a list of useful CSS classes which describe the page-->
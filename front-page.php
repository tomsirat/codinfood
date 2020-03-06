<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
<?php get_template_part('header'); ?>
<?php get_template_part('article'); ?>
<?php get_template_part('products'); ?>
<?php get_template_part('gallery'); ?>
<?php get_template_part('journey'); ?>
<?php get_template_part('footer'); ?>
    
</body>
</html>
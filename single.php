<?php get_header();?>

<?php
foreach((get_the_category()) as $category) {
    $mycat = $category->cat_name . ' ';
}

?>

<?php

if ($mycat == "libros ") { ?>

<div layout="row" flex="100">
	<?php include('templates/single-libros.php') ?>
</div>

<?php }else if ($mycat == "proyectos ") { ?>

<div layout="row" flex="100">
	<?php include('templates/single-proyectos.php') ?>
</div>

<?php } ?>

<div layout="row" flex="100">
	<?php include('templates/redes.php') ?>
</div>

<?php get_footer(); ?>
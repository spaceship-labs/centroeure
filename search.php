<?php get_header(); ?>

<?php 
if ($_GET["cat"] == "proyectos") { ?>
	
	<div layout="row" flex="100">
		<?php include('templates/search-proyectos.php') ?>
	</div>

<?php }else if ($_GET["cat"] == "libros") { ?>

	<div layout="row" flex="100">
		<?php include('templates/search-libros.php') ?>
	</div>
	
<?php } ?>

<div layout="row" flex="100">
	<?php include('templates/redes.php') ?>
</div>

<?php get_footer(); ?>
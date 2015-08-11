<?php get_header(); ?>
<div class = "main cases" style = "background-color: white">

	<div class = "diferenca_menu"></div>

	<div class = "top-size img-cases">
		<h1 class = "col-md-offset-1 topo">cases</h1>
	</div>

	<div class = "topo_fixed botao"><span>Categorias</span></div>
	<div class = "topo_fixed wrap clearfix" id = "stickyribbon"><?php wp_nav_menu(array('theme_location' => 'cases',));?></div>

	<a id = "anchor-name" name = "supermercados"></a>
	<div class = "col-md-12 titulo-case">
		<h1 class = "col-sm-offset-1">Supermercados</h1>
	</div>
	<?php include('case-supermercados.php'); ?>

	<a id = "anchor-name" name = "departamento"></a>
	<div class = "col-md-12 titulo-case">
		<h1 class = "col-sm-offset-1">Lojas de Departamento</h1>
	</div>
	<?php include('case-departamento.php'); ?>

	<a id = "anchor-name" name = "credpessoal"></a>
	<div class = "col-md-12 titulo-case">
		<h1 class = "col-sm-offset-1">Lojas de Crédito Pessoal</h1>
	</div>
	<?php include('case-credpessoal.php'); ?>

	<a id = "anchor-name" name = "industrias"></a>
	<div class = "col-md-12 titulo-case">
		<h1 class = "col-sm-offset-1">Indútrias</h1>
	</div>
	<?php include('case-industrias.php'); ?>

	<a id = "anchor-name" name = "escritorios"></a>
	<div class = "col-md-12 titulo-case">
		<h1 class = "col-sm-offset-1">Escritórios e Edifícos Comerciais</h1>
	</div>
	<?php include('case-escritorios.php'); ?>	

</div>

<?php get_footer(); ?>

<script src = "<?php bloginfo('stylesheet_directory');?>//js/menulateral.min.js"></script>
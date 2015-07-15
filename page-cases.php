<?php get_header(); ?>
<div class = "main cases" style = "background-color: white">

	<div class = "hidden-xs hidden-sm"><?php include("diferenca_menu.php"); ?></div>
	<div class = "visible-xs-block visible-sm-block"><?php include("diferenca.php"); ?></div>

	<div class = "top-size img-cases">
		<h1 class = "col-md-offset-1 topo">cases</h1>
	</div>

	<div class = "topo_fixed wrap hidden-xs hidden-sm" id = "stickyribbon">
	  <ul>
	    <li role = "presentation"><a href="#supermercados">Supermercados</a></li>
		<li role = "presentation"><a href="#departamento">Lojas de Departamento</a></li>
		<li role = "presentation"><a href="#credpessoal">Lojas de Crédito Pessoal</a></li>
		<li role = "presentation"><a href="#industrias">Indústrias</a></li>
		<li role = "presentation"><a href="#escritorios">Escritórios e Edifícos Comerciais</a></li>
		<li id = "menu-serv" role = "presentation"><a href="menu">Categorias</a></li>
	  </ul>
	</div>

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
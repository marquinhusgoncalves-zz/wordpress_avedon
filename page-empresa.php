<?php get_header(); ?>

<div class = "main">

	<div class = "diferenca_menu hidden-xs hidden-sm"></div>
	<div class = "diferenca visible-xs-block visible-sm-block"></div>

	<div class = "topo_fixed submenu hidden-xs hidden-sm" id = "stickyribbon">
	  <ul>
	    <li role = "presentation"><a href = "#avedon">A Avedon</a></li>
		<li role = "presentation"><a href = "#objetivos">Objetivos e Valores</a></li>
		<li role = "presentation"><a href = "#contratar">Por que nos contratar</a></li>
		<li role = "presentation"><a href = "#numeros">Avedon em números</a></li>
	  </ul>
	</div>

	<a id = "anchor-name" name = "avedon"></a>
	<?php include("avedon.php"); ?>

	<div class = "clearfix" style = "background: #dbdbd8; min-height: 270px">
	<a id = "anchor-name" name = "objetivos"></a>
		<div class = "col-md-6" style = "height: auto; padding: 4%">
			<h1>Objetivos</h1>
			<p>Estabelecer, em conjunto com as organizações empresariais, uma relação de parceria que permita identificar os recursos humanos que mais se ajustam às necessidades de cada negócio, agregar valor aos processos desenvolvidos e tornar ainda mais produtiva a cadeia de relacionamento profissional, de forma a alcançar as metas propostas e os resultados desejados.</p>
		</div>
		
		<div class = "col-md-6" style = "height: auto; padding: 4%">
			<h1>Valores</h1>
			<p>Nossos valores estão fundamentados no RESPEITO e na TRANSPARÊNCIA no trato das relações profissionais, atuando com responsabilidade e competência diante de nossos colaboradores, clientes e fornecedores.</p>
		</div>
	</div>

	<div class = "clearfix" style = "background: white">
	<a id = "anchor-name" name = "contratar"></a>
		<div class = "clearfix">
			<div class = "col-md-6" style = "height: auto; padding: 4%">
				<h1>Por que contratar a Avedon?</h1>
				<p>O Programa de Administração do Varejo (PROVAR), o Instituto Brasileiro de Executivos do Varejo (IBEVAR), a ABRAS e a Nielsen realizaram, em parceria, a 14ª Avaliação de Perdas no Varejo, que apurou uma perda média de 2,52% do faturamento líquido das empresas em 2013.</p>
				<p>O indicador baseia-se nas informações de 293 empresas participantes, representando cerca de 3.000 lojas, de todas as regiões do país, com faturamento agregado de R$ 209,36 bilhões.</p>
			</div>
			
			<div class = "col-md-6 tabela" style = "height: auto; padding: 4%; text-align: center">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/tabela.png" alt = "Tabela de Faturamento" >
			</div>			
		</div>

		<hr>
		<div class = "clearfix">
			<div class = "col-md-6" style = "height: auto; padding: 4%">
				<h1>Causas das perdas do Varejo</h1>
				<p>A avaliação confirma ainda um crescimento das perdas nos últimos 10 anos e aponta as quebras operacionais (manuseio, estoque etc.) e furtos como os fatores de maior impacto, respondendo, juntos, por quase 70% das perdas no varejo.</p>
			</div>
			
			<div class = "col-md-6 tabela" style = "height: auto; padding: 4%; text-align: center">
				<img src = "<?php bloginfo('stylesheet_directory');?>/img/tabela_perdas.png"  alt = "Tabela de Perdas" >
			</div>
		</div>

		<hr>
		<div class = "clearfix">
		<a id = "anchor-name" name = "numeros"></a>
			<div style = "height: auto; padding: 4%">
			<h1>Avedon em números</h1>
				<div class = "clearfix" style = "margin-bottom: 20px">
					<div class = "col-sm-1">
						<img class = "icone" src = "<?php bloginfo('stylesheet_directory');?>/img/colaboradores.png" alt = "Colaboradores">
					</div>
					<div class = "col-sm-11">
						<p><strong>630 colaboradores</strong> registrados e contratados em regime CLT.</p>
						<p><strong>12 equipes</strong> supervisionadas, distribuídas por regiões geográficas e atuando em mais de <strong>240 pontos de vendas</strong>, estabelecimentos comerciais e empresas em todo o Estado de São Paulo.</p>
					</div>
				</div>

				<div class = "clearfix" style = "margin-bottom: 20px">
					<div class = "col-sm-1">
						<img class = "icone" src = "<?php bloginfo('stylesheet_directory');?>/img/projetos.png"  alt = "Projetos" >
					</div>
					<div class = "col-sm-11">
						<p>Mais de <strong>70 projetos</strong> de segurança patrimonial e operações de varejo com foco na redução de perdas foram desenvolvidos e implantados de acordo com o perfil e demandas de cada cliente.</p>
					</div>
				</div>

				<div class = "clearfix" style = "margin-bottom: 20px">
					<div class = "col-sm-1">
						<img class = "icone" src = "<?php bloginfo('stylesheet_directory');?>/img/profissionais.png" alt = "Profissionais" >
					</div>
					<div class = "col-sm-11">
						<p>Mais de <strong>2.000 profissionais</strong> já participaram de treinamentos especializados, desenvolvidos e realizados in company para atender à necessidade de incorporar novas culturas e conceitos de prevenção de perdas.</p>
					</div>
				</div>

				<div class = "clearfix" style = "margin-bottom: 20px">
					<div class = "col-sm-1">
						<img class = "icone" src = "<?php bloginfo('stylesheet_directory');?>/img/grafico.png"  alt = "Redução de Perdas">
					</div>
					<div class = "col-sm-11">
						<p>Como especialistas nesse segmento, e atuando diretamente no chão de loja, proporcionamos excelente retorno financeiro através da <strong>redução dessas perdas</strong>, alcançando percentuais que, em alguns casos, não ultrapassam a <strong>0,40%</strong> do faturamento líquido e das vendas totais de nossos clientes.</p>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>
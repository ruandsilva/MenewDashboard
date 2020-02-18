<?php

	###### CONF. AMBIENTE ######
		namespace DashBoard;
		require_once('../php/ListarEntidade.php');
		require_once('../php/tipos_relatorios_vpabx.php');
		use DashBoard\entidade\Listar_Vpabx;
		use DashBoard\entidade\tipos_relatorios_vpabx;

	###### ############## ######

?>

<div ng-include="'templates/_nav.html'"></div>
<main class="container">

	<h2>Início</h2>


	<div class="row">

		<div class="col s12">
			<ul class="tabs">
				<li class="tab col s3"><a href="#test1">Atendidas</a></li>
				<li class="tab col s3"><a class="active" href="#test2">Abandonadas</a></li>
				<li class="tab col s3"><a href="#test3">Exedidas</a></li>
				<li class="tab col s3"><a href="#test4">Desconectadas</a></li>
			</ul>
		</div>

		<div id="test1" class="col s12">
			
		<?php

			$entidade = new Listar_Vpabx();
			$JsonDate = $entidade->Listar(
				tipos_relatorios_vpabx::$atendidade,
				"2020-02-06",
				"2020-02-06",
				"00:00:00",
				"23:59:59"
			);

			$Data = json_decode($JsonDate);

			for($i = 0; $i > sizeof($Data);$i++){

				echo "<br>";
				echo $Data->registros[$i]->agente;

			}

			
			//echo "<br><br>";
			//echo $JsonDate;
		?>

		</div>

		<div id="test2" class="col s12">

		<?php

			$entidade = new Listar_Vpabx();
			$JsonDate = $entidade->Listar(
				tipos_relatorios_vpabx::$abandonadas,
				"2020-02-06",
				"2020-02-06",
				"00:00:00",
				"23:59:59"
			);

			$Data = json_decode($JsonDate);

			echo "<br>";
			//echo $Data->registros[0]->agente;
			//echo "<br><br>";
			echo $JsonDate;
		?>

		</div>

		<div id="test3" class="col s12">

		<?php

			$entidade = new Listar_Vpabx();
			$JsonDate = $entidade->Listar(
				tipos_relatorios_vpabx::$excedidas,
				"2020-02-06",
				"2020-02-06",
				"00:00:00",
				"23:59:59"
			);

			$Data = json_decode($JsonDate);

			echo "<br>";
			//echo $Data->registros[0]->agente;
			//echo "<br><br>";
			echo $JsonDate;
		?>

		</div>

		<div id="test4" class="col s12">

		<?php

			$entidade = new Listar_Vpabx();
			$JsonDate = $entidade->Listar(
				tipos_relatorios_vpabx::$desconectadas,
				"2020-02-06",
				"2020-02-06",
				"00:00:00",
				"23:59:59"
			);

			$Data = json_decode($JsonDate);

			echo "<br>";
			//echo $Data->registros[0]->agente;
			//echo "<br><br>";
			echo $JsonDate;
		?>

		</div>

  	</div>

</main>

<script>
	$(document).ready(function(){
		$('.tabs').tabs();
	});
</script>
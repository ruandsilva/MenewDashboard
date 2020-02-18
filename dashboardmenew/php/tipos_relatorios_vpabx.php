<?php
	namespace DashBoard\entidade;
	#####Tipo de relatorio que deseja retorno.
	// 1 - atendidas
	// 2 - abandonadas
	// 3 - excedidas
	// 4 - desconectadas
	// 5 - agentes
	// 6 - resultados
	
	class tipos_relatorios_vpabx {
		public static $atendidade = 1;
		public static $abandonadas = 2;
		public static $excedidas = 3;
		public static $desconectadas = 4;
		public static $agentes = 5;
		public static $resultados = 6;
	}
?>
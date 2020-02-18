<?php
namespace DashBoard\entidade;

class Listar_Vpabx  {
	public function Listar(string $tipo_relatorio, string $data_fim, string $data_inicio, string $hora_inicio, string $hora_fim) : string {
		
		$request = [
			'tipo' => $tipo_relatorio, #####Tipo de relatorio que deseja retorno. 1 - atendidas / 2 - abandonadas / 3 - excedidas / 4 - desconectadas / 5 - agentes / 6 - resultados
			'queue' => "",  #####nome da fila ou deixe em branco para todas
			'data_inicial' => $data_inicio, #####Data inicial no formato 0000-00-00
			'hora_inicial' => $hora_inicio, #####Hora inicial no formato 00:00:00
			'data_final' => $data_fim, #####Data final no formato 0000-00-00
			'hora_final' => $hora_fim, #####Hora final no formato 00:00:00
		];
	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://mvarandas.vpabx.com.br:8139/api/queues_stats");
		curl_setopt($ch, CURLOPT_USERPWD, "CLquchvM14hOA4v8aTsO6oOA6n6FFA7k:");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$response = curl_exec($ch);
		curl_close($ch);
	
		return $response;
	}
}
?>
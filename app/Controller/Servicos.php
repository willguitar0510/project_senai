<?php
require_once 'Model/Servicos.php';

class ServicosController {
	public function listar() {
		$servicos = new Servicos();
		$servicosList = $servicos->select();

		$_REQUEST['servicos'] = $servicosList;

		require_once 'view/Servicos_view.php';
	}
}

?>
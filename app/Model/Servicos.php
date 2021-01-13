<?php
class Servicos {
	private $id;
	private $nome;
	private $descricao;
	private $preco;
	private $tempo;

	public function getNome() {
		return $this->nome;
	}
	public function setNome($name) {
		$this->nome= $nome;
	}
	public function getDescricao() {
		return $this->descricao;
	}
	public function setDescricao($descricao) {
		$this->descricao= $descricao;
	}
	public function getPreco() {
		return $this->preco;
	}
	public function setPreco($preco) {
		$this->preco= $preco;
	}
	public function getTempo() {
		return $this->tempo;
	}
	public function setTempo($tempo) {
		$this->tempo= $tempo;
	}

	public function Insert() {

	}

	public function Select() {
		$dbuser = $_ENV['MYSQL_USER'];
		$dbpass = $_ENV['MYSQL_PASS'];
		$pdo = new PDO("mysql:host=mysql;dbname=ist", $dbuser, $dbpass);
		$statement = $pdo->prepare("SELECT * FROM servicos");
		$statement->execute();
		$servicos = $statement->fetchAll(PDO::FETCH_OBJ);

		return  $servicos;
	}
 }
?>
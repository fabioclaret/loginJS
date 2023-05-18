<?php

/**
 * classe de conexao e CRUD com banco de dados contato. 
 */
class Contato{

	private $nome;
	private $email;
	private $senha;
	private $pdo;
	
	function __construct(){

		$dns ="mysql:dbname=contato;host=localhost";
		$dbUser = "root";
		$dbPass = "";

		try {
			$this->pdo = new PDO($dns,$dbUser,$dbPass);
			return true;

		} catch (Exception $e) {
			return false;			
		}
	}

	function getNome(){
		return $this->nome;
	}
	function getEmail(){
		return $this->email;
	}
	function getSenha(){
		return $this->senha;
	}

	function setNome($nome){
		$this->nome = $nome;
	}
	function setEmail($email){
		$this->email = $email;
	}
	function setSenha($senha){
		$this->senha = $senha;
	}

	function insertUser($nome, $email,$senha){
		$sql = "INSERT INTO usuarios SET email = :e, senha = :s, nome = :n";
		$sql = $this->pdo->prepare($sql);
		
		$sql->bindValue(":e" , $email);
		$sql->bindValue(":s" , $senha);
		$sql->bindValue(":n" , $nome);

		$isTrue = $sql->execute();

		return $isTrue;
	}

	function checkUser($email){
		$sql = "SELECT *FROM usuarios WHERE email = :e";
		$sql = $this->pdo->prepare($sql);

		$sql->bindValue(":e" , $email);

		$sql->execute();

 		if($sql->rowCount() > 0){
 			$info = $sql->fetch();
 			return $info;
		}else{
			return array();
		}
		return $isTrue;
	}

	function checkPass($email, $senha){
		$sql = "SELECT *FROM usuarios WHERE email = :e AND senha = :s";
		$sql = $this->pdo->prepare($sql);

		$sql->bindValue(":e" , $email);
		$sql->bindValue(":s" , $senha);

		$sql->execute();

 		if($sql->rowCount() > 0){
 			$info = $sql->fetch();
 			return $info;
		}else{
			return array();
		}
	}
}
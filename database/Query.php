<?php

class QueryBuilder {


	protected $pdo;

	public function __construct($pdo) {

		$this->pdo = $pdo;
	
	}

	public function selectAll($table) {

		$statement = $this->pdo->prepare("SELECT * FROM {$table}");
		
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);

	}

	public function findBeer($beer) {

		$statement = $this->pdo->prepare("SELECT name, description, type, available from beer WHERE name = '{$beer}'");

		$statement->execute();

		return $statement->fetchAll();

	}

	public function insertBeer($name, $description, $type, $available) {

		$statement = $this->pdo->prepare("INSERT INTO beer (name, description, type, available) VALUES (:name, :description, :type, :available)");

		$statement->bindParam(':name', $name);
		$statement->bindParam(':description', $description);
		$statement->bindParam(':type', $type);
		$statement->bindParam(':available', $available);

		$statement->execute();


	}

}
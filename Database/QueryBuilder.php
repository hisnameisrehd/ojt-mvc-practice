<?php


	class QueryBuilder {
		
		protected $pdo;
		
		public function __construct($pdo){
			$this->pdo = $pdo;
		}
		
		public function selectAll($table){
			
			$select = $this->pdo->prepare("select * from {$table}");
			$select->execute();
			return $select->fetchAll(PDO::FETCH_CLASS);
			
		}
		
	}

<?php

	class Connection {
		
		public static function start($config){
			
			try{
				
				 return new PDO(
				 		$config['mysql'].";dbname=".$config['dbname'],
				 		$config['username'], $config['password']
				 );
				
			}catch(PDOException $e){
				die($e->getMessage());
			}
			
		}
		
	}

<?php
require "/../includes/Database.php";
require '/../views/home.tpl.php';

class HomeHandler
{
	public function get()
	{
		$db = Database::Instance();
		$pdo = $db::$pdo;
		//
		$pdo -> beginTransaction();
	
		$sth = $pdo -> prepare('SELECT * FROM articles');
	
		$sth -> execute();
	
		$articles = $sth -> fetchAll(PDO::FETCH_OBJ);
		// printf(count($articles));
		$count = count($articles);
		// $resultsArr = array();
		// for ($i = 0; $i < $count; $i++) {
			// $resultsArr[$i]['id'] = $articles[$i]['id'];
			// $resultsArr[$i]['title'] = $articles[$i]['title'];
			// $resultsArr[$i]['slug'] = $articles[$i]['slug'];
			// $resultsArr[$i]['content'] = $articles[$i]['content'];
			// $resultsArr[$i]['date_created'] = $articles[$i]['date_created'];
		// } 
		// echo json_encode($resultsArr);
		include('/../views/home.tpl.php');
	
	}
}
<?php
//
// require '/../includes/Database.php';
//
class ArticleHandler
{
	
	public function get($slug)
	{
		$dbh = Database::Instance();
		//
		try {

				$dbh -> beginTransaction();
				//
				$stmt = $dbh -> prepare('SELECT * FROM articles WHERE slug = :slug LIMIT 1');
			    $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
			    $stmt->execute();
				//
				$article = $stmt->fetchObject();
				// echo json_encode($article);
				include('../views/article.tpl.php');
				
				if (!$article) {
			      ToroHook::fire('404');
			    }
			
			} catch (PDOException $e) {
			
				echo 'Connection failed: ' . $e -> getMessage();

			}
	}
}

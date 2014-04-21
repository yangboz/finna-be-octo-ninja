<?php
//
class HomeHandlerTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testGet()
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
        // Assert
        $this->assertEquals(0, $count);
    }

    // ...
}
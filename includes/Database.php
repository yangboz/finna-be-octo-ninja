<?php
//TimeZone setting.
date_default_timezone_set('UTC');
//
final class Database
{
	public static $pdo = null;
	 /**
     * Call this method to get singleton
     * To use: $database = Database::Instance();
     * @return Database
     */
    public static function Instance()
    {
        static $inst = null;
		// Connect to an ODBC database using driver invocation
		static $dsn = 'sqlite:data/MUBS.db';
		static $user = null;
		static $password = null;
		static $conn = null;
		//
        if ($inst === null) {
            $inst = new Database();
			//
			Database::$pdo = new PDO($dsn, $user, $password);
 			Database::$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo 'PDO Connection  OK!','';
        }
        return $inst;
    }

    /**
     * Private ctor so nobody else can instance it
     *
     */
    private function __construct()
    {

    }
}

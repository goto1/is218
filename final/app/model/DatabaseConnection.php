<?php
namespace app\model;

use \PDO;

class DatabaseConnection extends Database
{
  protected static $_db;

  const DB_USER     = 'root';
  const DB_PASSWORD = 'root';
  const DB_HOST     = 'localhost';
  const DB_NAME     = 'is218';

  private function __construct()
  {
    try
    {
      self::$_db = new PDO('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME,
        array(PDO::ATTR_PERSISTENT => true));
      self::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (\PDOException $e)
    {
      echo 'Database error: ' . $e->getMessage();
      die();
    }
  }

  public static function getConnection()
  {
    if (!self::$_db)
    {
      new DatabaseConnection();
    }

    return self::$_db;
  }
}

?>
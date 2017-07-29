<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 16:31
 */
const FILE_CONFIG = 'config.txt';
class DB
{
	protected $dbName;
	protected $host;
	protected $user;
	protected $pass;
	protected $dbh;
	
	public function __construct()
	{
		$config = file(FILE_CONFIG);
		$res = [];
		$arr = explode('=', $config[0]);
		$res[0] = $arr[sizeof($arr) - 1];
		$arr = explode('=', $config[1]);
		$res[1] = $arr[sizeof($arr) - 1];
		$arr = explode('=', $config[2]);
		$res[2] = $arr[sizeof($arr) - 1];
		$arr = explode('=', $config[3]);
		$res[3] = $arr[sizeof($arr) - 1];
		$this->host = trim($res[0]);
		$this->dbName = trim($res[1]);
		$this->user = trim($res[2]);
		$this->pass = trim($res[3]);
//		var_dump($res);
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
//		var_dump($dsn );
		$this->dbh = new PDO($dsn, $this->user, $this->pass);
	}
	
	public function execute($sql)
	{
		//Метод execute(string $sql) выполняет запрос и возвращает true либо false
		// в зависимости от того, удалось ли выполнение
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		
	}
	
	public function query($sql,$data)
	{
		//Метод query(string $sql, array $data) выполняет запрос, подставляет в него
		// данные $data, возвращает данные результата запроса либо false,
		// если выполнение не удалось
		$sth = $this->dbh->prepare($sql);
		$sth->execute($data);
		$result = $sth->fetchAll();
		var_dump($result);
		if(!$result) return false;
		return $result;
	}
	
}
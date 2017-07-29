<?php

namespace Models;

require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/DB.php';

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 13:08
 */
class News
{
	private $db;
	//класс News - модель хранилища новостей (аналогично гостевой книге в
	// предыдущем ДЗ и на уроке)
	public function __construct()
	{
		$this->db = new \Models\DB();
	}
	
	public function getArticle($id)
	{
		$sql = 'SELECT * FROM news WHERE id = :id';
		$data = $this->db->query($sql, [":id"=>$id]);
		$title = $data[0]['title'];
		$text = $data[0]['text'];
		if($data){
			$res = $obj = new Article($id, $title, $text);
			return $res;
		}
		return null;
	}
	
	public function getAllArticles()
	{
		$sql = 'SELECT * FROM news';
		$data = $this->db->query($sql, []);
		$res = [];
		foreach ($data as $article) {
			$id = $article['id'];
			$title = $article['title'];
			$text = $article['text'];
			$res[] = $obj = new \Models\Article($id, $title, $text);
		}
		return $res;
	}
}
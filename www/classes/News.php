<?php
require_once __DIR__ . '/Article.php';
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 13:08
 */
class News
{
	private $file = __DIR__ . '/../db.txt';
	//класс News - модель хранилища новостей (аналогично гостевой книге в
	// предыдущем ДЗ и на уроке)
	
	
	public function getArticle($id)
	{
		$data = $this->getAllArticles();
		foreach ($data as $article) {
			if($article->id == $id) {
				return $article;
			}
		}
		return null;
	}
	
	public function getAllArticles()
	{
		$data = file($this->file, FILE_IGNORE_NEW_LINES);
//		var_dump($data);
		$ret = [];
		
		foreach ($data as $line) {
			$article = explode('|', $line);
//			var_dump($article);
			$id = $article[0];
			$title = $article[1];
			$text = $article[2];
			$ret[] = $obj = new Article($id, $title, $text);
		}
//		var_dump($ret);
		return $ret;
	}
}
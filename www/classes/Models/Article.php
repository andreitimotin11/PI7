<?php
namespace Models;
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 13:07
 */
class Article
{
	//класс Article - модель одной новости
	public $title;
	public $id;
	public $text;
	public $date;
	protected $path = __DIR__ . '/../db.txt';
	public function __construct($id, $title, $text)
	{
		$this->id = $id;
		$this->text = $text;
		$this->title = $title;
	}
	public function save(){
		file_put_contents($this->path,$this->id . '|' . $this->title . "|" . $this->text . "\n" , FILE_APPEND);
	}
	
	
}
<?php
namespace Models;
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 12:07
 */
class View
{
	public $data = [];
	
	public function __construct()
	{
		
	}
	
	public function assign($name, $value)
	{
		//Есть метод assign($name, $value), чья задача - сохранить данные, передаваемые в шаблон по
		// заданному имени (используйте защищенное свойство - массив для хранения этих данных)
		$this->data[$name] = $value;
//		$gb = new GuestBook(__DIR__ . '/guestbook');
//		$data = $gb->getAll();
//		return $this->data;
	}
	
	public function display($template)
	{
		//Есть метод display($template), который отображает указанный шаблон с заранее сохраненными данными
		ob_start();
		include $template;
		$str = ob_get_contents();
		ob_end_clean();
		echo $str;
	}
	public function render($template)
	{
		//Метод render($template), который аналогичен методу display(), но не выводит шаблон с данными в браузер, а возвращает его
		ob_start();
		include $template;
		$str = ob_get_contents();
		ob_end_clean();
		return $str;
	}
}

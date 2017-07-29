<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 15:50
 */
/*
 Делаем с нуля веб-приложение, использующее базу данных
1. Создайте класс DB
 - В конструкторе устанавливается и сохраняется соединение с базой данных. Параметры соединения берем из файла конфига
 - Метод execute(string $sql) выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение
 - Метод query(string $sql, array $data) выполняет запрос, подставляет в него данные $data, возвращает данные результата запроса либо false, если выполнение не удалось
2. Создайте таблицу news с полями "заголовок", "текст", "автор". Заполните ее 3-5 новостями. Запишите запросы на языке SQL, которые вы использовали и приложите к своему ДЗ
3. Создайте две страницы сайта, используя технику шаблонов и класс View из предыдущего ДЗ:
 - index.php выводит все новости (самая новая - наверху)
 - article.php?id=N выводит одну новость, с id=N
 */
require_once __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/View.php';


$db = new DB();

$v = new View();

$n1 = new News();

$articles = $n1->getAllArticles();
var_dump($articles);
$v->assign('news', $articles);
//var_dump($v2->data);

$v->display(__DIR__ . '/news.php');
//$n1->getArticle('0');

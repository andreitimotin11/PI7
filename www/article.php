<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 13:10
 */
//article.php?id=NNN - отображает новость номер NNN с полным текстом
require __DIR__ . '/classes/News.php';
require __DIR__ . '/View.php';
$v3 = new View();
$h1 = new News();
$id = $_GET['id'];
$article = $h1->getArticle($id);
$v3->assign('article', $article);
$v3->display(__DIR__ . '/templates/article.php');
//var_dump($article);
//var_dump($_GET);
// include __DIR__ . '/templates/article.php';
?>


<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 13:10
 */

//news.php - отображает список всех новостей. Заголовок у каждой - ссылка на страницу
// этой новости, под заголовком - краткий текст
?>
<html>
<head>
    <title>News</title>
    <style>
        .news {
            margin: 15px 0;
            border-bottom: 1px dotted orange;
            padding-bottom: 15px;
        }
    </style>
</head>
<body>
<h1>News:</h1>
<?php
foreach ($this->data['news'] as $article):
	
	?>
    <div class="news">
        <a href="<?php echo 'http://profit/PHP1/6/www/article.php?id=' . $article->id; ?>"><?php echo $article->title; ?></a>
        <p> <?php echo $article->text; ?></p>
    </div>
	
	<?php
endforeach;
?>

</body>
</html>

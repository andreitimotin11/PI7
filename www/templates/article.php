<?php
$article = $this->data['article'];
?>
<html>
<head>
	<title>Article</title>
	<style>
		.article{
			margin: 15px 0;
			padding-bottom: 15px;
		}
	</style>
</head>
<body>
<h1>Article:</h1>
<div class="article">
	<h1><?=$article->title;?></h1>
	<p> <?=$article->text;?></p>
</div>

</body>
</html>
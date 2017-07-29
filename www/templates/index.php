<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 28.07.2017
 * Time: 21:05
 */
?>
<html>
<head>
    <title>GuestBook</title>
    <style>
        article{
            margin-bottom: 15px;
            padding:10px;
            border:1px dotted green;
        }
    </style>
</head>
<body>
<h1> Records:</h1>
<hr>
<?php
foreach ($this->data  as $line):
?>
    <article><?=$line;?></article>
<?php
endforeach;
?>

</body>
</html>
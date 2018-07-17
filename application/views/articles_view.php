<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>

<p>Статьи:</p>
<br/>
<?php foreach ($articles as $article):?>
    <?= $article['title'] ?>
    <br/>
    <?= $article['text'] ?>
    <br/>
    <?= $article['date'] ?>
    <br/>
<?php endforeach; ?>

<?= $pagination ?>

</body>
</html>
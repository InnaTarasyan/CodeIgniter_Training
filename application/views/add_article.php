<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
<div style="text-align: center">
    <div>
        <b> Добавить статью! </b>
    </div>
    <br/><br/>
    <form action="<?= base_url(); ?>index.php/Add_article/" method="post">
        <div>
            Название статья: <br/> <input type="title" name="title" value="<?= set_value('title')?>"> <?= form_error('title') ?>
        </div>
        <br/>
        <div>
            Текст статьи: <br/> <textarea rows="10" cols="40" name="text" value="<?= set_value('text')?>"></textarea><?= form_error('text') ?>
        </div>
        <br/>
<!--        <div>-->
<!--            Дата статьи: <br/> <input type="text" name="date" value="--><?//= set_value('date')?><!--">--><?//= form_error('date') ?>
<!--        </div>-->
        <br/>
        <div>
            <input type="submit" value="SUMBIT" name="add">
        </div>
    </form>
</div>
</body>
</html>
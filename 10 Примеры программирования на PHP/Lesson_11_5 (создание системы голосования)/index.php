<?php
    require_once 'model.php';
    $id = $_GET['id']?? 1;
    $m = new Model();
    $poll = $m->getPoll(htmlspecialchars($id));
    if ($poll) $variants = $m->getVariants($poll['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Голосование</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body style="text-align: center;">
    <h1>Голосование</h1>
    <?php if ($poll) { ?>
        <form name="poll" action="result.php" method="post">
            <h2><?=$poll['title']?></h2>
            <?php foreach($variants as $v) { ?>
                <div>
                    <?=$v['title']?>: <input type="radio" name="variant_id" value="<?=$v['id']?>" />
                </div>
            <?php } ?>
            <br />
            <div>
                <input type="submit" name="poll" value="Голосовать" />
            </div>
        </form>
    <?php } else { ?>
        <p>Голосование не найдено!</p>
    <?php } ?>
</body>
</html>
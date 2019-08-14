<?php
    require_once 'model.php';
    
    $variant_id = $_POST['variant_id']?? false;
    if (!$variant_id) {
        header('Location: index.php');
        exit;
    }
    $variant_id = htmlspecialchars($variant_id);
    $m = new Model();
    $result = $m->addVoter($variant_id);
    $poll = $m->getPollOnVariantId($variant_id);
    if ($poll) {
        $variants = $m->getVariants($poll['id']);
        $ids = [];
        foreach ($variants as $v) $ids[] = $v['id'];
        $voters = $m->getVoters($ids);
        $temp = [];
        foreach($variants as $v) {
            $temp[$v['id']] = $v;
            $temp[$v['id']]['voters'] = 0;
        }
        $variants = $temp;
        foreach ($voters as $v) $variants[$v['variant_id']]['voters']++;
    }
    else {
        header('Location: index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Результаты голосования</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body style="text-align: center;">
    <h1>Спасибо за Ваш голос!</h1>
    <?php foreach($variants as $v) { ?>
        <div>
            <?=$v['title']?>: <b><?=$v['voters']?> чел.</b>
        </div>
    <?php } ?>
    <a href='index.php'>Вернуться на главную</a>
</body>
</html>
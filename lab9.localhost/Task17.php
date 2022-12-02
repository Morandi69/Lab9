<h4>Задание 17</h4>
<?php
$questions = [
    ['В каком году началась Великая Отечественная Война?', 1945, 1941, 1946, 1939],
    ['Год основания Санкт-Петербурга?', 1703, 1551, 823, 999],
    ['Сколько стран входило в состав СССР на момент распада?', 17, 13, 14, 15]
];
$trueAnswers = [1941, 1703, 15];
if (!empty($_REQUEST)) {
    $res = [];
    foreach ($questions as $key => $question) {
        if ($_REQUEST[$key] == $trueAnswers[$key]) {
            $res[] = ['green', "Ваш ответ: $_REQUEST[$key], верно!"];
        } else {
            $res[] = ['red', "Ваш ответ: $_REQUEST[$key], не верно! Правильный ответ: $trueAnswers[$key]."];
        }
    }
}
?>

<form action="" method="post">
    <?php foreach ($questions as $key => $question): ?>
        <p><?=$question[0];?></p>
        <?php if (!empty($_REQUEST)): ?>
            <p style="color: <?=$res[$key][0];?>"><?=$res[$key][1];?></p>
        <?php else: ?>
            <?php for ($i = 1; $i < count($question); $i++): ?>
                <input type="radio" name="<?=$key;?>" value="<?=$question[$i];?>"><?=$question[$i];?>
            <?php endfor;?>
        <?php endif;?>
        <hr>
    <?php endforeach;?>
    <?php if (empty($res)): ?>
        <input type="submit">
    <?php endif;?>
</form>